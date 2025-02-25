<?php

namespace App\Livewire;

use App\Services\MyClass\MyClassService;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class CreateStudentRecordFields extends Component
{
    public $father_full_name;
    public $father_age;
    public $father_occupation;
    public $father_phone_number;
    public $father_address;

    public $mother_full_name;
    public $mother_age;
    public $mother_occupation;
    public $mother_phone_number;
    public $mother_address;

    public $myClasses;
    public $myClass;
    public $sections;
    public $section;

    protected $myClassService;

    protected $rules = [
        'father_full_name' => 'required|string|max:255',
        'father_age' => 'required|integer|min:18',
        'father_occupation' => 'required|string|max:255',
        'father_phone_number' => 'required|string|max:20',
        'father_address' => 'required|string|max:255',
        'mother_full_name' => 'required|string|max:255',
        'mother_age' => 'required|integer|min:18',
        'mother_occupation' => 'required|string|max:255',
        'mother_phone_number' => 'required|string|max:20',
        'mother_address' => 'required|string|max:255',
        'myClass' => 'required|string',
        'section' => 'required|string',
    ];

    public function mount(MyClassService $myClassService)
    {
        $this->myClassService = $myClassService;
        $this->myClasses = $myClassService->getAllClasses();

        if ($this->myClasses->isNotEmpty()) {
            $this->myClass = $this->myClasses[0]['id'];
            $this->sections = collect($this->myClassService->getClassById($this->myClass)->sections);
        }
    }

    public function updatedMyClass()
    {
        $this->reset('section');
        $this->sections = collect($this->myClassService->getClassById($this->myClass)->sections);
    }

    public function createStudentRecord()
    {
        $this->validate();

        $studentRecord = new \App\Models\StudentRecord();
        $studentRecord->my_class_id = $this->myClass;
        $studentRecord->section_id = $this->section;
        $studentRecord->father_full_name = $this->father_full_name;
        $studentRecord->father_age = $this->father_age;
        $studentRecord->father_occupation = $this->father_occupation;
        $studentRecord->father_phone_number = $this->father_phone_number;
        $studentRecord->father_address = $this->father_address;
        $studentRecord->mother_full_name = $this->mother_full_name;
        $studentRecord->mother_age = $this->mother_age;
        $studentRecord->mother_occupation = $this->mother_occupation;
        $studentRecord->mother_phone_number = $this->mother_phone_number;
        $studentRecord->mother_address = $this->mother_address;
        $studentRecord->save();

        return redirect()->route('students.index');
    }

    public function render()
    {
        return view('livewire.create-student-record-fields');
    }
}
