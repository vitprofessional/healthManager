@extends('admin.include')
@section('adminTitle')
User List
@endsection
@section('adminContent')
<div class="row project-wrapper">
    <div class="col-12 col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>All User Listed Here</h3>
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
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Card Number</th>
                        <th>Action</th>
                    </thead>
                    <thead>
                        @if(!empty($userList) && count($userList)>0)
                            @php
                                $x = 1;
                            @endphp
                            @foreach($userList as $user)
                                <tr>
                                    <td class="align-middle text-center">{{ $x }}</td>
                                    <td class="align-middle text-center">{{ $user->fullName }}</td>
                                    <td class="align-middle text-center">{{ $user->email  }}</td>
                                    <td class="align-middle text-center">{{ $user->cardNo  }}</td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('editUser',['id'=>$user->id]) }}" class="btn btn-success btn-sm my-1">
                                            <i class="fa-solid fa-pencil-square"></i>
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
            </div>
        </div>
    </div>
</div><!-- end row -->

@endsection