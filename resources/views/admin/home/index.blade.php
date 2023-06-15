@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome!</h4>
                    <p>Hi, {{ Auth::user()->name }}. Welcome back to the admin panel.</p>
                    <hr>
                    <p class="mb-0">You are logged in as an admin.</p>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
@endsection