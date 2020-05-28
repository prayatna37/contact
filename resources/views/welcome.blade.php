@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="content site-landing">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Save</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 site-info d-flex pt-3">
                    <h5>Application to save all your contact in a single space.
                    Register to save your contact and add and view them Google Sync will also be available soon</h5>
                </div>
            </div>
            @auth
            <div class="row mt-5">
                <div class="col-md-12">
                    <a href="" class="btn btn-primary">Add Contacts</a>
                    <a href="" class="btn btn-warning ml-2">View Contacts</a>
                </div>
            </div>
            
            
            @endauth
        </div>
    </div>
    
@endsection
