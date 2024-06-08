<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
   
    public function index(): View
    {
        $kelass = Kelas::all();

        return view('kelass.index', compact('kelass'));
    }

    public function create(): View
    {
        return view('kelass.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Kelas::create($request->validated());

        return redirect()->route('kelass.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Kelas $kelas): View
    {
        return view('kelass.show', compact('kelas'));
    }

    public function edit(Kelas $kelas): View
    {
        return view('kelass.edit', compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas): RedirectResponse
    {
        $kelas->update($request->validated());

        return redirect()->route('kelass.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Kelas $kelas): RedirectResponse
    {
        $kelas->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
