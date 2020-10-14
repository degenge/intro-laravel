@extends('layouts.app')

@section('content')

    @include('partials.slider2')

    @foreach($reviews as $review)

        <p >{{ $review->name_last }}</p >
        <p >{{ $review->name_first }}</p >
        <div class="stars" style="--rating: {{ $review->rate }};" aria-label="Rating is {{ $review->rate }} out of 5." ></div >
        <p >{{ $review->comment }}</p >

    @endforeach

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            <div class="p-6" >
                test1
            </div >

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l" >
                test2
            </div >

            <div class="p-6 border-t border-gray-200 dark:border-gray-700" >
                test3
            </div >

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l" >
                test4
            </div >
        </div >
    </div >

@endsection
