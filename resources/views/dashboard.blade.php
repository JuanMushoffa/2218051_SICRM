@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <!-- Card content goes here -->
                    </div>
                </div>
                <!-- End Sales Card -->
                <!-- Other cards go here -->
            </div>
        </div>
        <!-- End Left side columns -->
        <!-- Right side columns -->
        <div class="col-lg-4">
            <!-- Recent Activity -->
            <div class="card">
                <!-- Recent activity content goes here -->
            </div>
            <!-- End Recent Activity -->
        </div>
        <!-- End Right side columns -->
    </div>
</section>
@endsection
