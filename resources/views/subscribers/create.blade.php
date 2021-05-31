@extends('layouts.app')

@section('content')
<div class="card">
    {{-- <div class="card-header">{{ __('Lists') }}</div> --}}
    <div class="card-header">Create New Subscriber</div>
    <div class="card-body">
        <form action="{{ route('subscribers.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <strong>CP Number:</strong>
                        <input type="text" name="cp_number" class="form-control">
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
        @endsection