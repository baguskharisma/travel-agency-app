<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class NavbarAuthMobile extends Component
{
    public function render()
    {
        return view('livewire.auth.navbar-auth-mobile')->extends('layouts.auth.navbar-auth-mobile');
    }
}
