<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Services\FacilityService;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(FacilityService $facilityService)
    {
        $facilityArray = $facilityService->getFacilityArray();
        return view('facility', compact('facilityArray'));
    }
}
