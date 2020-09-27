<?php

namespace App\Http\Controllers;

use App\Models\Paste;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasteController extends Controller
{
    public function index() {
        //$pastes = Paste::where(['private' => false, 'password' => null])->latest()->paginate(5);
        $pastes = Paste::all();
       // dump($pastes->first());
        return Inertia::render('Paste', ['pastes' => $pastes]);
    }
}
