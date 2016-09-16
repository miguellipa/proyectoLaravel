<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
	public $table = "productos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"descripcion",
		"stock"
	];

	public static $rules = [
	    "nombre" => "required",
		"descripcion" => "required",
		"stock" => "required"
	];

}
