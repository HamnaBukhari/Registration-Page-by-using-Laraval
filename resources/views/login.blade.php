@extends('layout')

@section('content')	

  <center> <h1> UOL Student Portal </h1> </center>   
    <form action="loginsubmit" method="POST"> 
    @csrf 
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="pass" required>  
            <center><button type="submit">LOGIN</button></center>   
            
        </div>   
    </form>   
@endsection