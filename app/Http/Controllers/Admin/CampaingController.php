<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campaing;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactCampaing;
use Carbon\Carbon;
use Database\Factories\ContactFactory;
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
            $ca = new Campaing();
            $ca->name = $request->name;
            $ca->status = $request->status;
            $ca->created_user = $user_id;
            $ca->save();
   
            $campaing = Campaing::where('created_user', $user_id)->orderByDesc('id')->first();
           /*  dd($campaing); */
            

           return redirect()->route('admin.campaings.show', compact('campaing'))->with(['message' => 'Contacto guardado']);
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
    public function show(Campaing $campaing)
    {
        //
        $user_id = auth()->user()->id;

        if(!$campaing){
            return redirect()->route('admin.contacs.index');
        }
        $contacts = Contact::where('user_id', $user_id)->orderByDesc('id')->paginate(20);

        return view('campaings.show', compact('campaing', 'contacts'));

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


    

    public function addContact(Request $request, $id){

        $user_id = auth()->user()->id;
        $input = $request->all();
       /*  dd($input); */
        $contacts = $input['contact_id'];
       
        if(is_array($contacts)){
            foreach ($contacts as $key) {
             /*   dd($key); */
                if ( !ContactCampaing::where('contact_id', $key)->exists() ){
                    foreach ($contacts as $key => $value) {
                        $campaing = new ContactCampaing();
    
                        try {
                            
                            $campaing->camaping_id = $id;
                            $campaing->contact_id = $value;
                            $campaing->user_id = $user_id; 
    
                            $result = $campaing->save();
                                if($result){
                                    return true;
                                }else{
                                    return false;
                                }
                            } catch (\PDOException $th) {
                                return $th->getMessage();
                            }
                        # code...
                    } 
                        
                }

            }

        }else{
            try {      
                $campaing = new ContactCampaing();
                $campaing->camaping_id = $id;         
                $campaing->contact_id = $request->contact_id;
                $campaing->user_id = $user_id;
                $campaing->created_at = Carbon::now();               
                $campaing->updated_at = Carbon::now();   
               $result = $campaing->update();
                 if($result){
                     return true;
                 }else{
                     return false;
                 }
            } catch (\PDOException $th) {
                return $th->getMessage();
            }
        }


    }


}
