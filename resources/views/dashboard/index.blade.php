@extends('layouts.dashboard')

@section('content')
    <div class="w-full bg-white py-4 text-center">
        <div class="grid grid-cols-3 gap-3 mb-2" >
            <div class="w-2/6 pl-28">
                <p class="text-sm text-gray-500 font-light">Nome</p>
            </div>
            <div class="w-3/6 pl-28">
                <p class="text-sm text-gray-500 font-light">Preço</p>
            </div>
            <div class="w-4/6 pl-28">
                <p class="text-sm text-gray-500 font-light">Ação</p>
            </div>
        </div>
        <?php
            $produtos = [
                '1',
                '1',
                '1',
                '1',
                '1',
                '1',
                '1',
                '1',
            ];
            $count = 0;
        ?>

        @foreach ($produtos as $produto)
            <div class="grid grid-cols-3 gap-3">
                <div class="flex justify-center">
                    <img class="w-12 h-12 mr-5 rounded-full" src="https://image.freepik.com/free-vector/vector-cartoon-illustration-traditional-set-fast-food-meal_1441-331.jpg" alt="fooood" class="self-end">
                    <div class="flex flex-col items-start">
                        <p class="text-sm text-gray-500 font-bold">Preçodasdasdsad</p>
                        <p class="text-sm text-gray-500">Situação</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <p class="text-sm text-gray-500 font-bold">Preçodasdasdsad</p>
                </div>
                <div class="flex justify-center">
                    <button class="text-gray-500 bg-gray-100 w-8 h-8 rounded-full mr-2" class="btn"><i class="fa fa-edit"></i></button>
                    <button class="text-gray-500 bg-gray-100 w-8 h-8 rounded-full" class="btn"><i class="fa fa-close"></i></button>
                </div>
            </div>
            <?php
                $count = $count + 1;
            ?>
            @if($count < count($produtos))
                <div class="bg-gray-100 w-5/6 text-center my-5" style="height: 0.5px;">

                </div>
            @endif
            
        @endforeach
    </div>
@endsection
