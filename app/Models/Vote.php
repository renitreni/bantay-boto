<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public static function getVerifiedCount($id)
    {
        return (new self())->query()->where('personnel_id', $id)->where('status', 'Verified')->count();
    }
}
