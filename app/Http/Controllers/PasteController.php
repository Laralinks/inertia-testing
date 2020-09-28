<?php

namespace App\Http\Controllers;

use App\Http\Resources\Pastes;
use App\Models\Paste;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasteController extends Controller
{

    public function index() {
        $pastes = Paste::where(['private' => false, 'password' => null])->latest()->get();
        return Inertia::render('Paste', ['pastes' => $pastes]);
    }
}
