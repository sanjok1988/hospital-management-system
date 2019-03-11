@extends('Layouts::master')
@section('content')
<?php
$flag = false;
if(isset($action) && $action == 'edit')
{
    $flag = true;
}
?>
<div class="box-header">
   @if(isset($page))
   <h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} Create</h3>
   @endif
   <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route($page.'.index')}}" ><i class="fa fa-list"></i> List</a>
</div>
<!-- /.box-header -->
    <div class="box-body">

        <form  method="post" class="" action="{{ route('company.store') }}" enctype='multipart/form-data' >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if($flag)
            <input type="hidden" name="id" value="{{ $data->id }}">
            @endif
            <div class="form-group">
                <label> @lang('Company::words.name')</label>
                <input type="text" name="name" class="form-control" id="" placeholder="company name" value="{{ ($flag)?$data->name:'' }}">
            </div>
            <div class="form-group">
                <label> @lang('Company::words.details')</label>
                <textarea type="text" name="details"class="form-control" rows="10" placeholder="details">{{ ($flag)?$data->details:'' }}</textarea>
            </div>
         
                <div class="box-footer pull-right">
                    <button type="submit" class="btn btn-primary">{{ ($flag)?"Update":"Add New" }}</button>
                 </div>
        
        </form>
    </div>
                    
@endsection