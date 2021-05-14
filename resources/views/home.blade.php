@extends('layouts.app')

@push('js')
    <script type="module" src="{{ asset('js/home.js') }}"></script>

@endpush

@push('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/input-search.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-search">
        <input id="search-input" type="text" placeholder="Search...">
        <div class="search"></div>
    </div>
    <div class="body">

        <div class="container">
            <div class="card gray-card">
                <div class="face face1">
                    <div class="content">
                        <img src="{{asset('img/test1.png')}}">
                        <h3>Gifinder</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Gifinder provides you with the process of searching for the GIFs you want in a very easy way.</p>
                    </div>
                </div>
            </div>
            <div class="card gray-card">
                <div class="face face1">
                    <div class="content">
                        <img src="{{ asset('img/tool-search.png') }}">
                        <h3>Tool</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>These Tool help to control the search process so that the region, color, or time can be chosen.</p>
                    </div>
                </div>
            </div>
            <div class="card gray-card">
                <div class="face face1">
                    <div class="content">
                        <img src="{{ asset('img/fast-timer.gif') }}">
                        <h3>Results</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>In record time, you will get the best results with Google's search algorithms, which are known for their high speed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



