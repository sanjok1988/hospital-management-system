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
        <th>Full Name</th>                
        <th>Address</th>
        <th>Mobile</th>
        <th>Department</th>
        <th>Private Email</th>
        <th>Work Email</th>
        <th>Joined Date</th>                
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @if(count($data)>0)
        @foreach($data as $value)
      <tr>
        <td>{{$value->first_name." " }} {{ $value->middle_name ." "}}{{$value->last_name }}</td>

        <td>{{ $value->address }}</td>
        <td>{{ $value->mobile }}</td>
        <td>{{ $value->department }}</td>
        <td>{{ $value->private_email }}</td>
        <td>{{ $value->work_email }}</td>
        <td>{{ $value->joined_date }}</td>
        <td>
          <span class="badge badge-success" >{{ $value->deleted_at ? "InActive" : "Active" }}</span>
        </td>
        <td>
            <a href="{{ route($page.'.edit', $value->id)}}" class="btn btn-outline-primary" alt="@lang('words.edit')"> <i class="fa fa-pencil"></i></a>

            <a href="{{ route($page.'.delete', $value->id)}}" class="btn btn-outline-danger" alt="@lang('words.delete')"><i class="fa fa-trash"></i></a>
        </td>
      </tr>    
      @endforeach    
      @endif      
    </tbody>
  </table>

  {!! $data->render() !!}
</div>
@endsection