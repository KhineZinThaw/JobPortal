@extends('admin.layout.master')
@section('content')
<div class="card-body">

    <div class="card">
        <div class="card-header">
            <a href="{{ url('/type/create')}}"><button class="btn btn-success float-right">+</button></a>
        </div>
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>
                    <form action="{{ url('/type/'.$type->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('/type/'.$type->id.'/edit') }}">
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