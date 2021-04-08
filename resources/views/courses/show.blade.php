@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold pb-4">
                {{ $course->name }} Cirriculum Overview
            </h1>
        </div>

        <div class="m-auto w-4/5 pt-10">
            <a 
                href="#"
                class="border-b-2 p-4 bg-green-500 text-gray-100 hover:bg-green-600">
                    Add New Class &rarr;
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

                <div class="text-lg text-gray-700 py-3 ml-4">
                    {{ $course->description }}
                </div>

                <hr class="mt-4 mb-8">
                
            </div>

            <div class="m-auto">
                <div class="uppercase text-gray-600 font-bold text-s text-center pb-6">
                    Class Overview
                </div>

                <div class="p-3 flex text-center uppercase text-gray-400 font-bold text-xs">
                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        subject
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        class name
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        description
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        options
                    </div>
                </div>

                
                @forelse ($course->courseClasses as $courseclass)
                    <div class="px-4 pb-4 flex text-center">
                        <div class="w-1/4">
                            {{ $courseclass->subject }}
                        </div>

                        <div class="w-1/4">
                            {{ $courseclass->name }}
                        </div>

                        <div class="w-1/4">
                            {{ $courseclass->description }}
                        </div>

                        <div class="w-1/4">
                            <div>
                                edit
                            </div>
                            
                            <div>
                                delete
                            </div>
                        </div>

                        <hr class="mt-4 mb-8">
                    </div>
                @empty
                    <div>
                        No Classes Found.
                    </div>
                @endforelse
                

            </div>

        </div>
    </div>
@endsection