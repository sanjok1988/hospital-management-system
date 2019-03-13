@extends('Layouts::master')
@section('content')
<?php
$flag = false;

if(isset($action) && $action == 'edit')
{
    $flag = true;
}
$ques_type = ['0'=>'Job Knowledge','1'=>'Planning and Problem Solving'];
?>
<div class="box-header">
   @if(isset($page))
<h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} {{ strtoupper($action)}}</h3>
   @endif
   <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route($page.'.index')}}" ><i class="fa fa-list"></i> List</a>
</div>
<!-- /.box-header -->
<div class="box-body">
   <!-- form start -->
   <form role="form" method="POST" action="{{ route($page.'.store')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @if($flag)
      <input type="hidden" name="id" value="{{ $data->id }}">
      @endif
      <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="">Questionnaire</label>
                <input type="text" class="form-control" name="question" placeholder="Questionnaire" value="{{ ($flag)?$data->question:'' }}" >
                </div>
                
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Questionnaire Section</label><br>
                <select name="ques_type" class="form-control" id="exampleFormControlSelect1">
                    @foreach($ques_type as $value)
                <option value="{{ strtolower($value) }}" {{ ($flag && $data->ques_type == $value)?'selected':'' }} >{{ $value }}</option>

                    @endforeach
                </select>
                </div>
                
            </div>
        
        </div>
      
         <!-- /.box-body -->
         <div class="box-footer pull-right">
            <button type="submit" class="btn btn-primary">{{ ($flag)?"Update":"Add New" }}</button>
         </div>
   </form>
   </div>
</div>
@endsection
@section('style')
<style>
    .permission{
        min-width: 200px;
        border-bottom: 1px solid #f5f2f2;
        padding: 15px;
    }
    </style>
@endsection
