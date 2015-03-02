<?php namespace App\Http\Controllers\Admin;

use Session;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class AdminUserController extends Controller {

public function index()
	{
		$users = Admin::all();
    
        return view('admin.user.index')->withUsers($users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
        $user = Admin::where('username', '=', Request::input('username'))->get();
        
        if($user->count() < 1)
        {
            $user = new Admin;
            $user->username = Request::input('username');
            $user->password = md5(Request::input('password'));

            $user->save();
            
            return Response::json(array(
                  'status' => 'OK'
                , 'message' => 'Userul nu exista'
            ));
        }
        else
        {
            return Response::json(array(
                  'status' => 'not OK'
                , 'message' => 'Userul exista'
            ));
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = Admin::find($id);

        return view('admin.user.edit', [ 'user' => $user ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = Admin::find($id);
 
        $user->username = Request::input('username');
        $user->password = md5(Request::input('password'));
 
        $user->save();
 
        return redirect('/admin/user');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Admin::destroy($id);
 
        return redirect('/admin/user');
	}

}