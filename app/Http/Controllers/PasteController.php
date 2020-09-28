<?php

namespace App\Http\Controllers;

use App\Http\Resources\Pastes;
use App\Models\Paste;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasteController extends Controller
{

    public function index() {
        //$query = Paste::where(['private' => false, 'password' => null])->latest()->paginate();
        //$pastes = Pastes::collection($query);
        $pastes = Paste::where(['private' => false, 'password' => null])->latest()->get();
        //$pastes = Paste::all();
       // dump($pastes->first());
        return Inertia::render('Paste', ['pastes' => $pastes]);
    }
}
