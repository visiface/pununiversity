@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Class Compendium
            </h1>
        </div>

        <div class="m-auto w-4/5 pt-10">
            <a 
                href="{{ route('courseclasses.create') }}"
                class="border-b-2 p-4 bg-green-500 text-gray-100 hover:bg-green-600">
                    Add New Class &rarr;
            </a>
        </div>

        <div class="m-auto w-4/5 py-10">
            @foreach ($courseclasses as $courseclass)
                
                <div class="m-auto">
                    
                    <div class="float-right flex justify-end">
                        <form action="/courseclasses/{{ $courseclass->id }}" 
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
                            href="courseclasses/{{ $courseclass->id }}/edit"
                            class="text-gray-400 text-xs hover:text-gray-600 ml-4 border-gray-400 hover:border-gray-600 border-b pb-1">
                                Edit Class &rarr;
                            </a>
                        </form>
                    </div>

                    <div>
                        <span class="uppercase text-blue-500 font-bold text-xs">
                            {{ $courseclass->course->name }}
                        </span>

                        <span class="text-xs">
                            :
                        </span>

                        <span class="uppercase text-blue-400 text-xs">
                            {{ $courseclass->subject }}
                        </span>
                    </div>

                    <h2 class="text-gray-700 hover:text-gray-500 text-4xl">
                        <a href="/courseclasses/{{ $courseclass->id }}">
                            {{ $courseclass->name }}
                        </a>
                    </h2>

                    <div class="text-lg text-gray-700 py-3 ml-4">
                        {{ $courseclass->description }}
                    </div>

                    <hr class="border-gray-400 my-8">
                   
                </div>

            @endforeach
        </div>
    </div>
@endsection