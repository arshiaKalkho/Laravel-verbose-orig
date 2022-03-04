@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status')}}
                </div>
            @endif
            
            <form action="{{ route('login') }}" method="POST">
                @csrf

                
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
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember Me</label>
                </div>

                 <button class="bg-blue-500 text-white px-4 py-3 mt-3 rounded font-medium w-full" type="submit"> Login</button>
            </form>
        </div>
        
    </div>
@endsection