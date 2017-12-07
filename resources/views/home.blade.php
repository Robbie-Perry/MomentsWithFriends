@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>My Moments</h2>
                </div>

                <div class="panel-body">
                    <a href="{{route('add')}}"><button class="btn-info">Add Moment</button></a>
                    @foreach($moments as $moment)
                        <div class="panel panel-default moment-panel">
                            <div class="panel-heading">
                                <h4>{{ $moment->title }}</h4>
                            </div>
                            <div class="panel-body">
                                <p>{{ $moment->body }}</p>
                                <hr>
                                <p class="privacy">{{ $moment->private? "Only visible to you" : "Visible to public" }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection