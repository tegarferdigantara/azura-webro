<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TNGuild extends Model
{
    use HasFactory;

    protected $guarded = ['master_id'];

    protected $connection = 'RohanGame';

    protected $table = "TNGuild";

    public $timestamps = false;
}
