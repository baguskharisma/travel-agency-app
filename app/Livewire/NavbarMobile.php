<?php

namespace App\Livewire;

use Livewire\Component;

class NavbarMobile extends Component
{
    public function render()
    {
        return view('livewire.navbar-mobile')->extends('layouts.navbar-mobile');
    }
}
