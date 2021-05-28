@extends('layouts.app')

@section('content')

{{-- add a calculation that will calculate the salaries of the employees --}}
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form>
  
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Name">    
        </div>
      
        <div class="form-group">
          <label for="time">Time</label>
          <input type="text" class="form-control" id="time" placeholder="Time">    
        </div>  
        
        <div class="form-group">
          <label for="wage">Wage</label>
          <input type="text" class="form-control" id="wage" placeholder="Wage">    
        </div>
      
        <a class="btn btn-primary">Calculate</a>
      </form>
    </div>
  </div>
</div>


@endsection 



