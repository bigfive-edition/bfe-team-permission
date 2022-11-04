<?php

namespace App\Models;

use Bfe\Teams\Teams;
use Bfe\Teams\Models\Permission as PermissionInvitation;

class Permission extends PermissionInvitation
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'team_id', 'ability_id', 'entity_id', 'entity_type', 'forbidden'];

	/**
	 * Get the team that the invitation belongs to.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team()
	{
		return $this->belongsTo(Teams::teamModel());
	}
}