
 @extends('layouts.app')
@section('content')
 {{-- Login Page Starts --}}

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    @include('_message')
                    <h5 class="card-title text-center pb-0 fs-4">Reset Your Password</h5>
                    <p class="text-center small">Enter Password & Confirm Password</p>
                  </div>

                  <form action="{{ url('reset/'.$token) }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="yourUsername" required>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        <div class="invalid-feedback">Please enter your password.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="confirm_password" class="form-control" id="yourPassword" required>
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                      <div class="invalid-feedback">Please re-enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Reset</button>
                    </div>
                  </form>

                </div>
              </div>

              {{-- Login Page Ends --}}



@endsection
