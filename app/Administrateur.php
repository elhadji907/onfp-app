<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 29 Jul 2019 09:56:52 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Administrateur
 * 
 * @property int $id
 * @property string $uuid
 * @property string $matricule
 * @property int $users_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\User $user
 * @property \Illuminate\Database\Eloquent\Collection $operateurs
 *
 * @package App
 */
class Administrateur extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'matricule',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'users_id');
	}

	public function operateurs()
	{
		return $this->hasMany(\App\Operateur::class, 'administrateurs_id');
	}
}
