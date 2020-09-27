<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PasteController extends Controller
{
    public function index() {
        $pastes = Paste::where(['private' => false, 'password' => null])->latest()->paginate(5);
        return Inertia::render('Paste', ['pastes', $pastes]);
    }
}
