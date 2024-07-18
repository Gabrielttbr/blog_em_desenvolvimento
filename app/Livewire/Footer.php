<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NavbarCategories;

class Footer extends Component
{
    public $navbarCategory;

    public function render()
    {
        return view('livewire.footer');
    }

    public function mount()
    {
        $this->navbarCategory = NavbarCategories::all();
    }
}