@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('status'))
                    <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('status') }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Add a Moment</div>
                    <div class="panel-body">
                        <form method="post" action="{{ route('store') }}">
                            {{ csrf_field() }}
                            <label for="title">Title</label>
                            <br />
                            <input type="text" name="title" id="title" value="{{ session('status')? session('oldTitle') : old('title') }}" autofocus>
                            <br />
                            @if ($errors->has('title'))
                                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif

                            <label for="body">Joke</label>
                            <br />
                            <textarea type="text" cols="70" rows="10" name="body" id="body">{{ session('status')? session('oldBody') : old('body') }}</textarea>
                            <br />
                            @if ($errors->has('body'))
                                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif

                            <label for="title">Tag a Friend (Optional)</label>
                            <br />
                            <input type="text" name="tag" id="tag" placeholder="Friend's Username" value="{{ old('tag') }}">
                            <br />
                            @if ($errors->has('tag'))
                                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('tag') }}</strong>
                                </span>
                            @endif

                            <label for="public">Public</label>
                            <input type="radio" name="private" value="false" id="public" checked>
                            <label for="private">Private</label>
                            <input type="radio" name="private" value="true" id="private">
                            <br />

                            <input type="submit" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection