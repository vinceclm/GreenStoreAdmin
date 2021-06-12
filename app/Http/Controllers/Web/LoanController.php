<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Web\Customer;
use App\Models\Web\Index;
use App\Models\Web\Languages;

class LoanController extends Controller
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

    private function computeLoanAmount($monthlyPay, $loanAmount, $length) {
        $INTEREST_RATE = 0.000281064133362452;

        $loanInterest = $loanAmount * $INTEREST_RATE * 30 * $length;
        $totalPayable = $loanAmount + $loanInterest;
        $ammortization = $totalPayable / $length;

        $maxAllowedAmount = ($monthlyPay * .6 * $length) / (1 + $INTEREST_RATE * 30 * $length);

        return [
            'loan_interest' =>  \number_format($loanInterest, 2) ,
            'total_payable' => \number_format($totalPayable, 2) ,
            'ammortization' => \number_format( $ammortization, 2) ,
            'max_allowed_amount' => \number_format($maxAllowedAmount, 2)
        ];
    }

    public function index(Request $request) {
        $result = array();
        $result['commonContent'] = $this->index->commonContent();
        $final_theme = $this->theme->theme();

        $monthlyPay = $request->input('monthlyPay');
        $desiredLoanAmount = $request->input('desiredLoanAmount');
        $lengthOfPayment = $request->input('lengthOfPayment');

        $loanData = $this->computeLoanAmount($monthlyPay, $desiredLoanAmount, $lengthOfPayment);

        return view('web.loan', [
            'result' => $result,
            'final_theme' => $final_theme,
            'monthly_pay' => $monthlyPay,2 ,
            'desired_loan_amount' => $desiredLoanAmount, 2 ,
            'length_of_payment' => $lengthOfPayment,
            'loan_data' => $loanData
        ]);
    }
}
