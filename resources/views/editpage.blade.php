@extends('layouts.app')

@section('content')



<form action="{{url('/updatefund/'.$showData->id)}}"  method="post">
    @csrf

    @if (session('leo'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('leo') }}
         </div>
         @endif


       
 
    <div class="form-group ">
      <label for="exampleInputEmail1">Fund Name</label>
      <input type="text" value="{{$showData->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fund name">
      
    </div>
    <div class="form-group my-1">
        <label for="exampleInputEmail1">Fund amount</label>
        <input type="text" value="{{$showData->amount}}" name="amount"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fund amount">
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Method</label>
        <input type="text" value="{{$showData->method}}" name="method" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter method of fund">
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" value="{{$showData->date}}" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Donor Name</label>
        <input type="text" value="{{$showData->d_name}}" name="d_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Donor email">
        
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Donor Email</label>
      <input type="email" value="{{$showData->d_email}}" name="d_email" class="form-control" id="exampleInputPassword1" placeholder="Enter Donor Email">
      <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
      <div class="form-group my-2">
        <label for="exampleInputPassword1">Donor Phone</label>
        <input type="text" value="{{$showData->d_phone}}" name="d_phone"  class="form-control" id="exampleInputPassword1" placeholder="Enter Donor phone number">
      </div>

      <div class="form-group my-2">
        <label for="exampleInputPassword1">Category</label>
       <select name="category_id" class="form-control"> 



         @foreach ($category as $item)
         <option value="{{$item->id}}" @if($item->id==$showData->category_id) selected @endif>{{$item->name}}</option>
         @endforeach
       
     </select>

      </div>




      <div class="form-group my-2">
        <label for="exampleInputPassword1">Payment status</label>
       <select  name="status" class="form-control"> 

        <option value="1" @if($showData->status==1) selected @endif >{{'Payment pending'}}
        
        </option>

        <option value="2" @if($showData->status==2) selected @endif>{{'Payment completed'}}
        
        </option>

        <option value="3" @if($showData->status==3) selected @endif>{{'Refunded'}}
        
        </option>





         {{-- <option value="1">Payment pending</option>
         <option value="2">Payment completed</option>
         <option value="3">Refunded</option> --}}
  
       
  </select>

      </div>


    
    
    <button  type="submit" class="btn btn-primary">Update</button>
  </form>



@stop
  