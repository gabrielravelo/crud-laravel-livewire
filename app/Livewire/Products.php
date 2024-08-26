<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateProduct;
use App\Livewire\Forms\EditProduct;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('layouts.app')] 
class Products extends Component
{
    public $isCreateModalHidden = true;
    public $isEditModalHidden = true;
    public CreateProduct $createForm;
    public EditProduct $editForm;

    public function showToggleCreateModal()
    {
        $this->isCreateModalHidden = !$this->isCreateModalHidden;
    }
    
    public function openEditModal(Product $product)
    {
        $this->isEditModalHidden = false;
        $this->editForm->product_id = $product->id;
        $this->editForm->name = $product->name;
        $this->editForm->description = $product->description;
        $this->editForm->price = $product->price;
    }

    public function closeEditModal()
    {
        $this->isEditModalHidden = true;
    }

    public function create()
    {
        $this->createForm->save();

        flash()->success('Producto añadido de manera exitosa!');
        $this->reset();
    }

    public function edit()
    {
        $this->editForm->update();

        flash()->success('Producto actualizado de manera exitosa!');
        $this->reset();
    }

    public function delete(Product $product)
    {
        $product->delete();
        
        flash()->success('Producto eliminado de manera exitosa!');
        $this->reset();
    }

    public function render()
    {
        $products = Product::all();
        
        return view('livewire.products', compact('products'));
    }
}
