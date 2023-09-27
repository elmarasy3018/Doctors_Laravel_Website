<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        // return $doctors;
        return view('index', ['doctors' => $doctors]);
    }

    public function show(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        // return $doctor;
        return view('show', ['doctor' => $doctor]);
    }
    
    public function carousel()
    {
        $doctors = Doctor::all();
        // return $doctors;
        return view('welcome', ['doctors' => $doctors]);
    }
}
