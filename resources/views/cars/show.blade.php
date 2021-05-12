@extends('layouts.app')

@section('content')
<div class="m-auto py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            {{ $car->name }}
        </h1>
    </div>

    <div class=" py-10 text-center">
        <div class="m-auto">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span> 
                <p class="text-lg text-white-700">
                    {{ $car->description }}
                </p>

                <table class="table-auto ml-auto mr-auto mt-10">
                    <tr class="bg-blue-100">
                        <th class="w-1/4 border-4 border-black-400 text-black">
                            Model
                        </th>
                        <th class="w-1/4 border-4 border-black-500 text-black">
                            Engines
                        </th>
                        <th class="w-1/4 border-4 border-black-500 text-black">
                            Date
                        </th>
                    </tr>

                    @forelse ($car->carModels as $model)
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{ $model->model_name }}
                            </td>

                            <td class="border-4 border-gray-500">
                                @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif         
                                @endforeach
                            </td>

                            <td class="border-4 border-gray-500">
                                {{ date('d-m-Y', strtotime
                                ($car->productionDate->created_at)) }}
                            </td>
                        </tr>
                    @empty
                        <p class="text-red">
                            No Car Models Found!
                        </p>
                    @endforelse
                </table>
                <div class="text-left">
                    <p>
                        Product types:
                        @forelse ($car->products as $product)
                            {{ $product->name }}
                        @empty
                            <p>
                                No car product description
                            </p>
                        @endforelse
                    </p>
                </div>
        </div>
     </div>
 </div>
 
@endsection