@extends('layouts.app')

@section('content')
<div class="card">
    {{-- <div class="card-header">{{ __('Lists') }}</div> --}}
    <div class="card-header">Subscriber's Information</div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" value="{{ $subscriber->name }}" name="address" class="form-control" disabled>
                </div>
                
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" value="{{ $subscriber->address }}" name="address" class="form-control" disabled>
                </div>
                
                <div class="form-group">
                    <strong>CP Number:</strong>
                    <input type="text" value="{{ $subscriber->cp_number }}" name="cp_number" class="form-control" disabled>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
                    <a href="{{ route('subscribers.index') }}" class="btn btn-success">Back</a>    
                    <a class="btn btn-info float-right" href="{{ route('subscribers.edit', $subscriber->id) }}">Edit</a>   
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                </form>   
            </div>
        </div>
    </div>
</div>
        @endsection