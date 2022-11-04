<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Bfe\Teams\Events\TeamCreated;
use Bfe\Teams\Events\TeamDeleted;
use Bfe\Teams\Events\TeamUpdated;
use Bfe\Teams\Models\Team as TeamModel;

class Team extends TeamModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];
}
