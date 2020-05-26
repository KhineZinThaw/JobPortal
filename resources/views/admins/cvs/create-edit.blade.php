@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/cv') }}" class="title-color">CV</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($cv->id))
                        <strong>CV </strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/cv') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>CV</strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/cv/'.$cv->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Your Name" value="{{ old('name')  ??  $cv->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="fatherName">Father Name</label>
                                    <input class="form-control @error('fatherName') is-invalid @enderror" name="fatherName" id="fatherName" type="text" placeholder="Enter your father's name" value="{{ old('fatherName')  ??  $cv->fatherName ?? '' }}" required>
                                    @error('fathername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $fatherName }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="motherName">Mother Name</label>
                                    <input class="form-control @error('motherName') is-invalid @enderror" name="motherName" id="motherName" type="text" placeholder="Enter your mother's name" value="{{ old('motherName')  ??  $cv->motherName ?? '' }}" required>
                                    @error('mothername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $motherName }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="requirement">Requirement</label><br>
                                    <textarea class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" required>{{ old('requirement')  ??  $cv->requirement ?? '' }}</textarea>
                                    @error('requirement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $requirement }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
                           
                           
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="description">Description</label><br>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description')  ??  $cv->description ?? '' }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $description }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button class="btn btn-sm btn-danger" type="reset">
                                <i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection