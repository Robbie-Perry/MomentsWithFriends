@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session('status'))
                    {{ session('status') }}
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ $username }}'s Moments</h2>
                    </div>
                    <div class="panel-body">
                        @foreach($moments as $moment)
                            <div class="panel panel-default moment-panel">
                                <div class="panel-heading">
                                    <h4>{{ $moment->title }}</h4>
                                </div>
                                <div class="panel-body">
                                    <p>{{ $moment->body }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection