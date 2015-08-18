<?php
/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 10/07/2015
 * Time: 5:12
 */

namespace Oral_Plus\Http\Controllers;


use Oral_Plus\User;

class UsersController extends Controller
{

    public function index()
    {
       return view('home');
    }

    public function getIndex(){


    }
}