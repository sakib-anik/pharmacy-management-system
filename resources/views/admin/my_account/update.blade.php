@extends('admin.layouts.app')
@section('content')
    @include('_message')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Update</h5>
                        <form action="{{ url('admin/my_account') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Name<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="name" type="text" value="{{ $myAccount->name }}" class="form-control" required></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Email<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="email" value="{{ $myAccount->email }}" type="email" class="form-control" required>
                            <span class="text-danger">{{ $errors->first('email') }}</span></div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Profile Image<span class="text-danger"> </span></label><div class="col-sm-9"><input name="profile_image" value="" type="file" class="form-control" id="formFile" required>
                                @if (!empty($myAccount->profile_image))
                                    <img src="{{ $myAccount->getProfileImage() }}" style="width: 100px; heigth: 100px" alt="">
                                @endif
                            </div></div>
                            <div class="row mb-3"><label for="" class="col-sm-3 col-form-label">Password<span class="text-danger"> *</span></label><div class="col-sm-9"><input name="password" value="" type="password" class="form-control">(leave blank if you are not changing the password)</div></div>
    <div class="row mb-3"><label for="" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="submit" class="btn btn-primary" value="Update"></div></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
