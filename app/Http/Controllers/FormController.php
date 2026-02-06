<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showRegisterForm()
    {
        return view('Register');
    }

    public function processRegister(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        if (empty($firstName) || empty($lastName)) {
            return redirect()->back()->with('error', 'Nama depan dan belakang harus diisi!');
        }

        return redirect()->route('welcome')
            ->with('first_name', $firstName)
            ->with('last_name', $lastName);
    }

    public function showWelcome(Request $request)
    {
        $firstName = $request->session()->get('first_name', 'Tamu');
        $lastName = $request->session()->get('last_name', '');

        return view('welcome', compact('firstName', 'lastName'));
    }
}