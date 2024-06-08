<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('title', 'Guru');
        })
        ->where('kelas_id', 1) // Kriteria kelas 7
        ->get();

        // Mengirim data pengguna ke view
        return view('admin.guru.index', compact('users'));
    }
}
