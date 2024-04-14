@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h5>Edit Purchases</h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Purchases</h5>
                        @include('admin.purchases._form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
