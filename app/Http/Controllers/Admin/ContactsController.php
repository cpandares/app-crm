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
use App\Models\ContactCampaing;
use App\Models\ContactStatus;
use App\Models\Note;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{

    public function index()
    {

        $user_id = auth()->user()->id;

        $new_clients = Contact::where('user_id', $user_id)->where('contact_status', 1)->orderByDesc('id')->get();
        $clientes_negoci = Contact::where('user_id', $user_id)->where('contact_status', 2)->orderByDesc('id')->get();
        $presupuestados = Contact::where('user_id', $user_id)->where('contact_status', 3)->orderByDesc('id')->get();
        $clientes = Contact::where('user_id', $user_id)->where('contact_status', 4)->orderByDesc('id')->get();
        $noInteresteds = Contact::where('user_id', $user_id)->where('contact_status', 5)->orderByDesc('id')->get();
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $status = ContactStatus::pluck('status_name', 'id');

       /*  $contactsCapaings = DB::table('campaing')
                     ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country')
                    ->leftJoin('contact_campaings', 'contact_campaings.camaping_id','=','campaing.id')
                    ->leftJoin('contacts','contacts.id', '=', 'contact_campaings.contact_id')
                    ->get();
        dd($contactsCapaings); */
        $controlador = new ContactsController();
        return view('contacts.index', 
                    [

                    'new_clients' =>$new_clients, 
                    'clientes_negoci' =>$clientes_negoci, 
                    'presupuestados'=>$presupuestados, 
                    'clientes'=>$clientes, 
                    'controlador' =>$controlador,
                    'paises' => $this->getPaises(),
                    'comunicacion_medias' => $comunicacion_medias,
                    'status' => $status,
                ]);

    }

    public function getCampaingsContacts($id){
        $contact = Contact::findOrFail($id);
        $contactsCapaings = DB::table('campaing')
        /*  ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country') */
        ->leftJoin('contact_campaings', 'contact_campaings.camaping_id','=','campaing.id')
        ->leftJoin('contacts','contacts.id', '=', 'contact_campaings.contact_id')
        ->where('contacts.id', $contact->id)
        ->first();
        
        return $contactsCapaings;

    }

    public function lista()
    {

        $user_id = auth()->user()->id;
        $controlador = new ContactsController();
        $contacts = DB::table('contacts')->where('user_id', $user_id)
            ->select('contacts.id', 'contacts.name', 'contacts.lastname', 'contacts.email', 'contacts.created_at', 'campaing.campaing_name',)
            ->leftJoin('campaing', 'campaing.contact_id', '=', 'contacts.id')
            ->orderByDesc('contacts.id')
            /* ->select('contacts.*','campaing.*') */
            ->paginate(20);
        /* dd($contacts); */
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $campaings = Campaing::where('created_user', $user_id)->get();
        $status = ContactStatus::pluck('status_name', 'id');

        return view('contacts.lista', [
            'contacts' => $contacts,
            'comunicacion_medias' => $comunicacion_medias,
            'campaings' => $campaings,
            'status' => $status,
            'paises' => $this->getPaises(),
            'controlador' =>$controlador
        ]);
    }

    

    public function create()
    {
        $user_id = auth()->user()->id;
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $campaings = Campaing::where('created_user', $user_id)->get();
        $status = ContactStatus::pluck('status_name', 'id');
        return view(
            'contacts.create',
            [
                'comunicacion_medias' => $comunicacion_medias,
                'campaings' => $campaings,
                'status' => $status,
                'paises' => $this->getPaises()
            ]
        );
    }

    public function getPaises()
    {


        $paises = [
            "Afganist??n" => "Afganist??n",
            "Albania" => "Albania",
            "Alemania" => "Alemania",
            "Andorra" => "Andorra",
            "Angola" => "Angola",
            "Antigua y Barbuda" => "Antigua y Barbuda",
            "Arabia Saudita" => "Arabia Saudita",
            "Argelia" => "Argelia",
            "Argentina" => "Argentina",
            "Armenia" => "Armenia",
            "Australia" => "Australia",
            "Austria" => "Austria",
            "Azerbaiy??n" => "Azerbaiy??n",
            "Bahamas" => "Bahamas",
            "Banglad??s" => "Banglad??s",
            "Barbados" => "Barbados",
            "Bar??in" => "Bar??in",
            "B??lgica" => "B??lgica",
            "Belice" => "Belice",
            "Ben??n" => "Ben??n",
            "Bielorrusia" => "Bielorrusia",
            "Birmania" => "Birmania",
            "Bolivia" => "Bolivia",
            "Bosnia y Herzegovina" => "Bosnia y Herzegovina",
            "Botsuana" => "Botsuana",
            "Brasil" => "Brasil",
            "Brun??i" => "Brun??i",
            "Bulgaria" => "Bulgaria",
            "Burkina Faso" => "Burkina Faso",
            "Burundi" => "Burundi",
            "But??n" => "But??n",
            "Cabo Verde" => "Cabo Verde",
            "Camboya" => "Camboya",
            "Camer??n" => "Camer??n",
            "Canad??" => "Canad??",
            "Catar" => "Catar",
            "Chad" => "Chad",
            "Chile" => "Chile",
            "China" => "China",
            "Chipre" => "Chipre",
            "Ciudad del Vaticano" => "Ciudad del Vaticano",
            "Colombia" => "Colombia",
            "Comoras" => "Comoras",
            "Corea del Norte" => "Corea del Norte",
            "Corea del Sur" => "Corea del Sur",
            "Costa de Marfil" => "Costa de Marfil",
            "Costa Rica" => "Costa Rica",
            "Croacia" => "Croacia",
            "Cuba" => "Cuba",
            "Dinamarca" => "Dinamarca",
            "Dominica" => "Dominica",
            "Ecuador" => "Ecuador",
            "Egipto" => "Egipto",
            "El Salvador" => "El Salvador",
            "Emiratos ??rabes Unidos" => "Emiratos ??rabes Unidos",
            "Eritrea" => "Eritrea",
            "Eslovaquia" => "Eslovaquia",
            "Eslovenia" => "Eslovenia",
            "Espa??a" => "Espa??a",
            "Estados Unidos" => "Estados Unidos",
            "Estonia" => "Estonia",
            "Etiop??a" => "Etiop??a",
            "Filipinas" => "Filipinas",
            "Finlandia" => "Finlandia",
            "Fiyi" => "Fiyi",
            "Francia" => "Francia",
            "Gab??n" => "Gab??n",
            "Gambia" => "Gambia",
            "Georgia" => "Georgia",
            "Ghana" => "Ghana",
            "Granada" => "Granada",
            "Grecia" => "Grecia",
            "Guatemala" => "Guatemala",
            "Guyana" => "Guyana",
            "Guinea" => "Guinea",
            "Guinea ecuatorial" => "Guinea ecuatorial",
            "Guinea-Bis??u" => "Guinea-Bis??u",
            "Hait??" => "Hait??",
            "Honduras" => "Honduras",
            "Hungr??a" => "Hungr??a",
            "India" => "India",
            "Indonesia" => "Indonesia",
            "Irak" => "Irak",
            "Ir??n" => "Ir??n",
            "Irlanda" => "Irlanda",
            "Islandia" => "Islandia",
            "Islas Marshall" => "Islas Marshall",
            "Islas Salom??n" => "Islas Salom??n",
            "Israel" => "Israel",
            "Italia" => "Italia",
            "Jamaica" => "Jamaica",
            "Jap??n" => "Jap??n",
            "Jordania" => "Jordania",
            "Kazajist??n" => "Kazajist??n",
            "Kenia" => "Kenia",
            "Kirguist??n" => "Kirguist??n",
            "Kiribati" => "Kiribati",
            "Kuwait" => "Kuwait",
            "Laos" => "Laos",
            "Lesoto" => "Lesoto",
            "Letonia" => "Letonia",
            "L??bano" => "L??bano",
            "Liberia" => "Liberia",
            "Libia" => "Libia",
            "Liechtenstein" => "Liechtenstein",
            "Lituania" => "Lituania",
            "Luxemburgo" => "Luxemburgo",
            "Madagascar" => "Madagascar",
            "Malasia" => "Malasia",
            "Malaui" => "Malaui",
            "Maldivas" => "Maldivas",
            "Mal??" => "Mal??",
            "Malta" => "Malta",
            "Marruecos" => "Marruecos",
            "Mauricio" => "Mauricio",
            "Mauritania" => "Mauritania",
            "M??xico" => "M??xico",
            "Micronesia" => "Micronesia",
            "Moldavia" => "Moldavia",
            "M??naco" => "M??naco",
            "Mongolia" => "Mongolia",
            "Montenegro" => "Montenegro",
            "Mozambique" => "Mozambique",
            "Namibia" => "Namibia",
            "Nauru" => "Nauru",
            "Nepal" => "Nepal",
            "Nicaragua" => "Nicaragua",
            "N??ger" => "N??ger",
            "Nigeria" => "Nigeria",
            "Noruega" => "Noruega",
            "Nueva Zelanda" => "Nueva Zelanda",
            "Om??n" => "Om??n",
            "Pa??ses Bajos" => "Pa??ses Bajos",
            "Pakist??n" => "Pakist??n",

            "Palestina" => "Palestina",
            "Panam??" => "Panam??",
            "Pap??a Nueva Guinea" => "Pap??a Nueva Guinea",
            "Paraguay" => "Paraguay",
            "Per??" => "Per??",
            "Polonia" => "Polonia",
            "Portugal" => "Portugal",
            "Reino Unido" => "Reino Unido",
            "Rep??blica Centroafricana" => "Rep??blica Centroafricana",
            "Rep??blica Checa" => "Rep??blica Checa",
            "Rep??blica de Macedonia" => "Rep??blica de Macedonia",
            "Rep??blica del Congo" => "Rep??blica del Congo",
            "Rep??blica Democr??tica del Congo" => "Rep??blica Democr??tica del Congo",
            "Rep??blica Dominicana" => "Rep??blica Dominicana",
            "Rep??blica Sudafricana" => "Rep??blica Sudafricana",
            "Ruanda" => "Ruanda",
            "Ruman??a" => "Ruman??a",
            "Rusia" => "Rusia",
            "Samoa" => "Samoa",
            "San Crist??bal y Nieves" => "San Crist??bal y Nieves",
            "San Marino" => "San Marino",
            "San Vicente y las Granadinas" => "San Vicente y las Granadinas",
            "Santa Luc??a" => "Santa Luc??a",
            "Santo Tom?? y Pr??ncipe" => "Santo Tom?? y Pr??ncipe",
            "Senegal" => "Senegal",
            "Serbia" => "Serbia",
            "Seychelles" => "Seychelles",
            "Sierra Leona" => "Sierra Leona",
            "Singapur" => "Singapur",
            "Siria" => "Siria",
            "Somalia" => "Somalia",
            "Sri Lanka" => "Sri Lanka",
            "Suazilandia" => "Suazilandia",
            "Sud??n" => "Sud??n",
            "Sud??n del Sur" => "Sud??n del Sur",
            "Suecia" => "Suecia",
            "Suiza" => "Suiza",
            "Surinam" => "Surinam",
            "Tailandia" => "Tailandia",
            "Tanzania" => "Tanzania",
            "Tayikist??n" => "Tayikist??n",
            "Timor Oriental" => "Timor Oriental",

            "Trinidad y Tobago" => "Trinidad y Tobago",
            "T??nez" => "T??nez",
            "Turkmenist??n" => "Turkmenist??n",
            "Turqu??a" => "Turqu??a",
            "Tuvalu" => "Tuvalu",
            "Ucrania" => "Ucrania",
            "Uganda" => "Uganda",
            "Uruguay" => "Uruguay",
            "Uzbekist??n" => "Uzbekist??n",
            "Vanuatu" => "Vanuatu",
            "Venezuela" => "Venezuela",
            "Vietnam" => "Vietnam",
            "Yemen" => "Yemen",
            "Yibuti" => "Yibuti",
            "Zambia" => "Zambia",
            "Zimbabue" => "Zimbabu",
        ];

        return $paises;
    }



    public function store(Request $request)
    {

        $user_id = auth()->user()->id;
        /* dd($request); */
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'required',
            'country' => 'required',
            'medio_comunicacion' => 'required',
            'statu' => 'required',
        ]);

        if (Contact::where('email', $request->email)->exists()) {
            Alert::error('Email ya esta asocaciado a otro contacto');
            return redirect()->back();
        }

        $contact = new Contact();
       /*  $contact_campaing = new ContactCampaing(); */
        /*  dd("12"); */
        try {
            //code...
            $contact->name = $request->name;
            $contact->lastname = $request->lastname;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->country = $request->country;
            $contact->city = isset($request->city) ?  $request->city : 'No Asignado';
            $contact->state = $request->state;
            $contact->postcode = $request->postcode;
            $contact->contact_status = $request->statu;
            $contact->user_id = $user_id;
            $contact->comunication_medium = $request->medio_comunicacion;
            $contact->created_at = Carbon::now();
            $contact->updated_at = Carbon::now();
            $result = $contact->save();


           /*  $contact = Contact::where('user_id', $user_id)->orderByDesc('id')->first();
            $contact_campaing->contact_id = $contact->contact_id;
            $contact_campaing->user_id = $user_id;
            $contact_campaing->created_at = Carbon::now();
            $contact_campaing->updated_at = Carbon::now(); */

            /*  return redirect()->route('admin.contact.show', compact('contact'))->with(['message' => 'Contacto guardado']); */
            Alert::success('Contacto Guardado');
            return redirect()->back();
        } catch (\PDOException $th) {
            return $th->getMessage();
            /*  return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no guardado']); */
        }
    }





    public function show(Contact $contact)
    {

        $user_id = auth()->user()->id;

        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $budgets = Budget::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $comunicaciones = Comunicacion::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $notes = Note::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $campaings = Campaing::where('created_user', $user_id)->pluck('campaing_name','id');

        $contactsCapaings = DB::table('campaing')
                           /*  ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country') */
                           ->leftJoin('contact_campaings', 'contact_campaings.camaping_id','=','campaing.id' )
                           ->where('contact_campaings.contact_id', $contact->id)
                           ->get();

        /* dd($contactsCapaings); */
        return view('contacts.show', [
            'contact'=>$contact,
            'budgets'=>$budgets,
            'comunicacion_medias' => $comunicacion_medias,
            'comunicaciones'=>$comunicaciones,
            'notes' => $notes,
            'campaings'=>$campaings,
            'contactsCapaings' =>$contactsCapaings
        ]);
    }

    public function edit(Contact $contact)
    {

        return view('contacts.edit', compact('contact'));
    }

    public function update(Contact $contact, Request $request)
    {

        try {
            //code...
            $contact->update($request->all());
            return redirect()->route('admin.contact.show', $contact);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no actualizado']);
        }
    }


    public function delete(Contact $contact)
    {
        $contact->delete();


        return view('admin.contact.index')->with(['message' => 'Contacto eliminado']);
    }


    public function updateStatus(Request $request)
    {

        $contact = Contact::findOrFail((int) $request->id);
        /*   dd($request->reference); */
        if (!$contact) {
            return false;
        }
        $status = ContactStatus::find($request->reference);
        /*  dd($status); */
        try {
            $contact->contact_status = $status->id;
            $contact->updated_at = Carbon::now();
            $result = $contact->save();
            //code...
            if ($result) {

                return true;
            } else {
                return false;
            }
        } catch (\PDOException $th) {
            //throw $th;

            return false;
        }
    }
}
