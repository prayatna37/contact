@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="pl-2">Update Contact Details for {{$contact->name}}</h2>
                </div>
            </div>
            <div class="col-md-5">
                <form action="/update/contact/{{$contact->id}}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$contact->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Primary Number</label>
                        <input type="text" class="form-control" name="number1" value="{{$contact->number1}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Secondary Number</label>
                        <input type="text" class="form-control" name="number2" placeholder="Enter Secondary Number" value="{{$contact->number2}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Select Tag</label>
                        <select name="tag" id="tag" class="form-control" title="Select Contact Tag">
                            <option value="family">Family</option>
                            <option value="friends">Friends</option>
                            <option value="organization">Organization</option>
                            <option value="work">Work</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <label for="">Image</label>
                    <div class="form-group">                                                                          
                        <input type="file" class="custom-form-input"  name="image" value="{{$contact->image}}">
                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection