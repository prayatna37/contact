@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-12 site-landing">
                    <h2>Saved Contacts</h2>                    
                </div>
            </div>           
            <div class="row">                   
                @foreach ($contacts as $contact)
                    @if (Auth::user()->id==$contact->user_id)
                        <div class="card mr-5 mt-4 rounded contact-card">
                            <img src="{{URL::to('uploads/contact/'.$contact->image)}}" class="m-1 rounded" height="200px" width="250px;%">
                            <div class="card-body mt-2">
                                <h4 class="card-title">{{$contact->name}}</h4>
                                <p class="card-text">Primary Number:{{$contact->number1}}</p>
                                <p class="card-text">Secondary Number: {{$contact->number2}}</p>
                                <i class="card-text">Tagged As: {{$contact->tag}}</i>
                            </div>
                            <div class="card-footer">
                                <form action="{{route('contact.destroy',[$contact->id])}}" method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="/update/contact/{{$contact->id}}" class="btn btn-warning">Update</a>
                                    <button onclick="deleteConfirm()" id="delete-confirm" class="btn btn-danger ml-3" type="submit">Delete</button>
                                    {{ csrf_field() }}
                                </form>                                 
                            </div>

                        </div>              
                        
                    @endif
                    
                @endforeach
            </div>
            
        </div>
    </div>
@endsection