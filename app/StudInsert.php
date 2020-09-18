<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class StudInsert extends Model
{
	protected $table = 'profiles';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'age','mobile', 'email',
	];
}

?>