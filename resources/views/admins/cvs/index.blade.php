@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/cv') }}" class="title-color">CV</a>
@endsection
@section('content')
<div class="card-body">

    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/cv/create')}}"><button class="btn btn-success float-right">+</button></a>
        </div>
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Father name</th>
                    <th>Mother Name</th>
                    <th>Requirement</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cvs as $cv)
                <tr>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->fatherName }}</td>
                    <td>{{ $cv->motherName }}</td>
                    <td>{{ $cv->requirement}}</td>
                    <td>{{ $cv->description}}</td>
                    
                    <td>
                    <form action="{{ url('admin/cv/'.$cv->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('admin/cv/'.$cv->id.'/edit') }}">
                        <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-danger btn-sm mb-1" onclick="myFunction()"><i class="fa fa-trash"></i></button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection