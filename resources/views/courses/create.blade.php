@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Car
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/courses" method="POST">
                @csrf
                <div class="block">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="name"
                        placeholder="Course Name">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="degree_type"
                        placeholder="Type of Degree">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"
                        name="description"
                        placeholder="Course Description">

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
