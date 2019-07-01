<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    public function detail(){
        return $this->hasOne("App\Book","id");
    }
}
