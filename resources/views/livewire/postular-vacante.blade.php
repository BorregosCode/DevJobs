<div class=" bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class=" text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
    
    @if (session()->has('mensaje'))
        <p class=" uppercase border border-green-600 bg-green-300 text-green-600 font-bold p-2 my-5 rounded-lg">{{ session('mensaje') }}</p>   
    @else
        <form wire:submit.prevent='postularme' class=" w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum u hoja de vida (PDF)')"/>
                <x-text-input id="cv" class="block mt-1 w-full" type="file" wire:model="cv" accept=".pdf"/>
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message"/>
            @enderror

            <x-primary-button class=" my-5 w-full justify-center">
                {{ __('Postularse') }}
            </x-primary-button>
        </form>
    @endif
</div>