@extends('web.layout')

@section('content')
<div class="container align-items-center py-3">

    <form name="signup" class="form-validate w-100" action="{{ URL::to('/loan')}}" method="get">
        <div class="form-group mb-3">
            <div class="col-12">
                <label for="inlineFormInputGroup">
                    <strong style="color: red;">*</strong>@lang('labels.MonthlyPay')
                </label>
            </div>

            <div class="input-group col-12">
                <input name="monthlyPay" type="number" class="form-control field-validate" id="monthlyPay"
                    placeholder="@lang('labels.MonthlyPayPlaceholder')" value="{{$monthly_pay}}">
                <span class="form-text text-muted error-content" hidden>@lang('labels.MonthlyPayPlaceholder')</span>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="col-12">
                <label for="inlineFormInputGroup">
                    <strong style="color: red;">*</strong>@lang('labels.DesiredLoanAmount')
                </label>
            </div>

            <div class="input-group col-12">
                <input name="desiredLoanAmount" type="number" class="form-control field-validate" id="desiredLoanAmount"
                    placeholder="@lang('labels.DesiredLoanAmountPlaceholder')" value="{{ $desired_loan_amount }}">
                <span class="form-text text-muted error-content"
                    hidden>@lang('labels.DesiredLoanAmountPlaceholder')</span>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="col-12">
                <label for="inlineFormInputGroup">
                    <strong style="color: red;">*</strong>@lang('labels.LengthOfPayment')
                </label>
            </div>

            <div class="input-group col-12">
                <input name="lengthOfPayment" type="number" class="form-control field-validate" id="lengthOfPayment"
                    placeholder="@lang('labels.LengthOfPaymentPlaceholder')" value="{{ $length_of_payment }}">
                <span class="form-text text-muted error-content"
                    hidden>@lang('labels.LengthOfPaymentPlaceholder')</span>
            </div>
        </div>

        <div class="mb-3 text-right form-group container-fluid">
            <button class="btn btn-secondary" type="submit">
                Compute
            </button>
        </div>
    </form>

    <div class="container-fluid mt-3 pt-3 border-top" id="loan-computation-field">
        <div class="mb-2">
            <h2>Loan Details</h2>
            <div class="mb-3">
                <p class="font-weight-bold mb-0">Loan Amount</p>
                <h4 class="text-lg">P {{ number_format($desired_loan_amount, 2) }}</h4>
            </div>
            <div class="mb-3">
                <p class="font-weight-bold mb-0">Length of Payment</p>
                <h4 class="text-lg"> {{ $length_of_payment }} Month/s</h4>
            </div>
        </div>

        <div class="mb-2">
            <h2>Loan Payment Details</h2>
            <div class="mb-3">
                <p class="font-weight-bold mb-0">Loan Interest</p>
                <h4 class="text-lg">P {{ $loan_data['loan_interest'] }}</h4>
            </div>
            <div class="mb-3">
                <p class="font-weight-bold mb-0">Total Amount Payable</p>
                <h4 class="text-lg">P {{ $loan_data['total_payable'] }}</h4>
            </div>
            <div class="mb-3">
                <p class="font-weight-bold mb-0">Monthly Ammortization</p>
                <h4 class="text-lg">P {{ $loan_data['ammortization'] }}</h4>
            </div>
            <div class="mb-4">
                <p class="font-weight-bold mb-0">Maximum Allowed Loan Amount</p>
                <h4 class="text-lg">P {{ $loan_data['max_allowed_amount'] }}</h4>
            </div>
        </div>

        @if ($monthly_pay != '' && $desired_loan_amount != '' && $length_of_payment != '')
        <div class="mb-3 text-right form-group container-fluid">
            <form action="/loan/apply" method="get">
                @csrf
                <input type="hidden" name="monthlyPay" value="{{$monthly_pay}}">
                <input type="hidden" name="desiredLoanAmount" value="{{$desired_loan_amount}}">
                <input type="hidden" name="lengthOfPayment" value="{{$length_of_payment}}">
                <button class="btn btn-secondary" type="submit">
                    Apply for this Loan
                </button>
            </form>
        </div>

        @endif

    </div>
</div>
@endsection
