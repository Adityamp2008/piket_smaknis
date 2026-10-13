<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('pages.Guru.dashboard', compact('data'));
    }
}
