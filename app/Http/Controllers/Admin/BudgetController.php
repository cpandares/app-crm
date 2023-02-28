<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Budget;

use Carbon\Carbon;
use Illuminate\Http\Request;
Use Alert;

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


        $budget = new Budget();

       try {
        //code...
            $budget->title = $request->title;
            $budget->observacion = $request->observacion;
            $budget->price = $request->price;
            $budget->valid_until = $request->valid_until;
            $budget->user_created = $user_id;
            $budget->user_created_for = $request->contact;
            $budget->created_at = Carbon::now();
            $budget->updated_at = Carbon::now();

            $budget->save();

            $presupuesto = Budget::orderByDesc('id')->first();

            Alert::success('Presupuesto almacenado');
            return redirect()->back();
       } catch (\Throwable $th) {
        throw $th;
       }

    }


    public function edit(Request $request, Budget $budget){

        return view('budget.edit', $budget);


    }


    public function update(Request $request, Budget $budget){

        if(!$budget){
            return redirect()->back();
        }

        try {
            //code...

            $budget->update($request->all());

            return redirect()->route('admin.budget.show', $budget)->with(['message' =>'Presupuesto actualizado']);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }

    }


    public function delete(Budget $budget){

        $user_id = auth()->user()->id;
        if(!$budget){
            return redirect()->back();
        }

        try {
            //code...
            $budget->delete();
            $budgets = Budget::where('user_created', $user_id)->paginate(20);
            return redirect()->route('admin.budget.index', compact('budgets'))->with(['message' => 'Presupuesto eliminado']);
        } catch (\Throwable $th) {
            //throw $th;
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
