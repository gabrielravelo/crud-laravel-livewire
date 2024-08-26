<!-- component -->
<div class="fixed z-50 inset-0 flex items-center justify-center overflow-hidden">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <h3 class="text-2xl leading-6 font-bold text-gray-900 text-center">
          Crear Producto
        </h3>

        <form wire:submit='create' novalidate>
            <div class="mt-3">
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" wire:model="createForm.name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            
            <div class="mt-3">
                <x-label for="name" value="{{ __('Descripción') }}" />
                <textarea wire:model="createForm.description" id="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
            </div>

            <div class="mt-3">
                <x-label for="price" value="{{ __('Precio') }}" />
                <x-input id="price" class="block mt-1 w-full" type="number" wire:model="createForm.price" :value="old('price')" required autofocus autocomplete="price" />
            </div>

            <div class="bg-gray-50 px-4 py-3 flex gap-2 justify-end">
                <x-danger-button wire:click='showToggleCreateModal'>
                    Cancelar
                </x-danger-button>
                <x-button>
                    Crear
                </x-button>
            </div>
        </form>

        <x-validation-errors class="mb-4" />

      </div>
      
    </div>
  </div>