@extends('layouts.app')

@section('content')
    <div class="container">
        <form id="myForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
