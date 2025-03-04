<div class="card">
    <div class="card-header">
        <h4 class="card-title">Academic Year Result Tabulation</h4>
    </div>
    <div class="card-body">
        {{-- Display validation errors --}}
        <x-display-validation-errors />

        {{-- Loading spinner --}}
        <x-loading-spinner />

        {{-- Form for selecting class to display --}}
        <form wire:submit="tabulate" class="d-md-flex my-3">
            <div class="md:grid grid-cols-1 gap-4">
                <x-select id="class" name="class" label="Class" wire:model.live="class">
                    @foreach ($classes as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </x-select>
            </div>
            <x-button label="View records" theme="primary" type="submit" class="w-full md:w-1/4" />
        </form>

        {{-- Table to display tabulation --}}
        @if ($createdTabulation === true)
            @livewire('mark-tabulation', [
                'tabulatedRecords' => $tabulatedRecords,
                'totalMarksAttainableInEachSubject' => $totalMarksAttainableInEachSubject,
                'subjects' => $subjects,
                'title' => $title ?? '',
            ], key(str()->random()))

            <x-button label="Print" theme="primary" icon="fas fa-download" wire:click="$dispatch('print')" class="w-full md:w-3/12" />
        @elseif ($createdTabulation === false)
            <p class="text-center my-3 text-red-500 dark:text-red-300">Something went wrong. Make sure there are subjects in this class.</p>
        @endisset
    </div>
</div>
