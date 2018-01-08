@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Thread</div>

                <div class="panel-body">
                    <form class="" action="{{ url('/') . '/threads' }}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input class="form-control" name="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea class="form-control" name="body" name="body" rows="5"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
