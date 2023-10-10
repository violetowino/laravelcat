<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleMaps\GoogleMaps;
use GoogleMaps\Direction;

class MapController extends Controller
{
    public function index()
    {
        return view('map.index');
    } //End Method


    public function getDirections(Request $request)
    {
        $origin = $request->input('origin');
        $destination = $request->input('destination');

        $googleMaps = new GoogleMaps();
        $directions = new Direction();
        $directions->setOrigin($origin);
        $directions->setDestination($destination);

        $response = $googleMaps->load('directions')->get($directions);

        return response()->json($response);
    } //End Method
}
