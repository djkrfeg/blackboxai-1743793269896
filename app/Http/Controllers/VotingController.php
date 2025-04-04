<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VotingDone;
use App\Models\CandidateInfo;
use Illuminate\Support\Facades\Validator;

class VotingController extends Controller
{
    public function showVotingForm()
    {
        $candidates = CandidateInfo::all();
        return view('voter_id_form', compact('candidates'));
    }

    public function submitVote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'voter_aadhar' => 'required|unique:voting_done',
            'voter_name' => 'required',
            'address' => 'required',
            'voter_mobile_no' => 'required|unique:voting_done',
            'DOB' => 'required|date|before:today',
            'gender' => 'required|in:Male,Female,Other',
            'state' => 'required|in:Gujarat,Maharashtra,Uttar Pradesh,Rajasthan',
            'gave_vote_to' => 'required|exists:candidate_info,ID'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        VotingDone::create($request->all());
        return redirect()->route('voting.result')->with('success', 'Vote submitted successfully!');
    }

    public function showResults()
    {
        $results = VotingDone::with('candidate')
            ->select('gave_vote_to', \DB::raw('count(*) as total'))
            ->groupBy('gave_vote_to')
            ->get();

        return view('voting_result', compact('results'));
    }
}