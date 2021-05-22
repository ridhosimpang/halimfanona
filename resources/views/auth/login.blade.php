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
                <h1>LOGIN</h1>		
                
                <div class="login-fields">
                    
                    <p>Please provide your details</p>
                    
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

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
