@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add a Moment</div>
                    <div class="panel-body">
                        <form>
                            <label for="title">Title</label>
                            <br />
                            <input type="text" name="title" id="title">
                            <br />

                            <label for="body">Body</label>
                            <br />
                            <textarea type="text" cols="70" rows="10" name="body" id="body"></textarea>
                            <br />

                            <label for="public">Public</label>
                            <input type="radio" name="privacy" value="true" id="public">
                            <label for="private">Private</label>
                            <input type="radio" name="privacy" value="false" id="private">
                            <br />

                            <input type="submit" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection