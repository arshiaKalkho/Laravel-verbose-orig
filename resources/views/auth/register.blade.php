@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <label for="name">Name</label>
                <input type="text" name="name" placeholder="name"
                 class="bg-grey-100 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                 <label for="username">Username</label>
                <input type="text" name="username" placeholder="username"
                 class="bg-grey-100 border-2 w-full p-4 rounded-lg" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Your email"
                 class="bg-grey-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                 @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                 <label for="password">Password</label>
                <input type="password" name="password" placeholder="password"
                 class="bg-grey-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                 <label for="password_confirmation">confirm password</label>
                <input type="text" name="password_confirmation" placeholder="confirm password"
                 class="bg-grey-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                 @enderror
                 <button class="bg-blue-500 text-white px-4 py-3 mt-3 rounded font-medium w-full" type="submit"> Register</button>
            </form>
        </div>
        
    </div>
@endsection