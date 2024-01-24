<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Budget;

use Carbon\Carbon;
use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Storage;

class BudgetController extends Controller
{
    //


    public function index(){
        $user_id = auth()->user()->id;
        $budgets = Budget::where('user_created', $user_id)->paginate(20);

        return view('budget.index', compact('budgets'));
    }


    public function create(){

        return view('budget.create');

    }

    public function show (Budget $presupuesto){

        if(!$presupuesto){
            return redirect()->back();
        }

       /*  dd($presupuesto); */

        return view('budget.show', compact('presupuesto'));
    }


    public function store(Request $request, Budget $budget){


        $user_id = auth()->user()->id;
       
        $request->validate([
            'title'=>'required'          
        ]);

       
        $documento = $request->file('archivo');



        $budget = new Budget();

       try {


        if ($documento != null) {
            $mime = time() . '.' . $request->archivo->extension();       
           

            $request->archivo->move(public_path('adjunto/'), $mime);
            $url = $mime;
        }



            $valor = str_replace('₡', '', $request->price);
            $valor =  str_replace(' ', '', $valor);
            $valor =  str_replace('.', '', $valor);
            $valor = floatval($valor);
        //code...
            $budget->title = $request->title;
            $budget->observacion = $request->observacion;
            $budget->price = $valor;
            $budget->valid_until = $request->valid_until;
            $budget->user_created = $user_id;
            $budget->user_created_for = $request->contact;
            $budget->created_at = Carbon::now();
            $budget->updated_at = Carbon::now();
            $budget->document = isset($url) ? $url : null;
            $budget->save();

            $presupuesto = Budget::orderByDesc('id')->first();

            Alert::success('Presupuesto almacenado');
            return redirect()->back();
       } catch (\PDOException $th) {
           /*  throw $th; */
           Alert::success('Error al guadar presupuesto');
           return redirect()->back();
       }

    }


    public function edit(Request $request, Budget $budget){

        return view('budget.edit', $budget);


    }


    public function update(Request $request, $id){

       /*  dd($id); */
        $budget = Budget::find($id);
        if(!$budget){
            Alert::error('Presupuesto no encontrado, contacte a soporte');
            return redirect()->back();
        }
        
        try {
           
            /* verify if request->price had symbol ₡ */
            if(strpos($request->price, '€') !== false){
                $valor = str_replace('€', '', $request->price);
                $valor =  str_replace(' ', '', $valor);
                $valor =  str_replace('.', '', $valor);
                $valor = floatval($valor);
            }else{
                $valor = $request->price;
            }

            $budget->title = $request->title;
            $budget->observacion = $request->observacion;
            $budget->price = $valor;
            $budget->valid_until = $request->valid_until;
            $budget->user_created = auth()->user()->id;
            $budget->user_created_for = $request->contact;
            $budget->updated_at = Carbon::now();
            $budget->update();
            Alert::success('Presupuesto actualizado');
            //return redirect()->route('admin.budget.show', $budget)->with(['message' =>'Presupuesto actualizado']);
            return redirect()->back();

        } catch (\PDOException $th) {
            return $th->getMessage();
            /* Alert::error('Error actualizando presupuesto, contacte a soporte');
            return redirect()->back(); */
        }

    }


    public function destroy($id){

        
        $budget = Budget::find($id);

        if(!$budget){
            return redirect()->back();
        }

        try {
            //code...
            $budget->delete();
            /* $budgets = Budget::where('user_created', $user_id)->paginate(20); */
            Alert::success('Presupuesto eliminado');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Presupuesto no eliminado, contacte a soporte');
            return redirect()->back();
        }

    }


    public function addContact(Request $request, Budget $budget){

        $input = $request->all();
        $contacts = $input['contact_id'];
        if(is_array($contacts)){
            foreach ($contacts as $key => $value) {

                if ( !Budget::where('user_created_for', $value)->exists() ){ 
                  
                    $budget->user_created_for = $value;
                    $budget->updated_at = Carbon::now(); 
                    try {

                        $result = $budget->update();
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
                $budget->contact_id = $request->contact;
                $budget->updated_at = Carbon::now();               

               $result = $budget->update();
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


    public function ajax($id){

        $notes = Budget::where('user_created_for', $id)->orderByDesc('id')->paginate(20);

        return view('budget.lista', compact('notes'));
    }


}
