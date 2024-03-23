@extends('layouts.base')

@section('title', 'Home')

@section('body')
    <livewire:navbar-home />

    @yield('content')


    @isset($slot)
        {{ $slot }}
    @endisset

    <livewire:footer />
    <livewire:navbar-mobile />
@endsection
