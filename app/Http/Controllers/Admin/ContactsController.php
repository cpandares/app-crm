<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactsController extends Controller
{
    
    public function index(){

        $user_id = auth()->user()->id;

        $data = Contact::where('user_id',$user_id)->paginate(20);

        return view('contacts.index', compact('data'));
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'lastaname' => 'required', 
            'email'=>'required|unique:contacts',
            'phone' =>'required'
        ]);
       
         $contact = Contact::create($request->all());

        return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto guardado']);
    }


    public function show(Contact $contact){


        return view('admin.contact.show', compact('contact'));
    }

    public function edit(Contact $contact){

        return view('contacts.edit', compact('contact'));

    }


    public function delete(Contact $contact){
        $contact->delete();


        return view('admin.contact.index')->with(['message' => 'Contacto eliminado']);
    }


}
