@extends('Layouts::master')
@section('content')
<div class="box-header">
        @if(isset($page))
        <h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} List</h3>
        @endif
        <a class="btn btn-success btn-sm pull-right" title="Create New" href="{{ route($page.'.create')}}" ><i class="fa fa-plus"></i> Create New</a>
      </div>
            <div class="box-body">
                <table class="table table-bordered table-hover " >
                    <thead>
                    <tr>
                        <th>{{ trans('words.id')}}</th>
                        <th>{{ trans('words.name')}}</th>
                        <th>{{ trans('words.details')}}</th>
                        <th>{{ trans('words.status')}}</th>
                        <th>{{ trans('words.actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($data)>0)
                        @foreach($data as $value)
                      <tr>
                        <td>{{$value->id }}</td>
                        <td>{{$value->name }}</td>
                
                        <td>{{ $value->detail }}</td>
                       
                        <td>
                          <span class="badge badge-success" v-if="item.deleted_at">InActive</span>
                          <span class="badge badge-success" else>Active</span>
                        </td>
                        <td>
                            <a href="{{ route($page.'.edit', [$value->id])}}" class="btn btn-outline-primary" alt="@lang('words.edit')"> <i class="fa fa-pencil"></i></a>
                
                            <a href="{{ route($page.'.delete', $value->id)}}" class="btn btn-outline-danger" alt="@lang('words.delete')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>    
                      @endforeach    
                      @endif      
                    </tbody>
                </table>
                        
            </div>
            <!-- end row -->

@endsection
@section('script')
    <script>
        
    </script>
@endsection