@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    The World of Comics!
                </h1>
            </div>
        </div>
    </div>

    <div class="home-content">
        <div class="text-center py-15">
            <h2 class="text-4xl font-bold py-10">
                Recommended Reading
            </h2>

            <p class="m-auto w-4/5 text-black-500">
                Below are a few comics (with more comics coming!) that I think you will enjoy a lot! Be sure to leave
                comments in each comic to give
                your own opinion of them!
            </p>
        </div>

        <div class="comic-gallery-section">
            <a class="create-post-button border border-black px-3 py-1.5 w-28 rounded-md bg-gray-200"
                href="{{ route('comics.create') }}">Create post</a>
            <div class="comic-gallery grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($comics as $comic)
                    <a href="{{ route('comics.show', $comic->id) }}" class="w-min">
                        <div class="comic-container">
                            <img class="comic-image" src="{{ asset('storage/' . $comic->image_path) }}" />
                            <div class="comic-info">
                                <h1>{{ $comic->title }}</h1>
                                <p>{{ Str::limit($comic->description, 300) }}</p>
                            </div>
                            <p class="continue-reading-link">Continue Reading...</p>
                            <div class="comic-footer">
                                <div class="comments">
                                    <img src="{{ asset('images/comment-icon.png') }}" />
                                    <p>{{ $comic->comment_count }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
