@extends('layouts.app')

@section('content')
    <main class="create-comic sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex mb-10">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg w-full">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center">
                    {{ __('Create new post') }}
                </header>

                <form class="create-form w-full px-6 space-y-6 sm:px-10 sm:space-y-8">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Blog title') }}:
                        </label>

                        <input id="title" type="text"
                            class="form-input w-full @error('title') border-red-500 @enderror" name="title"
                            value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="imageURL" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Blog image') }}:
                        </label>

                        <input id="imageURL" type="text"
                            class="form-input w-full @error('imageURL') border-red-500 @enderror" name="imageURL" required>

                        @error('imageURL')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="description-section flex flex-wrap">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Description') }}:
                        </label>

                        <textarea id="description" class="form-input w-full @error('description') border-red-500 @enderror" name="description"
                            value="{{ old('description') }}" required autocomplete="description" autofocus>
                        </textarea>

                        @error('description')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4 sm:mb-4">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </main>
@endsection
