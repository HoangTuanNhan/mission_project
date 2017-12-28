<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Business\UserBusiness;
class UserController extends Controller
{
    private $_userBusiness;
    public function __construct (UserBusiness $userBusiness){
        $this->_userBusiness = $userBusiness;
    }

    /**
     * function list users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request) {
        $name = $request->query('name');
        $email = $request->query('email');
        $phone = $request->query('contact_number');

        $listUser = $this->_userBusiness->search($name, $email, $phone);
        $listUser->appends($request->query());
        return view('users.list', compact('listUser'));
    }

    public function seachUser(Request $request) {

        $name = $request->query('name');
        $email = $request->query('email');
        $phone = $request->query('contact_number');

        $listUser = $this->_userBusiness->search($name, $email, $phone);
//        dd($listUser);
        return response()->json($listUser);
    }

    /** function show users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show() {
        return view('users.create');
    }

    public function saveUser() {
        return view('users.confirm');
    }
}
