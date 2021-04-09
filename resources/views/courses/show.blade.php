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

                <div class="text-lg text-gray-700 py-3">
                    {{ $course->description }}
                </div>

                <hr class="mt-4 mb-8">
                
            </div>

            <div class="m-auto">
                <div class="uppercase text-gray-600 font-bold text-s text-center pb-6">
                    Class Overview
                </div>

                <div class="pb-4 flex text-center uppercase text-gray-400 font-bold text-xs">
                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        class name
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        subject
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        description
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        options
                    </div>
                </div>

                
                @forelse ($course->courseClasses as $courseclass)
                    <div class=" flex text-left">
                        <div class="w-1/4 uppercase text-blue-500 font-semibold">
                            {{ $courseclass->name }}
                        </div>

                        <div class="w-1/4 font-semibold uppercase">
                            {{ $courseclass->subject }}
                        </div>

                        <div class="w-1/4 text-xs pb-4">
                            {{ $courseclass->description }}
                        </div>

                        <div class="w-1/4 text-center">
                            <div>
                                <span class="text-red-500 hover:text-red-700 text-xs border-red-500 hover:border-red-700 border-b pb-1">
                                    delete &rarr;
                                </span>

                                <span class="px-1"></span>

                                <span class="text-gray-400 text-xs hover:text-gray-600 ml-4 border-gray-400 hover:border-gray-600 border-b pb-1">
                                    edit &rarr;
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr class="pb-2 pt-1 border-gray-300">
                @empty
                    <div class="px-4 pb-4 flex text-center">
                        No Classes Found.
                    </div>
                @endforelse
                

            </div>

        </div>
    </div>
@endsection