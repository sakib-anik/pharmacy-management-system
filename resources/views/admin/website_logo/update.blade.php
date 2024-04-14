@extends('admin.layouts.app')
@section('content')
    @include('_message')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Website Logo Update</h5>
                        <form action="{{ url('admin/website_logo_update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="website_name" type="text" value="{{ $websiteLogo->website_name }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Website Logo<span class="text-danger"> </span></label><div class="col-sm-9"><input name="logo" value="" type="file" class="form-control" id="formFile" required>
                                @if (!empty($websiteLogo->logo))
                                    <img src="{{ $websiteLogo->getLogo() }}" style="width: 250px; height: 250px" alt="">
                                @endif
                            </div></div>
    <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Update"></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
