<?php

namespace Tests\Unit;

use App\Services\FacilityService;
use Tests\TestCase;

class FacilityServiceTest extends TestCase
{
    public function testGetFacilityArray()
    {
        $facilityService = new FacilityService;
        $facilityArray = $facilityService->getFacilityArray();
        $this->assertIsArray($facilityArray);
    }
}
