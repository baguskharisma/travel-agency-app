@extends('layouts.base')

@section('title', 'Home')

@section('body')
    <livewire:navbar />

    @yield('content')


    @isset($slot)
        {{ $slot }}
    @endisset

    <livewire:footer />
@endsection
