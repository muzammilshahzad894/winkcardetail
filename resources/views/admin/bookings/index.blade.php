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
                            <h4 class="card-title mb-4"> Bookings</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">Vehicle Type</th>
                                        <th class="align-middle">Wash Package</th>
                                        <th class="align-middle">Duration</th>
                                        <th class="align-middle">Total Price</th>
                                        <th class="align-middle">First Name</th>
                                        <th class="align-middle">Second Name</th>
                                        <th class="align-middle">Email</th>
                                        <th class="align-middle">Phone</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bookings && count($bookings) > 0)
                                    @foreach($bookings as $key => $booking)
                                    <tr>
                                        <td>{{ $booking->vehicleType->name }}</td>
                                        <td>{{ $booking->washPackage->name }}</td>
                                        <?php 
                                            $duration = explode(':', $booking->duration);
                                            $hours = $duration[0];
                                            $minutes = $duration[1];
                                        ?>
                                        <td>{{ $hours }} hours : {{ $minutes }} minutes</td>
                                        <td>${{ number_format($booking->total_price, 2) }}</td>
                                        <td>{{ $booking->first_name }}</td>
                                        <td>{{ $booking->second_name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->phone_number }}</td>
                                        <td>
                                            <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</button>
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
            {{ $bookings->links() }}
        </div>
    </div>

</div>
@endsection