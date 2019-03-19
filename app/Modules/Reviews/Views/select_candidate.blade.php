@extends('Layouts::master')
@section('content')
<?php
$template = ['0'=>'sample_review_form'];
$type = ['0'=>'job knowledge', '1'=>'Planning and Problem Solving'];
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
   {{-- <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route('.index')}}" ><i class="fa fa-list"></i> List</a> --}}
</div>
<!-- /.box-header -->
<div class="box-body">
   <!-- form start -->
   <form role="form" method="POST" action="{{ route('review.store.candidate')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @if($flag)
      <input type="hidden" name="id" value="{{ $form->id }}">
      @endif
      <div class="box-body">
           
          <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Types of Employee Performance Evaluations</label><br>
                        <select name="form_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($forms as $value)
                            
                        <option value="{{ strtolower($value->id) }}" {{ ($flag && $form->id == $value->id)?'selected':'' }} >{{ $value->name }}</option>
        
                            @endforeach
                        </select>
                        </div>
                        
                    </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="">Employees</label>
                <hr>
                <table id="table" class="table table-bordered table-hover " >
                        <thead>
                        <tr>
                            
                            <th style="width:5px"><input type="checkbox" ></th>
                            <th>{{ trans('words.name')}}</th>
                            <th>{{ trans('words.department')}}</th>
                            <th>{{ trans('words.job_title')}}</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($data)>0)
                            @foreach($data as $value)
                          <tr>
                           

                          <td><input type="checkbox" name="employee_id[]" value="{{$value->id}}" {{ ($flag && in_array($value->id,$employees))?'checked':'' }}></td>
                            <td><div class="checkbox">
                                    <label>{{$value->first_name }} {{$value->last_name }}</label>
                            </div>
                            </td>
                            <td>{{$value->department }}</td>
                            <td>{{$value->job_title }}</td>
                    
                          </tr>    
                          @endforeach    
                          @endif      
                        </tbody>
                    </table>
               
               
                </div>
                
            </div>
            
        
        </div>
      
         <!-- /.box-body -->
         <div class="box-footer pull-right">
            <button type="submit" class="btn btn-primary">{{ ($flag)?"Update":"Add New" }}</button>
         </div>
    
   </div>
</form>
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
