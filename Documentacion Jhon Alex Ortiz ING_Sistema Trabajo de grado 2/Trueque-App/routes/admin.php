<?php

use App\Http\Livewire\Admin\ProductsComponent;
use App\Http\Livewire\Admin\ProviderComponent;
use Illuminate\Support\Facades\Route;

Route::get('products', ProductsComponent::class)->name('admin.products');

Route::get('proveedores', ProviderComponent::class)->name('admin.providers');