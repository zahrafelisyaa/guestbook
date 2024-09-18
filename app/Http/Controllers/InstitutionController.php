<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data institution dan mengirimnya ke view index
        $institutions = Institution::all();
        return view('pages.institution.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat institution baru
        return view('pages.institution.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Institution::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.institution.index')->with('success', 'Institution created successfully.');
    }

    public function show(string $id)
    {
        $institution = Institution::findOrFail($id);
        return view('pages.institution.show', compact('institution'));
    }

    public function edit(string $id)
    {
        $institution = Institution::findOrFail($id);
        return view('pages.institution.edit', compact('institution'));
    }

    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update data institution
        $institution = Institution::findOrFail($id);
        $institution->update([
            'name' => $request->name,
        ]);

        // Redirect ke halaman institution.index dengan pesan sukses
        return redirect()->route('admin.institution.index')->with('success', 'Institution updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institution $institution)
    {
        $institution->delete();

        return redirect()->route('admin.institution.index')->with('success', 'Institution berhasil dihapus.');
    }
}
