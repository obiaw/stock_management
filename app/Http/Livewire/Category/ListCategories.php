<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class ListCategories extends Component
{

    public function mount(){

       
    }

    public function render()
    {
        
        return view('livewire.category.list-categories')
                ->extends('layouts.app')
                ->section('content');
    }

}
