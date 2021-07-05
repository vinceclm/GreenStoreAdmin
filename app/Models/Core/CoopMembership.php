<?php


namespace App\Models\Core;

use App\CoopMembershipMeta;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class CoopMembership extends Model
{
    protected $table = 'coop_memberships';
    protected $fillable = ['user_id'];
    protected $casts = [
        'member_information' => 'array'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    public function metas() {
        return $this->hasMany(CoopMembershipMeta::class, 'coop_membership_id');
    }
}
