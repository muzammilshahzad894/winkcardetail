@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 20px;">Update Service Menu</h4>
                        <form action="{{ route('admin.services-menu.update', $servicesMenu->id) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Name:<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ old('name', $servicesMenu->name) }}" name="name" id="example-text-input">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Price:<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="0.01" value="{{ old('price', $servicesMenu->price) }}" name="price" id="example-text-input">
                                    @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Time in minutes:<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" step="1" value="{{ old('time', $servicesMenu->time) }}" name="time" id="example-text-input">
                                    @error('time')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Vehicle Type:<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="vehicle_type_id">
                                        <option value="">Select Vehicle Type</option>
                                        @foreach($vehicleTypes as $vehicleType)
                                        <option value="{{ $vehicleType->id }}" {{ old('vehicle_type_id', $servicesMenu->vehicle_type_id) == $vehicleType->id ? 'selected' : '' }}>{{ $vehicleType->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('vehicle_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Wash Package:<span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="wash_package_id">
                                        <option value="">Select Wash Package</option>
                                        @foreach($washPackages as $washPackage)
                                        <option value="{{ $washPackage->id }}" {{ old('wash_package_id', $servicesMenu->wash_package_id) == $washPackage->id ? 'selected' : '' }}>{{ $washPackage->name }} (${{ $washPackage->price }})
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('wash_package_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Description:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description" id="description">{{ $servicesMenu->description }}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Update</button>
                                    <a href="{{ route('admin.services-menu.index') }}" class="btn btn-secondary waves-effect waves-light me-1">
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