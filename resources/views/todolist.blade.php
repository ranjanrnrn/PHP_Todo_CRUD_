@extends('layouts.main')
@push('title')
    <title>Add Todo</title>
@endpush
@section('main-section')

<div class="container">
    <h1 class="mt-5 mb-5 text-primary" style="padding-left:400px">ADD TODO</h1>
    <form action="{{url('/')}}/todolist"  style="padding-left:300px"  method="POST">
        @csrf
        <div class="col">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Task:</strong>
                    <input type="text" name="task" class="form-control" placeholder="Task Name">
                    <span class="text-danger">
                    @error('task')
                            {{ $message}} 
                    @enderror
                </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Priority</strong>
                    <input type="text" name="priority" class="form-control"  placeholder="Priority">
                    <span class="text-danger">
                    @error('priority')
                            {{ $message}} 
                    @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Status</strong>
                    <input type="text" name="status" class="form-control"  placeholder="Status">
                    <span class="text-danger">
                    @error('status')
                            {{ $message}} 
                    @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection