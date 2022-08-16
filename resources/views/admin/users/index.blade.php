@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>User
                        
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Address</th>
                                <th>Role id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->role_id }}</td>
                                    <td>

                                        <a href="{{ url('admin/users/'.$item->id.'/edit') }}" class="btn btn-success"> Edit </a>
                                        <a href="{{ url('admin/users/'.$item->id.'/delete') }}" onclick="return conform('Are you sure, you want to delete this data?')" class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>  
                            @empty
                                <tr>
                                    <td colspan="7">No User Available</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
