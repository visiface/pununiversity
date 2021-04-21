@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold pb-4">
                Cirriculum Overview
            </h1>
        </div>

        <div class="m-auto w-4/5 pt-10">
            <a 
                href="{{ route('courses.index') }}"
                class="text-gray-500 hover:text-gray-700 bg-gray-200 hover:bg-gray-300 p-4">
                    &larr; Back to Courses
            </a>
        </div>

        <div class="m-auto w-4/5 py-10">
                 
            <div class="m-auto">

                <span class="uppercase text-blue-500 font-bold text-xs">
                    {{ $course->degree_type }}
                </span>

                <h2 class="text-gray-700 text-4xl">
                    {{ $course->name }}
                </h2>

                <div class="text-lg text-gray-700 py-3">
                    {{ $course->description }}
                </div>

                <hr class="mt-4 mb-8">
                
            </div>

            <div class="m-auto">
                <div class="uppercase text-gray-500 text-lg text-center pb-4">
                    Class Overview
                </div>

                <div class="text-left pb-6 flex uppercase text-gray-400 font-bold text-xs">
                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        class name
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        subject
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        description
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1 pl-8">
                        Actions
                    </div>
                </div>

                
                @forelse ($course->courseClasses as $courseclass)
                    <div class="pt-2 pb-3 flex text-left">
                        <div class="w-1/4 uppercase text-blue-500 font-semibold pt-2">
                            {{ $courseclass->name }}
                        </div>

                        <div class="w-1/4 font-semibold uppercase pt-2">
                            {{ $courseclass->subject }}
                        </div>

                        <div class="w-1/4 text-xs pb-4 pt-2">
                            {{ $courseclass->description }}
                        </div>

                        <div class="w-1/4 text-xs pb-4 pt-2 pl-8">
                            <form action="/courses/{{ $courseclass->id }}" 
                                class="pt-1"
                                method="POST">
                                    @csrf
                                    @method('delete')
                                    <button 
                                        type="submit"
                                        class=" text-red-500 hover:text-red-700 text-xs border-red-500 hover:border-red-700 border-b pb-1">
                                            Delete Class &rarr;
                                    </button>
                                    
                                <a 
                                href="courses/{{ $courseclass->id }}/edit"
                                class="text-gray-400 text-xs hover:text-gray-600 ml-4 border-gray-400 hover:border-gray-600 border-b pb-1">
                                    Edit Class &rarr;
                                </a>
                            </form>
                        </div>
                    </div>

                    <hr class="pb-2 pt-3 border-gray-300">
                @empty
                    <div class="px-4 pb-4 flex text-center">
                        No Classes Found.
                    </div>
                @endforelse

                <div class="pt-10">
                    <a 
                        href="{{ route('courseclasses.create') }}"
                        class="text-gray-500 hover:text-gray-700 bg-green-200 hover:bg-green-300 p-4 m-auto block max-w-max">
                            Add New Class &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection