@extends('layouts.app')

@section('content')
    <div class="home-content py-8">
        <div class="view-comic-page max-w-4xl m-auto bg-white h-auto pb-7 rounded-lg">
            <h1 class="text-3xl font-bold py-12 text-center">{{ $comic->title }}</h1>
            <img class="w-4/5 h-auto m-auto" src="{{ asset($comic->image_path) }}" alt="{{ $comic->title }}">

            <div class="view-comic-content w-10/12 m-auto m-top">
                {{-- Reference: ChatGPT --}}
                <p class="text-gray-700 text-lg py-6">
                    {!! preg_replace('/((?:[^.]*\.){10})/', '$1</p><p class="text-gray-700 text-lg py-6">', e($comic->description)) !!}
                </p>

                <div>
                    <h2 class="text-2xl font-semibold mb-3">{{ $comic->comment_count }} Comments</h2>
                    
                    @if (!empty($comic->comments) && count($comic->comments) > 0)
                        <div>
                            @foreach ($comic->comments as $comment)
                                <li class="bg-gray-100 p-2 rounded-md mb-2">{{ $comment->content }}</li>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No comments yet. Be the first to comment!</p>
                    @endif
                </div>

                <div class="mt-4 send-comment-section">
                    <h2 class="text-2xl font-semibold mb-3">Leave a Comment</h2>

                    <form action="{{ route('comments.store', $comic->id) }}" method="POST">
                        @csrf
                        <div class="type-comment">
                            <textarea name="content" placeholder="Type your comment here..." required></textarea>
                        </div>
                        <div class="submit-button-container py-4 px-3 border-solid border-r border-b border-l border-black">
                            <button>Send Comment</button>
                        </div>
                    </form>
                </div>

                <div class="mt-10 text-right">
                    <a href="{{ route('comics.index') }}" class="text-red-600">
                        Back to Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
