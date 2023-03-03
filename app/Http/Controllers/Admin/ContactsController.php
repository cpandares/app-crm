<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\Campaing;
use App\Models\Comunicacion;
use App\Models\ComunicationMedium;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Alert;
use App\Models\ContactStatus;
use App\Models\Note;

class ContactsController extends Controller
{
    
    public function index(){

        $user_id = auth()->user()->id;

        $new_clients = Contact::where('user_id',$user_id)->where('contact_status',1)->orderByDesc('id')->get();
        $clientes_negoci = Contact::where('user_id',$user_id)->where('contact_status',2)->orderByDesc('id')->get();
        $presupuestados = Contact::where('user_id',$user_id)->where('contact_status',3)->orderByDesc('id')->get();
        $clientes = Contact::where('user_id',$user_id)->where('contact_status',4)->orderByDesc('id')->get();
        $noInteresteds = Contact::where('user_id',$user_id)->where('contact_status',5)->orderByDesc('id')->get();

        return view('contacts.index', compact('new_clients', 'clientes_negoci','presupuestados', 'clientes', 'noInteresteds'));
    }

    public function create(){
        $user_id = auth()->user()->id;
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $campaings = Campaing::where('created_user', $user_id)->get();
        $status = ContactStatus::pluck('status_name', 'id');
        return view('contacts.create', compact('comunicacion_medias', 'campaings','status'));
    }


    public function store(Request $request){

        $user_id = auth()->user()->id;
       /* dd($request); */
      /*   $request->validate([
            'name'=>'required',
            'lastaname' => 'required', 
            'email'=>'required|unique:contacts',
            'phone' =>'required'
        ]); */

        if(Contact::where('email', $request->email)->exists()){
            Alert::error('Email ya esta asocaciado a otro contacto');
            return redirect()->back();
        }
       
        $contact = new Contact();
       /*  dd("12"); */
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
        $contact->contact_status = $request->statu;
        $contact->user_id = $user_id;
        $contact->comunication_medium = $request->comunication_medium;
        $contact->created_at = Carbon::now();
        $contact->updated_at = Carbon::now();
        $result = $contact->save();
       
        $contact = Contact::where('user_id', $user_id)->orderByDesc('id')->first();
        return redirect()->route('admin.contact.show', compact('contact'))->with(['message' => 'Contacto guardado']);
       } catch (\PDOException $th) {
        return $th->getMessage();
       /*  return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no guardado']); */
       }
    }


    public function show(Contact $contact){

        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $budgets = Budget::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $comunicaciones = Comunicacion::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $notes = Note::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);


        return view('contacts.show', compact('contact', 'budgets', 'comunicacion_medias', 'comunicaciones','notes'));
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


    public function updateStatus(Request $request){

        $contact = Contact::findOrFail($request->id);
        if(!$contact){
            return false;
        }

        try {
            $contact->contact_status = $request->reference;
            $contact->updated_at = Carbon::now();
            $contact->save();
            //code...
            return true;
        } catch (\Throwable $th) {
            //throw $th;

            return false;
        }

    }


}
