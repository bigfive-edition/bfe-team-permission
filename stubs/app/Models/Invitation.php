<?php

namespace App\Models;

use Bfe\Teams\Teams;
use Bfe\Teams\Models\Invitation as ModelInvitation;

class Invitation extends ModelInvitation
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'email', 'role' ];

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