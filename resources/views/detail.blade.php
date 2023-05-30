@extends('master')

@section('title', 'detail')

@section('css')
    <style>
        /* * {
            border: red solid;
        } */
    </style>
@endsection

@section('body')
    <div class="w-full flex flex-col items-center gap-5">
        @include('header')
        <div class="w-4/5 flex flex-col">
            <div class="font-bold">ABOUT BOOK</div>
            <div class="text-6xl">{{ $book->title }}</div>
            <div>{{ $book->description }}</div>
            <div>By: {{ $book->author }} | {{ $book->created }}</div>
            {{-- <div>{{ $book->ReadingTime->read_time}}</div>
            <div>{{ $book->ReadingTime->durations}}</div> --}}
            <div class="h-96 bg-cover bg-no-repeat bg-center" style="background: url('{{ $book->photo }}')"></div>
            <div>{{ $book->body }}</div>
            <button>sharebtn</button>
            <div class="h-96">vid</div>
        </div>
    </div>
@endsection
