<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Pagination\LengthAwarePagination;
use Illuminate\Database\Query\Builder;
use Redirect;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
      $user = User::where('username',$request->username)
      ->where('password',$request->password)
      ->get() ;

      if (count($user) == 0) {
      return Redirect::to('/');
      }
      else {
      // Store a piece of data in the session...
      $_SESSION['username'] = $request->username;
      $list = User::where('username', $request->username)->get();
      foreach ($list as $value) {
      $_SESSION['id_user'] = $value->id_user;
      $_SESSION['username'] = $value->username;
      $_SESSION['password'] = $value->password;
      }
      return Redirect::to('/dashboard');
    }
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
      session_destroy();
      return Redirect::to('/')->with('message', 'Anda Telah Berhasil Log Out');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
