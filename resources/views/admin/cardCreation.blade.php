@extends('admin.include')
@section('adminTitle')
New Card
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Create New Card!</h5>
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
                    <form method="POST" action="{{ route('saveCard') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="cardNo" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cardNo" placeholder="Enter card number" name="cardNo">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Card Category(*)</label>
                            <select id="category" class="form-select" required name="category">
                                <option value="" selected>Choose...</option>
                                <option>Silver</option>
                                <option>Gold</option>
                                <option>Premium</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Add Card</button>
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