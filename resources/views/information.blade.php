@extends('layout.app')

@section('title')
    Личный кабинет
@endsection

@section('content')
    @include('header')
    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div class="px-4 py-2 mt-2 bg-white">
                    <p class="sm:text-sm text-md text-gray-700 px-2 mr-1 my-3">
                        Name: {{$user->name }}
                    </p>
                </div>
                
                <div class="px-4 py-2 mt-2 bg-white">
                    <p class="sm:text-sm text-md text-gray-700 px-2 mr-1 my-3">
                        Email: {{$user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection