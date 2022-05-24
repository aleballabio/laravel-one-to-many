@extends('layouts.admin')

@section('pageTitle', $post->title)

@section('pageContent')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <b>{{ $post->user->name }}</b> @if ($post->user->userInfo != null) - <b>

                {{ $post->user->userInfo->phone }}</b>@endif
                <br>
                <b>{{ $post->category->name }}</b>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection
