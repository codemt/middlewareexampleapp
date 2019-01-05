<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use App\User;

class AdminController extends Controller
{
    //

    public function adminLogin(){


        $user = Auth::user();
        
        if($user != null){

               if($user->role_id ==1){


                    return "User is Admin";

               }
               if($user->role_id ==2){


                return "User is Technician";

           }
           if($user->role_id == 3){

                return "User is Client";

           }

        }
        else{


                return redirect('/'); 

        }

        return redirect('/');  

    }
}
