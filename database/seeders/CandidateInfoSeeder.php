<?php

namespace Database\Seeders;

use App\Models\CandidateInfo;
use Illuminate\Database\Seeder;

class CandidateInfoSeeder extends Seeder
{
    public function run()
    {
        CandidateInfo::create([
            'candidate_no' => 1001,
            'candidate_name' => 'SODHI',
            'candidate_email' => 'hehe@gmail.com',
            'candidate_sign' => '📺',
            'mobile_no' => 5456456,
            'aadhar_no' => 656465
        ]);

        CandidateInfo::create([
            'candidate_no' => 1002,
            'candidate_name' => 'BHIDE',
            'candidate_email' => 'bhide@gmail.com',
            'candidate_sign' => '👍',
            'mobile_no' => 4156456,
            'aadhar_no' => 22156454
        ]);
    }
}