@extends('admin.include')
@section('adminTitle')
Verified Student
@endsection
@section('adminContent')
<div class="row project-wrapper">
    <div class="col-12 col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Verified Student List</h3>
            </div>
            <div class="card-body">
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
                <table class="table table-bordered">
                    <thead>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Shift</th>
                        <th>Total Participat</th>
                        <th>Date Verify</th>
                        <th>Verified By</th>
                        <th>Action</th>
                    </thead>
                    <thead>
                        @if(!empty($verifiedList) && count($verifiedList)>0)
                            @php
                                $x = 1;
                            @endphp
                            @foreach($verifiedList as $verify)
                                <tr>
                                    <td class="align-middle text-center">{{ $x }}</td>
                                    <td class="align-middle text-center">{{ $verify->studentName }}</td>
                                    <td class="align-middle text-center">{{ $verify->department  }}</td>
                                    <td class="align-middle text-center">{{ $verify->shift  }}</td>
                                    <td class="align-middle text-center">{{ $verify->totalAttend  }}</td>
                                    <td class="align-middle text-center">{{ $verify->paymentBy }}</td>
                                    <td class="align-middle text-center">{{ $verify->paymentId  }}</td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('rejectRegister',['id'=>$verify->id]) }}" onclick="alert('Are you sure to reject/cancel the register? It can not be undone')" class="btn btn-danger btn-sm my-1">
                                            <i class="fa-sharp fa-regular fa-circle-xmark"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm my-1">
                                            <i class="fa-sharp fa-light fa-eye"></i>
                                        </a> 
                                    </td>
                                </tr>
                            @php
                                $x++;
                            @endphp
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="text-center py-2">Sorry! No data found</td>
                            </tr>
                        @endif
                    </thead>
                </table>
                <a href="{{ route('pendingList') }}" class="btn btn-warning fw-bold"><i class="fa-sharp fa-regular fa-calendar-clock"></i> Pending List</a>
                <a href="{{ route('rejectedList') }}" class="btn btn-danger fw-bold"><i class="fa-regular fa-shuffle"></i> Rejected List</a>
            </div>
        </div>
    </div>
</div><!-- end row -->

@endsection