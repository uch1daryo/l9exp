<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $facilities = Facility::orderBy('id')->get();
        $facilityArray = [];
        foreach ($facilities as $facility) {
            array_push($facilityArray, [
                'id' => $facility->id,
                'name' => $facility->name,
            ]);
        }
        return view('home', compact('facilityArray'));
    }
}
