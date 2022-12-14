@extends('layouts.app')

@section('content')

    
   <h3 class="heart" style="color: rgb(95, 197, 197)" ><strong>{{'Add Project'}}</strong> </h3>


   <style>
    .heart{
      font-family: "Audiowide", sans-serif;
    }
  </style>
   
   <form  action="{{url('postproject')}}" method="post" class="my-3">
    @csrf



    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
      </div>


      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1">
      </div>


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> Assign to </label>
      <select  name="user_id" class="form-control"> 

        @foreach ($userdata as $item)
            
    
        <option value="{{$item->id}}">{{$item->name}}</option>

        @endforeach
      
      </select>
    </div>



    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status </label>
        <select  name="status" class="form-control"> 
          <option value="0">Pending</option>
          <option value="1">Processing</option> 
          <option value="2">Completed</option> 
          <option value="3">Cancelled</option> 
        </select>
      </div>



      <button  type="submit" class="btn btn-primary">Add</button>
  
   
 
  </form>
@stop