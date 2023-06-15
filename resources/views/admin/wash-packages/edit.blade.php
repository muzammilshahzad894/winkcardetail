@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 20px;">Update Wash Package</h4>
                        <form action="{{ route('admin.wash-packages.update', $washPackage->id) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Name:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $washPackage->name }}" name="name" id="example-text-input">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Price:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="0.01" value="{{ $washPackage->price }}" name="price" id="example-text-input">
                                    @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Time in minutes:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="1" value="{{ $washPackage->time }}" name="time" id="example-text-input">
                                    @error('time')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Vehicle Type:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="vehicle_type_id">
                                        <option value="">Select Vehicle Type</option>
                                        @foreach($vehicleTypes as $vehicleType)
                                        <option value="{{ $vehicleType->id }}" {{ $vehicleType->id == $washPackage->vehicle_type_id ? 'selected' : '' }}>{{ $vehicleType->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('vehicle_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Description:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description" id="description">{!! $washPackage->description !!}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Update</button>
                                    <a href="{{ route('admin.wash-packages.index') }}" class="btn btn-secondary waves-effect waves-light me-1">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("custom-script")
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection