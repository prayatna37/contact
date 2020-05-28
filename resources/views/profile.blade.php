@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <h2>Your Profile</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>Registered Username: {{Auth::user()->name}}</h5>
                    <h5>Total Contacts Saved: {{$profiles}}</h5>                  


                </div>
            </div>
        </div>
    </div>
@endsection