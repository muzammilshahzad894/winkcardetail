@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    @include('partials.messages')
    <div class="container-fluid" id="pos-orders-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-4"> Vehicle Types</h4>
                            <p>
                                <a href="{{ route('admin.vehicle-types.create') }}" class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-plus me-1"></i> Add Vehicle Type
                                </a>
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">Name</th>
                                        <th class="align-middle">Image</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($vehicleTypes && count($vehicleTypes) > 0)
                                    @foreach($vehicleTypes as $key => $vehicleType)
                                    <tr>
                                        <td class="align-middle">{{ $vehicleType->name }}</td>
                                        <td class="align-middle">
                                            <div class="image-option {{ $vehicleType->image }}"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.vehicle-types.edit', $vehicleType->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.vehicle-types.destroy', $vehicleType->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this vehicle type?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="14">
                                            <p class="text-center">No record found.</p>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $vehicleTypes->links() }}
        </div>
    </div>

</div>
@endsection