<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = ['title'];
    public function notes()
    {
        return $this->hasMany(note::class);
    }
}
