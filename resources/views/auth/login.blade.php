<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>PT. Halim Fanona</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/pages/signin.css')}} rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
        <div class="navbar-inner">
            
            <div class="container">
                
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <a class="brand" href="index.html">
                    PT. HALIM FANONA				
                </a>		
                
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        

                        
                        <li class="">						
                            <a href="/" class="">
                                <i class="icon-chevron-left"></i>
                                Back to Homepage
                            </a>
                            
                        </li>
                    </ul>
                    
                </div><!--/.nav-collapse -->	
        
            </div> <!-- /container -->
            
        </div> <!-- /navbar-inner -->
        
    </div> <!-- /navbar -->
    
    
    <center>
    <div class="account-container mt-5">
        
        <div class="content clearfix ">
            
            <form action="/postLogin" method="post" style="margin-top: 50px">
            @csrf
                <h1 class="mb-4">LOGIN</h1>		
                
                <div class="login-fields mt-3">
                    
                    <p>Masukan username/email dan password anda</p>
                    
                    <div class="field">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="email" value="" placeholder="Username" class="login username-field" />
                    </div> <!-- /field -->
                    
                    <div class="field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                    </div> <!-- /password -->
                    
                </div> <!-- /login-fields -->
                
                <div class="login-actions">
                                        
                    <button type="submit" class="button btn btn-success btn-large">Sign In</button>
                    
                </div> <!-- .actions -->
                
                
                
            </form>
            
        </div> <!-- /content -->
        
    </div> <!-- /account-container -->
    </center>


<script src="{{asset('js/jquery-1.7.2.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/signin.js')}}"></script>

</body>

</html>

