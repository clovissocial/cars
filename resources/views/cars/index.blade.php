@extends('layouts.app')

@section('content')

<div class="m-auto py-24">
    <h1 class="text-5xl uppercase bold text-center text-black">
        Cars
    </h1>
{{ $cars }}
    <div class="w-5/6 py-10 ml-20">
       @foreach ($cars as $car );
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded:
                </span>
                <h2 class="text-gray-700 text-5xl py-6">
                    
                </h2>
                <p class="text-lg text-gray-700">
                    
                </p>
                <hr class="mt-4 mb-8">
            </div>
       @endforeach
    </div>
</div>

@endsection