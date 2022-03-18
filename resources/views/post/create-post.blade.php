@extends('layouts.app')
@push('styles')
    @livewireStyles()
@endpush
@section('content')
<div class="my-5 d-flex justify-content-center row px-2">
    @livewire('post.create-post')
</div>
@endsection
@push('scripts')
    @livewireScripts()
@endpush
