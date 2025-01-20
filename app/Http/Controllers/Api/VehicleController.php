<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
	
	public function get(int $pcv)
	{
		$vehicle = Vehicle::find($pcv);
		
		if (!$vehicle) {
			return response()->json(['message' => 'Vehicle not found'], 404);
		}
		
		$camelCasedData = collect($vehicle->toArray())->mapWithKeys(function ($value, $key) {
			return [Str::camel($key) => $value];
		});
		
			return response()->json($camelCasedData);
	}
	
	public function search(Request $request)
	{
		$query = $request->input('vin', '');
		
		
		// Požadujeme minimálně 3 znaky
		if (strlen($query) < 3) {
			return response()->json(['error' => 'Please provide at least 3 characters.'], 400);
		}
		
		// Hledání ve sloupci `vin`
		$results = Vehicle::where('vin', 'like', $query . '%')
		->select('pcv', 'vin', 'tovarni_znacka', 'typ')
		->get();
		
		// Pokud je nalezeno více než 20 záznamů
		if ($results->count() > 5) {
			return response()->json(['found' => $results->count()]);
		}
		
		$camelCasedData = collect($results->toArray())->mapWithKeys(function ($value, $key) {
			return [Str::camel($key) => $value];
		});
		
		// Jinak vracíme seznam vozidel
		return response()->json($camelCasedData);
	}
}
