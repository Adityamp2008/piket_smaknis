<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $data = Siswa::all();
        return view('pages.Siswa.dashboard', compact('data'));
    }  
}