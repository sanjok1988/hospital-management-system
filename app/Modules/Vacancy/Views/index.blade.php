@include('admin.layouts.locale')
@extends('admin.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="paypasa-heading">
                <h4>{{ trans('Vacancy::words.vacancyTitle')}}</h4>
            </div>
            <div class="row"  style="height:50px;">
                @if (Session::get('message'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">



                            <span class="float-right mb-12 mr-12">

                    <a class="btn btn-primary waves-effect waves-light" title="Create Vacancy" href="{{ route('createVacancy') }}"><i class="fa fa-plus"></i> {{ trans('Vacancy::words.addNew')}}</a>
                             </span>
                            <table id="table" class="table table-bordered table-hover " >
                                <thead>
                                <tr>
                                    <th>{{ trans('Vacancy::words.id')}}</th>
                                    <th>{{ trans('Vacancy::words.company_name')}}</th>
                                    <th>{{ trans('Vacancy::words.position')}}</th>
                                    <th>{{ trans('Vacancy::words.working_time')}}</th>
                                    <th>{{ trans('Vacancy::words.number_of_vacancy')}}</th>
                                    <th>{{ trans('Vacancy::words.salary')}}</th>
                                    <th>{{ trans('Vacancy::words.location')}}</th>
                                    <th>{{ trans('Vacancy::words.actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>

@endsection
@section('script')
    <script>
        jQuery(function($) {
            $.noConflict();

            $('#table').DataTable({
                processing: true,
                serverSide: true,
                buttons: [
                    'csv', 'excel', 'pdf', 'print', 'reset', 'reload'
                ],
                ajax: '{!! route('vacancy.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'position', name: 'position' },
                    { data: 'working_time', name: 'working_time' },
                    { data: 'number_of_vacancies', name: 'number_of_vacancies' },
                    { data: 'salary', name: 'salary' },
                    { data: 'location', name: 'location' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                jQuery(".alert").fadeOut(1500);
            },3000);
        });
    </script>
@endsection