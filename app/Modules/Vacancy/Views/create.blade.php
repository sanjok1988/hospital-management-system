@include('admin.layouts.locale')
@extends('admin.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="paypasa-heading">
                <h4>Add Vacancy </h4>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <form  method="post" class="" action="{{ route('storeVacancy') }}" enctype='multipart/form-data' >
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <select name="company_id" id="company_id" class="form-control" required>
                                        <option value="">Select  a Company </option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('company_name')) <p class="help-block m-b-none">{{ $errors->first('company_name') }}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label for="details">Position</label>
                                    <input type="text" name="position"class="form-control" id="" placeholder="Position">
                                </div>

                                <div class="form-group">
                                    <label for="details">Working Time</label>
                                    <input type="text" name="working_time"class="form-control" id="" placeholder="Working Time">
                                </div>

                                <div class="form-group">
                                    <label for="company">Number Of Vacancy</label>
                                    <input type="text" name="number_of_vacancies"class="form-control" id="" placeholder="Number Of Vacancy">
                                </div>
                                <div class="form-group">
                                    <label>Employment form *</label>
                                    <div>
                                        <input type="text" id="formdetails" name="employee_form" class="form-control"  placeholder="Employment form" >
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Fixed Monthly Salary</label>
                                    <div>
                                        <input type="text" id="salary" name="salary" class="form-control"  placeholder="Fixed Monthly Salary" >
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="example">Example</label>
                                    <input type="text" name="example" class="form-control"  placeholder="Example" id="example" >
                                </div>
                                <div class="form-group">
                                    <label for="details">Insurance</label>
                                    <input type="text" name="insurance"class="form-control" id="" placeholder="Insurance">
                                </div>
                            <div class="form-group">
                                <label for="details">Job Description</label>
                                <input type="text" name="job_description"class="form-control" id="" placeholder="Job Description">
                            </div>
                                <div class="form-group">
                                    <label for="company">Holiday</label>
                                    <input type="text" name="holiday_type"class="form-control" id="" placeholder="Holiday">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <div>
                                        <input type="text" id="location" name="location" class="form-control"  placeholder="Location" >
                                    </div>

                                </div>
                            <div class="form-group">
                                <label>Information</label>
                                <div>
                                    <input type="text" id="information" name="information" class="form-control"  placeholder="information" >
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group m-b-50 ">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light float-left">Create</button>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
        <!-- end container -->
      </div>
    </div>
@endsection


<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".content").fadeOut(1500);
        },3000);
    });
</script>