<?php

namespace App\Livewire;

use App\Models\MyClass;
use App\Services\MyClass\MyClassService;
use App\Traits\MarkTabulationTrait;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class AcademicYearResultTabulation extends Component
{
    use MarkTabulationTrait;

    public $classes;

    public $class;

    public $academicYear;

    public $tabulatedRecords;

    public $createdTabulation;

    public $title;

    protected $listeners = ['print'];

    public function mount(MyClassService $myClassService)
    {
        // Get academic year and use it to fetch all exams in the academic year
        $this->academicYear = auth()->user()->school->academicYear;
        $this->classes = $myClassService->getAllClasses();

        // Sets subjects etc if class isn't empty
        if (!$this->classes->isEmpty()) {
            $this->class = $this->classes[0]->id;
        }
    }

    public function tabulate(MyClass $myClass)
    {
        // Get all subjects in the class
        $subjects = $myClass->subjects;

        // Get all students in the class
        $students = $myClass->students();

        // Get the class group
        $classGroup = $myClass->classGroup;

        // Check if there are any subjects
        if ($subjects->isEmpty()) {
            $this->createdTabulation = false;
            return;
        }

        // Set the title for the tabulation
        $this->title = "Exam Marks For " . $myClass->name . " in academic year " . auth()->user()->school->academicYear->name;

        // Get all exam slots for the academic year
        $examSlots = collect();
        $this->academicYear->load('semesters')->semesters->each(function ($semester) use (&$examSlots) {
            return $examSlots = $examSlots->merge($semester->load('examSlots')->examSlots);
        });

        // Tabulate marks
        $this->tabulatedRecords = $this->tabulateMarks($classGroup, $subjects, $students, $examSlots);

        // Set tabulation status
        $this->createdTabulation = true;
    }

    // Print function
    public function print()
    {
        // Load the PDF view
        $pdf = Pdf::loadView('pages.exam.print-exam-tabulation', [
            'tabulatedRecords' => $this->tabulatedRecords,
            'totalMarksAttainableInEachSubject' => $this->totalMarksAttainableInEachSubject,
            'subjects' => $this->subjects
        ])->output();

        // Save as PDF
        return response()->streamDownload(
            fn () => print($pdf),
            'result-tabulation.pdf'
        );
    }

    public function render()
    {
        return view('livewire.academic-year-result-tabulation');
    }
}