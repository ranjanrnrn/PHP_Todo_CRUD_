@extends('layouts.main')
@push('title')
    <title>ToDo</title>
@endpush
@section('main-section')


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                      
                    <th>Task</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todolist as $data)
                <tr>
                    <td>{{$data->task}}</td>
                    <td>{{$data->priority}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                    <a href="{{url('/todolist/edit')}}/{{$data->id}}"><button class="btn btn-primary btn-sm">EDIT</button></a>
                    <a href="{{url('/todolist/delete')}}/{{$data->id}}"><button class="btn btn-danger btn-sm">DELETE</button></a> 
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endsection