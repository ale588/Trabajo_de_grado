<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Provider;
use Livewire\Component;

class ProductsComponent extends Component
{
    public $products, $product, $providers, $provider;

    protected $listeners = ['delete'];

    public $createForm=[
        'name' => null,
        'price' => null,
        'description' => null,
        'material' => null,
        'size' => null,
        'provider_id' => '',
    ];

    public $editForm=[
        'open' => false,
        'name' => null,
        'price' => null,
        'description' => null,
        'material' => null,
        'size' => null,
        'provider_id' => '',
    ];

    public $rules=[
        'createForm.name' => 'required',
        'createForm.price' => 'required',
        'createForm.description' => 'required',
        'createForm.material' => 'required',
        'createForm.size' => 'required',
        'createForm.provider_id' => 'required',
    ];



    public function mount()
    {
        $this->getProducts();
        $this->getProviders();
    }

    public function getProducts()
    {
        $this->products = Product::all();
    }

    public function getProviders()
    {
        $this->providers = Provider::all();
    }

    public function save()
    {
        $this->validate();
        Product::create($this->createForm);
        $this->reset('createForm');
        $this->getProducts();
    }

    public function edit(Product $product)
    {
        $this->product = $product;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $product->name;
        $this->editForm['price'] = $product->price;
        $this->editForm['description'] = $product->description;
        $this->editForm['material'] = $product->material;
        $this->editForm['size'] = $product->size;
        $this->editForm['provider_id'] = $product->provider_id;
        
    }

    public function update()
    {
       $this->validate([
        'editForm.name' => 'required',
        'editForm.price' => 'required',
        'editForm.description' => 'required',
        'editForm.material' => 'required',
        'editForm.size' => 'required',
        'editForm.provider_id' => 'required',
       ]); 

       $this->product->update([
        'name' => $this->editForm['name'],
        'price' => $this->editForm['price'],
        'description' => $this->editForm['description'],
        'material' => $this->editForm['material'],
        'size' => $this->editForm['size'],
        'provider_id' => $this->editForm['provider_id'],
       ]);

       $this->reset('editForm');
       
       $this->getProducts();
    }

    public function delete(Product $product)
    {
        $product->delete();

        $this->getProducts();
    }

    public function render()
    {
        return view('livewire.admin.products-component')->layout('layouts.admin');
    }
}
