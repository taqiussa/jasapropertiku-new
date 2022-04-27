@extends('layouts.app')
@section('content')
<div class="my-5 d-flex justify-content-center row px-2">
    @livewire('post.detail-post',['postId' => $post->id])
</div>
@endsection
