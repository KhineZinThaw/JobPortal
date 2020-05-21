@extends('admin.layout.master')
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($job->id))
                        <strong>Job </strong>
                        <small>Create Form</small>
                        <form action="{{ url('/job') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Job </strong>
                        <small>Update Form</small>
                        <form action="{{ url('/job/'.$job->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Job Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Job name" value="{{ old('name')  ??  $job->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input class="form-control @error('position') is-invalid @enderror" name="position" id="position" type="text" placeholder="Enter Job Position" value="{{ old('position')  ??  $job->position ?? '' }}" required>
                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $position}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input class="form-control @error('salary') is-invalid @enderror" name="salary" id="salary" type="text" placeholder="Enter salary" value="{{ old('salary')  ??  $job->salary ?? '' }}" required>
                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $salary }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="col-form-label" for="requirement">Requirement</label><br>
                                    <textarea class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" required>{{ old('requirement')  ??  $job->requirement ?? '' }}</textarea>
                                    @error('requirement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $requirement }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="col-form-label" for="description">Description</label><br>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description')  ??  $job->description ?? '' }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $description }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category_id">Category_id</label>
                                    <input class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" type="text" placeholder="Enter category_id" value="{{ old('category_id')  ??  $job->category_id ?? '' }}" required>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $category_id }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_id">Company_id</label>
                                    <input class="form-control @error('company_id') is-invalid @enderror" name="company_id" id="company_id" type="text" placeholder="Enter company_id" value="{{ old('company_id')  ??  $job->company_id ?? '' }}" required>
                                    @error('company_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $company_id }}</strong>
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