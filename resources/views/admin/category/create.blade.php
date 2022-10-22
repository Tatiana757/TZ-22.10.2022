@extends('layout.admin')

@section('title')
    Добавить категорию
@endsection

@section('content')
    
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($category) ? "Редактировать категорию ID {$category->id}" : 'Добавить статью' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($category) ? route("admin.category.update", $category->id) : route("admin.category.store") }}">
                @csrf

                @if(isset($category))
                    @method('PUT')
                @endif

                <input name="category" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('category') border-red-500 @enderror" placeholder="Название" value="{{ $category->category ?? '' }}" />

                @error('category')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>

@endsection