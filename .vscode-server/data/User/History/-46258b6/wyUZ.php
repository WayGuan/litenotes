<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        // $userId = Auth::id();
        // $notes = Note::where('user_id', $userId)->latest('updated_at')->get();
        $notes = Note::where('user_id', $userId)->latest('updated_at')->paginate(5);
        // dd($notes);
        // foreach ($notes as $note) {
        //     dump($note->title);
        // }
        // $notes->each(function($note){
        //     dump($note->title);
        // });
        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // dd($request);
        $request->validate([
            'title' => 'required|max:120',
            'text' => 'required',
        ]);

        // $note  = new Note([
        //     'user_id' => Auth::id(),
        //     'title' => $request->title,
        //     'text' => $request->text
        // ]);
        // $note->save();

        Note::create([
            'uuid' => Str::uuid(),
            'user_id' => Auth::id(),
            'title' => $request->title,
            'text' => $request->text
        ]);
        return to_route('notes.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($uuid)
    // {
    //     $note = Note::where('uuid', $uuid)->where('user_id', Auth::id())->firstOrFail();
    //     return view('notes.show')->with('note', $note);
    // }
    
    /**
     * Display the specified resource.
     *
     * @param  Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        if ($note->user_id != Auth::id()) {
            return abort(403); // forbidden, unauthorized
        }
        return view('notes.show')->with('note', $note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
