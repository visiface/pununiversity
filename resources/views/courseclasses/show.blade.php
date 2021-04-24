@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold pb-4">
                Class Overview
            </h1>
        </div>

        <div class="m-auto w-4/5 pt-10">
            <a 
                href="{{ route('courseclasses.index') }}"
                class="text-gray-500 hover:text-gray-700 bg-gray-300 hover:bg-gray-400 p-4">
                    &larr; Back to Class Compendium
            </a>
        
            <a 
                href="{{ route('courses.index') }}"
                class="text-gray-500 hover:text-gray-700 bg-gray-300 hover:bg-gray-400 p-4 ml-4">
                    &larr; Back to Courses
            </a>
        </div>
        

        <div class="m-auto w-4/5 py-10">
                 
            <div class="m-auto">

                <span class="uppercase text-blue-500 font-bold text-xs">
                    {{ $courseclass->subject }}
                </span>

                <h2 class="text-gray-700 text-4xl">
                    {{ $courseclass->name }}
                </h2>

                <div class="text-lg text-gray-700 py-3">
                    {{ $courseclass->description }}
                </div>

                <hr class="mt-4 mb-8">
                
            </div>

            <div class="m-auto">
                <div class="uppercase text-gray-500 text-lg text-center pb-4">
                    Current Student List
                </div>

                <div class="text-left pb-6 flex uppercase text-gray-400 font-bold text-xs">
                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        full name
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        email
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1">
                        grade
                    </div>

                    <div class="w-1/4 border-gray-400 border-b pb-1 pl-8">
                        Actions
                    </div>
                </div>

                
                @forelse ($student as $student)
                    <div class="pt-2 pb-3 flex text-left">
                        <div class="w-1/4 uppercase text-blue-500 font-semibold pt-2">
                            {{ $student->fname }} {{ $student->lname }}
                        </div>

                        <div class="w-1/4 pt-2">
                            {{ $student->email }}
                        </div>

                        <div class="w-1/4 text-xs pb-4 pt-2">
                            TBD
                        </div>

                        <div class="w-1/4 text-xs pb-4 pt-2 pl-8">
                            edit
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
                        href="{{ route('students.create') }}"
                        class="text-gray-500 hover:text-gray-700 bg-green-200 hover:bg-green-300 p-4 m-auto block max-w-max">
                            Add New Student &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection