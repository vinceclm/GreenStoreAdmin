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
                                    <input type="text" required name="customers_firstname"
                                        class="form-control field-validate" id="inputName"
                                        value="{{ auth()->guard('customer')->user()->first_name }}"
                                        placeholder="@lang('website.First Name')">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middleName" class="col-form-label">@lang('website.Middle Name')</label>
                                    <input type="text" required name="customers_middlename"
                                        placeholder="@lang('website.Middle Name')" class="form-control field-validate"
                                        id="middleName" value="{{ auth()->guard('customer')->user()->middle_name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lastName" class="col-form-label">@lang('website.Last Name')</label>
                                <input type="text" required name="customers_lastname"
                                    placeholder="@lang('website.Last Name')" class="form-control field-validate"
                                    id="lastName" value="{{ auth()->guard('customer')->user()->last_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="placeOfBirth" class="col-form-label">@lang('website.Place of Birth')</label>
                                <input type="text" required name="customers_place_of_birth"
                                    placeholder="@lang('website.Place of Birth')"
                                    class="form-control field-validate" id="placeOfBirth"
                                    value="{{ auth()->guard('customer')->user()->place_of_birth }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dateOfBirth" class="col-form-label">@lang('website.Date of Birth')</label>
                                <input type="date" required name="customers_date_of_birth"
                                    placeholder="@lang('website.Date of Birth')" class="form-control field-validate"
                                    id="dateOfBirth" value="{{ auth()->guard('customer')->user()->date_of_birth }}">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group col-12 row">
                        <label for="motherName" class="col-sm-2 col-form-label">@lang('website.Full Name')</label>
                        <div class="col-sm-6">
                            <input type="text" required name="customers_mother_name"
                                placeholder="@lang('website.Full Name')" class="form-control field-validate"
                                id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                        </div>
                    </div> -->
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="completeAddress" class="col-form-label">@lang('website.Complete Address')</label>
                                <input type="text" required name="customers_complete_address"
                                    class="form-control field-validate" id="inputName"
                                    value="{{ auth()->guard('customer')->user()->complete_address }}"
                                    placeholder="@lang('website.Complete Address')">
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="educationalAttainment"
                                    class="col-form-label">@lang('website.Educational Attainment')</label>
                                    <input type="text" required name="customers_educational_attainment"
                                        placeholder="@lang('website.Educational Attainment')"
                                        class="form-control field-validate" id="educationalAttainment"
                                        value="{{ auth()->guard('customer')->user()->educational_attainment }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="degree"
                                    class="col-form-label">@lang('website.Degree/Course')</label>
                                    <input type="text" required name="customers_degree"
                                        placeholder="@lang('website.Degree/Course')" class="form-control field-validate"
                                        id="degree" value="{{ auth()->guard('customer')->user()->degree }}">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="monthlyIncome" class="col-form-label">@lang('website.Monthly Income')</label>
                                    <input type="text" required name="customers_monthly_income"
                                        placeholder="@lang('website.Monthly Income')"
                                        class="form-control field-validate" id="monthlyIncome"
                                        value="{{ auth()->guard('customer')->user()->monthly_income }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="incomeSources" class="col-form-label">@lang('website.Other Sources of Income')</label>
                           
                                <input type="text" required name="customers_income_sources"
                                    placeholder="@lang('website.Other Sources of Income')"
                                    class="form-control field-validate" id="incomeSources"
                                    value="{{ auth()->guard('customer')->user()->income_sources }}">
                                
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sss" class="col-form-label">@lang('website.SSS No.')</label>
                                    <input type="text" required name="customers_sss"
                                        placeholder="@lang('website.SSS No.')" class="form-control field-validate"
                                        id="sss" value="{{ auth()->guard('customer')->user()->sss }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tin" class="col-form-label">@lang('website.TIN No.')</label>
                                    <input type="text" required name="customers_tin"
                                        placeholder="@lang('website.TIN No.')" class="form-control field-validate"
                                        id="tin" value="{{ auth()->guard('customer')->user()->tin }}">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="department" class="col-form-label">@lang('website.Department Area')</label>
                                <input type="text" required name="customers_department"
                                    placeholder="@lang('website.Department Area')"
                                    class="form-control field-validate" id="department"
                                    value="{{ auth()->guard('customer')->user()->department }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="localNo" class="col-form-label">@lang('website.Local No.')</label>
                                <input type="text" required name="customers_local_no"
                                    placeholder="@lang('website.Local No.')" class="form-control field-validate"
                                    id="localNo" value="{{ auth()->guard('customer')->user()->local_no }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cellphoneNo" class="col-form-label">@lang('website.Cellphone No.')</label>
                                <input type="text" required name="customers_cellphone_no"
                                    placeholder="@lang('website.Cellphone No.')" class="form-control field-validate"
                                    id="cellphoneNo" value="{{ auth()->guard('customer')->user()->cellphone_no }}">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="m-3">@lang('Family Profile')</h4>
                    <h5 class="m-3">@lang('I. Spouse')</h5>

                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="spouseName" class="col-form-label">@lang('website.Full Name')</label>
                            <input type="text" required name="customers_spouse_name"
                                placeholder="@lang('website.Full Name')" class="form-control field-validate"
                                id="spouseName" value="{{ auth()->guard('customer')->user()->spouse_name }}">
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="spouseContactNo" class="col-form-label">@lang('website.Contact No.')</label>
                                <input type="text" required name="customers_spouse_contact_no"
                                    placeholder="@lang('website.Contact No.')" class="form-control field-validate"
                                    id="spouseContactNo"
                                    value="{{ auth()->guard('customer')->user()->spouse_contact_no }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spouseBirthdate"
                                    class="col-form-label">@lang('website.Birthdate')</label>
                                    <input type="date" required name="customers_spouse_birthdate"
                                        placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                        id="spouseBirthdate"
                                        value="{{ auth()->guard('customer')->user()->spouse_birthdate }}">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="spouseOccupation"
                                    class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" required name="customers_spouse_occupation"
                                        placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                        id="spouseOccupation"
                                        value="{{ auth()->guard('customer')->user()->spouse_occupation }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spouseEducationalAttainment"
                                    class="col-form-label">@lang('website.Educational Attainment')</label>
                                <input type="text" required name="customers_spouse_educational_attainment"
                                    placeholder="@lang('website.Educational Attainment')"
                                    class="form-control field-validate" id="spouseEducationalAttainment"
                                    value="{{ auth()->guard('customer')->user()->spouse_educational_attainment }}">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="spouseEmployer"
                                    class="col-form-label">@lang('website.Employer')</label>
                                <input type="text" required name="customers_spouse_employer"
                                    placeholder="@lang('website.Employer')" class="form-control field-validate"
                                    id="spouseEmployer"
                                    value="{{ auth()->guard('customer')->user()->spouse_employer }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="spouseMonthlyIncome" class="col-form-label">@lang('website.Monthly Salary')</label>
                                    <input type="text" required name="customers_spouse_monthly_income"
                                        placeholder="@lang('website.Monthly Salary')"
                                        class="form-control field-validate" id="spouseMonthlyIncome"
                                        value="{{ auth()->guard('customer')->user()->spouse_monthly_income }}">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="spouseOfficeAddress" class="col-form-label">@lang('website.Office Address')</label>
                           
                                <input type="text" required name="customers_spouse_office_address"
                                    placeholder="@lang('website.Office Address')"
                                    class="form-control field-validate" id="spouseOfficeAddress"
                                    value="{{ auth()->guard('customer')->user()->spouse_office_address }}">
                        </div>
                    </div>
                        <hr>
                        <h5 class="m-3">@lang('II. Parents')</h5>
                        <div class="container-fluid">
                        <h5 class="mt-4">A. @lang('website.Father')</h5>
                            <div class="form-group">                                
                                <label for="fatherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" required name="customers_father_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="fatherName" value="{{ auth()->guard('customer')->user()->father_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fatherOccupation"
                                        class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" required name="customers_father_occupation"
                                        placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                        id="fatherOccupation"
                                        value="{{ auth()->guard('customer')->user()->father_occupation }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="fatherBirthdate"
                                        class="col-form-label">@lang('website.Birthdate')</label>
                                    <input type="date" required name="customer_father_birthdate"
                                        placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                        id="fatherBirthdate"
                                        value="{{ auth()->guard('customer')->user()->father_birthdate }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="fatherHomeAddress" class="col-form-label">@lang('website.Home Address')</label>
                                <input type="text" required name="customers_father_home_address"
                                    placeholder="@lang('website.Home Address')" class="form-control field-validate col-sm-10"
                                    id="fatherHomeAddress"
                                    value="{{ auth()->guard('customer')->user()->father_home_address }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5 class="mt-5">B. @lang('website.Mother')</h5>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="motherOccupation"
                                        class="col-form-label">@lang('website.Occupation')</label>
                                    <input type="text" required name="customers_mother_occupation"
                                        placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                        id="motherOccupation"
                                        value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        class="col-form-label">@lang('website.Birthdate')</label>
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherHomeAddress" class="ccol-form-label">@lang('website.Home Address')</label>
                                <input type="text" required name="customers_mother_home_address"
                                    placeholder="@lang('website.Home Address')" class="form-control field-validate col-sm-10"
                                    id="motherHomeAddress"
                                    value="{{ auth()->guard('customer')->user()->mother_home_address }}">
                            </div>
                        </div>
                        <hr>
                        <h5 class="m-3">@lang('website.Legal Beneficiaries')</h5>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>                                
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                           </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation"
                                        >@lang('website.Occupation')</label>
                                    
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                            id="beneficiaryOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        >@lang('website.Birthdate')</label>
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>                                
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                           </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation"
                                        >@lang('website.Occupation')</label>
                                    
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                            id="beneficiaryOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        >@lang('website.Birthdate')</label>
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>                                
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                           </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation"
                                        >@lang('website.Occupation')</label>
                                    
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                            id="beneficiaryOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        >@lang('website.Birthdate')</label>
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="motherName" class="col-form-label">@lang('website.Full Name')</label>                                
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('website.Full Name')" class="form-control field-validate col-sm-10"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                           </div>
                        </div>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="beneficiaryOccupation"
                                        >@lang('website.Occupation')</label>
                                    
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('website.Occupation')" class="form-control field-validate"
                                            id="beneficiaryOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="motherBirthdate"
                                        >@lang('website.Birthdate')</label>
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('website.Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    
                                </div>
                            </div>
                        </div>

                    <h4 class="m-3">@lang('website.Banking Information')</h4>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="gcashNum" class="col-form-label">@lang('website.GCash No.')</label>
                                <input type="text" required name="customers_gcash_Num"
                                    placeholder="@lang('website.GCash No.')" class="form-control field-validate col-sm-10"
                                    id="gcashNum" value="{{ auth()->guard('customer')->user()->gcashNum }}">
                        </div>   
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="BankName" class="col-form-label">@lang('website.Bank Name')</label>
                                <input type="text" required name="customers_bank_name"
                                    placeholder="@lang('website.Bank Name')" class="form-control field-validate col-sm-10"
                                    id="BankName" value="{{ auth()->guard('customer')->user()->BankName }}">
                        </div>
                    </div>
                </div>

                <div class="heading">
                    <h2 class="mt-2">
                        @lang('website.Required Documents')
                    </h2>
                    <hr>
                </div>

                <div class="col-12 media-main">
                    <form>
                        <div class="form-group p-3">
                            <label class="mb-4" for="exampleFormControlFile1">Upload your Membership Form here:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <div class="mt-3 text-right form-group container-fluid">
                                <button class="btn btn-secondary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>
@endsection
