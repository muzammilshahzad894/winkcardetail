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
                        <h4 class="card-title" style="margin-bottom: 20px;">Create Vehicle Type</h4>
                        <form action="{{ route('admin.vehicle-types.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Name:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{ old('name') }}" name="name" id="example-text-input">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Select Image:</label>
                                <div class="col-md-10">
                                    <div id="image-container">
                                        <div class="image-option template-icon-vehicle-small-car"></div>
                                        <div class="image-option template-icon-vehicle-car-mid-size"></div>
                                        <div class="image-option template-icon-vehicle-suv"></div>
                                        <div class="image-option template-icon-vehicle-minivan"></div>
                                        <div class="image-option template-icon-vehicle-pickup"></div>
                                        <div class="image-option template-icon-vehicle-truck-mid-size"></div>
                                    </div>
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="image" id="selected-image-input">
                            <div class="mb-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                    <a href="{{ route('admin.vehicle-types.index') }}" class="btn btn-secondary waves-effect">
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

@section('custom-script')

<script>
    $(document).ready(function() {
        // Handle image selection
        $('#image-container .image-option').click(function() {
            // Remove border from previously selected image
            $('#image-container .image-option').removeClass('selected');

            // Add border to the clicked image
            $(this).addClass('selected');

            // Update the hidden input value with the selected image's class name
            var selectedImageClass = $(this).attr('class').split(' ')[1];
            $('#selected-image-input').val(selectedImageClass);
        });

        // Handle form submission
        $('#image-form').submit(function(e) {
            // Prevent the form from submitting
            e.preventDefault();

            // Get the selected image class name and send it to the controller
            var selectedImageClass = $('#selected-image-input').val();
            console.log(selectedImageClass);
            // Perform further processing or AJAX request to the controller
            // ...
        });
    });
</script>
@endsection