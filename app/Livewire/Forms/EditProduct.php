<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Product;
use Livewire\Attributes\Validate;

class EditProduct extends Form
{
    public $product_id = '';

    #[Validate('required|string|min:5|max:150')] 
    public $name;

    #[Validate('required|string|min:5|max:255')] 
    public $description;

    #[Validate('required|numeric|min:1')] 
    public $price;

    public function update()
    {
        $this->validate();
        
        $product = Product::find($this->product_id);

        $product->update(
            $this->all()
        );
    }
}
