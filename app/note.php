<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $fillable = ['note'];
    public function pages()
    {
        return $this->belongsTo(page::class);
    }
}
