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
                        @lang('Information Sheet')
                    </h2>
                    <hr>
                </div>

                <div class="col-12 media-main p-3 mb-3">
                    <h4 class="m-3">@lang('Member Information')</h4>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="firstName" class="col-sm-4 col-form-label">@lang('First
                                    Name')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_firstname"
                                        class="form-control field-validate" id="inputName"
                                        value="{{ auth()->guard('customer')->user()->first_name }}"
                                        placeholder="@lang('website.First Name')">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="middleName" class="col-sm-4 col-form-label">@lang('Middle
                                    Name')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_middlename"
                                        placeholder="@lang('website.Middle Name')" class="form-control field-validate"
                                        id="middleName" value="{{ auth()->guard('customer')->user()->middle_name }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="lastName" class="col-sm-4 col-form-label">@lang('Last Name')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_lastname"
                                        placeholder="@lang('website.Last Name')" class="form-control field-validate"
                                        id="lastName" value="{{ auth()->guard('customer')->user()->last_name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="placeOfBirth" class="col-sm-4 col-form-label">@lang('Place of
                                    Birth')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_place_of_birth"
                                        placeholder="@lang('Place of Birth')"
                                        class="form-control field-validate" id="placeOfBirth"
                                        value="{{ auth()->guard('customer')->user()->place_of_birth }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="dateOfBirth" class="col-sm-4 col-form-label">@lang('Date of
                                    Birth')</label>
                                <div class="col-sm-8">
                                    <input type="date" required name="customers_date_of_birth"
                                        placeholder="@lang('Date of Birth')" class="form-control field-validate"
                                        id="dateOfBirth" value="{{ auth()->guard('customer')->user()->date_of_birth }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="completeAddress" class="col-sm-3 col-form-label">@lang('Complete
                                Address')</label>
                            <div class="col-sm-9">
                                <input type="text" required name="customers_complete_address"
                                    class="form-control field-validate" id="inputName"
                                    value="{{ auth()->guard('customer')->user()->first_name }}"
                                    placeholder="@lang('Complete Address')">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="educationalAttainment"
                                    class="col-sm-4 col-form-label">@lang('Educational Attainment')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_educational_attainment"
                                        placeholder="@lang('Educational Attainment')"
                                        class="form-control field-validate" id="educationalAttainment"
                                        value="{{ auth()->guard('customer')->user()->educational_attainment }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="degree"
                                    class="col-sm-4 col-form-label">@lang('Degree/Course')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_degree"
                                        placeholder="@lang('Degree/Course')" class="form-control field-validate"
                                        id="degree" value="{{ auth()->guard('customer')->user()->degree }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">

                            <div class="form-group col-12 col-md-6 row">
                                <label for="monthlyIncome" class="col-sm-4 col-form-label">@lang('Monthly
                                    Income')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_monthly_income"
                                        placeholder="@lang('Monthly Income')"
                                        class="form-control field-validate" id="monthlyIncome"
                                        value="{{ auth()->guard('customer')->user()->monthly_income }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="incomeSources" class="col-sm-4 col-form-label">@lang('Other Sources
                                    of Income')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_income_sources"
                                        placeholder="@lang('Other Sources of Income')"
                                        class="form-control field-validate" id="incomeSources"
                                        value="{{ auth()->guard('customer')->user()->income_sources }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">

                            <div class="form-group col-12 col-md-6 row">
                                <label for="sss" class="col-sm-4 col-form-label">@lang('SSS No.')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_sss"
                                        placeholder="@lang('SSS No.')" class="form-control field-validate"
                                        id="sss" value="{{ auth()->guard('customer')->user()->sss }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="tin" class="col-sm-4 col-form-label">@lang('TIN No.')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_tin"
                                        placeholder="@lang('TIN No.')" class="form-control field-validate"
                                        id="tin" value="{{ auth()->guard('customer')->user()->tin }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="department" class="col-sm-4 col-form-label">@lang('Department
                                    Area')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_department"
                                        placeholder="@lang('Department Area')"
                                        class="form-control field-validate" id="department"
                                        value="{{ auth()->guard('customer')->user()->department }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="localNo" class="col-sm-4 col-form-label">@lang('Local No.')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_local_no"
                                        placeholder="@lang('Local No.')" class="form-control field-validate"
                                        id="localNo" value="{{ auth()->guard('customer')->user()->local_no }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="cellphoneNo" class="col-sm-4 col-form-label">@lang('Cellphone
                                    No.')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_cellphone_no"
                                        placeholder="@lang('Cellphone No.')" class="form-control field-validate"
                                        id="cellphoneNo" value="{{ auth()->guard('customer')->user()->cellphone_no }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="m-3">@lang('Family Profile')</h4>
                    <h5 class="m-3">@lang('I. Spouse')</h5>
                        <div class="form-group col-12 row">
                            <label for="spouseName" class="col-sm-2 col-form-label">@lang('Full
                                Name')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_spouse_name"
                                    placeholder="@lang('Full Name')" class="form-control field-validate"
                                    id="spouseName" value="{{ auth()->guard('customer')->user()->spouse_name }}">
                            </div>
                        </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseContactNo" class="col-sm-4 col-form-label">@lang('Contact
                                    No.')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_spouse_contact_no"
                                        placeholder="@lang('Contact No.')" class="form-control field-validate"
                                        id="spouseContactNo"
                                        value="{{ auth()->guard('customer')->user()->spouse_contact_no }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseBirthdate"
                                    class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                <div class="col-sm-8">
                                    <input type="date" required name="customers_spouse_birthdate"
                                        placeholder="@lang('Birthdate')" class="form-control field-validate"
                                        id="spouseBirthdate"
                                        value="{{ auth()->guard('customer')->user()->spouse_birthdate }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseOccupation"
                                    class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_spouse_occupation"
                                        placeholder="@lang('Occupation')" class="form-control field-validate"
                                        id="spouseOccupation"
                                        value="{{ auth()->guard('customer')->user()->spouse_occupation }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseEducationalAttainment"
                                    class="col-sm-4 col-form-label">@lang('Educational Attainment')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_spouse_educational_attainment"
                                        placeholder="@lang('Educational Attainment')"
                                        class="form-control field-validate" id="spouseEducationalAttainment"
                                        value="{{ auth()->guard('customer')->user()->spouse_educational_attainment }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseEmployer"
                                    class="col-sm-4 col-form-label">@lang('Employer')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_spouse_employer"
                                        placeholder="@lang('Employer')" class="form-control field-validate"
                                        id="spouseEmployer"
                                        value="{{ auth()->guard('customer')->user()->spouse_employer }}">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 row">
                                <label for="spouseMonthlyIncome" class="col-sm-4 col-form-label">@lang('Monthly
                                    Salary')</label>
                                <div class="col-sm-8">
                                    <input type="text" required name="customers_spouse_monthly_income"
                                        placeholder="@lang('Monthly Salary')"
                                        class="form-control field-validate" id="spouseMonthlyIncome"
                                        value="{{ auth()->guard('customer')->user()->spouse_monthly_income }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="form-group col-12 row">
                            <label for="spouseOfficeAddress" class="col-sm-2 col-form-label">@lang('Office
                                Address')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_spouse_office_address"
                                    placeholder="@lang('Office Address')"
                                    class="form-control field-validate" id="spouseOfficeAddress"
                                    value="{{ auth()->guard('customer')->user()->spouse_office_address }}">
                            </div>
                        </div>
                        <hr>
                        <h5 class="m-3">@lang('II. Parents')</h5>
                            <div class="form-group col-12 row">
                                <div class="col-12">
                                    <h5>@lang('A. Father')</h5>
                                </div>
                                <label for="fatherName" class="col-sm-2 col-form-label">@lang('Full
                                    Name')</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="customers_father_name"
                                        placeholder="@lang('Full Name')" class="form-control field-validate"
                                        id="fatherName" value="{{ auth()->guard('customer')->user()->father_name }}">
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col-12 col-md-6 row">
                                        <label for="fatherOccupation"
                                            class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                        <div class="col-sm-8">
                                            <input type="text" required name="customers_father_occupation"
                                                placeholder="@lang('Occupation')" class="form-control field-validate"
                                                id="fatherOccupation"
                                                value="{{ auth()->guard('customer')->user()->father_occupation }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-6 row">
                                        <label for="fatherBirthdate"
                                            class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                        <div class="col-sm-8">
                                            <input type="date" required name="customer_father_birthdate"
                                                placeholder="@lang('Birthdate')" class="form-control field-validate"
                                                id="fatherBirthdate"
                                                value="{{ auth()->guard('customer')->user()->father_birthdate }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 row">
                                <label for="fatherHomeAddress" class="col-sm-2 col-form-label">@lang('Home
                                    Address')</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="customers_father_home_address"
                                        placeholder="@lang('Home Address')" class="form-control field-validate"
                                        id="fatherHomeAddress"
                                        value="{{ auth()->guard('customer')->user()->father_home_address }}">
                                </div>
                            </div>
                            <div class="form-group col-12 row">
                                <div class="col-12">
                                    <h5>@lang('B. Mother')</h5>
                                </div>
                                <label for="motherName" class="col-sm-2 col-form-label">@lang('Full
                                    Name')</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="customers_mother_name"
                                        placeholder="@lang('Full Name')" class="form-control field-validate"
                                        id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col-12 col-md-6 row">
                                        <label for="motherOccupation"
                                            class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                        <div class="col-sm-8">
                                            <input type="text" required name="customers_mother_occupation"
                                                placeholder="@lang('Occupation')" class="form-control field-validate"
                                                id="motherOccupation"
                                                value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-6 row">
                                        <label for="motherBirthdate"
                                            class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                        <div class="col-sm-8">
                                            <input type="date" required name="customers_mother_birthdate"
                                                placeholder="@lang('Birthdate')" class="form-control field-validate"
                                                id="motherBirthdate"
                                                value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 row">
                                <label for="motherHomeAddress" class="col-sm-2 col-form-label">@lang('Home
                                    Address')</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="customers_mother_home_address"
                                        placeholder="@lang('Home Address')" class="form-control field-validate"
                                        id="motherHomeAddress"
                                        value="{{ auth()->guard('customer')->user()->mother_home_address }}">
                                </div>
                            </div>
                        <hr>
                        <h5 class="m-3">@lang('Legal Beneficiaries')</h5>
                        <div class="form-group col-12 row">
                            <label for="motherName" class="col-sm-2 col-form-label">@lang('Full
                                Name')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('Full Name')" class="form-control field-validate"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="beneficiaryOccupation"
                                        class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('Occupation')" class="form-control field-validate"
                                            id="motherOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="motherBirthdate"
                                        class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                    <div class="col-sm-8">
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="motherName" class="col-sm-2 col-form-label">@lang('Full
                                Name')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('Full Name')" class="form-control field-validate"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="beneficiaryOccupation"
                                        class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('Occupation')" class="form-control field-validate"
                                            id="motherOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="motherBirthdate"
                                        class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                    <div class="col-sm-8">
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="motherName" class="col-sm-2 col-form-label">@lang('Full
                                Name')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('Full Name')" class="form-control field-validate"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="beneficiaryOccupation"
                                        class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('Occupation')" class="form-control field-validate"
                                            id="motherOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="motherBirthdate"
                                        class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                    <div class="col-sm-8">
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="motherName" class="col-sm-2 col-form-label">@lang('Full
                                Name')</label>
                            <div class="col-sm-10">
                                <input type="text" required name="customers_mother_name"
                                    placeholder="@lang('Full Name')" class="form-control field-validate"
                                    id="motherName" value="{{ auth()->guard('customer')->user()->mother_name }}">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="beneficiaryOccupation"
                                        class="col-sm-4 col-form-label">@lang('Occupation')</label>
                                    <div class="col-sm-8">
                                        <input type="text" required name="customers_mother_occupation"
                                            placeholder="@lang('Occupation')" class="form-control field-validate"
                                            id="motherOccupation"
                                            value="{{ auth()->guard('customer')->user()->mother_occupation }}">
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6 row">
                                    <label for="motherBirthdate"
                                        class="col-sm-4 col-form-label">@lang('Birthdate')</label>
                                    <div class="col-sm-8">
                                        <input type="date" required name="customers_mother_birthdate"
                                            placeholder="@lang('Birthdate')" class="form-control field-validate"
                                            id="motherBirthdate"
                                            value="{{ auth()->guard('customer')->user()->mother_birthdate }}">
                                    </div>
                                </div>
                            </div>
                            
                    </div>

                    <h4 class="m-3">@lang('Banking Information')</h4>
                </div>

                <div class="heading">
                    <h2 class="mt-2">
                        @lang('Required Documents')
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
