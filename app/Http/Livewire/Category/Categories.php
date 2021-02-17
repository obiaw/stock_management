<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    public $isOpen = 0;
    public $category, $category_id;
    protected $rules =  ['category.name' => 'required'];

    public $search = '';


    public function mount(){
        $this->category = new Category();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {   
        $categories = Category::where('name', 'like', '%'.$this->search.'%')
                                ->where('user_id', auth()->user()->id)
                                ->paginate(10);
        return view('livewire.category.categories', ['categories' => $categories])
                ->extends('layouts.app')
                ->section('content');
    }

    private function resetInputFields(){
        $this->category->name = '';
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
    
    public function openModal()
    {
        $this->isOpen = true;
    }


    public function closeModal(){
        $this->isOpen = false;
    }
    public function store()
    {
        $this->validate();
        Category::updateOrCreate(['id' => $this->category_id], 
        [
            'name' => $this->category->name,
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($this->category->name)
        ]);
        session()->flash('message', 
        $this->category_id ? 'Category Updated Successfully.' : 'Category Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
        
    }
    
    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        $this->category_id = $id;
        $this->category->name = $cat->name;
        $this->openModal();
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Category Deleted Successfully.');
    }

}

