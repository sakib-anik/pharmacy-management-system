
@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                <h5 class="card-title">Customers</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <a href="{{ url('admin/customers') }}">
                    <div class="ps-3">
                    <h6>{{ $totalCustomers }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Medicines</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-shop"></i>
                    </div>
                    <a href="{{ url('admin/medicines') }}">
                    <div class="ps-3">
                    <h6>{{ $totalMedicines }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Medicines Stock</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-archive"></i>
                    </div>
                    <a href="{{ url('admin/medicines_stock') }}">
                    <div class="ps-3">
                    <h6>{{ $totalMedicinesStock }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Suppliers</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                    </div>
                    <a href="{{ url('admin/suppliers') }}">
                    <div class="ps-3">
                    <h6>{{ $totalSuppliers }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Invoices</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal-text"></i>
                    </div>
                    <a href="{{ url('admin/invoices') }}">
                    <div class="ps-3">
                    <h6>{{ $totalInvoices }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Purchases</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                    </div>
                    <a href="{{ url('admin/purchases') }}">
                    <div class="ps-3">
                    <h6>{{ $totalPurchases }}</h6>
                    </div>
                    </a>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->

        </div>
        </div><!-- End Left side columns -->



    </div>
    </section>

@endsection





