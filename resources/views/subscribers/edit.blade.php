@extends('layouts.app')

@section('content')
<div class="card">
    {{-- <div class="card-header">{{ __('Lists') }}</div> --}}
    <div class="card-header">Edit Subscriber</div>
    <div class="card-body">
        <form action="{{ route('subscribers.update', $subscriber->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $subscriber->name }}" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" value="{{ $subscriber->address }}" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <strong>CP Number:</strong>
                        <input type="text" name="cp_number" value="{{ $subscriber->cp_number }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <a href="{{ route('subscribers.index') }}" class="btn btn-success">Back</a>    
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
        @endsection