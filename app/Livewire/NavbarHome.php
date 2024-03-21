<?php

namespace App\Livewire;

use Livewire\Component;

class NavbarHome extends Component
{
    public function render()
    {
        return view('livewire.navbar-home')->extends('layouts.navbar-home');
    }
}
