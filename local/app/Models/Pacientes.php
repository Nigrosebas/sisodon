<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Pacientes extends Model
{
    
	public $table = "pacientes";
    

	public $fillable = [
	    "nombre",
	    "apellido_p",
		"apellido_m",
		"rut",
		"sexo",
		"direccion",
		"telefono",
		"email"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string"
    ];

	public static $rules = [
	    "nombre" => 'required|alpha',
	    "apellido_p" => 'required|alpha',
		"apellido_m" => 'required|alpha',
		"rut" => 'required|numeric|unique:pacientes',
		"telefono" => 'required|numeric'
	];

	public static $updated_rules = [
	    "nombre" => 'required|alpha',
	    "apellido_p" => 'required|alpha',
		"apellido_m" => 'required|alpha',
		"rut" => 'required|numeric',
		"telefono" => 'required|numeric'
	];

}
