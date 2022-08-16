@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
                <div class="card-body">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> {{ Auth::user()->name }}</span><span class="text-black-50"> {{ Auth::user()->email }}</span><span> </span></div>
                                </div>
                                <div class="col-md-5 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile</h4>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels mb-2">Name: {{ Auth::user()->name }}</label></div>
                                            <div class="col-md-12"><label class="labels mb-2">Mobile Number: {{ Auth::user()->phone_number }}</label></div>
                                            <div class="col-md-12"><label class="labels mb-2">Address: {{ Auth::user()->phone_number }}</label></div>
                                            <div class="col-md-12"><label class="labels">Email: {{ Auth::user()->email }}</label></div>
                                        </div>
                                        <div class="mt-5 text-center"><a class="btn btn-primary profile-button" type="button" href="{{ url('home/'.Auth::user()->id.'/edit') }}">Edit Profile</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
