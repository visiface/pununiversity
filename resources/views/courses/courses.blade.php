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
                class="border-b-2 p-4 bg-green-500 text-gray-100 hover:bg-green-600">
                    Add New Course &rarr;
            </a>
        </div>

        <div class="m-auto w-4/5 py-10">
            @foreach ($courses as $course)
                
                <div class="m-auto">
                    
                    <div class="float-right flex justify-end">
                        <form action="/courses/{{ $course->id }}" 
                            class="pt-1"
                            method="POST">
                                @csrf
                                @method('delete')
                                <button 
                                    type="submit"
                                    class=" text-red-500 hover:text-red-700 text-xs border-red-500 hover:border-red-700 border-b pb-1">
                                        Delete Course &rarr;
                                </button>
                                
                            <a 
                            href="courses/{{ $course->id }}/edit"
                            class="text-gray-400 text-xs hover:text-gray-600 ml-4 border-gray-400 hover:border-gray-600 border-b pb-1">
                                Edit Course &rarr;
                            </a>
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
