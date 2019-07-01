<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\ModelUser;

class UserDetailController extends Controller
{
    public function view(){
        echo"<h1 align='center'>Hai World</h1>";
        return ModelUser::find(1);
    }
}
