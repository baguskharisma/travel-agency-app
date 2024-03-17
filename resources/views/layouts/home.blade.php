@extends('layouts.base')

@section('title', 'Home')

@section('body')
    @yield('content')


    @isset($slot)
        {{ $slot }}
    @endisset

    <!-- <livewire:footer /> -->
@endsection
