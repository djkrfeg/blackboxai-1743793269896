<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EmpInfo;

class EmployeeController extends Controller
{
    public function showEmployeeLoginForm()
    {
        return view('employee_login');
    }

    public function employeeLogin(Request $request)
    {
        $credentials = $request->validate([
            'emp_id' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('employee')->attempt($credentials)) {
            return redirect()->intended('employee/dashboard');
        }

        return back()->withErrors([
            'emp_id' => 'Invalid credentials',
        ]);
    }

    public function dashboard()
    {
        return view('employee_dashboard');
    }

    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/employee/login');
    }
}