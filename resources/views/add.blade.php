@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="pl-2">Add Your Contact</h2>
                </div>
            </div>
            <div class="col-md-5">
                <form action="/addcontact" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Contact Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Primary Number</label>
                        <input type="text" class="form-control" name="number1" placeholder="Primary Number">
                    </div>
                    <div class="form-group">
                        <label for="name">Secondary Number</label>
                        <input type="text" class="form-control" name="number2" placeholder="Secondary Number">
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
                    <div class="form-group">                        
                        <input type="file" class="custom-form-input"  name="image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
