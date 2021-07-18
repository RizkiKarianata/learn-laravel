<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DefaultModel;
use Illuminate\Support\Facades\Hash;
use Auth;

class DefaultController extends Controller
{
	public function __construct() {
		$this->DefaultModel = new DefaultModel();
	}
	public function login() {
        if(Auth::user()) {
            return redirect()->route('home');
        }
		return view('v_login');
	}
	public function register() {
        if(Auth::user()) {
            return redirect()->route('home');
        }
		$data = [
			'classes' => $this->DefaultModel->getData()
		];
		return view('v_register', $data);
	}
	public function reset() {
        if(Auth::user()) {
            return redirect()->route('home');
        }
		return view('v_reset');
	}
	public function reset_password() {

	}
	public function home() {
        if(!Auth::user()) {
            return redirect()->route('/');
        }
		$data = [
			'students' => $this->DefaultModel->getStudent(),
			'teachers' => $this->DefaultModel->getTeacher(),
			'schedules' => $this->DefaultModel->getSchedule(),
			'classes' => $this->DefaultModel->getClass()
		];
		return view('v_home', $data);
	}
	public function account() {
        if(!Auth::user()) {
            return redirect()->route('/');
        }
		return view('v_account');
	}
    public function students_store(Request $request)
    {
        Request()->validate([
            'fk_classes' => 'required',
            'nis' => 'required|min:4|max:16|unique:tb_students,nis',
            'name' => 'required|min:5|max:100',
            'phone_number' => 'required|min:11|max:20|unique:tb_students,phone_number',
            'email_address' => 'required|min:5|max:50|unique:tb_students,email_address'
        ]);
        $data = [
            'fk_classes' => Request()->fk_classes,
            'nis' => Request()->nis,
            'name' => Request()->name,
            'phone_number' => Request()->phone_number,
            'email_address' => Request()->email_address,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $data_users = [
            'username' => Request()->nis,
            'name' => Request()->name,
            'password' => Hash::make(Request()->nis),
            'level' => "Student",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->DefaultModel->addDataStudent($data);
        $this->DefaultModel->addDataUser($data_users);
        return redirect()->route('/')->with('message', 'Successfully added data');
    }
    public function account_update(Request $request, $id)
    {
        Request()->validate([
            'name' => 'required|min:5|max:100'
        ]);
        $data = [
            'name' => Request()->name,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        if(Auth::user()->level == "Student") {
            $this->DefaultModel->updateDataStudent(Auth::user()->username, $data);
        }
        $this->DefaultModel->updateDataUser(Auth::user()->username, $data);
        return redirect()->route('account')->with('message', 'Successfully changed data');
    }
}
