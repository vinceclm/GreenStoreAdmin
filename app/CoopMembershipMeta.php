<?php

namespace App;

use App\Models\Core\CoopMembership;
use Illuminate\Database\Eloquent\Model;

class CoopMembershipMeta extends Model
{
    protected $table = 'coop_membership_metas';
    protected $fillable = ['member_information', 'family_profile', 'banking_information', 'coop_membership_id'];
    protected $casts = [
        'member_information' => 'array',
        'family_profile' => 'array',
        'banking_information' => 'array',
        'documents' => 'array'
    ];

    public static function defaultMeta() {
        return [
            'member_information' => [
                'first_name' => null,
                'middle_name' => null,
                'last_name' => null,
                'place_of_birth' => null,
                'date_of_birth' => null,
                'complete_address' => null,
                'educational_attainment' => null,
                'degree' => null,
                'monthly_income' => null,
                'income_source' => null,
                'sss' => null,
                'tin' => null,
                'department' => null,
                'local_no' => null,
                'cellphone_no' => null,
            ],
            'family_profile' => [
                'spouse' => [
                    'name' => null,
                    'contact_no' => null,
                    'birthdate' => null,
                    'occupation' => null,
                    'educational_attainment' => null,
                    'employer' => null,
                    'monthly_income' => null,
                    'office_address' => null,
                ],
                'parents' => [
                    'father' => [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                        'home_address' => null,
                    ],
                    'mother' => [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                        'home_address' => null,
                    ],
                ],
                'beneficiaries' => [
                    [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                    ],
                    [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                    ],
                    [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                    ],
                    [
                        'name' => null,
                        'occupation' => null,
                        'birthdate' => null,
                    ],
                ]
            ],
            'banking_information' => [
                'gcash' => null,
                'bank' => [
                    'name' => null,
                    'branch' => null,
                    'account_number' => null
                ]
            ],
        ];
    }


    protected function membership() {
        return $this->belongsTo(CoopMembership::class, 'coop_membership_id');
    }
}
