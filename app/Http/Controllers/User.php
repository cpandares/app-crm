<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Alert;
use App\Models\Campaing as ModelsCampaing;
use App\Models\Contact;
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
            Alert::success('Usuaruo registrado');
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
        
        $user = ModelsUser::where('id', auth()->user()->id)->first();

        if(!$user){
            Alert::error('El usuario que intenta actualizar no existe');
            return redirect()->back();
        }

        if($request->email !== $user->email){
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

      
                if ($imagen){
                    $ruta = "blog-laravel";
                
                    $response = cloudinary()->upload($request->file('imagen')->getRealPath(), array("folder" => $ruta))->getSecurepath();
                
                }  
               
            }
           /*  dd($request->password); */
            $user->name = $request->name;
            $user->email= $request->email;
            $user->password =  isset($request->password) ? Hash::make($request->password) : $user->password;
            $user->image = isset($imagen) ? $response : $user->image;
            $user->update();
            Alert::success('Perfil actualizado con éxito');
            return  redirect()->back();
       } catch (\PDOException $th) {
        //throw $th;
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

    public function configSystem(){

        $title = 'Configuracion del sistema';

        $users = DB::table('users')->orderByDesc('id')->paginate(20);
        $contacts = Contact::all();
        $campaings = ModelsCampaing::all();
        return view('crm.admin',[
            'title' => $title,
            'users' => $users,
            'paises' => $this->getPaises(),
            'contacts' => $contacts,
            'campaings' => $campaings
        ]);
    }



}
