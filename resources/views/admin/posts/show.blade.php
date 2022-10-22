@extends('layout.admin')

@section('title')
    Статья
@endsection

@section('content')
    
    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div>
                    <img src="{{ $post->thumbnail }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {{$categories[$post->category_id]}}
                    </p>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {{$post->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection