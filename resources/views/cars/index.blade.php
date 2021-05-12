@extends('layouts.app')

@section('content')

<div class="m-auto py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Cars
        </h1>
    </div>
    
    <div class="pt-10 ml-20">
        <a href="cars/create" class="g-blue-500 bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 border-blue-500 rounded">
            Add New Car &rarr;
        </a>
    </div>

    <div class="w-5/6 py-10 ml-20">
       @foreach ($cars as $car )
            <div class="m-auto">
                <div class="float-right">
                    <a href="cars/{{ $car->id }}/edit"
                        class="g-blue-500 bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 border-green-500 rounded">
                        Edit &rarr;
                    </a>

                    <form action="/cars/{{ $car->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-600 text-white font-bold py-2 px-4 border-b-4 mt-10 border-red-800 rounded">
                            Delete &rarr;
                        </button>
                    </form>
                </div>
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span> 
                <h2 class="text-5xl py-6">
                    <a href="/cars/{{ $car->id }}">
                        {{ $car->name }}
                    </a>
                </h2>
                <p class="text-lg text-white-700">
                    {{ $car->description }}
                </p>
                <hr class="mt-4 mb-8">
            </div>
       @endforeach
    </div>
</div>

@endsection