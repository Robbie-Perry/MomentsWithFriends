@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Moments</div>

                <div class="panel-body">
                    <a href="{{route('add')}}"><button class="btn-info">Add Moment</button></a>
                    @foreach($moments as $moment)
                        <h3>{{ $moment->title }}</h3>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection