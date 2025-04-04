<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateInfo extends Model
{
    use HasFactory;

    protected $table = 'candidate_info';
    protected $primaryKey = 'ID';
    public $timestamps = true;

    protected $fillable = [
        'candidate_no',
        'candidate_name',
        'candidate_email',
        'candidate_sign',
        'mobile_no',
        'aadhar_no'
    ];

    public function votes()
    {
        return $this->hasMany(VotingDone::class, 'gave_vote_to');
    }
}