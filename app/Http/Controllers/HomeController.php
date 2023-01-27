<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Services\FacilityService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(FacilityService $facilityService)
    {
        $facilityArray = $facilityService->getFacilityArray();
        return view('home', compact('facilityArray'));
    }
}
