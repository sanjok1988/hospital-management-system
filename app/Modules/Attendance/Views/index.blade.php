@extends('Layouts::master')
@section('content')
<?php $dt = \Carbon\Carbon::now();?>
<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">                
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Total Attendance</h5>
                        <h3>{{ $count = count($data) }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Total Leave</h5>
                        <h3>{{ $dt->day - $count }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Total Days Of Month</h5>
                            <h3>{{ \Carbon\Carbon::parse($dt->format('Y-m-d'))->daysInMonth }}</h3>
                        <p>{{ $_SERVER['REMOTE_ADDR'] }}</p>{{getUserIP()}}
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="box-body">
                <div class="card-header">Attendance Board<span class="pull-right"><b>Today:</b> {{ \Carbon\Carbon::now()->toDayDateTimeString() }}</span></div>

               
                <table class="table table-bordered table-hover ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sign In</th>
                            <th scope="col">Sign Out</th>
                            <th scope="col">Status</th>
                            <th scope="col">Note</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($data)>0)
                            <?php $i=0; ?>
                            @foreach($data as $value)
                            <?php $i++; ?>
                          <tr>
                            <th scope="row">{{ $i }}</th>
                          <td>{{ $value->time_in }}</td>
                            <td>{{ $value->time_out }}</td>
                            <td>{{ "Late" }}</td>
                            <td>{{ $value->note }}</td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
</div>
@endsection
