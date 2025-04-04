<?php

namespace Database\Seeders;

use App\Models\EmpInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmpInfoSeeder extends Seeder
{
    public function run()
    {
        $employees = [
            [
                'emp_no' => 201,
                'emp_name' => 'Awesh Shaikh',
                'emp_city' => 'Surat',
                'gender' => 'Male',
                'DOB' => '2024-10-09',
                'mobile_no' => 123456,
                'aadhar_no' => 1234567,
                'emp_id' => 'awesh201',
                'password' => Hash::make('awesh@123')
            ],
            [
                'emp_no' => 202,
                'emp_name' => 'Zahid Shaikh',
                'emp_city' => 'Mumbai',
                'gender' => 'Male',
                'DOB' => '2024-10-12',
                'mobile_no' => 1231564,
                'aadhar_no' => 1221545,
                'emp_id' => 'zahid202',
                'password' => Hash::make('zahid@123')
            ],
            // Add other employees from the SQL data
        ];

        foreach ($employees as $employee) {
            EmpInfo::create($employee);
        }
    }
}