@extends('web.layout')
@section('content')

<section class="wishlist-content my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="heading">
                    <h2>
                        @lang('website.My Account')
                    </h2>
                    <hr>
                </div>

                @include('web.myaccountnav')

            </div>
            <div class="col-12 col-lg-9 ">
                <form action="{{ url('/coop-membership/register') }}" method="post">
                    @csrf
                    <div class="heading">
                        <h2>
                            @lang('website.Information Sheet')
                        </h2>
                        <hr>
                    </div>

                    <div class="col-12 media-main p-3 mb-3">
                        <h4 class="m-3">@lang('website.Member Information')</h4>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="firstName" class=" col-form-label">@lang('website.First Name')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[first_name]"
                                        class="form-control field-validate" id="inputName"
                                        placeholder="@lang('website.First Name')"
                                        value="{{ $meta['member_information']['first_name'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="middleName" class="col-form-label">@lang('website.Middle Name')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[middle_name]"
                                        placeholder="@lang('website.Middle Name')" class="form-control field-validate"
                                        id="middleName" value="{{ $meta['member_information']['middle_name'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastName" class="col-form-label">@lang('website.Last Name')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[last_name]"
                                        placeholder="@lang('website.Last Name')" class="form-control field-validate"
                                        id="lastName" value="{{ $meta['member_information']['last_name'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="placeOfBirth" class="col-form-label">@lang('website.Place of
                                        Birth')</label>
                                    <input type="text" {{-- 'required' --}}
                                        placeholder="@lang('website.Place of Birth')"
                                        class="form-control field-validate" id="placeOfBirth"
                                        name="member_information[place_of_birth]"
                                        value="{{ $meta['member_information']['place_of_birth'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dateOfBirth" class="col-form-label">@lang('website.Date of
                                        Birth')</label>
                                    <input type="date" {{-- 'required' --}} name="member_information[date_of_birth]"
                                        placeholder="@lang('website.Date of Birth')" class="form-control field-validate"
                                        id="dateOfBirth" value="{{ $meta['member_information']['date_of_birth'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="completeAddress" class="col-form-label">@lang('website.Complete
                                    Address')</label>
                                <input type="text" {{-- 'required' --}} name="member_information[complete_address]"
                                    class="form-control field-validate" id="inputName"
                                    placeholder="@lang('website.Complete Address')" id="dateOfBirth"
                                    value="{{ $meta['member_information']['complete_address'] }}">
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="educationalAttainment" class="col-form-label">@lang('website.Educational
                                        Attainment')</label>
                                    <input type="text" {{-- 'required' --}}
                                        name="member_information[educational_attainment]"
                                        placeholder="@lang('website.Educational Attainment')"
                                        class="form-control field-validate" id="educationalAttainment" id="dateOfBirth"
                                        value="{{ $meta['member_information']['educational_attainment'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="degree" class="col-form-label">@lang('website.Degree/Course')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[degree]"
                                        placeholder="@lang('website.Degree/Course')" class="form-control field-validate"
                                        id="degree" id="dateOfBirth"
                                        value="{{ $meta['member_information']['degree'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="monthlyIncome" class="col-form-label">@lang('website.Monthly
                                        Income')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[monthly_income]"
                                        placeholder="@lang('website.Monthly Income')"
                                        class="form-control field-validate" id="monthlyIncome" id="dateOfBirth"
                                        value="{{ $meta['member_information']['monthly_income'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="incomeSources" class="col-form-label">@lang('website.Other Sources of
                                        Income')</label>

                                    <input type="text" {{-- 'required' --}} name="member_information[income_source]"
                                        placeholder="@lang('website.Other Sources of Income')"
                                        class="form-control field-validate" id="incomeSources" id="dateOfBirth"
                                        value="{{ $meta['member_information']['income_source'] }}">

                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sss" class="col-form-label">@lang('website.SSS No.')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[sss]"
                                        placeholder="@lang('website.SSS No.')" class="form-control field-validate"
                                        id="sss" id="dateOfBirth" value="{{ $meta['member_information']['sss'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tin" class="col-form-label">@lang('website.TIN No.')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[tin]"
                                        placeholder="@lang('website.TIN No.')" class="form-control field-validate"
                                        id="tin" id="dateOfBirth" value="{{ $meta['member_information']['tin'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="department" class="col-form-label">@lang('website.Department
                                        Area')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[department]"
                                        placeholder="@lang('website.Department Area')"
                                        class="form-control field-validate" id="department" id="dateOfBirth"
                                        value="{{ $meta['member_information']['department'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="localNo" class="col-form-label">@lang('website.Local No.')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[local_no]"
                                        placeholder="@lang('website.Local No.')" class="form-control field-validate"
                                        id="localNo" id="dateOfBirth"
                                        value="{{ $meta['member_information']['local_no'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cellphoneNo" class="col-form-label">@lang('website.Cellphone
                                        No.')</label>
                                    <input type="text" {{-- 'required' --}} name="member_information[cellphone_no]"
                                        placeholder="@lang('website.Cellphone No.')" class="form-control field-validate"
                                        id="cellphoneNo" id="dateOfBirth"
                                        value="{{ $meta['member_information']['cellphone_no'] }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="m-3">@lang('Family Profile')</h4>
                        <h5 class="m-3">@lang('I. Spouse')</h5>

                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="spouseName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate" id="spouseName"
                                    name="family_profile[spouse][name]"
                                    value="{{ $meta['family_profile']['spouse']['name'] }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="spouseContactNo" class="col-form-label">@lang('website.Contact
                                        No.')</label>
                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Contact No.')"
                                        class="form-control field-validate" id="spouseContactNo"
                                        name="family_profile[spouse][contact_no]"
                                        value="{{ $meta['family_profile']['spouse']['contact_no'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouseBirthdate"
                                        class="col-form-label">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="spouseBirthdate"
                                        name="family_profile[spouse][birthdate]"
                                        value="{{ $meta['family_profile']['spouse']['birthdate'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="spouseOccupation"
                                        class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="spouseOccupation"
                                        name="family_profile[spouse][occupation]"
                                        value="{{ $meta['family_profile']['spouse']['occupation'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouseEducationalAttainment"
                                        class="col-form-label">@lang('website.Educational Attainment')</label>
                                    <input type="text" {{-- 'required' --}}
                                        placeholder="@lang('website.Educational Attainment')"
                                        class="form-control field-validate" id="spouseEducationalAttainment"
                                        name="family_profile[spouse][educational_attainment]"
                                        value="{{ $meta['family_profile']['spouse']['educational_attainment'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="spouseEmployer" class="col-form-label">@lang('website.Employer')</label>
                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Employer')"
                                        class="form-control field-validate" id="spouseEmployer"
                                        name="family_profile[spouse][employer]"
                                        value="{{ $meta['family_profile']['spouse']['employer'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouseMonthlyIncome" class="col-form-label">@lang('website.Monthly
                                        Salary')</label>
                                    <input type="text" {{-- 'required' --}}
                                        placeholder="@lang('website.Monthly Salary')"
                                        class="form-control field-validate" id="spouseMonthlyIncome"
                                        name="family_profile[spouse][monthly_income]"
                                        value="{{ $meta['family_profile']['spouse']['monthly_income'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="spouseOfficeAddress" class="col-form-label">@lang('website.Office
                                    Address')</label>

                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Office Address')"
                                    class="form-control field-validate" id="spouseOfficeAddress"
                                    name="family_profile[spouse][office_address]"
                                    value="{{ $meta['family_profile']['spouse']['office_address'] }}">
                            </div>
                        </div>
                        <hr>
                        <h5 class="m-3">@lang('II. Parents')</h5>
                        <div class="container-fluid">
                            <h5 class="mt-4">A. @lang('website.Father')</h5>
                            <div class="form-group">
                                <label for="fatherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="fatherName"
                                    name="family_profile[parents][father][name]"
                                    value="{{ $meta['family_profile']['parents']['father']['name'] }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fatherOccupation"
                                        class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="fatherOccupation"
                                        name="family_profile[parents][father][occupation]"
                                        value="{{ $meta['family_profile']['parents']['father']['occupation'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="fatherBirthdate"
                                        class="col-form-label">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="fatherBirthdate"
                                        name="family_profile[parents][father][birthdate]"
                                        value="{{ $meta['family_profile']['parents']['father']['birthdate'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="fatherHomeAddress" class="col-form-label">@lang('website.Home
                                    Address')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Home Address')"
                                    class="form-control field-validate col-sm-10" id="fatherHomeAddress"
                                    name="family_profile[parents][father][home_address]"
                                    value="{{ $meta['family_profile']['parents']['father']['home_address'] }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5 class="mt-5">B. @lang('website.Mother')</h5>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="motherName"
                                    name="family_profile[parents][mother][name]"
                                    value="{{ $meta['family_profile']['parents']['mother']['name'] }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="motherOccupation"
                                        class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="motherOccupation"
                                        name="family_profile[parents][mother][occupation]"
                                        value="{{ $meta['family_profile']['parents']['mother']['occupation'] }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        class="col-form-label">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="motherBirthdate"
                                        name="family_profile[parents][mother][birthdate]"
                                        value="{{ $meta['family_profile']['parents']['mother']['birthdate'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherHomeAddress" class="ccol-form-label">@lang('website.Home
                                    Address')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Home Address')"
                                    class="form-control field-validate col-sm-10" id="motherHomeAddress"
                                    name="family_profile[parents][mother][home_address]"
                                    value="{{ $meta['family_profile']['parents']['mother']['home_address'] }}">
                            </div>
                        </div>
                        <hr>
                        <h5 class="m-3">@lang('website.Legal Beneficiaries')</h5>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="motherName"
                                    name="family_profile[beneficiaries][0][name]"
                                    value="{{$meta['family_profile']['beneficiaries'][0]['name']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation">@lang('website.Occupation')</label>

                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="beneficiaryOccupation"
                                        name="family_profile[beneficiaries][0][occupation]"
                                        value="{{$meta['family_profile']['beneficiaries'][0]['occupation']}}">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="motherBirthdate"
                                        name="family_profile[beneficiaries][0][birthdate]"
                                        value="{{$meta['family_profile']['beneficiaries'][0]['birthdate']}}">

                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="motherName"
                                    name="family_profile[beneficiaries][1][name]"
                                    value="{{$meta['family_profile']['beneficiaries'][1]['name']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation">@lang('website.Occupation')</label>

                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="beneficiaryOccupation"
                                        name="family_profile[beneficiaries][1][occupation]"
                                        value="{{$meta['family_profile']['beneficiaries'][1]['occupation']}}">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="motherBirthdate"
                                        name="family_profile[beneficiaries][1][birthdate]"
                                        value="{{$meta['family_profile']['beneficiaries'][1]['birthdate']}}">

                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="motherName"
                                    name="family_profile[beneficiaries][2][name]"
                                    value="{{$meta['family_profile']['beneficiaries'][2]['name']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation">@lang('website.Occupation')</label>

                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="beneficiaryOccupation"
                                        name="family_profile[beneficiaries][2][occupation]"
                                        value="{{$meta['family_profile']['beneficiaries'][2]['occupation']}}">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="motherBirthdate"
                                        name="family_profile[beneficiaries][2][birthdate]"
                                        value="{{$meta['family_profile']['beneficiaries'][2]['birthdate']}}">

                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Full Name')"
                                    class="form-control field-validate col-sm-10" id="motherName"
                                    name="family_profile[beneficiaries][3][name]"
                                    value="{{$meta['family_profile']['beneficiaries'][3]['name']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation">@lang('website.Occupation')</label>

                                    <input type="text" {{-- 'required' --}} placeholder="@lang('website.Occupation')"
                                        class="form-control field-validate" id="beneficiaryOccupation"
                                        name="family_profile[beneficiaries][3][occupation]"
                                        value="{{$meta['family_profile']['beneficiaries'][3]['occupation']}}">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate">@lang('website.Birthdate')</label>
                                    <input type="date" {{-- 'required' --}} placeholder="@lang('website.Birthdate')"
                                        class="form-control field-validate" id="motherBirthdate"
                                        name="family_profile[beneficiaries][3][birthdate]"
                                        value="{{$meta['family_profile']['beneficiaries'][3]['birthdate']}}">

                                </div>
                            </div>
                        </div>

                        <h4 class="m-3">@lang('website.Banking Information')</h4>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="gcashNum" class="col-form-label">@lang('website.GCash No.')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.GCash No.')"
                                    class="form-control field-validate col-sm-10" id="gcashNum"
                                    name="banking_information[gcash]"
                                    value="{{ $meta['banking_information']['gcash'] }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="BankName" class="col-form-label">@lang('website.Bank Name')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Bank Name')"
                                    class="form-control field-validate col-sm-10" id="BankName"
                                    name="banking_information[bank][name]"
                                    value="{{ $meta['banking_information']['bank']['name']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="BankBranch" class="col-form-label">@lang('website.Bank Branch')</label>
                                <input type="text" {{-- 'required' --}} placeholder="@lang('website.Bank Branch')"
                                    class="form-control field-validate col-sm-10" id="BankBranch"
                                    name="banking_information[bank][branch]"
                                    value="{{ $meta['banking_information']['bank']['branch']}}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="BankAccountNumber" class="col-form-label">@lang('website.Bank Account
                                    Number')</label>
                                <input type="text" {{-- 'required' --}}
                                    placeholder="@lang('website.Bank Account Number')"
                                    class="form-control field-validate col-sm-10" id="BankAccountNumber"
                                    name="banking_information[bank][account_number]"
                                    value="{{ $meta['banking_information']['bank']['account_number']}}">
                            </div>
                        </div>
                    </div>

                    <div class="heading">
                        <h2 class="mt-2">
                            @lang('website.{{-- 'required' --}} Documents')
                        </h2>
                        <hr>
                    </div>

                    <div class="col-12 media-main">
                        <div class="form-group p-3">
                            <label class="mb-4" for="exampleFormControlFile1">Upload your Membership Form here:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <div class="mt-3 text-right form-group container-fluid">
                                <button class="btn btn-secondary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>
@endsection
