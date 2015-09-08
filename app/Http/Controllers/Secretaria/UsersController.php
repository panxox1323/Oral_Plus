<?php namespace Oral_Plus\Http\Controllers\Secretaria;


use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;

use Oral_Plus\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades;
use Oral_Plus\Http\Requests\CreateUserRequest;
use Oral_Plus\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;

use Oral_Plus\User;


class UsersController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        $this->beforeFilter('@findUser', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findUser(Route $route)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



    public function index(\Illuminate\Http\Request $request)
    {
        $users = User::name($request->get('name'))->type($request->get('type'))->orderBy('id', 'DESC')->paginate(10);

        return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
        $user = new User($request->all());
        $user->save();

        $message = $user->first_name.' '.$user->last_name.' fue creado correctamente';
        Session::flash('message', $message);
        return \Redirect::route('admin.users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $users = User::findOrFail($id);
		return view('admin.users.pagar', compact('users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
        return view('admin.users.edit')->with('user', $this->user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request,$id)
	{

        $this->user->fill($request->all());

        $this->user->save();

        $message = $this->user->first_name.' '.$this->user->last_name.' fue editado en la Base de Datos';

        Session::flash('message', $message);

        return redirect()->route('admin.users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->user->delete();

        $message = $this->user->full_name.' fue eliminado de la Base de Datos';

        if (\Request::ajax())
        {
            return response()->json([
                'first_name' => $this->user->first_name,
                'message' => $message
            ]);
        }

        Session::flash('message', $message);

        return redirect()->route('admin.users.index');
	}

    public function pagar($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.pagar', compact($user));
    }

}
