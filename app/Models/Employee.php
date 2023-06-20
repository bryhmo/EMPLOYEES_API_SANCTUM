<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected function password():Attrubute
    {
        return Attribute::make(
            set:fn($value)=> bcrypt($value)
        );

    }
//     protected function password():Attrubute
//     {
//         return Attribute::make(
//             get:fn($value)=> bcrypt($value)
//         );

//     }
 }
