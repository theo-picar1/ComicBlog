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

    <div class="home-navbar bg-gray-800 text-white font-bold text-xl flex flex-row items-center justify-between px-16 py-8">
        <div class="flex flex-row items-center gap-8">
            <p class="cursor-pointer hover:underline">
                Home
            </p>
            /
            <p class="cursor-pointer hover:underline">
                About
            </p>
            /
            <p class="cursor-pointer hover:underline">
                Contact Us
            </p>
            /
            <p class="cursor-pointer hover:underline">
                View Profile
            </p>

        </div>

        <div class="searchbar flex flex-row items-center gap-3">
            <input text="text" placeholder="Search for a blog (title)..." class="text-sm p-2 w-64 border border-black">
            <img src="{{ asset('images/search-icon.png') }}" class="w-8 h-auto cursor-pointer">
        </div>
    </div>

    <div class="home-content">
        <div class="comic-gallery-section pt-15">
            <a class="create-post-button px-3 py-4 w-max m-auto mb-10 rounded-md bg-red-600 font-bold text-white text-lg"
                href="{{ route('comics.create') }}">CREATE YOUR OWN POST</a>
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
                            <div class="comic-footer flex-row items-center flex gap-5 p-4 bg-gray-200 mt-5">
                                <div class="created-at flex-row items-center flex gap-2">
                                    <img src="{{ asset('images/time-icon.png') }}" class="w-5 h-auto" />
                                    <p class="text-red-600 font-semibold text-xs">{{ $comic->created_at->format('d F Y') }}
                                    </p>
                                </div>
                                <div class="comments flex-row items-center flex gap-2">
                                    <img src="{{ asset('images/comment-icon.png') }}" class="w-5 h-auto" />
                                    <p class="text-red-600 font-semibold text-xs">{{ $comic->comment_count }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
