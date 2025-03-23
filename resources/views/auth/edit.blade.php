@extends('layouts.app')

@section('content')
    <div class="flex flex-row gap-10 w-10/12 m-auto py-12">
        <div>
            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/user-icon.png') }}"
                class="border rounded-full border-black m-auto w-24 h-24" />

            <div class="mt-5 border border-black rounded">
                <div class="flex flex-row items-center gap-3 p-3 pr-20 hover:bg-gray-100">
                    <img src="{{ asset('images/home-icon.png') }}" class="w-5 h-auto" />
                    <p>Dashboard</p>
                </div>
                <div class="flex flex-row items-center gap-3 p-3 pr-20 hover:bg-gray-100">
                    <img src="{{ asset('images/account-icon.png') }}" class="w-5 h-auto" />
                    <p class="w-full">Account</p>
                </div>
                <div class="flex flex-row items-center gap-3 p-3 pr-20 hover:bg-gray-100">
                    <img src="{{ asset('images/password-icon.png') }}" class="w-5 h-auto" />
                    <p>Password</p>
                </div>
                <div class="flex flex-row items-center gap-3 p-3 pr-20 border-t hover:bg-gray-100">
                    <img src="{{ asset('images/logout-icon.png') }}" class="w-5 h-auto" />
                    <a href="{{ route('logout') }}" class="no-underline hover:underline text-red-600"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h1 class="text-4xl font-bold">Account Settings</h1>

            <form action="{{ route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-9">
                    <p class="font-semibold">Email</p>
                    <input type="text" class="border border-gray rounded-md w-full mt-2 p-2" value="{{ $user->email }}"
                        name="email">
                </div>
                <div class="font-semibold mt-4">
                    <p>Full Name</p>
                    <input type="text" class="border border-gray rounded-md w-full mt-2 p-2" value="{{ $user->name }}"
                        name="name">
                </div>

                <div class="font-semibold mt-4">
                    <p>Username</p>
                    <input type="text" class="border border-gray rounded-md w-full mt-2 p-2"
                        value="{{ $user->username }}" name="username">
                </div>

                <div class="font-semibold mt-4">
                    <p>Telephone No.</p>
                    <input type="text" class="border border-gray rounded-md w-full mt-2 p-2"
                        placeholder="Enter your telephone number here" value="{{ $user->telephone_no }}" name="telephone">
                </div>

                <div class="font-semibold mt-4">
                    <p>Profile Picture</p>
                    <input type="file" class="border border-gray rounded-md w-full mt-2 p-2" name="pictureURL" required>
                </div>

                <button class="bg-red-600 text-white font-bold text-xl rounded-md px-6 py-3 mt-4 m-auto">SUBMIT</button>
            </form>
        </div>
    </div>
@endsection
