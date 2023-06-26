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
                            <h4 class="card-title mb-4"> Services Menu</h4>
                            <p>
                                <a href="{{ route('admin.services-menu.create') }}" class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-plus me-1"></i> Add Service Menu
                                </a>
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">Name</th>
                                        <th class="align-middle">Time</th>
                                        <th class="align-middle">Price</th>
                                        <th class="align-middle">Vehicle Type</th>
                                        <th class="align-middle">Wash Package</th>
                                        <th class="align-middle">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($servicesMenus && count($servicesMenus) > 0)
                                    @foreach($servicesMenus as $key => $servicesMenu)
                                    <tr>
                                        <td>{{ $servicesMenu->name }}</td>
                                        <td>{{ $servicesMenu->time }} minutes</td>
                                        <td>${{ $servicesMenu->price }}</td>
                                        <td>{{ $servicesMenu->vehicleType->name }}</td>
                                        <td>{{ $servicesMenu->washPackage->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.services-menu.edit', $servicesMenu->id) }}" class="btn btn-primary btn-sm waves-effect waves-light">
                                                <i class="mdi mdi-pencil me-1"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.services-menu.destroy', $servicesMenu->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light" onclick="return confirm('Are you sure you want to delete this Service Menu?');">
                                                    <i class="mdi mdi-trash-can me-1"></i> Delete
                                                </button>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $servicesMenus->links() }}
        </div>
    </div>

</div>
@endsection