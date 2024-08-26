<!-- component -->
<div class="fixed z-50 inset-0 flex items-center justify-center overflow-hidden">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <h3 class="text-2xl leading-6 font-bold text-gray-900 text-center">
          Editar Producto
        </h3>

        <form wire:submit='edit' novalidate>
            <div class="mt-3">
                <x-label for="edit_name" value="{{ __('Nombre') }}" />
                <x-input id="edit_name" class="block mt-1 w-full" type="text" wire:model="editForm.name" :value="old('edit_name')" required autofocus autocomplete="edit_name" />
            </div>
            
            <div class="mt-3">
                <x-label for="edit_description" value="{{ __('Descripción') }}" />
                <textarea wire:model="editForm.description" id="edit_description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
            </div>

            <div class="mt-3">
                <x-label for="edit_price" value="{{ __('Precio') }}" />
                <x-input id="edit_price" class="block mt-1 w-full" type="number" wire:model="editForm.price" :value="old('edit_price')" required autofocus autocomplete="edit_price" />
            </div>

            <div class="bg-gray-50 px-4 py-3 flex gap-2 justify-end">
                <x-danger-button wire:click='closeEditModal'>
                    Cancelar
                </x-danger-button>
                <x-button>
                    Actualizar
                </x-button>
            </div>
        </form>

        <x-validation-errors class="mb-4" />

      </div>
      
    </div>
  </div>