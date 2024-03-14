<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class NavbarAuth extends Component
{
    public function render()
    {
        return view('livewire.auth.navbar-auth')->extends('layouts.auth.navbar-auth');
    }
}
