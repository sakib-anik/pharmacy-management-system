@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h5>Add Customer</h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <form action="{{ url('admin/customers/add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="name" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Contact Number<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="contact_number" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Address</label><div class="col-sm-9"><textarea name="address" id="" class="form-control"></textarea></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Doctor Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="doctor_name" type="text" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Doctor Address</label><div class="col-sm-9"><textarea name="doctor_address" id="" class="form-control"></textarea></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Submit"></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
