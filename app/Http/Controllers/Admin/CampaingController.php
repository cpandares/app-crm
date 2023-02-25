<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campaing;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $data = Campaing::where('user_id',$id)->get();

        return view('campaings.index', compact('data'));
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
            'name'=>'required'          
        ]);
       
        try {
            $campaing = new Campaing();
            $campaing->name = $request->name;
            $campaing->status = 1;
            $campaing->created_user = $user_id;
            $campaing->save();
   
            $result = Campaing::where('created_user', $user_id)->orderByDesc('id')->first();
   
           return redirect()->route('admin.campaing.show', $result)->with(['message' => 'Contacto guardado']);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Campaing $campaing)
    {
        //
        
        if(!$campaing){
            return redirect()->route('admin.contacs.index');
        }

        return view('campaings.show', $campaing);

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
        if(!$campaing){
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


    

    public function addContact(Request $request, Campaing $campaing){

        $input = $request->all();
        $contacts = $input['contact_id'];
        if(is_array($contacts)){
            foreach ($contacts as $key => $value) {

                if ( !Campaing::where('contact_id', $value)->exists() ){ 
                  
                    $campaing->contact_id = $value;
                    $campaing->updated_at = Carbon::now(); 
                    try {

                        $result = $campaing->update();
                            if($result){
                                return true;
                            }else{
                                return false;
                            }
                        } catch (\Throwable $th) {
                            throw $th;
                        }
                        
                }

            }

        }else{
            try {                
                $campaing->contact_id = $request->contact;
                $campaing->updated_at = Carbon::now();               

               $result = $campaing->update();
                 if($result){
                     return true;
                 }else{
                     return false;
                 }
            } catch (\Throwable $th) {
                throw $th;
            }
        }


    }


}
