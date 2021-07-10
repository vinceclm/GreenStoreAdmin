<h3 class="mb-3 font-weight-bold">{{ trans('website.Family Profile') }}</h3>

<div class="my-3">
    <h4 class="my-3">{{ trans('website.I Spouse') }}</h4>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="spouse_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[spouse][name]',
                            $data['family_profile']['spouse']['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'spouse_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_contact_no" class="col-sm-2 col-md-2 control-label">{{ trans('labels.ContactNo') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[spouse][contact_no]',
                    $data['family_profile']['spouse']['contact_no'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_contact_no')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.ContactNo') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[spouse][birthdate]',
                    $data['family_profile']['spouse']['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[spouse][occupation]',
                    $data['family_profile']['spouse']['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.OccupationText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_educational_attainment"
                    class="col-sm-2 col-md-2 control-label">{{ trans('labels.EducationalAttainment') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[spouse][educational_attainment]',
                    $data['family_profile']['spouse']['educational_attainment'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_educational_attainment')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.EducationalAttainmentText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_employer" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Employer') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[spouse][employer]',
                    $data['family_profile']['spouse']['employer'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_employer')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.EmployerText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="spouse_monthly_income"
                    class="col-sm-2 col-md-2 control-label">{{ trans('labels.MonthlyIncome') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[spouse][monthly_income]',
                    $data['family_profile']['spouse']['monthly_income'],
                    array('class'=>'form-control field-validate',
                    'id'=>'spouse_monthly_income')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.MonthlyIncomeText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="spouse_office_address"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.OfficeAddress') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[spouse][office_address]',
                            $data['family_profile']['spouse']['office_address'],
                            array('class'=>'form-control field-validate',
                            'id'=>'spouse_office_address')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.OfficeAddressText') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-3">
    <h4 class="my-3">{{ trans('website.II Parents') }}</h4>

    <h5>{{ trans('website.AFather') }}</h5>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="father_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[parents][father][name]',
                            $data['family_profile']['parents']['father']['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'father_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="father_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[parents][father][occupation]',
                    $data['family_profile']['parents']['father']['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'father_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="father_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[parents][father][birthdate]',
                    $data['family_profile']['parents']['father']['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'father_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="father_home_address"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.HomeAddress') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[parents][father][home_address]',
                            $data['family_profile']['parents']['father']['home_address'],
                            array('class'=>'form-control field-validate',
                            'id'=>'father_home_address')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.HomeAddressText') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h5>{{ trans('website.AMother') }}</h5>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="mother_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[parents][mother][name]',
                            $data['family_profile']['parents']['mother']['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'mother_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="mother_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[parents][mother][occupation]',
                    $data['family_profile']['parents']['mother']['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'mother_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="mother_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[parents][mother][birthdate]',
                    $data['family_profile']['parents']['mother']['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'mother_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="mother_home_address"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.HomeAddress') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[parents][mother][home_address]',
                            $data['family_profile']['parents']['mother']['home_address'],
                            array('class'=>'form-control field-validate',
                            'id'=>'mother_home_address')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.HomeAddressText') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-3">
    <h4 class="my-3">{{ trans('website.III Legal Beneficiaries') }}</h4>

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="ben_0_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[beneficiaries][0][name]',
                            $data['family_profile']['beneficiaries'][0]['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'ben_0_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_0_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[beneficiaries][0][occupation]',
                    $data['family_profile']['beneficiaries'][0]['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_0_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_0_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[beneficiaries][0][birthdate]',
                    $data['family_profile']['beneficiaries'][0]['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_0_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="ben_1_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[beneficiaries][1][name]',
                            $data['family_profile']['beneficiaries'][1]['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'ben_1_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_1_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[beneficiaries][1][occupation]',
                    $data['family_profile']['beneficiaries'][1]['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_1_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_1_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[beneficiaries][1][birthdate]',
                    $data['family_profile']['beneficiaries'][1]['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_1_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="ben_2_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[beneficiaries][2][name]',
                            $data['family_profile']['beneficiaries'][2]['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'ben_2_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_2_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[beneficiaries][2][occupation]',
                    $data['family_profile']['beneficiaries'][2]['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_2_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_2_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[beneficiaries][2][birthdate]',
                    $data['family_profile']['beneficiaries'][2]['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_2_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="ben_3_full_name"
                            class="col-sm-1 col-md-1 control-label">{{ trans('labels.FullName') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('family_profile[beneficiaries][3][name]',
                            $data['family_profile']['beneficiaries'][3]['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'ben_3_full_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FullName') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_3_occupation" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Occupation') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::text('family_profile[beneficiaries][3][occupation]',
                    $data['family_profile']['beneficiaries'][3]['occupation'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_3_occupation')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Occupation') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 form-group">
                <label for="ben_3_birthdate" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Birthdate') }}*
                </label>
                <div class="col-sm-10 col-md-10">
                    {!! Form::date('family_profile[beneficiaries][3][birthdate]',
                    $data['family_profile']['beneficiaries'][3]['birthdate'],
                    array('class'=>'form-control field-validate',
                    'id'=>'ben_3_birthdate')) !!}
                    <span class="help-block"
                        style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.BirthdateText') }}</span>
                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
