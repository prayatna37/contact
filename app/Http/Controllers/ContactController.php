<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Image;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $contacts = User::find($id)->contacts;
        return view('show')->with('contacts', $contacts);
    }

    public function create()
    {

        $contact = new Contact();
        $contact->name = request('name');
        $contact->number1 = request('number1');
        $contact->number2 = request('number2');
        $contact->tag = request('tag');
        if (request()->hasfile('image')) {
            $file=request('image');
            $extension=$file->getClientOriginalExtension();            
            $filename=time().'.'.$extension;
            Image::make($file)->resize(400,350)->save(public_path('uploads/contact/'.$filename));            
            $contact->image=$filename;
        }
       
        request()->user()->contacts()->save($contact);
        return back()->with('Success', 'Contact Successfully Saved');
    }

    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete($contact);
        return back();
    }

    public function updateForm($id){
        $contact=Contact::find($id);
        return view('updateForm')->with('contact',$contact);
    }

    public function update($id){
        $contact=Contact::find($id);
        $contact->name=request('name');
        $contact->number1 = request('number1');
        $contact->number2 = request('number2');
        $contact->tag = request('tag');

        if (request()->hasfile('image')) {
            $file=request('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/contact/', $filename);
            $contact->image=$filename;
        }  

        $contact->save();
        return back();

    }  
}
