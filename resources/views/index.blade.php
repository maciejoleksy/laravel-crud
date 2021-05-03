@extends('layout')
@section('content')
<div class="row">
    <div class="col-12 p-0">
        <div class="float-left">
            <h2>Client list</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('create') }}">Add new client</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success w-100">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        @forelse ($clients as $client)
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th width="155px">Action</th>
        </tr>
        <tr>
            <td>{{ $client->first_name }}</td>
            <td>{{ $client->last_name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('edit', $client->uuid) }}">Edit</a>
                <form class="float-left mr-1" action="{{ route('delete', $client->uuid) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <th>No users</th>
        </tr>
        @endforelse
    </table>

    {!! $clients->links('pagination::bootstrap-4') !!}

@endsection
