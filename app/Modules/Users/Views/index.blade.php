@extends('Layouts::master')
@section('content')
<div class="box-header">
        @if(isset($page))
        <h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} List</h3>
        @endif
        <a class="btn btn-success btn-sm pull-right" title="Create New" href="{{ route($page.'.create')}}" ><i class="fa fa-plus"></i> Create New</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
<table id="table" class="table table-bordered table-striped table-sm">
    <thead>
      <tr>
        <th>User Name</th>                
        <th>Email</th>                      
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @if(count($data)>0)
        @foreach($data as $value)
      <tr>
        <td>{{$value->name }}</td>

        <td>{{ $value->email }}</td>
       
        <td>
          <span class="badge badge-success" >{{ $value->deleted_at ? "InActive" : "Active" }}</span>
          
        </td>
        <td>
            <a href="{{ route($page.'.edit', [$value->id])}}" class="btn btn-outline-primary" alt="@lang('words.edit')"> <i class="fa fa-pencil"></i></a>
            @if($value->name != "Admin" && $value->name != "HR" && $value->name != "Employee")
            <a href="{{ route($page.'.assign.role', $value->id)}}" class="btn btn-outline-warning" alt="@lang('words.assign_role')"><i class="fa fa-user"></i></a>

            <a href="{{ route($page.'.delete', $value->id)}}" class="btn btn-outline-danger" alt="@lang('words.delete')"><i class="fa fa-trash"></i></a>
            @endif
          </td>
      </tr>    
      @endforeach    
      @endif      
    </tbody>
  </table>

  {!! $data->render() !!}
</div>
@endsection