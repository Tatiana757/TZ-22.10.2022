@extends('layout.app')

@section('title')
    Новости
@endsection

@section('content')
    @include('header')
    <div class="container">
        <div class="container-container">
            <div class="row justify-content-center gy-5 px-4">
                
                @foreach($posts as $post)
                    <div class="col">
                        <div class="item">
                            <div class="img">
                                <a href="{{route('posts.show',$post->id)}}">
                                    <img src="{{$post->thumbnail}}" width="200" height="200">
                                </a>
                            </div>
                            <div class="title">
                                <p>{{$post->title}}</p>
                            </div>
                            <div class="preview">
                                <p>{{$post->preview}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
            {{$posts->links()}}
    </div>

@endsection