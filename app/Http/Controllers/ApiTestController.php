<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @group Resource management
 *
 * APIs for managing resources
 * 
 * @subgroup Servers
 * @subgroupDescription Do stuff with servers
 */

class ApiTestController extends Controller
{    
    /**
     * Get User Information
     * 
     * Test User deatils
     * 
     * @queryParam is notthingclear
     * 
     * @authenticated
     *
     * @return void
     */
    public function index(Request $request)
    {
        return response()->json([
            'status' => true,
            'message' => 'Okay'
        ],200);
    }
}
