@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <table class="table table-stripped">
        <tr>
            <thead>
                <th>ID</th> 
                <th>NAME</th> 
                <th>EMAIL</th>
                <th>DEPARTMENT</th>                                
            </thead>    
        </tr>  
        @foreach($employees as $employee)
        <tr>
          <td>{{$employee->id}}</td>
          <td>{{$employee->name}}</td> 
          <td>{{$employee->email}}</td> 
          <td>{{$employee->department}}</td>         
        </tr>  
        @endforeach  
        </table>   
    </div>
</div>
</div>
@endsection