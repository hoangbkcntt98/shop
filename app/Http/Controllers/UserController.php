<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->isMethod('put') ? User::findOrFail($request->id): new User;
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->username = $request->input('username');
        $user->type = $request->input('type');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        if($user->save())
        {
            return new UserResource($user);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->delete())
        {
            return new UserResource($user);
        }
    }
   
    public function login(Request $request)
    {
        $url = $request->query('url');
        session(['url'=>$url]);
        if (session('data1')) {
            $user = Auth::id();
            return redirect()->away($url."/".$user);
        }
        else
        {
            session(['login'=>'1']);
            return redirect('login');

        }
    }
}
