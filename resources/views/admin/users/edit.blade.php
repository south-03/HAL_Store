@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h5 class="alert alert-success mb-2">{{ session( 'message') }}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Edit User
                        <a href="{{url('admin/users')}}" class="btn btn-danger btn-sm text-white float-end">
                            Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('admin/users/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $users->name }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $users->email }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Phone number</label>
                            <input type="number" name="phone_number" value="{{ $users->phone_number }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" value="{{ $users->address }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Role</label>
                            <input type="number" name="role_id" value="{{ $users->role }}" min="-1" max="1" class="form-control">
                        </div>

                        <div class="py-2 float-end">
                            <button type="submit" class="btn btn-success btn-block float-end">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
