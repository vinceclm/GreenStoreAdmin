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
        if(!$monthlyPay || !$loanAmount || !$length) {

        return [
            'loan_interest' =>  \number_format(0, 2) ,
            'total_payable' => \number_format(0, 2) ,
            'ammortization' => \number_format( 0, 2) ,
            'max_allowed_amount' => \number_format(0, 2)
        ];
        }
        $m = 2.66666666 * (10 ** -7);
        $INTEREST_RATE = ($m * $length) + 0.00028106413336252;

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
            'monthly_pay' => $monthlyPay,
            'desired_loan_amount' => $desiredLoanAmount,
            'length_of_payment' => $lengthOfPayment,
            'loan_data' => $loanData
        ]);
    }

    public function apply(Request $request) {
        if($request->input('monthlyPay') == '')
        return \redirect('/loan');

        $result = array();
        $result['commonContent'] = $this->index->commonContent();
        $final_theme = $this->theme->theme();

        $monthlyPay = $request->input('monthlyPay');
        $desiredLoanAmount = $request->input('desiredLoanAmount');
        $lengthOfPayment = $request->input('lengthOfPayment');

        return view('web.loan-application', [
            'result' => $result,
            'final_theme' => $final_theme,
            'monthly_pay' => $monthlyPay,
            'desired_loan_amount' => $desiredLoanAmount,
            'length_of_payment' => $lengthOfPayment,
        ]);
    }
}
