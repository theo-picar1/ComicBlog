@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <img class="w-full h-96 object-cover" src="{{ asset($comic->image_path) }}" alt="{{ $comic->title }}">

            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $comic->title }}</h1>
                <p class="text-gray-700">{{ $comic->description }}</p>

                <div class="mt-6 flex items-center">
                    <img class="w-6 h-6 mr-2" src="{{ asset('images/comment-icon.png') }}" alt="Comments">
                    <p class="text-gray-600">{{ $comic->comment_count }} Comments</p>
                </div>

                <div class="mt-6">
                    <h2 class="text-2xl font-semibold mb-3">Comments</h2>
                    
                    @if (!empty($comic->comments) && count($comic->comments) > 0)
                        <ul class="list-disc list-inside">
                            @foreach ($comic->comments as $comment)
                                <li class="bg-gray-100 p-2 rounded-md mb-2">{{ $comment }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500">No comments yet. Be the first to comment!</p>
                    @endif
                </div>

                <div class="mt-6">
                    <a href="{{ route('comics.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
