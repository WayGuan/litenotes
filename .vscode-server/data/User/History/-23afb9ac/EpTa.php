<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    // protected $fillable = []; // fields that are allowed
    protected $guarded = []; // fields that are guarded

    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
