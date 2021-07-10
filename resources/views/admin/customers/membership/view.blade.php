@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.EditMembership') }} <small>{{ trans('labels.EditCurrentCustomers') }}...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i>
                    {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li><a href="{{ URL::to('admin/customers/display')}}"><i class="fa fa-users"></i>
                    {{ trans('labels.ListingAllCustomers') }}</a></li>
            <li class="active">{{ trans('labels.EditMembership') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{ trans('labels.EditMembership') }} </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <!--<div class="box-header with-border">
                                          <h3 class="box-title">Edit category</h3>
                                        </div>-->
                                    <!-- /.box-header -->
                                    <br>
                                    @if (count($errors) > 0)
                                    @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {{$errors->first()}}
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <!-- form start -->
                                <div class="box-body">

                                    {!! Form::open(array('url' =>'admin/customers/membership/update',
                                    'method'=>'post', 'class'
                                    => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}

                                    {!! Form::hidden('membership_id', $membership_id,
                                    array('class'=>'form-control', 'id'=>'id')) !!}
                                    @include('admin.customers.membership.fields.member_information')
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="box-body">
                                    @include('admin.customers.membership.fields.family_profile')
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="box-body">
                                    @include('admin.customers.membership.fields.banking_information')
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">{{ trans('labels.Submit') }}
                            </button>
                            <a href="{{ URL::to('admin/customers/display')}}" type="button"
                                class="btn btn-default">{{ trans('labels.back') }}</a>
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
