@extends('layouts.main')
@push('title')
    <title>Edit ToDo</title>
@endpush
@section('main-section')
    <div class="container">
    <h1 class="mt-5 mb-5 text-primary" style="padding-left:400px">EDIT TODO</h1>
    <form action="{{url($url)}}" style="padding-left:300px" method="POST">
        @csrf
        <div class="col">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Task:</strong>
                    <input type="text" name="task" class="form-control" value="{{$todolist->task}}" placeholder="Task Name">
                    @error('task')
                            {{ $message}} 
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Priority</strong>
                    <input type="text" name="priority" class="form-control" value="{{$todolist->priority}}" placeholder="Priority">
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
                    <input type="text" name="status" class="form-control" value="{{$todolist->status}}" placeholder="Status">
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