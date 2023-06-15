@extends('layouts.admin.app')

@section('content')
<style>
    #image-container {
        display: flex;
        gap: 20px;
    }

    .image-option {
        width: 80px;
        height: 60px;
        padding: 0px 10px;
        margin-right: 10px;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .image-option.selected {
        border-color: #000;
    }
</style>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 20px;">Update Booking Details</h4>
                        <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Vehicle Type:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="vehicle_type_id">
                                        <option value="">Select Vehicle Type</option>
                                        @foreach($vehicleTypes as $vehicleType)
                                        <option value="{{ $vehicleType->id }}" {{ $booking->vehicle_type_id == $vehicleType->id ? 'selected' : '' }}>{{ $vehicleType->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('vehicle_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Wash Package:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="wash_package_id">
                                        <option value="">Select Wash Package</option>
                                        @foreach($washPackages as $washPackage)
                                        <option value="{{ $washPackage->id }}" {{ $booking->wash_package_id == $washPackage->id ? 'selected' : '' }}>{{ $washPackage->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('wash_package_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <?php 
                                $duration = explode(':', $booking->duration);
                                $hours = $duration[0];
                                $minutes = $duration[1];
                            ?>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label d-flex align-items-center">Duration:</label>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Hours</label>
                                            <input class="form-control" type="number" value="{{ $hours }}" name="hours" id="example-text-input" step="1" min="0">
                                            @error('hours')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Minutes</label>
                                            <input class="form-control" type="number" value="{{ $minutes }}" name="minutes" id="example-text-input" step="1" min="0">
                                            @error('minutes')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Date:</label>
                                <div class="col-md-10">
                                    <?php $date = date('Y-m-d', strtotime($booking->booking_date)); ?>
                                    <input class="form-control" type="date" value="{{ $date }}" name="booking_date" id="example-text-input">
                                    @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">First Name:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $booking->first_name }}" name="first_name" id="example-text-input">
                                    @error('first_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Second Name:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $booking->second_name }}" name="second_name" id="example-text-input">
                                    @error('second_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Email:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" value="{{ $booking->email }}" name="email" id="example-text-input">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Phone:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $booking->phone_number }}" name="phone_number" id="example-text-input">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Vehicle Make:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $booking->vehicle_make }}" name="vehicle_make" id="example-text-input">
                                    @error('vehicle_make')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Vehicle Model:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ $booking->vehicle_model }}" name="vehicle_model" id="example-text-input">
                                    @error('vehicle_model')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Total Price:</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input class="form-control" type="text" value="{{ $booking->total_price }}" name="total_price" id="example-text-input" readonly>
                                    </div>
                                    @error('total_price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Message:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="message" id="" cols="30" rows="10">{{ $booking->message }}</textarea>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Update</button>
                                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary waves-effect">
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