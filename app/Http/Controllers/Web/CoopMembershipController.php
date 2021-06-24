<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $first_name = auth()->guard('customer')->user()->first_name;
        $last_name = auth()->guard('customer')->user()->last_name;

        /**
         * Uncomment to show data
         */
        // dd([
        //     'first_name' => $first_name,
        //     'last_name' => $last_name
        // ]);

        return view('web.coopmembership', [
            'result' => $result,
            'final_theme' => $final_theme,
        ]);
    }
}
