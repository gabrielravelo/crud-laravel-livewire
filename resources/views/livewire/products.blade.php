<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-4xl font-bold mb-5">Productos</h1>
            
            <div class="my-4 flex flex-col md:flex-row gap-2 justify-between">
                <p>En este panel podrá gestionar sus productos.</p>
                
                <x-button wire:click="showToggleCreateModal" class="justify-center">
                    Crear Producto
                </x-button>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripcion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr class="bg-white border-b hover:bg-gray-50" wire:key="{{ $product->id }}">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $product->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $product->price }}
                                    </td>
                                    <td class="px-6 py-4 text-center flex flex-col md:flex-row gap-2 justify-center">
                                        <x-secondary-button wire:click="openEditModal({{ $product->id }})" class="justify-center">
                                            Editar
                                        </x-secondary-button>
                                        <x-danger-button wire:click="delete({{ $product->id }})" class="justify-center">
                                            Eliminar
                                        </x-danger-button>
                                    </td>
                                </tr>
                            @empty
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th colspan="4" scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                                        No hay productos
                                    </th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="{{ $isCreateModalHidden ? 'hidden' : '' }}">
                    <x-create-product-modal />
                </div>
                
                <div class="{{ $isEditModalHidden ? 'hidden' : '' }}">
                    <x-edit-product-modal />
                </div>
            </div>
        </div>
    </div>
</div>
