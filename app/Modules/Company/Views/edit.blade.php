@include('admin.layouts.locale')
@extends('admin.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="paypasa-heading">
                <h4>@lang('Company::words.edit')</h4>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <form  method="post" action="{{ route('updateCompany',['id'=>$company->id]) }}" enctype='multipart/form-data' >

                                @csrf
                                <div class="form-group">
                                    <label> @lang('Company::words.name')</label>
                                    <input type="text" value="{{$company->company_name}}" name="company_name" class="form-control" id="" placeholder="company name">
                                </div>
                                <div class="form-group">
                                    <label> @lang('Company::words.details')</label>
                                    <input type="text" value="{{$company->details}}" name="details"class="form-control" id="" placeholder="details">
                                </div>
                                <div class="form-group m-b-50 ">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light float-right">@lang('Company::words.update')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection