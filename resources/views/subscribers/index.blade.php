@extends('layouts.app')

@section('content')
<div class="card-header">Create New Subscriber</div>
<div class="card-body">
    <div class="row">
        <div class="col-lg-10 margin-tb mb-3">
            <div class="pull-right">
                <a href="{{ route('subscribers.create') }}" class="btn btn-success">Create New Subscriber</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>CP number</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($subscribers as $subscriber)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $subscriber->name }}</td>
                <td>{{ $subscriber->address }} </td>
                <td>{{ $subscriber->cp_number }}</td>
                <td>
                    <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('subscribers.show', $subscriber->id) }}">Show</a>    
                        <a class="btn btn-info" href="{{ route('subscribers.edit', $subscriber->id) }}">Edit</a>   
                        
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $subscribers->links() !!}
</div>

@endsection