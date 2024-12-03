@extends('home.layouts.app')

<div class="container">
    @section('content')
    <div class="row">
@foreach($services as $item)
        <div data-aos="flip-right" class="col-md-3 py-3">
            <div class="card shadow">
                <div class="text-center">
                    <i class="{{$item->icon}} fa-3x text-warning py-5"></i>
                    <p><b>{{$item->title}}</b></p>
                    <p>{{$item->desc}}</p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        @endsection
</div>
