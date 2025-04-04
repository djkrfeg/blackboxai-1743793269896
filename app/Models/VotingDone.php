<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingDone extends Model
{
    use HasFactory;

    protected $table = 'voting_done';
    protected $primaryKey = 'voter_id';
    public $timestamps = true;

    protected $fillable = [
        'voter_aadhar',
        'voter_name',
        'address',
        'voter_mobile_no',
        'DOB',
        'gender',
        'state',
        'gave_vote_to'
    ];

    public function candidate()
    {
        return $this->belongsTo(CandidateInfo::class, 'gave_vote_to');
    }
}