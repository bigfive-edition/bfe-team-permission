<?php

namespace Bfe\Teams\Models;

use Bfe\Teams\Teams;
use Illuminate\Database\Eloquent\Model;

abstract class Group extends Model
{


	/**
	 * Get the team that the ability belongs to.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team()
	{
		return $this->belongsTo(Teams::teamModel());
	}
}
