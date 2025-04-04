<?php

namespace Database\Seeders;

use App\Models\VotingDone;
use Illuminate\Database\Seeder;

class VotingDoneSeeder extends Seeder
{
    public function run()
    {
        VotingDone::create([
            'voter_id' => 23001,
            'voter_aadhar' => 32356,
            'voter_name' => 'Abbas Shaikh',
            'address' => 'Ahmedabad',
            'voter_mobile_no' => 23654521,
            'DOB' => '2024-10-09',
            'gender' => 'Male',
            'state' => 'Gujarat',
            'gave_vote_to' => 1
        ]);

        VotingDone::create([
            'voter_id' => 23002,
            'voter_aadhar' => 54315,
            'voter_name' => 'Zahid Shaikh',
            'address' => 'Mumbai',
            'voter_mobile_no' => 456541,
            'DOB' => '2024-10-09',
            'gender' => 'Male',
            'state' => 'Maharashtra',
            'gave_vote_to' => 1
        ]);
    }
}