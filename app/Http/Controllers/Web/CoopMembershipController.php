<?php

namespace App\Http\Controllers\Web;

use App\CoopMembershipMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\CoopMembership;
use App\Models\Web\Index;
use App\Models\Web\Customer;
use App\Models\Web\Languages;
use Auth;

class CoopMembershipController extends Controller
{
    public function __construct(
        Index $index,
        Languages $languages,
        Customer $customer
    ) {
        $this->index = $index;
        $this->languages = $languages;
        $this->customer = $customer;
        $this->theme = new ThemeController();
    }

    public function index(){
        $result = array();
        $result['commonContent'] = $this->index->commonContent();
        $final_theme = $this->theme->theme();

        try {
            $registration_meta = auth()->guard('customer')->user()->membership->metas->last();
        } catch (\Throwable $th) {
            $registration_meta = CoopMembershipMeta::defaultMeta();
        }
        // dd($registration_meta);

        return view('web.coop-membership.register', [
            'result' => $result,
            'final_theme' => $final_theme,
            'meta' => $registration_meta
        ]);
    }

    public function register(Request $request) {
        $coop_membership = auth()->guard('customer')->user()->membership;

        if(!$coop_membership) {
            $customer_user_id = auth()->guard('customer')->user()->id;
            $coop_membership = new CoopMembership(['user_id' => $customer_user_id]);
            $coop_membership->save();
        }

        $coop_membership_meta = new CoopMembershipMeta([
            'coop_membership_id' => $coop_membership->id,
            'member_information' => $request->member_information,
            'family_profile' => $request->family_profile,
            'banking_information' => $request->banking_information
        ]);
        $coop_membership_meta->save();

        return \redirect('/coop-membership');
    }
}
