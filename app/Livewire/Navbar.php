<?php

namespace App\Livewire;

use App\Models\NavbarCategories;
use Livewire\Component;

class Navbar extends Component
{
    public  $navbarCategory;
    
    public function render()
    {
        return view('livewire.navbar');
    }
    //Inicia propriedades do livewire
    public function mount()
    {
        $this->navbarCategory = NavbarCategories::all();
    }
    
}
