@extends('layout.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg-white rounded-lg">
        <form class="mb-4 p-4" action="{{route('posts')}}" method="POST">

            @csrf
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" cols="25" rows="4" placeholder="New Post"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"></textarea>

            @error('body')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror

            <div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium"> Posts</button>
            </div>
        
        </form>    
    </div>
        
    </div>
@endsection