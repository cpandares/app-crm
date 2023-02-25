<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $user_id = auth()->user()->id;
        $notes = Note::where('user_created', $user_id)->paginate(20);

        return view('notes.index', compact('notes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('notes.create');

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

        $note = new Note();

       try {
        //code...
            $note->title = $request->title;
            $note->observacion = $request->observacion;
           
            $note->user_created = $user_id;
            $note->user_created_for = $request->user_created_for;
            $note->created_at = Carbon::now();
            $note->updated_at = Carbon::now();

            $note->save();

            return redirect()->route('admin.notes.show', compact('note'));
       } catch (\Throwable $th) {
        //throw $th;
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //

        return view('notes.show', compact('note'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //

        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //

        if(!$note){
            return redirect()->back();
        }

        try {
            //code...

            $note->update($request->all());

            return redirect()->route('admin.notes.show', compact('note'));

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //

        if(!$note){
            return redirect()->back();
        }

        try {
            //code...
            $note->delete();

            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            $note->delete();

            return redirect()->back();
        }
    }
}
