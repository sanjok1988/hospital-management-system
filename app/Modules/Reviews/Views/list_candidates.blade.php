@extends('Layouts::master')
@section('content')

<div class="box-header">
   
   {{-- <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route('.index')}}" ><i class="fa fa-list"></i> List</a> --}}
</div>
<!-- /.box-header -->
<div class="box-body">
   <!-- form start -->
   
      <div class="box-body">
           
          <div class="row">
               
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
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($candidates)>0)

                            @foreach($candidates as $value)
                          <tr>
                           

                          <td></td>
                            <td>
                                    <label>{{$value->first_name }} {{$value->last_name }}</label>
                         
                            </td>
                            <td>{{$value->department }}</td>
                            <td>{{$value->job_title }}</td>
                            <td>
                                
                            <a href="{{ route('review.show.form', ['eid'=>$value->id,'fid'=>$value->form_id])}}" class="btn btn-primary">Start Review</a>
                            </td>
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
