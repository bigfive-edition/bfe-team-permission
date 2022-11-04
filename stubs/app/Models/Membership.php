<?php

namespace App\Models;

use Bfe\Teams\Models\Membership as ModelMembership;

class Membership extends ModelMembership
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
