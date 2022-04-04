<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'city_name', 'country',
	];
}