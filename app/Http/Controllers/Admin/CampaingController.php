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
    public function index()
    {
        //
        $id = auth()->user()->id;
        $data = Campaing::where('created_user', $id)->get();

        return view('campaings.index', [
            'data'=>$data,
            'paises' => $this->getPaises()
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
        $user_id = auth()->user()->id;

        $request->validate([
            'name' => 'required'
        ]);

        try {
            $ca = new Campaing();
            $ca->campaing_name = $request->name;
            $ca->status = $request->status;
            $ca->country = $request->country;
            $ca->city = $request->ciudad;
            $ca->init_date = Carbon::parse($request->init_date);
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


        return view('campaings.show', [
            'campaing' => $campaing,
            'contacts' => $contacts,
            'paises' => $this->getPaises(),
            'comunicacion_medias' => $comunicacion_medias,
            'status' => $status
        ]);
    }

    public function showPipelineContacts($id, Request $request)
    {
        //
       /* dd($id); */
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

        return view('campaings.pipeline', [
            'campaing' => $campaing,
           
            'paises' => $this->getPaises(),
            'comunicacion_medias' => $comunicacion_medias,
            'status' => $status,
            'clientes'=>$clientes,
            'presupuestados' => $presupuestados,
            'clientes_negoci' => $clientes_negoci,
            'new_clients' => $new_clients

        ]);
    }


    public function getPaises(){


        $paises = [
            "Afganist??n"=>"Afganist??n",
            "Albania"=>"Albania",
            "Alemania"=>"Alemania",
            "Andorra"=>"Andorra",
            "Angola"=>"Angola",
            "Antigua y Barbuda"=>"Antigua y Barbuda",
            "Arabia Saudita"=>"Arabia Saudita",
            "Argelia"=>"Argelia",
            "Argentina"=>"Argentina",
            "Armenia"=>"Armenia",
            "Australia"=>"Australia",
            "Austria"=>"Austria",
            "Azerbaiy??n"=>"Azerbaiy??n",
            "Bahamas"=>"Bahamas",
            "Banglad??s"=>"Banglad??s",
            "Barbados"=>"Barbados",
            "Bar??in"=>"Bar??in",
            "B??lgica"=>"B??lgica",
            "Belice"=>"Belice",
            "Ben??n"=>"Ben??n",
            "Bielorrusia"=>"Bielorrusia",
            "Birmania"=>"Birmania",
            "Bolivia"=>"Bolivia",
            "Bosnia y Herzegovina"=>"Bosnia y Herzegovina",
            "Botsuana"=>"Botsuana",
            "Brasil"=>"Brasil",
            "Brun??i"=>"Brun??i",
            "Bulgaria"=>"Bulgaria",
            "Burkina Faso"=>"Burkina Faso",
            "Burundi"=>"Burundi",
            "But??n"=>"But??n",
            "Cabo Verde"=>"Cabo Verde",
            "Camboya"=>"Camboya",
            "Camer??n"=>"Camer??n",
            "Canad??"=>"Canad??",
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
            "Emiratos ??rabes Unidos"=>"Emiratos ??rabes Unidos",
            "Eritrea"=>"Eritrea",
            "Eslovaquia"=>"Eslovaquia",
            "Eslovenia"=>"Eslovenia",
            "Espa??a"=>"Espa??a",
            "Estados Unidos"=>"Estados Unidos",
            "Estonia"=>"Estonia",
            "Etiop??a"=>"Etiop??a",
            "Filipinas"=>"Filipinas",
            "Finlandia"=>"Finlandia",
            "Fiyi"=>"Fiyi",
            "Francia"=>"Francia",
            "Gab??n"=>"Gab??n",
            "Gambia"=>"Gambia",
            "Georgia"=>"Georgia",
            "Ghana"=>"Ghana",
            "Granada"=>"Granada",
            "Grecia"=>"Grecia",
            "Guatemala"=>"Guatemala",
            "Guyana"=>"Guyana",
            "Guinea"=>"Guinea",
            "Guinea ecuatorial"=>"Guinea ecuatorial",
            "Guinea-Bis??u"=>"Guinea-Bis??u",
            "Hait??"=>"Hait??",
            "Honduras"=>"Honduras",
            "Hungr??a"=>"Hungr??a",
            "India"=>"India",
            "Indonesia"=>"Indonesia",
            "Irak"=>"Irak",
            "Ir??n"=>"Ir??n",
            "Irlanda"=>"Irlanda",
            "Islandia"=>"Islandia",
            "Islas Marshall"=>"Islas Marshall",
            "Islas Salom??n"=>"Islas Salom??n",
            "Israel"=>"Israel",
            "Italia"=>"Italia",
            "Jamaica"=>"Jamaica",
            "Jap??n"=>"Jap??n",
            "Jordania"=>"Jordania",
            "Kazajist??n"=>"Kazajist??n",
            "Kenia"=>"Kenia",
            "Kirguist??n"=>"Kirguist??n",
            "Kiribati"=>"Kiribati",
            "Kuwait"=>"Kuwait",
            "Laos"=>"Laos",
            "Lesoto"=>"Lesoto",
            "Letonia"=>"Letonia",
            "L??bano"=>"L??bano",
            "Liberia"=>"Liberia",
            "Libia"=>"Libia",
            "Liechtenstein"=>"Liechtenstein",
            "Lituania"=>"Lituania",
            "Luxemburgo"=>"Luxemburgo",
            "Madagascar"=>"Madagascar",
            "Malasia"=>"Malasia",
            "Malaui"=>"Malaui",
            "Maldivas"=>"Maldivas",
            "Mal??"=>"Mal??",
            "Malta"=>"Malta",
            "Marruecos"=>"Marruecos",
            "Mauricio"=>"Mauricio",
            "Mauritania"=>"Mauritania",
            "M??xico"=>"M??xico",
            "Micronesia"=>"Micronesia",
            "Moldavia"=>"Moldavia",
            "M??naco"=>"M??naco",
            "Mongolia"=>"Mongolia",
            "Montenegro"=>"Montenegro",
            "Mozambique"=>"Mozambique",
            "Namibia"=>"Namibia",
            "Nauru"=>"Nauru",
            "Nepal"=>"Nepal",
            "Nicaragua"=>"Nicaragua",
            "N??ger"=>"N??ger",
            "Nigeria"=>"Nigeria",
            "Noruega"=>"Noruega",
            "Nueva Zelanda"=>"Nueva Zelanda",
            "Om??n"=>"Om??n",
            "Pa??ses Bajos"=>"Pa??ses Bajos",
            "Pakist??n" =>"Pakist??n",
               
            "Palestina"=>"Palestina",
            "Panam??"=>"Panam??",
            "Pap??a Nueva Guinea"=>"Pap??a Nueva Guinea",
            "Paraguay"=>"Paraguay",
            "Per??"=>"Per??",
            "Polonia"=>"Polonia",
            "Portugal"=>"Portugal",
            "Reino Unido"=>"Reino Unido",
            "Rep??blica Centroafricana"=>"Rep??blica Centroafricana",
            "Rep??blica Checa"=>"Rep??blica Checa",
            "Rep??blica de Macedonia"=>"Rep??blica de Macedonia",
            "Rep??blica del Congo"=>"Rep??blica del Congo",
            "Rep??blica Democr??tica del Congo"=>"Rep??blica Democr??tica del Congo",
            "Rep??blica Dominicana"=>"Rep??blica Dominicana",
            "Rep??blica Sudafricana"=>"Rep??blica Sudafricana",
            "Ruanda"=>"Ruanda",
            "Ruman??a"=>"Ruman??a",
            "Rusia"=>"Rusia",
            "Samoa"=>"Samoa",
            "San Crist??bal y Nieves"=>"San Crist??bal y Nieves",
            "San Marino"=>"San Marino",
            "San Vicente y las Granadinas"=>"San Vicente y las Granadinas",
            "Santa Luc??a"=>"Santa Luc??a",
            "Santo Tom?? y Pr??ncipe"=>"Santo Tom?? y Pr??ncipe",
            "Senegal"=>"Senegal",
            "Serbia"=>"Serbia",
            "Seychelles"=>"Seychelles",
            "Sierra Leona"=>"Sierra Leona",
            "Singapur"=>"Singapur",
            "Siria"=>"Siria",
            "Somalia"=>"Somalia",
            "Sri Lanka"=>"Sri Lanka",
            "Suazilandia"=>"Suazilandia",
            "Sud??n"=>"Sud??n",
            "Sud??n del Sur"=>"Sud??n del Sur",
            "Suecia"=>"Suecia",
            "Suiza"=>"Suiza",
            "Surinam"=>"Surinam",
            "Tailandia"=>"Tailandia",
            "Tanzania"=>"Tanzania",
            "Tayikist??n"=>"Tayikist??n",
            "Timor Oriental"=>"Timor Oriental",
            
            "Trinidad y Tobago"=>"Trinidad y Tobago",
            "T??nez"=>"T??nez",
            "Turkmenist??n"=>"Turkmenist??n",
            "Turqu??a"=>"Turqu??a",
            "Tuvalu"=>"Tuvalu",
            "Ucrania"=>"Ucrania",
            "Uganda"=>"Uganda",
            "Uruguay"=>"Uruguay",
            "Uzbekist??n"=>"Uzbekist??n",
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

        try {
            //code...
            $campaing->update($request->all());
            return redirect()->route('admin.campaings.show', $campaing);
        } catch (\Throwable $th) {
            //throw $th;
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
        $contact->country = $request->country;
        $contact->city = $request->city;
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
