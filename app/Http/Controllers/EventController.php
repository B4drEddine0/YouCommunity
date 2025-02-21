<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('evenement',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $event = Event::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'lieu' => 'required|string',
            'date_heure' => 'required|date',
            'categorie' => 'required|string',
            'max_participants' => 'required|integer|min:1',
        ]);

         Event::create(array_merge($event,['user_id' => Auth::id()]));
         return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = Event::findOrFail($id);
        $del->delete();
        return redirect()->route('events');
    }
}
