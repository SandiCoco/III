<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public static function customers(){
        return $customers = json_decode(file_get_contents(base_path('database.json')));
    }
}
