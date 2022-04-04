<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersManagement extends Model
{
	protected $table = 'users_management';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'address', 'dob', 'status', 'education', 'pincode', 'profile_pic', 'country', 'city'
	];
}