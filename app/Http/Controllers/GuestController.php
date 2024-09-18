<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index ()
    {
        $guests = Guest::orderBy('created_at', 'DESC')->get();
        return view('pages.guests.index', compact('guests'));
    }

    public function show ($id)
    {
        $guest = Guest::find($id);
        return view('pages.guests.show', compact('guest'));
    }
}
