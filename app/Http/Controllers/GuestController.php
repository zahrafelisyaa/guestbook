<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::orderBy('created_at', 'DESC')->get();
        return view('pages.guests.index', compact('guests'));
    }

    public function show($id)
    {
        $guest = Guest::find($id);
        return view('pages.guests.show', compact('guest'));
    }

    public function destroy() {}
}
