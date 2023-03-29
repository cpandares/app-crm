<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campaing;
use App\Http\Controllers\Controller;
use App\Models\ComunicationMedium;
use App\Models\Contact;
use App\Models\ContactCampaing;
use App\Models\ContactStatus;
use Carbon\Carbon;
use Database\Factories\ContactFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class CampaingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $condicion = [];
        $input = $request->all();
        $id = auth()->user()->id;
        $campaings = Campaing::where('created_user', $id)->pluck('campaing_name','campaing_name');
        $data = Campaing::where('created_user', $id);
        $title = 'Listado de Campañas';
        
        
        if (isset($input['city'])) {
            $condicion[] = ['campaing.city', 'like', '%' . $input['city'] . '%'];
        }

        if (isset($input['name'])) {
           
            $condicion['campaing.campaing_name'] = $input['name'];
        }

        if (isset($input['country'])) {

            $condicion['campaing.country'] = $input['country'];
        }
        if (isset($input['statu'])) {

            $condicion['campaing.status'] = $input['statu'];
        }

        $data = $data->where($condicion)->orderByDesc('id')->paginate(20);

        return view('campaings.index', [
            'data'=>$data,
            'paises' => $this->getPaises(),
            'campaings' => $campaings,
            'name' => isset($input['name']) ? $input['name'] : null,
            'city' =>isset($input['city']) ? $input['city'] : null,
            'country' =>isset($input['country']) ? $input['country'] : null,
            'status' =>isset($input['status']) ? $input['status'] : null,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        
        return view('campaings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       /*  dd($request->all()); */
        $user_id = auth()->user()->id;

        $request->validate([
            'name' => 'required'
        ]);
        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);
       
        try {
            $ca = new Campaing();
            $ca->campaing_name = $request->name;
            $ca->status = 1;
            $ca->country = $request->country;
            $ca->city = isset($request->ciudad) ? $request->ciudad : null;
            $ca->init_date = Carbon::parse($request->start_date);
            $ca->end_date = Carbon::parse($request->end_date);
            $ca->created_user = $user_id;
            $ca->save();

           /*  $campaing = Campaing::where('created_user', $user_id)->orderByDesc('id')->first(); */
            /*  dd($campaing); */


            return redirect()->back();
        } catch (\PDOException $th) {
            return $th->getMessage();
            /* return redirect()->back(); */
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //

        $input = $request->all();

        $user_id = auth()->user()->id;
       
        /* if(!$campaing){
            return redirect()->route('admin.contacs.index');
        } */
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        
        $status = ContactStatus::pluck('status_name', 'id');

        $contacts = DB::table('contacts')
                        ->where('contacts.user_id', $user_id)
                        ->where('contact_campaings.camaping_id', $id)
                        ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                        ->whereNotIn('contact_status', [5, 6]);
        /* dd($contacts); */
        $campaing = Campaing::where('id', $id)->first();
        $condicion = [];

        if (isset($input['name'])) {
            $condicion[] = ['contacts.name', 'like', '%' . $input['name'] . '%'];
        }
        if (isset($input['lastname'])) {
            $condicion[] = ['contacts.lastname', 'like', '%' . $input['lastname'] . '%'];
        }
        if (isset($input['email'])) {
            $condicion[] = ['contacts.email', 'like', '%' . $input['email'] . '%'];
        }

        if (isset($input['statu'])) {

            $condicion['contacts.contact_status'] = $input['statu'];
        }

        if (isset($input['country'])) {

            $condicion['contacts.country'] = $input['country'];
        }

        $contacts = $contacts->where($condicion)->paginate(20);

        $title = 'Detalle de Campaña: ' . $campaing->campaing_name;
        return view('campaings.show', [
            'campaing' => $campaing,
            'contacts' => $contacts,
            'paises' => $this->getPaises(),
            'comunicacion_medias' => $comunicacion_medias,
            'status' => $status,
            'title' => $title
        ]);
    }

    public function showPipelineContacts($id, Request $request)
    {
        //
       /* dd($id); */
        $input = $request->all();

        $user_id = auth()->user()->id;
        $controlador = new ContactsController();
        /* if(!$campaing){
            return redirect()->route('admin.contacs.index');
        } */
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $campaings = Campaing::where('created_user', $user_id)->pluck('campaing_name','id');
        $status = ContactStatus::pluck('status_name', 'id');

        $contacts = DB::table('contacts')
                        ->where('contacts.user_id', $user_id)
                        ->where('contact_campaings.camaping_id', $id)
                        ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                        ->whereNotIn('contact_status', [5, 6]);

        $new_clients = DB::table('contacts')
                                ->where('contacts.user_id', $user_id)
                                ->where('contact_campaings.camaping_id', $id)
                                ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                                ->where('contact_status',1)
                                ->orderByDesc('contacts.id')
                                ->get();

        $clientes_negoci = DB::table('contacts')
                                    ->where('contacts.user_id', $user_id)
                                    ->where('contact_campaings.camaping_id', $id)
                                    ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                                    ->where('contact_status',2)
                                    ->orderByDesc('contacts.id')
                                    ->get();

        $presupuestados =DB::table('contacts')
                                    ->where('contacts.user_id', $user_id)
                                    ->where('contact_campaings.camaping_id', $id)
                                    ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                                    ->where('contact_status',3)
                                    ->orderByDesc('contacts.id')
                                    ->get();

        $clientes = DB::table('contacts')
                            ->where('contacts.user_id', $user_id)
                            ->where('contact_campaings.camaping_id', $id)
                            ->join('contact_campaings','contact_campaings.contact_id','=','contacts.id')
                            ->where('contact_status',4)
                            ->orderByDesc('contacts.id') 
                            ->get();
        

        
        $campaing = Campaing::where('id', $id)->first();
      
        /* dd($new_clients, $clientes, $presupuestados, $clientes_negoci); */
        $title = 'Contactos en la campaña: ' . $campaing->campaing_name;
        return view('campaings.pipeline', [
            'campaing' => $campaing,
            'controlador' =>$controlador,
            'paises' => $this->getPaises(),
            'comunicacion_medias' => $comunicacion_medias,
            'status' => $status,
            'clientes'=>$clientes,
            'presupuestados' => $presupuestados,
            'clientes_negoci' => $clientes_negoci,
            'new_clients' => $new_clients,
            'title' => $title,
            'campaings' => $campaings
        ]);
    }


    public function getPaises(){


        $paises = [
            "Alemania"=>"Alemania",
            "España"=>"España",
            "Francia"=>"Francia",
            "Italia"=>"Italia",
            "Portugal"=>"Portugal",
            "__________"=>"_____________",
            "Afganistán"=>"Afganistán",
            "Albania"=>"Albania",
            "Andorra"=>"Andorra",
            "Angola"=>"Angola",
            "Antigua y Barbuda"=>"Antigua y Barbuda",
            "Arabia Saudita"=>"Arabia Saudita",
            "Argelia"=>"Argelia",
            "Argentina"=>"Argentina",
            "Armenia"=>"Armenia",
            "Australia"=>"Australia",
            "Austria"=>"Austria",
            "Azerbaiyán"=>"Azerbaiyán",
            "Bahamas"=>"Bahamas",
            "Bangladés"=>"Bangladés",
            "Barbados"=>"Barbados",
            "Baréin"=>"Baréin",
            "Bélgica"=>"Bélgica",
            "Belice"=>"Belice",
            "Benín"=>"Benín",
            "Bielorrusia"=>"Bielorrusia",
            "Birmania"=>"Birmania",
            "Bolivia"=>"Bolivia",
            "Bosnia y Herzegovina"=>"Bosnia y Herzegovina",
            "Botsuana"=>"Botsuana",
            "Brasil"=>"Brasil",
            "Brunéi"=>"Brunéi",
            "Bulgaria"=>"Bulgaria",
            "Burkina Faso"=>"Burkina Faso",
            "Burundi"=>"Burundi",
            "Bután"=>"Bután",
            "Cabo Verde"=>"Cabo Verde",
            "Camboya"=>"Camboya",
            "Camerún"=>"Camerún",
            "Canadá"=>"Canadá",
            "Catar"=>"Catar",
            "Chad"=>"Chad",
            "Chile"=>"Chile",
            "China"=>"China",
            "Chipre"=>"Chipre",
            "Ciudad del Vaticano"=>"Ciudad del Vaticano",
            "Colombia"=>"Colombia",
            "Comoras"=>"Comoras",
            "Corea del Norte"=>"Corea del Norte",
            "Corea del Sur"=>"Corea del Sur",
            "Costa de Marfil"=>"Costa de Marfil",
            "Costa Rica"=>"Costa Rica",
            "Croacia"=>"Croacia",
            "Cuba"=>"Cuba",
            "Dinamarca"=>"Dinamarca",
            "Dominica"=>"Dominica",
            "Ecuador"=>"Ecuador",
            "Egipto"=>"Egipto",
            "El Salvador"=>"El Salvador",
            "Emiratos Árabes Unidos"=>"Emiratos Árabes Unidos",
            "Eritrea"=>"Eritrea",
            "Eslovaquia"=>"Eslovaquia",
            "Eslovenia"=>"Eslovenia",
           
            "Estados Unidos"=>"Estados Unidos",
            "Estonia"=>"Estonia",
            "Etiopía"=>"Etiopía",
            "Filipinas"=>"Filipinas",
            "Finlandia"=>"Finlandia",
            "Fiyi"=>"Fiyi",
           
            "Gabón"=>"Gabón",
            "Gambia"=>"Gambia",
            "Georgia"=>"Georgia",
            "Ghana"=>"Ghana",
            "Granada"=>"Granada",
            "Grecia"=>"Grecia",
            "Guatemala"=>"Guatemala",
            "Guyana"=>"Guyana",
            "Guinea"=>"Guinea",
            "Guinea ecuatorial"=>"Guinea ecuatorial",
            "Guinea-Bisáu"=>"Guinea-Bisáu",
            "Haití"=>"Haití",
            "Honduras"=>"Honduras",
            "Hungría"=>"Hungría",
            "India"=>"India",
            "Indonesia"=>"Indonesia",
            "Irak"=>"Irak",
            "Irán"=>"Irán",
            "Irlanda"=>"Irlanda",
            "Islandia"=>"Islandia",
            "Islas Marshall"=>"Islas Marshall",
            "Islas Salomón"=>"Islas Salomón",
            "Israel"=>"Israel",
            
            "Jamaica"=>"Jamaica",
            "Japón"=>"Japón",
            "Jordania"=>"Jordania",
            "Kazajistán"=>"Kazajistán",
            "Kenia"=>"Kenia",
            "Kirguistán"=>"Kirguistán",
            "Kiribati"=>"Kiribati",
            "Kuwait"=>"Kuwait",
            "Laos"=>"Laos",
            "Lesoto"=>"Lesoto",
            "Letonia"=>"Letonia",
            "Líbano"=>"Líbano",
            "Liberia"=>"Liberia",
            "Libia"=>"Libia",
            "Liechtenstein"=>"Liechtenstein",
            "Lituania"=>"Lituania",
            "Luxemburgo"=>"Luxemburgo",
            "Madagascar"=>"Madagascar",
            "Malasia"=>"Malasia",
            "Malaui"=>"Malaui",
            "Maldivas"=>"Maldivas",
            "Malí"=>"Malí",
            "Malta"=>"Malta",
            "Marruecos"=>"Marruecos",
            "Mauricio"=>"Mauricio",
            "Mauritania"=>"Mauritania",
            "México"=>"México",
            "Micronesia"=>"Micronesia",
            "Moldavia"=>"Moldavia",
            "Mónaco"=>"Mónaco",
            "Mongolia"=>"Mongolia",
            "Montenegro"=>"Montenegro",
            "Mozambique"=>"Mozambique",
            "Namibia"=>"Namibia",
            "Nauru"=>"Nauru",
            "Nepal"=>"Nepal",
            "Nicaragua"=>"Nicaragua",
            "Níger"=>"Níger",
            "Nigeria"=>"Nigeria",
            "Noruega"=>"Noruega",
            "Nueva Zelanda"=>"Nueva Zelanda",
            "Omán"=>"Omán",
            "Países Bajos"=>"Países Bajos",
            "Pakistán" =>"Pakistán",
               
            "Palestina"=>"Palestina",
            "Panamá"=>"Panamá",
            "Papúa Nueva Guinea"=>"Papúa Nueva Guinea",
            "Paraguay"=>"Paraguay",
            "Perú"=>"Perú",
            "Polonia"=>"Polonia",
            
            "Reino Unido"=>"Reino Unido",
            "República Centroafricana"=>"República Centroafricana",
            "República Checa"=>"República Checa",
            "República de Macedonia"=>"República de Macedonia",
            "República del Congo"=>"República del Congo",
            "República Democrática del Congo"=>"República Democrática del Congo",
            "República Dominicana"=>"República Dominicana",
            "República Sudafricana"=>"República Sudafricana",
            "Ruanda"=>"Ruanda",
            "Rumanía"=>"Rumanía",
            "Rusia"=>"Rusia",
            "Samoa"=>"Samoa",
            "San Cristóbal y Nieves"=>"San Cristóbal y Nieves",
            "San Marino"=>"San Marino",
            "San Vicente y las Granadinas"=>"San Vicente y las Granadinas",
            "Santa Lucía"=>"Santa Lucía",
            "Santo Tomé y Príncipe"=>"Santo Tomé y Príncipe",
            "Senegal"=>"Senegal",
            "Serbia"=>"Serbia",
            "Seychelles"=>"Seychelles",
            "Sierra Leona"=>"Sierra Leona",
            "Singapur"=>"Singapur",
            "Siria"=>"Siria",
            "Somalia"=>"Somalia",
            "Sri Lanka"=>"Sri Lanka",
            "Suazilandia"=>"Suazilandia",
            "Sudán"=>"Sudán",
            "Sudán del Sur"=>"Sudán del Sur",
            "Suecia"=>"Suecia",
            "Suiza"=>"Suiza",
            "Surinam"=>"Surinam",
            "Tailandia"=>"Tailandia",
            "Tanzania"=>"Tanzania",
            "Tayikistán"=>"Tayikistán",
            "Timor Oriental"=>"Timor Oriental",
            
            "Trinidad y Tobago"=>"Trinidad y Tobago",
            "Túnez"=>"Túnez",
            "Turkmenistán"=>"Turkmenistán",
            "Turquía"=>"Turquía",
            "Tuvalu"=>"Tuvalu",
            "Ucrania"=>"Ucrania",
            "Uganda"=>"Uganda",
            "Uruguay"=>"Uruguay",
            "Uzbekistán"=>"Uzbekistán",
            "Vanuatu"=>"Vanuatu",
            "Venezuela"=>"Venezuela",
            "Vietnam"=>"Vietnam",
            "Yemen"=>"Yemen",
            "Yibuti"=>"Yibuti",
            "Zambia"=>"Zambia",
            "Zimbabue" =>"Zimbabu",
        ];

        return $paises;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaing $campaing)
    {
        //
        if (!$campaing) {
            return redirect()->route('admin.contacs.index');
        }

        return redirect()->route('admin.campaings.edit', $campaing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaing $campaing)
    {
        /* dd($request->all()); */
        try {
            //code...
            /* $campaing->update($request->all()); */
            $campaing->campaing_name = $request->campaing_name;
            $campaing->city = $request->city;
            $campaing->country = $request->country;
            $campaing->init_date = Carbon::parse($request->init_date);
            $campaing->end_date = Carbon::parse($request->end_date);
            $campaing->status = $request->status;
            $campaing->update();
            Alert::success('Campaña actualizada');
            return redirect()->back();
        } catch (\PDOException $th) {
            Alert::success('Error al actualizar campaña');
            return redirect()->back();
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaing $campaing)
    {
        //
        try {
            //code...
            $campaing->delete();
            return redirect()->route('admin.campaings.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function calendario(Campaing $campaing)
    {
        //
        $id = auth()->user()->id;

        $title = 'Calendario';
        $data = Campaing::where('created_user', $id)->get();


       return view('campaings.calendario',[
        'title' =>$title,
        'paises' => $this->getPaises()
       ]);
    }

    public function ajaxCampaing(){

        $id = auth()->user()->id;
        $data = Campaing::where('created_user', $id)->get();

        $events= [];
        foreach ($data as $event) {
            $events[] = [
                'title' => $event->campaing_name,
                'start' => $event->init_date,
                'end' => $event->end_date
            ];
        }

        return response()->json($events);
    }


    public function addContact(Request $request)
    {
       
        $user_id = auth()->user()->id;
            /* dd($request); */
      
            try {
                $campaing = new ContactCampaing();
                $campaing->camaping_id = $request->campaing;
                $campaing->contact_id = $request->contact;
                $campaing->user_id = $user_id;
                $campaing->created_at = Carbon::now();
                $campaing->updated_at = Carbon::now();
                $result = $campaing->save();
                if ($result) {
                    return redirect()->back();
                } else {
                    return false;
                }
            } catch (\PDOException $th) {
                return $th->getMessage();
            }
        
    }

    public function deleteContact(Request $request, $id)
    {
       
        $user_id = auth()->user()->id;
          /*   dd($request->all()); */
      
            try {
                $campaing = ContactCampaing::where('camaping_id', $id)->where('contact_id', $request->contact);
               
                $result = $campaing->delete();

                if ($result) {
                    return redirect()->back();
                } else {
                    return false;
                }
            } catch (\PDOException $th) {
                return $th->getMessage();
            }
        
    }


    public function createContact(Request $request, $id){

       /*  dd($request); */
        $user_id = auth()->user()->id;
       /* dd($request); */
        $request->validate([
            'name'=>'required',
            'lastname' => 'required', 
            'email'=>'required',
            'phone' =>'required',
            'country' => 'required',
            'medio_comunicacion' => 'required',
            'statu' => 'required',
        ]);

        if(Contact::where('email', $request->email)->exists()){
            Alert::error('Email ya esta asocaciado a otro contacto');
            return redirect()->back();
        }
       
        $contact = new Contact();
        $contact_campaing = new ContactCampaing();
       /*  dd("12"); */
       try {
        //code...
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
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

       
        $contact = Contact::where('user_id', $user_id)->orderByDesc('id')->first();

        $contact_campaing->camaping_id = $id;
        $contact_campaing->contact_id = $contact->id;
        $contact_campaing->	user_id = $user_id;
        $contact_campaing->created_at = Carbon::now();
        $contact_campaing->updated_at = Carbon::now();
        $contact_campaing->save();

        Alert::success('Contacto Agregado');
        return redirect()->back();


       } catch (\PDOException $th) {
        return $th->getMessage();
       /*  return redirect()->route('admin.contacts.index')->with(['message' => 'Contacto no guardado']); */
       }





    }


}
