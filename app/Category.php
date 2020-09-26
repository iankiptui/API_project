<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function types(){
        return $this->hasmany(Type::class);
    }
}