<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{    
    /**
     * Method index
     *
     * @return Joson
     */
    public function index(Request $request)
    {
         $users = User::paginate($request->page);
       //return UserResource::collection($users);
        //return $this->getSuccess('',200,'');
        return response()->json([
            'status' => true,
            'message' => 'User informations',
            'data' => UserResource::collection($users)
        ]);

    }    
    /**
     * Test the program
     *
     * @return void
     */
    public function update(RegisterRequest $request,$id){

       $user =  User::findOrFail($id);
       
       $user->update(['password' => Hash::make($request->password)]);

       return response()->json([
            'status' => true,
       ]);
    }
}
