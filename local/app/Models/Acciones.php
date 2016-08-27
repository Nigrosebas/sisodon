<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Acciones extends Model
{
    
	public $table = "acciones";
    

	public $fillable = [
		"accion",
		"precio"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	   "accion" => 'required'
	];

}
