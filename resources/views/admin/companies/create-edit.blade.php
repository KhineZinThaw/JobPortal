@extends('admin.layout.master')
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($company->id))
                        <strong>Company </strong>
                        <small>Create Form</small>
                        <form action="{{ url('/company') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Company </strong>
                        <small>Update Form</small>
                        <form action="{{ url('/company/'.$company->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter category name" value="{{ old('name')  ??  $category->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-3">  
                                <div class="form-group">
                                    <label class="col-form-label" for="address">Address</label><br>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" required>{{ old('address')  ??  $company->address ?? '' }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $address}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">phone number</label>
                                    <input class="form-control @error('phone number') is-invalid @enderror" name="phone number" id="phone number" type="text" placeholder="Enter phone number" value="{{ old('phone number')  ??  $company->phone number ?? '' }}" required>
                                    @error('phone number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $phone number }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="name">e-mail</label>
                                    <input class="form-control @error('e-mail') is-invalid @enderror" name="e-mail" id="e-mail" type="text" placeholder="Enter e-mail" value="{{ old('e-mail')  ??  $company->e-mail ?? '' }}" required>
                                    @error('e-mail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $e-mail }}</strong>
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