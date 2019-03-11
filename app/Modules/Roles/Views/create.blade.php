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
                <label for="">Unique Role Name</label>
                <input type="text" class="form-control" name="name" placeholder="Role Name" value="{{ ($flag)?$data->name:'' }}" >
                </div>
                <div class="form-group">
                        <label for="">Display Name</label>
                        <input type="text" class="form-control" name="display_name" placeholder="Display Name" value="{{ ($flag)?$data->display_name:'' }}" >
                        </div>
                <div class="form-group">
                <label for="">Role Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description" value="{{ ($flag)?$data->description:'' }}">
                </div>
            </div>
        
        </div>
        <div class="col-md-12">
                <div class="box-header">
                      
                        <h3 class="box-title">Permissions</h3>
                      <hr>
                        
                     </div>
                <table class="table">
                        @if($permissions)
                        <?php $i=1;
                        ?>
                        @foreach($permissions as $data)
                        <tr>
                        <label class="checkbox-inline permission">
                               
                               @if($flag)
                                <input type="checkbox" name="permission[]" value="{{ $data->id }}"  <?=(in_array($data->id, $p))?'checked':'';?>>{{ $data->display_name}}
                                @else 
                                <input type="checkbox" name="permission[]" value="{{ $data->id }}" >{{ $data->display_name}}
                                @endif
                           
                            </label>
                              @if($i++ % 4 == 0)
                              <br>
                              @endif
                            </tr>
                       @endforeach
                       @endif
                </table>
                    
                
                     
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
