@extends('layouts.app')
@section('content')
    <div class="my-5 d-flex justify-content-center row px-2">
        @include('partials.user.user-submenu')
        @livewire('user.user-password')
    </div>
@endsection
