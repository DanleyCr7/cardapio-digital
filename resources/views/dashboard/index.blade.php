@extends('layouts.dashboard')

@section('content')
    <div class="w-full bg-red-100 text-center py-4">
        <div class="grid grid-cols-3 gap-3">
            <p class="text-sm text-gray-500 font-light">Nome</p>
            <p class="text-sm text-gray-500 font-light">Preço</p>
            <p class="text-sm text-gray-500 font-light">Ação</p>
        </div>
    
        <div class="grid grid-cols-3 gap-3">
            <div class="flex justify-center">
                <img class="w-12 h-12 mr-5 rounded-full" src="https://image.freepik.com/free-vector/vector-cartoon-illustration-traditional-set-fast-food-meal_1441-331.jpg" alt="fooood" class="self-end">
                <div class="">
                    <p class="text-sm text-gray-500 font-bold">Preçodasdasdsad</p>
                    <p class="text-sm text-gray-500">Situação</p>
                </div>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-bold">Preçodasdasdsad</p>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-bold">Preçodasdasdsad</p>
            </div>
        </div>
    </div>
@endsection
