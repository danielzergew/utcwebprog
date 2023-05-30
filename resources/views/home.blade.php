@extends('master')

@section('title', 'home')

@section('css')
    <style>
        * {
            border: red solid;
        }
    </style>
@endsection

@section('body')
    <div class="w-full flex flex-col items-center gap-5">
        @include('header')
        <div class="w-4/5 h-80 flex p-3 gap-3">
            <div class="h-full w-1/3">foto</div>
            <div class="w-2/3 h-full flex flex-col justify-center">
                <div>IT REALLY COUNTS</div>
                <div>title</div>
                <div>desc</div>
            </div>
        </div>
        <div class="w-4/5 h-fit flex p-3 gap-3 flex-col">
            <div>LASTEST BOOK REVIEWS</div>
            <div class="flex gap-3 h-full w-full">
                @foreach ($lastbookreview as $item)
                    <a href='/{{ $item->id }}/detail' class="h-full w-full flex flex-col">
                        <div class="aspect-square">foto</div>
                        <div>{{ $item->title }}</div>
                        <div>{{ $item->description }}</div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="w-4/5 h-fit flex p-3 gap-3 flex-col">
            <div>Book Series Review</div>
            <div class="flex gap-3 overflow-scroll">
                @foreach ($allbook as $item)
                    <div class="h-full w-56 flex flex-col">
                        <div class="w-full aspect-video">foto</div>
                        <div>{{ $item->title }}</div>
                        <a href="/">Read Post</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
