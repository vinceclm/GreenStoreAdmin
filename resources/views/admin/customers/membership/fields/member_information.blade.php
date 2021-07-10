<h3 class="mb-3 font-weight-bold">{{ trans('website.Member Information') }}</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FirstName') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[first_name]',
                $data['member_information']['first_name'],
                array('class'=>'form-control field-validate',
                'id'=>'first_name')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FirstNameText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.MiddleName') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[middle_name]',
                $data['member_information']['middle_name'],
                array('class'=>'form-control field-validate',
                'id'=>'middle_name')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.MiddleNameText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.LastName') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[last_name]',
                $data['member_information']['last_name'],
                array('class'=>'form-control field-validate',
                'id'=>'last_name')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.LastNameText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.PlaceOfBirth') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[place_of_birth]',
                $data['member_information']['place_of_birth'],
                array('class'=>'form-control field-validate',
                'id'=>'place_of_birth')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.PlaceOfBirthText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.DateOfBirth') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::date('member_information[date_of_birth]',
                $data['member_information']['date_of_birth'],
                array('class'=>'form-control field-validate',
                'id'=>'date_of_birth')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.DateOfBirthText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 form-group">
            <label for="name" class="col-sm-1 col-md-1 control-label">{{ trans('labels.CompleteAddress') }}*
            </label>
            <div class="col-sm-11 col-md-11">
                {!! Form::text('member_information[complete_address]',
                $data['member_information']['complete_address'],
                array('class'=>'form-control field-validate',
                'id'=>'complete_address')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CompleteAddressText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.EducationalAttainment') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[educational_attainment]',
                $data['member_information']['educational_attainment'],
                array('class'=>'form-control field-validate',
                'id'=>'educational_attainment')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.EducationalAttainmentText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.Degree') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[degree]',
                $data['member_information']['degree'],
                array('class'=>'form-control field-validate',
                'id'=>'degree')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.DegreeText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.MonthlyIncome') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[monthly_income]',
                $data['member_information']['monthly_income'],
                array('class'=>'form-control field-validate',
                'id'=>'monthly_income')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.MonthlyIncomeText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.IncomeSource') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[income_source]',
                $data['member_information']['income_source'],
                array('class'=>'form-control field-validate',
                'id'=>'income_source')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.IncomeSourceText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.SSSNo.') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[sss]',
                $data['member_information']['sss'],
                array('class'=>'form-control field-validate',
                'id'=>'sss')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.SSSNoText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-2 control-label">{{ trans('labels.TINNo.') }}*
            </label>
            <div class="col-sm-10 col-md-10">
                {!! Form::text('member_information[tin]',
                $data['member_information']['tin'],
                array('class'=>'form-control field-validate',
                'id'=>'tin')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.TINNoText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Department') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[department]',
                $data['member_information']['department'],
                array('class'=>'form-control field-validate',
                'id'=>'department')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.DepartmentText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.LocalNo.') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[local_no]',
                $data['member_information']['local_no'],
                array('class'=>'form-control field-validate',
                'id'=>'local_no')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.LocalNoText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6 form-group">
            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.CellphoneNo.') }}*
            </label>
            <div class="col-sm-10 col-md-9">
                {!! Form::text('member_information[cellphone_no]',
                $data['member_information']['cellphone_no'],
                array('class'=>'form-control field-validate',
                'id'=>'cellphone_no')) !!}
                <span class="help-block"
                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CellphoneNoText') }}</span>
                <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
            </div>
        </div>
    </div>
</div>
