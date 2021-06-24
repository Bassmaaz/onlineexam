@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style type="text/css">
        body,td,th{
            color: #000000;
        }
        body{
            background-color: #F0F0F0;
 
        }
        .style1
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 14px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
        }
 
        .style2
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 17px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
 
        }
 
    </style>
<div class="container">
<table width="100%" height="100%" border="0" cellspacing="0" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <tr>
            <td align="center" valign="middle">
                <table class="table-bordered" width="700" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">

                <tr>
                              <td height="25" colspan="2" align="left" valign="middle" bgcolor="#FF9900" class="style2">
                                  <div align="center">
                                  <div class="card-header">{{ __('Register') }}</div>
                                  </div>
                              </td>
                          </tr>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        <tr>
                            <td width="1000" align="left" valign="middle" class="style1"> <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label></td>
                            <td width="1000" align="left" valign="middle" class="style1">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 
                        </tr>
                           

                        <div class="form-group row">
                        <tr>
                            <td width="1000" align="left" valign="middle" class="style1"><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label></td>
                            <td width="1000" align="left" valign="middle" class="style1">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                           
                        </tr>

                        <div class="form-group row">
                        <tr>
                            <td width="1000" align="left" valign="middle" class="style1"><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label></td>
                            <td width="1000" align="left" valign="middle" class="style1">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                    
                        </tr>

                        <div class="form-group row">
                        <tr>
                            <td width="1000" align="left" valign="middle" class="style1"><label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label></td>
                            <td width="1000" align="left" valign="middle" class="style1">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>             
                        </tr>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <tr>
                            <td colspan="2" align="right" valign="middle" class="style1">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </td>
                        </tr> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
