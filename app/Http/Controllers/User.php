<?php

namespace App\Http\Controllers;

use App\Models\f;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Alert;
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
        //
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
      /*   dd($user->name); */
        return view('user.show',[
            'user' => $user,
            'title' => $title,
            'user' => $user
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
}
