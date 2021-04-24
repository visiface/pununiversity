@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Edit Student Information
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/students/{{ $student->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">
                    <span class="uppercase text-blue-500 font-bold text-xs">
                        Select a Course:
                    </span>
                    <select 
                        name="course_id" 
                        class="block shadow-5xl mb-10 p-2 w-80">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">
                                    {{ $course->name }}
                                </option>
                            @endforeach
                    </select>
                    
                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="fname"
                        value="{{ $student->fname }}">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="lname"
                        value="{{ $student->lname }}">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="email"
                        value="{{ $student->email }}">

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