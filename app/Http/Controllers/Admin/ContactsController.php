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
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{

    public function index()
    {

        $user_id = auth()->user()->id;
        $contacts = DB::table('contacts')->where('user_id', $user_id)->get();
        $new_clients = Contact::where('user_id', $user_id)->where('contact_status', 1)->orderByDesc('id')->get();
        $clientes_negoci = Contact::where('user_id', $user_id)->where('contact_status', 2)->orderByDesc('id')->get();
        $presupuestados = Contact::where('user_id', $user_id)->where('contact_status', 3)->orderByDesc('id')->get();
        $clientes = Contact::where('user_id', $user_id)->where('contact_status', 4)->orderByDesc('id')->get();
        $noInteresteds = Contact::where('user_id', $user_id)->where('contact_status', 5)->orderByDesc('id')->get();
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $type_enterprise = DB::table('enterpreses_types')->pluck('name_enterprise', 'id');
        $status = ContactStatus::pluck('status_name', 'id');
        $title = 'Listado de contactos';
        /*  $contactsCapaings = DB::table('campaing')
                     ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country')
                    ->leftJoin('contact_campaings', 'contact_campaings.camaping_id','=','campaing.id')
                    ->leftJoin('contacts','contacts.id', '=', 'contact_campaings.contact_id')
                    ->get();
        dd($contactsCapaings); */

        $campaings = Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id');

        $controlador = new ContactsController();
        return view(
            'contacts.index',
            [

                'new_clients' => $new_clients,
                'clientes_negoci' => $clientes_negoci,
                'presupuestados' => $presupuestados,
                'clientes' => $clientes,
                'controlador' => $controlador,
                'paises' => $this->getPaises(),
                'comunicacion_medias' => $comunicacion_medias,
                'status' => $status,
                'data' => $contacts,
                'title' => $title,
                'campaings_list' => $campaings,
                'noInteresteds' => $noInteresteds,
                'type_enterprise' => $type_enterprise
            ]
        );
    }

    public function getCampaingsContacts($id)
    {
        $contact = Contact::findOrFail($id);
        $contactsCapaings = DB::table('campaing')
            /*  ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country') */
            ->leftJoin('contact_campaings', 'contact_campaings.camaping_id', '=', 'campaing.id')
            ->leftJoin('contacts', 'contacts.id', '=', 'contact_campaings.contact_id')
            ->where('contacts.id', $contact->id)
            ->orderByDesc('campaing.id')
            ->first();

        return $contactsCapaings;
    }

    public function lista(Request $request)
    {
        $input = $request->all();
        $condicion = [];
        $per_page = isset($request->per_page) ? $request->per_page : 20;
        $title = 'Listado de contactos';
        $user_id = auth()->user()->id;
        $controlador = new ContactsController();
        $contacts = DB::table('contacts')->where('user_id', $user_id)
            ->select('contacts.id', 'contacts.name', 'contacts.contact_status', 'contacts.lastname', 'contacts.email', 'contacts.created_at', 'campaing.campaing_name', 'contacts.phone', 'contacts.postcode', 'contacts.country', 'contacts.city', 'contacts.comunication_medium', 'contacts.state', 'contacts.address', 'contacts.website', 'contacts.type_contact', 'contacts.name_enterprise')
            ->leftJoin('campaing', 'campaing.contact_id', '=', 'contacts.id')
            ->orderByDesc('contacts.id');
        /* ->select('contacts.*','campaing.*') */

        /* dd($contacts); */
        $campaings_list = Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id');
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $campaings = Campaing::where('created_user', $user_id)->get();
        $status = ContactStatus::pluck('status_name', 'id');
        $list_campaings =  Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id');
        $type_enterprise = DB::table('enterpreses_types')->pluck('name_enterprise', 'id');

        if (isset($input['name'])) {
            $condicion[] = ['contacs.name', 'like', '%' . $input['name'] . '%'];
        }
        if (isset($input['email'])) {
            $condicion[] = ['contacs.email', 'like', '%' . $input['email'] . '%'];
        }
        if (isset($input['lastname'])) {
            $condicion[] = ['contacs.lastname', 'like', '%' . $input['lastname'] . '%'];
        }
        if (isset($input['country'])) {
            $condicion['contacs.country'] = $input['country'];
        }
        if (isset($input['tipo_contacto'])) {

            $condicion['contacts.represent'] = (int) $input['tipo_contacto'];
        }
        if (isset($input['tipo_contacto'])) {
            $condicion['contacts.type_contact'] = $input['tipo_contacto'];
        }
        $contacts = $contacts->where($condicion)->paginate($per_page);
      /*   dd($contacts); */
        return view('contacts.lista', [
            'contacts' => $contacts,
            'comunicacion_medias' => $comunicacion_medias,
            'campaings' => $campaings,
            'status' => $status,
            'paises' => $this->getPaises(),
            'controlador' => $controlador,
            'list_campaings' => $list_campaings,
            'title' => $title,
            'campaings_list' => $campaings_list,
            'type_enterprise' => $type_enterprise,
            'per_page' => $per_page
        ]);
    }



    public function createContact($id = null)
    {
        $title = 'Crear Contacto';
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
                'paises' => $this->getPaises(),
                'title' => $title,
                'type_enterprise' => DB::table('enterpreses_types')->pluck('name_enterprise', 'id'),
                'campaings_list' => Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id'),
                'id_campaing' => $id ? $id : null,
            ]
        );
    }

    public function getPaises()
    {


        $paises = [
            "Alemania" => "Alemania",
            "España" => "España",
            "Francia" => "Francia",
            "Italia" => "Italia",
            "Portugal" => "Portugal",
            "__________" => "_____________",
            "Afganistán" => "Afganistán",
            "Albania" => "Albania",
            "Andorra" => "Andorra",
            "Angola" => "Angola",
            "Antigua y Barbuda" => "Antigua y Barbuda",
            "Arabia Saudita" => "Arabia Saudita",
            "Argelia" => "Argelia",
            "Argentina" => "Argentina",
            "Armenia" => "Armenia",
            "Australia" => "Australia",
            "Austria" => "Austria",
            "Azerbaiyán" => "Azerbaiyán",
            "Bahamas" => "Bahamas",
            "Bangladés" => "Bangladés",
            "Barbados" => "Barbados",
            "Baréin" => "Baréin",
            "Bélgica" => "Bélgica",
            "Belice" => "Belice",
            "Benín" => "Benín",
            "Bielorrusia" => "Bielorrusia",
            "Birmania" => "Birmania",
            "Bolivia" => "Bolivia",
            "Bosnia y Herzegovina" => "Bosnia y Herzegovina",
            "Botsuana" => "Botsuana",
            "Brasil" => "Brasil",
            "Brunéi" => "Brunéi",
            "Bulgaria" => "Bulgaria",
            "Burkina Faso" => "Burkina Faso",
            "Burundi" => "Burundi",
            "Bután" => "Bután",
            "Cabo Verde" => "Cabo Verde",
            "Camboya" => "Camboya",
            "Camerún" => "Camerún",
            "Canadá" => "Canadá",
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
            "Emiratos Árabes Unidos" => "Emiratos Árabes Unidos",
            "Eritrea" => "Eritrea",
            "Eslovaquia" => "Eslovaquia",
            "Eslovenia" => "Eslovenia",

            "Estados Unidos" => "Estados Unidos",
            "Estonia" => "Estonia",
            "Etiopía" => "Etiopía",
            "Filipinas" => "Filipinas",
            "Finlandia" => "Finlandia",
            "Fiyi" => "Fiyi",

            "Gabón" => "Gabón",
            "Gambia" => "Gambia",
            "Georgia" => "Georgia",
            "Ghana" => "Ghana",
            "Granada" => "Granada",
            "Grecia" => "Grecia",
            "Guatemala" => "Guatemala",
            "Guyana" => "Guyana",
            "Guinea" => "Guinea",
            "Guinea ecuatorial" => "Guinea ecuatorial",
            "Guinea-Bisáu" => "Guinea-Bisáu",
            "Haití" => "Haití",
            "Honduras" => "Honduras",
            "Hungría" => "Hungría",
            "India" => "India",
            "Indonesia" => "Indonesia",
            "Irak" => "Irak",
            "Irán" => "Irán",
            "Irlanda" => "Irlanda",
            "Islandia" => "Islandia",
            "Islas Marshall" => "Islas Marshall",
            "Islas Salomón" => "Islas Salomón",
            "Israel" => "Israel",

            "Jamaica" => "Jamaica",
            "Japón" => "Japón",
            "Jordania" => "Jordania",
            "Kazajistán" => "Kazajistán",
            "Kenia" => "Kenia",
            "Kirguistán" => "Kirguistán",
            "Kiribati" => "Kiribati",
            "Kuwait" => "Kuwait",
            "Laos" => "Laos",
            "Lesoto" => "Lesoto",
            "Letonia" => "Letonia",
            "Líbano" => "Líbano",
            "Liberia" => "Liberia",
            "Libia" => "Libia",
            "Liechtenstein" => "Liechtenstein",
            "Lituania" => "Lituania",
            "Luxemburgo" => "Luxemburgo",
            "Madagascar" => "Madagascar",
            "Malasia" => "Malasia",
            "Malaui" => "Malaui",
            "Maldivas" => "Maldivas",
            "Malí" => "Malí",
            "Malta" => "Malta",
            "Marruecos" => "Marruecos",
            "Mauricio" => "Mauricio",
            "Mauritania" => "Mauritania",
            "México" => "México",
            "Micronesia" => "Micronesia",
            "Moldavia" => "Moldavia",
            "Mónaco" => "Mónaco",
            "Mongolia" => "Mongolia",
            "Montenegro" => "Montenegro",
            "Mozambique" => "Mozambique",
            "Namibia" => "Namibia",
            "Nauru" => "Nauru",
            "Nepal" => "Nepal",
            "Nicaragua" => "Nicaragua",
            "Níger" => "Níger",
            "Nigeria" => "Nigeria",
            "Noruega" => "Noruega",
            "Nueva Zelanda" => "Nueva Zelanda",
            "Omán" => "Omán",
            "Países Bajos" => "Países Bajos",
            "Pakistán" => "Pakistán",

            "Palestina" => "Palestina",
            "Panamá" => "Panamá",
            "Papúa Nueva Guinea" => "Papúa Nueva Guinea",
            "Paraguay" => "Paraguay",
            "Perú" => "Perú",
            "Polonia" => "Polonia",

            "Reino Unido" => "Reino Unido",
            "República Centroafricana" => "República Centroafricana",
            "República Checa" => "República Checa",
            "República de Macedonia" => "República de Macedonia",
            "República del Congo" => "República del Congo",
            "República Democrática del Congo" => "República Democrática del Congo",
            "República Dominicana" => "República Dominicana",
            "República Sudafricana" => "República Sudafricana",
            "Ruanda" => "Ruanda",
            "Rumanía" => "Rumanía",
            "Rusia" => "Rusia",
            "Samoa" => "Samoa",
            "San Cristóbal y Nieves" => "San Cristóbal y Nieves",
            "San Marino" => "San Marino",
            "San Vicente y las Granadinas" => "San Vicente y las Granadinas",
            "Santa Lucía" => "Santa Lucía",
            "Santo Tomé y Príncipe" => "Santo Tomé y Príncipe",
            "Senegal" => "Senegal",
            "Serbia" => "Serbia",
            "Seychelles" => "Seychelles",
            "Sierra Leona" => "Sierra Leona",
            "Singapur" => "Singapur",
            "Siria" => "Siria",
            "Somalia" => "Somalia",
            "Sri Lanka" => "Sri Lanka",
            "Suazilandia" => "Suazilandia",
            "Sudán" => "Sudán",
            "Sudán del Sur" => "Sudán del Sur",
            "Suecia" => "Suecia",
            "Suiza" => "Suiza",
            "Surinam" => "Surinam",
            "Tailandia" => "Tailandia",
            "Tanzania" => "Tanzania",
            "Tayikistán" => "Tayikistán",
            "Timor Oriental" => "Timor Oriental",

            "Trinidad y Tobago" => "Trinidad y Tobago",
            "Túnez" => "Túnez",
            "Turkmenistán" => "Turkmenistán",
            "Turquía" => "Turquía",
            "Tuvalu" => "Tuvalu",
            "Ucrania" => "Ucrania",
            "Uganda" => "Uganda",
            "Uruguay" => "Uruguay",
            "Uzbekistán" => "Uzbekistán",
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        if (!$contact) {
            Alert::error('Contacto no econtrado');
            return redirect()->back();
        }
        try {
            //code...
            $contact->delete();
            Alert::success('Contacto eliminado con exito');
            return redirect()->back();
        } catch (\PDOException $th) {
            //throw $th;
            Alert::success('Contacto no eliminado, contacto con soporte');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {

        $user_id = auth()->user()->id;
       /*  dd($request->all()); */
        $request->validate([
            'name' => 'required',

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


            try {
                //code...
                if ($request->representa_empresa == 'on') {
                    $representa = 1;
                } else {
                    $representa = null;
                }
                $contact->name = $request->name;
                $contact->lastname = null;
                $contact->email = $request->email;
                $contact->phone = $request->phone;
                $contact->address = $request->address;
                $contact->country = $request->country;
                $contact->city = isset($request->city) ?  $request->city : 'No Asignado';
                $contact->state = $request->state;
                $contact->postcode = isset($request->postcode) ? $request->postcode : null;

                $contact->website = isset($request->website) ? $request->website : null;
                $contact->type_contact = isset($request->type_contact) ?  $request->type_contact : 1; //Si no viene el tipo contacto por defecto sera persona
                $contact->types_contacts = isset($request->types_contacts) ? $request->types_contacts : null;
                $contact->name_enterprise = isset($request->name_empresa) ? $request->name_empresa : null;
                $contact->type_enterprise = isset($request->type_enterprise) ? $request->type_enterprise : null;
                $contact->name_enterprise = $request->name_comercial ? $request->name_comercial : null;
                $contact->contact_status = 1;
                $contact->user_id = $user_id;
                $contact->represent = 1;
                $contact->codigo_nif = isset($request->codigo_nif) ? $request->codigo_nif : null;
                $contact->comunication_medium = null;
                $contact->created_at = Carbon::now();
                $contact->updated_at = Carbon::now();
                $contact->nombre_comercial = isset($request->name_comercial) ? $request->name_comercial : null;
                $result = $contact->save();
            } catch (\PDOException $th) {
                return $th->getMessage();
                DB::rollBack();
            }



            if (isset($request->campaing_id)) {
                $contact_last = Contact::orderByDesc('id')->first();
                try {
                    $campaing = new ContactCampaing();
                    $campaing->camaping_id = $request->campaing_id;
                    $campaing->contact_id = $contact_last->id;
                    $campaing->user_id = $user_id;
                    $campaing->created_at = Carbon::now();
                    $campaing->updated_at = Carbon::now();
                    $campaing->save();


                  /*   return view('campaings.show', [
                        'campaing' => Campaing::findOrFail($request->campaing_id),
                        'title' => 'Detalle de Campaña'
                    ]); */
                } catch (\PDOException $th) {
                    DB::rollBack();
                    /* return response()->json([
                        'success' => false,
                        'message' => 'Contacto no asignado a la campaña, contacte con soporte',

                    ]); */
                    Alert::error('Contacto no asignado a la campaña, contacte con soporte');
                    return redirect()->back();
                }
            }

            if ($result) {
                DB::commit();

                if (isset($request->campaing_id)) {
                    Alert::success('Contacto guardado con exito');
                    $contacts = DB::table('contacts')
                        ->where('contacts.user_id', $user_id)
                        ->where('contact_campaings.camaping_id', $request->campaing_id)
                        ->join('contact_campaings', 'contact_campaings.contact_id', '=', 'contacts.id')
                        ->whereNotIn('contact_status', [5, 6]);
                    return redirect()->route('admin.campaings.show', [
                        'campaing' => Campaing::findOrFail($request->campaing_id),
                        'title' => 'Detalle de Campaña',
                        'contacts' => $contacts,
                        'paises' => $this->getPaises(),
                        'comunicacion_medias' => ComunicationMedium::pluck('comunication_medio', 'id'),
                        'status' =>  ContactStatus::pluck('status_name', 'id'),

                        'list_campaings' =>  Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id'),
                        'type_enterprise' =>  DB::table('enterpreses_types')->pluck('name_enterprise', 'id'),
                        'per_page' => isset($request->per_page) ? $request->per_page : 20,
                        'list_campaings' => Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id'),

                    ]);
                } else {
                    Alert::success('Contacto guardado con exito');
                    $data = DB::table('contacts')->where('user_id', $user_id)->get();
                    return view('contacts.index', [
                        'data' => $data,
                        'title' => 'Listado de contactos',
                        'paises' => $this->getPaises(),
                        'comunicacion_medias' => ComunicationMedium::pluck('comunication_medio', 'id'),
                        'status' => ContactStatus::pluck('status_name', 'id'),
                        'campaings_list' => Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id'),
                        'type_enterprise' => DB::table('enterpreses_types')->pluck('name_enterprise', 'id'),
                        'new_clients' => Contact::where('user_id', $user_id)->where('contact_status', 1)->orderByDesc('id')->get(),
                        'clientes_negoci' => Contact::where('user_id', $user_id)->where('contact_status', 2)->orderByDesc('id')->get(),
                        'presupuestados' => Contact::where('user_id', $user_id)->where('contact_status', 3)->orderByDesc('id')->get(),
                        'clientes' => Contact::where('user_id', $user_id)->where('contact_status', 4)->orderByDesc('id')->get(),
                        'noInteresteds' => Contact::where('user_id', $user_id)->where('contact_status', 5)->orderByDesc('id')->get(),
                    ]);
                }
            } else {
                DB::rollBack();
                Alert::error('Contacto no guardado, contacte con soporte');
                return redirect()->back();
            }
        } catch (\PDOException $th) {
            //throw $th;
            DB::rollBack();
            /* return response()->json([
                'success' => false,
                'message' => 'Contacto no guardado, contacte con soporte',

            ]); */
            Alert::error('Contacto no guardado, contacte con soporte');
            return redirect()->back();
        }
    }





    public function show(Contact $contact)
    {

        $user_id = auth()->user()->id;

        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $budgets = Budget::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $comunicaciones = Comunicacion::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $notes = Note::where('user_created_for', $contact->id)->orderByDesc('id')->paginate(20);
        $campaings = Campaing::where('created_user', $user_id)->pluck('campaing_name', 'id');
        $status = ContactStatus::pluck('status_name', 'id');
        $contactsCapaings = DB::table('campaing')
            /*  ->select('campaing.campaing_name', 'campaing.id','campaing.init_date','campaing.country') */
            ->leftJoin('contact_campaings', 'contact_campaings.camaping_id', '=', 'campaing.id')
            ->where('contact_campaings.contact_id', $contact->id)
            ->get();
        $title = 'Detalle de Contacto';
        /* dd($contactsCapaings); */
        return view('contacts.show', [
            'contact' => $contact,
            'budgets' => $budgets,
            'comunicacion_medias' => $comunicacion_medias,
            'comunicaciones' => $comunicaciones,
            'notes' => $notes,
            'campaings' => $campaings,
            'contactsCapaings' => $contactsCapaings,
            'title' => $title,
            'paises' => $this->getPaises(),
            'status' => $status
        ]);
    }

    public function edit(Contact $contact)
    {

        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {

        try {
            //code...
            /*  dd($request->all()); */
            /* $contact->update($request->all()); */
            $contact->name = $request->name;
            $contact->lastname = null;
            $contact->country = $request->country;
            $contact->city = $request->city;
            $contact->phone = $request->phone;
            $contact->postcode = $request->postcode;
            $contact->state = $request->state;
            $contact->email = $request->email;
            $contact->nombre_comercial = isset($request->name_comercial) ? $request->name_comercial : null;
            $contact->name_enterprise = isset($request->name_empresa) ? $request->name_empresa : null;
            $contact->codigo_nif = isset($request->codigo_nif) ? $request->codigo_nif : null;

            $contact->website = isset($request->website) ? $request->website : null;
            $contact->type_contact = isset($request->type_contact) ?  $request->type_contact : 1; //Si no viene el tipo contacto por defecto sera persona
            $contact->types_contacts = isset($request->types_contacts) ? $request->types_contacts : null;
            $contact->address = $request->address;
            $status = ContactStatus::where('id', (int) $request->contact_status)->first();
            /*  dd($status); */
            $contact->contact_status = $status->id;
            if (isset($request->campaing)) {
                try {
                    $campaing = new ContactCampaing();
                    $campaing->camaping_id = $request->campaing;
                    $campaing->contact_id = $request->contact;
                    $campaing->user_id = auth()->user()->id;
                    $campaing->created_at = Carbon::now();
                    $campaing->updated_at = Carbon::now();
                    $result = $campaing->save();
                } catch (\PDOException $th) {
                    return $th->getMessage();
                }
            }
            $contact->update();
            Alert::success('Contacto actualizado');
            return redirect()->back();
        } catch (\PDOException $th) {
            /*  return $th->getMessage(); */
            Alert::error('Contacto no actualizado, contacta a soporte');
            return redirect()->back();
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


    public function updatePhoto(Request $request, $id)
    {
        /*  dd($request->id, $request->imagen); */

        $contact = Contact::findOrFail($id);
        /*   dd($request->reference); */
        if (!$contact) {
            return false;
        }

        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagen = $request->file('imagen');


        if ($imagen != null) {

            $filename = time() . '.' . $request->imagen->extension();

            
            $request->imagen->move(public_path('images/contactos/'), $filename);
            
        }

        /*  dd($status); */
        try {
            $contact->image = isset($filename) ? $filename : null;
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


    public function listarClientesApi()
    {

        $title = "Clientes Api";

        return view('api.clientes.index', [
            'title' => $title
        ]);
    }
}
