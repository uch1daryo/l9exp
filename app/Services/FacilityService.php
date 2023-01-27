<?php

namespace App\Services;

use App\Models\Facility;

final class FacilityService
{
    public function getFacilityArray()
    {
        $facilities = Facility::orderBy('id')->get();
        $facilityArray = [];
        foreach ($facilities as $facility) {
            array_push($facilityArray, [
                'id' => $facility->id,
                'name' => $facility->name,
            ]);
        }
        return $facilityArray;
    }
}
