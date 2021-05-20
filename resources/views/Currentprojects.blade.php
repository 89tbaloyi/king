@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Driver Name</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Tow Truck Reg
        </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">MHJ079GP</a>
            <a class="dropdown-item" href="#">SSL445GP</a>
            <a class="dropdown-item" href="#">BB34HJGP</a>
          </div>
          </div>
            

        <div class="form-group">
          <label for="exampleFormControlSelect1">Tow Truck Collections</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Road Assist</option>
            <option>Workshop Delivery</option>
            <button type="button" class="btn btn-secondary btn-lg btn-block">Book for Workshop space</button>
            <option>Home Delivery</option>
            
          </select>
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Collection Discription</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
    </div>
</div>
@endsection