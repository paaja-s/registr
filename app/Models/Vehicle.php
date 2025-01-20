<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
	// Tabulka pro model
	protected $table = 'registr_vozidel';
	
	// Primární klíč
	protected $primaryKey = 'pcv';
	
	// Pokud primární klíč není auto-incrementující
	public $incrementing = false;
	
	// Typ primárního klíče
	protected $keyType = 'integer';
}