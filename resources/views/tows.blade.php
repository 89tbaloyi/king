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
                <th>LOCATION</th>
                <th>DATE</th>                      
            </thead>    
        </tr>  
        @foreach($tows as $tow)
        <tr>
          <td>{{$tow->id}}</td>
          <td>{{$tow->name}}</td> 
          <td>{{$tow->email}}</td> 
          <td>{{$tow->location}}</td> 
          <td>{{$tow->created_at}}</td>  
        </tr>  
        @endforeach  
        </table>   
    </div>
</div>
</div>
@endsection