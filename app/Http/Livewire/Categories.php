<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    public $isOpen = 0;
    public $category;
    protected $rules =  ['category.name' => 'required'];

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {   

        return view('livewire.categories', [
                'categories' => Category::where('name', 'like', '%'.$this->search.'%')
                    ->where('user_id', auth()->user()->id)
                    ->paginate(10)
                    ])
                ->extends('layouts.app')
                ->section('content'
            );
    }

    private function resetInputFields(){
        $this->category->name = '';
    }

    public function create()
    {
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
        $this->category->user_id = auth()->user()->id;
        $this->category->slug = Str::slug($this->category->name);
        $this->category->save();
        session()->flash('message', 'Category Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
        
    }
    
    public function edit($id)
    {
        $cate = Category::findOrFail($id);
        $this->name = $cate->name;
        $this->slug = Str::slug($cate->name);
        $this->openModal();
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

}
