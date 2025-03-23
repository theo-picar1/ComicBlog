@extends('layouts.app')

@section('content')
    <div class="bg-blue-300 py-16">
        <div class="w-3/5 h-auto m-auto rounded-md bg-white px-12 py-6">
            <h1 class="font-bold text-4xl border-b pb-4">About</h1>

            <img src="{{ asset('images/general-comic-img-3.jpeg') }}" class="m-auto mt-10 w-full h-auto" />

            <p class="mt-6 text-lg">Comics have been a beloved form of storytelling for decades, bringing together captivating narratives and
                stunning artwork. From classic superheroes to thought-provoking graphic novels, comics offer a unique way to
                experience stories that blend visual and written elements seamlessly. Whether it’s the action-packed
                adventures of superheroes, the imaginative worlds of fantasy, or the emotional depth of slice-of-life tales,
                comics provide something for every type of reader.</p>

            <img src="{{ asset('images/general-comic-img1.jpeg') }}" class="m-auto mt-10 w-full h-auto" />

            <p class="mt-6 text-lg">Over the years, comics have evolved from print to digital, allowing more accessibility and diversity in
                storytelling. Independent creators now have the chance to share their work with global audiences,
                introducing fresh perspectives and new artistic styles. This shift has also led to the rise of webcomics,
                which have gained popularity for their innovative formats and interactive storytelling. No matter the
                medium, comics continue to inspire readers and creators alike, proving that they are more than just
                entertainment—they are a powerful form of expression.</p>

                <img src="{{ asset('images/general-comic-img2.jpeg') }}" class="m-auto mt-10 w-full h-auto" />

            <p class="mt-6 text-lg">Whether you’re a longtime fan or new to the world of comics, there’s always something exciting to discover.
                From collecting rare issues to engaging in fan discussions, the comic book community is as passionate as
                ever. With endless stories to explore and new characters to meet, comics remain a timeless and ever-growing
                art form that brings people together through the love of storytelling.</p>

            <p class="mt-8 text-s pb-12">Author: Theo Picar</p>
        </div>
    </div>
@endsection
