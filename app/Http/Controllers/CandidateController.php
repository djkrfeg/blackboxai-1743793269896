<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = CandidateInfo::all();
        return view('candidate_crud', compact('candidates'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'candidate_no' => 'required|unique:candidate_info',
            'candidate_name' => 'required',
            'candidate_email' => 'required|email|unique:candidate_info',
            'mobile_no' => 'required|unique:candidate_info',
            'aadhar_no' => 'required|unique:candidate_info'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        CandidateInfo::create($request->all());
        return redirect()->route('candidates.index')->with('success', 'Candidate added successfully');
    }

    public function update(Request $request, $id)
    {
        $candidate = CandidateInfo::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'candidate_no' => 'required|unique:candidate_info,candidate_no,'.$id,
            'candidate_name' => 'required',
            'candidate_email' => 'required|email|unique:candidate_info,candidate_email,'.$id,
            'mobile_no' => 'required|unique:candidate_info,mobile_no,'.$id,
            'aadhar_no' => 'required|unique:candidate_info,aadhar_no,'.$id
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $candidate->update($request->all());
        return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully');
    }

    public function destroy($id)
    {
        CandidateInfo::destroy($id);
        return redirect()->route('candidates.index')->with('success', 'Candidate removed successfully');
    }
}