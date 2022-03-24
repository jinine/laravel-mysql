@extends('layouts.main')
@section('title', 'Students List')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Students List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}">
                Create New Student
            </a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>School</th>
    </tr>
    @foreach($students as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->FirstName }} {{ $item->LastName }}</td>
        <td>{{ $item->School }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('students.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('students.edit',$item->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('students.destroy',$item->id) }}">Del</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $students->links() }}
@endsection