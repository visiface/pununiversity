@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Courses
            </h1>
        </div>

        <div class="m-auto w-4/5 pt-10">
            <a 
                href="courses/create"
                class="border-b-2 p-4 bg-green-500 text-gray-100">
                    Add New Course &rarr;
            </a>
        </div>

        <div class="m-auto w-4/5 py-10">
            @foreach ($courses as $course)
                
                <div class="m-auto">
                    
                    <div class="float-right">
                        <a 
                            href="courses/{{ $course->id }}/edit"
                            class="border-b-2 pb-1 border-dotted text-gray-400 text-xs">
                                Edit Course &rarr;
                        </a>
                   
                        <form action="/courses/{{ $course->id }}" 
                            class="pt-1"
                            method="POST">
                                @csrf
                                @method('delete')
                                <button 
                                    type="submit"
                                    class="border-b-2 pb-2 border-dotted text-red-500 text-xs">
                                        Delete Course &rarr;
                                </button>
                        </form>
                    </div>

                   
                    <span class="uppercase text-blue-500 font-bold text-xs">
                        {{ $course->degree_type }}
                    </span>

                    <h2 class="text-gray-700 text-4xl">
                        {{ $course->name }}
                    </h2>

                    <div class="text-lg text-gray-700 py-4">
                        {{ $course->description }}
                    </div>

                    <hr class="mt-4 mb-8">
                   
                </div>

            @endforeach
        </div>
    </div>
@endsection
