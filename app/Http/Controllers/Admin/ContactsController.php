<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
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
       
        $contact = new Contact();

       try {
        //code...
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->country = $request->country;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->postcode = $request->postcode;
        $contact->contact_status = $request->contact_status;
        $contact->user_id = $request->user_id;
        $contact->comunication_medium = $request->comunication_medium;
        $contact->created_at = Carbon::now();
        $contact->updated_at = Carbon::now();
        $contact->save();

        return redirect()->route('admin.contacts.show', $contact)->with(['message' => 'Contacto guardado']);
       } catch (\Throwable $th) {
        //throw $th;
        return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no guardado']);
       }
    }


    public function show(Contact $contact){


        return view('admin.contact.show', compact('contact'));
    }

    public function edit(Contact $contact){

        return view('contacts.edit', compact('contact'));

    }

    public function update(Contact $contact, Request $request){

        try {
            //code...
            $contact->update($request->all());
            return redirect()->route('admin.contact.show', $contact);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no actualizado']);
        }

    }


    public function delete(Contact $contact){
        $contact->delete();


        return view('admin.contact.index')->with(['message' => 'Contacto eliminado']);
    }


}
