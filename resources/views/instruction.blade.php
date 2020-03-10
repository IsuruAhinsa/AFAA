@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 25px;">

        <div class="row">

            <div class="col-md-8">

                <div class="text-center">

                    <h2>{{$instruction->category->name}}</h2>
                    <p>{{$instruction->description}}</p>

                </div>
                <h5>Instructions</h5>
                <p>{!! $instruction->instruction !!}</p>

            </div>

            <div class="col-md-4">

                <img src="{{ Voyager::image($instruction->image) }}" class="img-responsive" alt="{{$instruction->image}}" width="50%">

            </div>

        </div>

    </div>

@endsection
