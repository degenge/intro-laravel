@extends('layouts.app')

@section('system')
    @if(session()->has('message'))
        {{ session()->get('message') }}
    @endif
@endsection

@section('content')

    @include('partials.slider2')

    {{--    @foreach($reviews as $review)--}}

    {{--        <p >{{ $review->name_last }}</p >--}}
    {{--        <p >{{ $review->name_first }}</p >--}}
    {{--        <div class="stars" style="--rating: {{ $review->rate }};" aria-label="Rating is {{ $review->rate }} out of 5." ></div >--}}
    {{--        <p >{{ $review->comment }}</p >--}}

    {{--    @endforeach--}}

    @include('partials.form')

@endsection
