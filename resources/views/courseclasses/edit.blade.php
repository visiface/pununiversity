@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Edit Class
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/courseclasses/{{ $courseclass->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="name"
                        value="{{ $courseclass->name }}">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="degree_type"
                        value="{{ $courseclass->subject }}">

                    <textarea 
                        rows="4" cols="50"
                        class="block shadow-5xl mb-10 p-2 w-80 h-40 placeholder-gray-400"
                        name="description">{{ $courseclass->description }}</textarea>

                    <button 
                        type="submit" 
                        class="bg-green-600 text-gray-100 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                            Submit
                    </button>

                </div>
            </form>
        </div>
    
    </div>
@endsection
