<h3 class="mb-3 font-weight-bold">{{ trans('website.Banking Information') }}</h3>

<div class="my-3">

    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="gcash" class="col-sm-1 col-md-1 control-label">{{ trans('website.GCash No.') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('banking_information[gcash]',
                            $data['banking_information']['gcash'],
                            array('class'=>'form-control field-validate',
                            'id'=>'gcash')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('website.GCash No.') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="bank_name" class="col-sm-1 col-md-1 control-label">{{ trans('website.Bank Name') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('banking_information[bank][name]',
                            $data['banking_information']['bank']['name'],
                            array('class'=>'form-control field-validate',
                            'id'=>'bank_name')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('website.Bank Name') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="bank_branch"
                            class="col-sm-1 col-md-1 control-label">{{ trans('website.Bank Branch') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('banking_information[bank][branch]',
                            $data['banking_information']['bank']['branch'],
                            array('class'=>'form-control field-validate',
                            'id'=>'bank_branch')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('website.Bank Branch') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="bank_account_number"
                            class="col-sm-1 col-md-1 control-label">{{ trans('website.Bank Account Number') }}*
                        </label>
                        <div class="col-sm-11 col-md-11">
                            {!! Form::text('banking_information[bank][account_number]',
                            $data['banking_information']['bank']['account_number'],
                            array('class'=>'form-control field-validate',
                            'id'=>'bank_account_number')) !!}
                            <span class="help-block"
                                style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('website.Bank Account Number') }}</span>
                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
