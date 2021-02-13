@extends('layout')
@section('content')
<div class="row">
    <div class="col-12 p-0">
        <div class="float-left">
            <h2>List all Clients</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('create') }}">Add new Client</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success w-100">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th width="50px">id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th width="155px">Action</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $client->firstname }}</td>
            <td>{{ $client->lastname }}</td>
            <td>
                <form action="{{ route('destroy', $client->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('edit', $client->id) }}">Edit</a>

                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $clients->links('pagination::bootstrap-4') !!}

@endsection