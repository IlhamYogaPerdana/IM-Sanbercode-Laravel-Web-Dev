<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('register'); // Menampilkan halaman register
    }

    public function processForm(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        return view('welcome', [
            'first_name' => $first_name,
            'last_name' => $last_name,
        ]);
    }
}
