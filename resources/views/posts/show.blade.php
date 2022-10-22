@extends('layout.app')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    @include('header')
    <div class="container">
        <div class="container-container">
            <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="post">
                            <div class="img">
                                <img src="{{$post->thumbnail}}" width="400" height="400">
                            </div>
                            <div class="title">
                                <p>{{$post->title}}</p>
                            </div>
                            <div class="description">
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection