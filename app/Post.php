<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
// Formantando e Utilizando o Acessor.

    public function getCreatedAtAttribute($value){

        return Carbon::create($value)->format('d/m/Y - H:m');

    }

}
