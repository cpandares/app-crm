<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Alert;
use App\Models\Campaing as ModelsCampaing;
use App\Models\ComunicationMedium;
use App\Models\Contact;
use App\Models\ContactStatus;
use Campaing;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = auth()->user()->rol;
        
        if($rol == 3 ){
            Alert::error('No puedes agregar usuario');
            return redirect()->back();
        }

       
        if (ModelsUser::where('email', $request->email)->exists()) {
            Alert::error('Email ya esta asocaciado a otro usuario');
            return redirect()->back();
        }

        try {
            //code...
            $user = new ModelsUser();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->rol = $request->rol;
            $user->country = $request->country;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
            Alert::success('Usuario registrado');
            return redirect()->back();
        } catch (\PDOException $th) {
            //throw $th;
            Alert::error('Usuaruo no registrado, contacte con soporte');
            return redirect()->back();
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\f  $f
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsUser $user)
    {
        //
        $title = 'Perfil de usuario';
        
        $user = ModelsUser::where('id', auth()->user()->id)->first();
        $contacts = Contact::all();
        $campaings = ModelsCampaing::all();
      /*   dd($user->name); */
        return view('user.show',[
            'user' => $user,
            'title' => $title,
            'user' => $user,
            'contacts' => $contacts,
            'campaings' => $campaings
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\f  $f
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsUser $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsUser $user)
    {
        /* dd($request->all()); */
        $user = ModelsUser::where('id', auth()->user()->id)->first();

        if(!$user){
            Alert::error('El usuario que intenta actualizar no existe');
            return redirect()->back();
        }

        if($request->email != $user->email){
            /* dd($request->email, $user->name); */
            if(ModelsUser::whereEmail($request->email)->exists()){
                Alert::error('Email ya esta asosciado a otro usuario');
                return  redirect()->back();
            }
        }

       try {
            /* dd($request->password); */

            if($request->file('imagen')){
                $imagen = $request->file('imagen');

      
                $filename = time() . '.' . $request->imagen->extension();
            
                /*  dd($filename); */
                $request->imagen->move(public_path('images/contactos/'), $filename);
               
            }
           /*  dd($request->password); */
            $user->name = $request->name;
            $user->email= $request->email;
            $user->password =  isset($request->password) ? Hash::make($request->password) : $user->password;
            $user->image = isset($filename) ?$filename : $user->image;
            $user->update();
            Alert::success('Perfil actualizado con éxito');
            return  redirect()->back();
       } catch (\PDOException $th) {
        //throw $th;
       }

    }


    public function updateUser(Request $request, ModelsUser $user)
    {
        /* dd($request->all()); */
        $user = ModelsUser::where('id',$request->user)->first();

        if(!$user){
            Alert::error('El usuario que intenta actualizar no existe');
            return redirect()->back();
        }

        if($request->email != $user->email){
            /* dd($request->email, $user->name); */
            if(ModelsUser::whereEmail($request->email)->exists()){
                Alert::error('Email ya esta asosciado a otro usuario');
                return  redirect()->back();
            }
        }

       try {
            /* dd($request->password); */

            if($request->file('imagen')){
                
                
                $filename = time() . '.' . $request->imagen->extension();
            
                /*  dd($filename); */
                $request->imagen->move(public_path('images/contactos/'), $filename);
              
               
            }
           /*  dd($request->password); */
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email= $request->email;
            $user->country = $request->country;
            $user->rol = $request->rol;
            $user->phone = $request->phone;
            $user->password =  isset($request->password) ? Hash::make($request->password) : $user->password;
            $user->image = isset($filename) ? $filename : $user->image;
            $user->update();
            Alert::success('Perfil actualizado con éxito');
            return  redirect()->back();
       } catch (\PDOException $th) {
            Alert::error('Usuario no actualizado, contacte a soporte');
            return  redirect()->back();
       }

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\f  $f
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsUser $user)
    {
        //
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

    public function configSystem(Request $request){

        $input = $request->all();
        $condicion = [];
        $per_page = isset($request->per_page) ? $request->per_page : 20;
        $title = 'Configuracion del sistema';

        $users = DB::table('users')->orderByDesc('id');
        $contacts = Contact::all();
        $campaings = ModelsCampaing::all();
        $list_campaings =  ModelsCampaing::pluck('campaing_name', 'id');
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $status = ContactStatus::pluck('status_name', 'id');
        if(isset($input['name'])){
            $condicion[] = ['users.name', 'like', '%' . $input['name'] . '%'];
        }
        if(isset($input['email'])){
            $condicion[] = ['users.email', 'like', '%' . $input['email'] . '%'];
        }
        if(isset($input['lastname'])){
            $condicion[] = ['users.lastname', 'like', '%' . $input['lastname'] . '%'];
        }
        if (isset($input['country'])) {
            $condicion['users.country'] = $input['country'];
        }
        if (isset($input['statu'])) {
            $condicion['users.rol'] = $input['statu'];
        }
        $users = $users->where($condicion)->paginate($per_page);

        return view('crm.admin',[
            'title' => $title,
            'users' => $users,
            'paises' => $this->getPaises(),
            'contacts' => $contacts,
            'campaings' => $campaings,
            'list_campaings' =>$list_campaings,
            'comunicacion_medias' =>$comunicacion_medias,
            'per_page' => $per_page
        ]);
    }

    public function detailUser(Request $request,$id){

        $input = $request->all();
        $condicion = [];

        $user = ModelsUser::findOrFail($id);
        $contacts = Contact::where('user_id', $id);
        $clients = Contact::where('user_id', $id)->where('contact_status', 5)->paginate(20);
        $campaings = ModelsCampaing::where('created_user', $id);
        $usuarios = ModelsUser::pluck('name', 'id');
        $comunicacion_medias = ComunicationMedium::pluck('comunication_medio', 'id');
        $status = ContactStatus::pluck('status_name', 'id');
        $list_campaings =  ModelsCampaing::where('created_user', $id)->pluck('campaing_name', 'id');

        if(isset($input['name'])){
            $condicion[] = ['contacts.name', 'like', '%' . $input['name'] . '%'];
        }
        if(isset($input['email'])){
            $condicion[] = ['contacts.email', 'like', '%' . $input['email'] . '%'];
        }
        if(isset($input['lastname'])){
            $condicion[] = ['contacts.lastname', 'like', '%' . $input['lastname'] . '%'];
        }
        if (isset($input['country'])) {
            $condicion['contacts.country'] = $input['country'];
        }
        if (isset($input['statu'])) {
            $condicion['contacts.contact_status'] = $input['statu'];
        }


        if (isset($input['city'])) {
            $condicion[] = ['campaing.city', 'like', '%' . $input['city'] . '%'];
        }

        if (isset($input['campaing_name'])) {
           
            $condicion['campaing.campaing_name'] = $input['campaing_name'];
        }

        if (isset($input['campaing_country'])) {

            $condicion['campaing.country'] = $input['campaing_country'];
        }
        if (isset($input['campaing_statu'])) {

            $condicion['campaing.status'] = $input['campaing_statu'];
        }

        $campaings = $campaings->where($condicion)->orderByDesc('id')->paginate(20);



        $contacts = $contacts->where($condicion)->paginate(20);

        $title = 'Detalle de usuario';
       /*  dd($contacts); */
        return view('user.detail', [
            'user' =>$user,
            'title' =>$title,
            'contacts' => $contacts,
            'campaings' =>$campaings,
            'usuarios' => $usuarios,
            'paises' => $this->getPaises(),
            'comunicacion_medias' => $comunicacion_medias,
            'status' =>$status,
            'clients' => $clients,
            'list_campaings' =>$list_campaings
        ]);
    }

    public function resetPassword(){


        return view('auth.passwords.reset');
    }

    public function validateData(Request $request){

         $user = ModelsUser::where('name', $request->name)
                            ->where('email', $request->email)
                            ->first();
        /* dd($user); */
         if(is_null($user)){
            /* Alert::error('Usuario no encontrado'); */
            return redirect()->back()->with(['message' =>'Error, usuario no encontrado']);
         }

        try {
            //code...
            $user->password = Hash::make($request->password);
            $user->update();
            Alert::success('Has cambiado tu contraseña con éxito');
   
            return redirect()->route('login')->with(['message' =>'Contraseña actualizada']);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return view('auth.passwords.reset');
    }


}
