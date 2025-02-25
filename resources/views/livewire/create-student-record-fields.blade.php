<div class="md:grid grid-cols-12 gap-2">
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2">
            <x-input id="father-full-name" name="father_full_name" label="Father Full Name *" placeholder="Father Full Name" group-class="col-span-6" wire:model="father_full_name" />
            <x-input id="father-age" name="father_age" label="Age *" placeholder="Age" group-class="col-span-3" wire:model="father_age" />
            <x-input id="father-occupation" name="father_occupation" label="Occupation *" placeholder="Occupation" group-class="col-span-3" wire:model="father_occupation" />
            <x-input id="father-phone-number" name="father_phone_number" label="Phone Number *" placeholder="Phone Number" group-class="col-span-4" wire:model="father_phone_number" />
            <x-input id="father-address" name="father_address" label="Address *" placeholder="Address" group-class="col-span-8" wire:model="father_address" />
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2">
            <x-input id="mother-full-name" name="mother_full_name" label="Mother Full Name *" placeholder="Mother Full Name" group-class="col-span-6" wire:model="mother_full_name" />
            <x-input id="mother-age" name="mother_age" label="Age *" placeholder="Age" group-class="col-span-3" wire:model="mother_age" />
            <x-input id="mother-occupation" name="mother_occupation" label="Occupation *" placeholder="Occupation" group-class="col-span-3" wire:model="mother_occupation" />
            <x-input id="mother-phone-number" name="mother_phone_number" label="Phone Number *" placeholder="Phone Number" group-class="col-span-4" wire:model="mother_phone_number" />
            <x-input id="mother-address" name="mother_address" label="Address *" placeholder="Address" group-class="col-span-8" wire:model="mother_address" />
        </div>
    </div>

    <h4 class="text-bold text-xl md:text-3xl font-bold col-span-12">Class information</h4>
    <x-select id="class-id" name="my_class_id" label="Choose a class *" group-class="col-span-6" wire:model.live="myClass">
        @foreach ($myClasses as $item)
            <option value="{{$item['id']}}">{{$item['name']}}</option>
        @endforeach
    </x-select>
    <x-select id="section-id" name="section_id" label="Choose a section *" group-class="col-span-6" wire:model.live="section">
        @if (isset($sections))
            @foreach ($sections as $item)
                <option value="{{$item['id']}}">{{$item['name']}}</option>
            @endforeach
        @else
            <option value="" disabled>Select a class first</option>
        @endif
    </x-select>
    <x-input id="admission-number" name="admission_number" label="Admission number" placeholder="Student's admission number" group-class="col-span-6" />
    <x-input type="date" id="admission-date" name="admission_date" placeholder="Choose student's admission date..." label="Date of admission  *"  group-class="col-span-6" value="{{old('admission_date')}}"  autocomplete="off" wire:ignore />
</div>
