<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Product;
use Livewire\Attributes\Validate;

class CreateProduct extends Form
{
    #[Validate('required|string|min:5|max:150')] 
    public $name;

    #[Validate('required|string|min:5|max:255')] 
    public $description;
    
    #[Validate('required|numeric|min:1')] 
    public $price;

    public function save()
    {
        $this->validate();

        Product::create(
            $this->all()
        );
    }
}
