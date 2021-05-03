@extends('layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="float-left">
            <h2>Add new Client</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('index') }}">Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('store') }}" method="POST">
    @csrf
    First Name:
    <input type="text" name="first_name" class="form-control" placeholder="First Name">
    Last Name:
    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>    

@endsection