<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
class Curso extends Model
{
    use HasFactory;
    protected $table = "curso";

    // protected function name(): Attribute{
    //     return new Attribute(
    //         set: function($value){
    //             return strtolower($value);
    //         });
    // }

    // public function setNameAttribute($value)
    // {
    //    $value = Str::name($value);
    // }

    // protected function setNameAttribute(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn (string $value) => strtolower($value),
    //     );
    // }

    
}
