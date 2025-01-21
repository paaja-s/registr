<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Info(
 *     title="Vehicle register API",
 *     version="1.0.0",
 *     description="API for obtaining inormation about registered vehicles"
 * )
 * @OA\Tag(
 *     name="Vehicles",
 *     description="Endpoints related to vehicle operations"
 * )
 */
class VehicleController extends Controller
{
	/**
	 * @OA\Get(
	 *     path="/api/registr",
	 *     summary="Vehicle by id",
	 *     description="Search vehicle in the registry using the id ('pcv' column). The response is object of vehicle",
	 *     tags={"Vehicles"},
	 *     @OA\Parameter(
	 *         name="id",
	 *         in="path",
	 *         description="Vehicle id",
	 *         required=true,
	 *         @OA\Schema(type="integer", example="26")
	 *     ),
	 *     @OA\Response(
	 *         response=200,
	 *         description="Object vehicle",
	 *         @OA\JsonContent(
	 *             ref="#/components/schemas/Vehicle"
	 *         )
	 *     ),
	 *     @OA\Response(
	 *         response=400,
	 *         description="Vehicle not found",
	 *         @OA\JsonContent(
	 *             @OA\Property(property="error", type="string", example="Vehicle not found")
	 *         )
	 *     )
	 * )
	 */
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
	
	/**
	 * @OA\Post(
	 *     path="/api/search",
	 *     summary="Search vehicles by VIN",
	 *     description="Search vehicles in the registry using the VIN. The response includes vehicles only if the count is below 20, otherwise it returns the count of found results.",
	 *     tags={"Vehicles"},
	 *     @OA\Parameter(
	 *         name="query",
	 *         in="query",
	 *         description="The starting characters of the VIN to search for",
	 *         required=true,
	 *         @OA\Schema(type="string", example="XYZ")
	 *     ),
	 *     @OA\Response(
	 *         response=200,
	 *         description="List of vehicles or count of found results",
	 *         @OA\JsonContent(
	 *             oneOf={
	 *                 @OA\Schema(
	 *                     type="array",
	 *                     @OA\Items(ref="#/components/schemas/VehicleShort")
	 *                 ),
	 *                 @OA\Schema(
	 *                     type="object",
	 *                     @OA\Property(property="found", type="integer", example=4000)
	 *                 )
	 *             }
	 *         )
	 *     ),
	 *     @OA\Response(
	 *         response=400,
	 *         description="Invalid query input",
	 *         @OA\JsonContent(
	 *             @OA\Property(property="error", type="string", example="Please provide at least 3 characters.")
	 *         )
	 *     )
	 * )
	 */
	
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
