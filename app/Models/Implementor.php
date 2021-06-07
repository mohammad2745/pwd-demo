<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implementor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ministry', 'sub_ministry', 'sector', 'sub_sector', 'division', 'subdivision'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user')->withTrashed();
    }
}
