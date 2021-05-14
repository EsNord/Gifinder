@extends('layouts.app')

@push('js')

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <script>

        var imgArray;
        imgArray = {!! json_encode($imgArray) !!}

    </script>

    <script src="{{ asset('js/view-results.js') }}"></script>

@endpush

@push('css')

    <!-- MDB -->
    <link href="{{ asset('css/input-search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view-results.css') }}" rel="stylesheet">

@endpush
@section('content')

    <div class="container-search">
        <input class="tool-search" id="search-input" type="text" placeholder="Search...">
        <div class="search"></div>
    </div>
    <div class="card-images">
        <div class="card gray-card" style="width: 90%;margin-bottom: 15px">
            <div class="row">

                <div class="col-4">
                    <select id="color-img" class="custom-select tool-search">
                        <option value="" selected>All Colors</option>
                        <option value="transparent">Transparent</option>
                        <option value="red">Red</option>
                        <option value="orange">Orange</option>
                        <option value="yellow">Yellow</option>
                        <option value="green">Green</option>
                        <option value="tratealnsparent">Teal</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                        <option value="white">White</option>
                        <option value="gray">Gray</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>

                </div>
                <div class="col-4">
                    <select id="size-img" class="custom-select tool-search">
                        <option value="" selected>All Size</option>
                        <option value="large">Large</option>
                        <option value="medium">Icon</option>
                        <option value="icon">Medium</option>
                    </select>

                </div>
                <div class="col-4">
                    <select id="time-img" class="custom-select tool-search" >
                        <option value="" selected>Any Time</option>
                        <option value="last_year">Last year</option>
                        <option value="last_month">Last month</option>
                        <option value="last_week">Last week</option>
                        <option value="last_day">Last day</option>
                        <option value="last_hour">Last hour</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="card-images">
        <div id="content" class="card gray-card" style="width: 90%">
            @if($imgArray != [])
                <div class="row">
                    <div class="col-3 colImgs" id="col0">

                    </div>
                    <div class="col-3 colImgs" id="col1">


                    </div>
                    <div class="col-3 colImgs" id="col2">

                    </div>
                    <div class="col-3 colImgs" id="col3">

                    </div>
                </div>
            @else
                    <img src="img/logo-search.gif">
            @endif

        </div>

    </div>
@endsection