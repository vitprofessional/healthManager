@extends('admin.include')
@section('adminTitle')
General User
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-10 col-12 mx-auto">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Create User Profile!</h5>
                </div>
                
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
                <div class="p-2 mt-4">
                    <form method="POST" class="form row" action="{{ route('confirmGeneralUser') }}">
                        @csrf
                        <div class="mb-3 col-12 col-md-6">
                            <label for="fullName" class="form-label">Name<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter admin fullname" name="fullName" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="userId" class="form-label">User ID/Email<span class="text-danger">(*)</span></label>
                            <input type="email" class="form-control" id="userId" placeholder="Enter admin userId" required name="userId">
                        </div>
                        
                        <div class="mb-3 col-12 col-md-6">
                            <label for="cardNo" class="form-label">Card No<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" id="cardNo" placeholder="Enter activation card number" required name="cardNo" maxlength="11">
                        </div>
                        
                        <div class="mb-3 col-12 col-md-6">
                            <label for="pinNumber" class="form-label">Pin Number<span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" id="pinNumber" placeholder="Enter card pin number" required name="pinNumber" maxlength="6">
                        </div>
                        
                        <div class="mb-3 col-12 col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" placeholder="Enter date of birth" name="dob">
                        </div>
                        
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter user full address" name="address">
                        </div>
                        
                        <div class="mb-3 col-12 col-md-6">
                            <label for="blGroup" class="form-label">Blood Group(*)</label>
                            <select id="blGroup" class="form-select" name="blGroup">
                                <option value="" selected>Choose...</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Create Profile</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection