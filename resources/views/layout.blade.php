<!DOCTYPE html>
<html>
<head>

	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #c6c0bf;  
}  
button {   
       background-color: black;   
       width: 20%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border-radius: 20px;
        border: black solid;   
        cursor: pointer;   
         }   
 form {   
        border: 3px;   
    }   
 input[type=text], input[type=password],input[type=email] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;  
        }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
 	    width: 40%;
        padding: 25px;   
        background-color: #eee9e8;  
    }   
</style>
</head>
<body>


<div class="header">
@section('header')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">ASSIGNMENT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">LOGIN</a></li>
      <li><a href="create">CREATE ACCOUNT</a></li>
      <li><a href="#">ABOUT</a></li>
     
    </ul>
  </div>
</nav>
@show
</div>

<div class="content">
@section('content')	
@show
</div>

<div class="footer">
@section('footer')
<div class="footer">
  <p>Created By Hamna Bukhari</p>
  <p>70069481</p>
</div>
@show
</div>

</body>
</html>