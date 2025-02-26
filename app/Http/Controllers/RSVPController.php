<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Rsvp;
use Illuminate\Support\Facades\Auth;

class RSVPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rsvps = Rsvp::with('event')
            ->where('user_id', Auth::id())
            ->paginate(6);
        return view('reserve', compact('rsvps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        $rsvp = Rsvp::create([
            'user_id' =>  Auth::id(),  
            'event_id' => $event->id 
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $del = Rsvp::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
