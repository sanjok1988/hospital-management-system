@include('admin.layouts.locale')
@extends('admin.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="paypasa-heading">
                <h4>@lang('Company::words.view')</h4>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                                <div class="form-group">
                                    <label> @lang('Company::words.name')</label>
                                    <input type="text" value="{{$companies->company_name}}"  readonly name="company_name" class="form-control" id="" placeholder="company name">
                                </div>
                                <div class="form-group">
                                    <label> @lang('Company::words.details')</label>
                                    <input type="text" value="{{$companies->details}}"  readonly name="details"class="form-control" id="" placeholder="details">
                                </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection