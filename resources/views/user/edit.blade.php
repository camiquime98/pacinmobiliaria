@extends('layouts.header.navbarinicio')
@section('content')
<div class="container-fluid">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.edit', $User->id) }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sign-up">
                        <h4>{{ __('Name') }}:</h4>
                                                    
                        
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $User->name) }}" required autocomplete="name" autofocus >
                
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                    </div>
                
                    <div class="sign-up">
                       
                
                        <h4>{{ __('Email') }}:</h4>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $User->email) }}" required autocomplete="email">
                
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                
                    <div class="sign-up">
                        <h4>{{ __('Password') }}:</h4>
                    
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  value="{{ old('password', $User->password) }}" >
                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                
                    <div class="sign-up">
                        <h4>{{ __('Confirm Password') }}:</h4>
                       
                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  value="{{ old('password_confirmation') }}">
                        
                    </div>
                    <div class="form-group hidden">
                        <select name="id_tipo_usuario" id="id_tipo_usuario">
                            <option value="1">Administrador</option>
                            <!--<option value="2">Supervisor</option>-->
                            <!--<option value="3">Cliente</option>-->
                        </select>
                    </div>
                    
                        <div class="sign-up">
                             <input type="submit" value="{{ __('Register now') }}" >
                               
                            </button>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>



@endsection