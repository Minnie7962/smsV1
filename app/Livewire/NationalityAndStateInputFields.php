<?php

namespace App\Livewire;

use Livewire\Component;
use Nnjeim\World\World;
use Illuminate\Support\Collection;

class NationalityAndStateInputFields extends Component
{
    public $nationalities;

    public $nationality;

    public $states;

    public $state;

    protected $rules = [
        'nationality' => 'nullable|string|max:255',
        'state'       => 'nullable|string|max:255',
    ];

    public function mount()
    {
        // Default nationality and states for Cambodia
        $this->nationalities = collect(['Khmer']);
        $this->states = collect([
            ['name' => 'Banteay Meanchey'],
            ['name' => 'Battambang'],
            ['name' => 'Kampong Cham'],
            ['name' => 'Kampong Chhnang'],
            ['name' => 'Kampong Speu'],
            ['name' => 'Kampong Thom'],
            ['name' => 'Kampot'],
            ['name' => 'Kandal'],
            ['name' => 'Kep'],
            ['name' => 'Koh Kong'],
            ['name' => 'Kratie'],
            ['name' => 'Mondulkiri'],
            ['name' => 'Oddar Meanchey'],
            ['name' => 'Pailin'],
            ['name' => 'Phnom Penh'],
            ['name' => 'Preah Sihanouk'],
            ['name' => 'Preah Vihear'],
            ['name' => 'Prey Veng'],
            ['name' => 'Pursat'],
            ['name' => 'Ratanakiri'],
            ['name' => 'Siem Reap'],
            ['name' => 'Stung Treng'],
            ['name' => 'Svay Rieng'],
            ['name' => 'Takeo'],
            ['name' => 'Tbong Khmum'],
        ]);

        $this->state = $this->states[0]['name'];
    }

    public function updatedNationality()
    {
        $this->loadStatesForNationality();
        $this->dispatch('nationality-updated', ['nationality' => $this->nationality]);
        $this->dispatch('state-updated', ['state' => $this->state]);
    }

    public function loadStatesForNationality()
    {
        if (empty($this->nationality)) {
            $this->states = collect();
            $this->state = null;
            return;
        }

        try {
            $result = World::countries([
                'fields'  => 'states',
                'filters' => ['name' => $this->nationality],
            ])->data;

            $states = collect($result->pluck('states')->first() ?? []);

            // If no states are returned, use the nationality itself as a default "state"
            $this->states = $states->isNotEmpty() ? $states : collect([['name' => $this->nationality]]);
        } catch (\Exception $e) {
            // Handle errors gracefully by falling back to an empty list
            $this->states = collect();
        }

        $this->state = $this->states->first()['name'] ?? null;
    }

    public function updatedState()
    {
        $this->dispatch('state-updated', ['state' => $this->state]);
    }

    public function render()
    {
        return view('livewire.nationality-and-state-input-fields');
    }
}
