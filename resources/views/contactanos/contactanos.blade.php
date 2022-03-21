@include('layouts.header.header')
@extends('layouts.header.navbarcontac')
@section('content')


<style>

@font-face {
  font-family: Poppins-Regular;
  src: url('/assets/fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('/assets/fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('/assets/fonts/poppins/Poppins-Bold.ttf'); 
}


a {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
	color: #57b846;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #999999; }
input:-moz-placeholder { color: #999999; }
input::-moz-placeholder { color: #999999; }
input:-ms-input-placeholder { color: #999999; }

textarea::-webkit-input-placeholder { color: #999999; }
textarea:-moz-placeholder { color: #999999; }
textarea::-moz-placeholder { color: #999999; }
textarea:-ms-input-placeholder { color: #999999; }

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}



     .row-video{
        position: absolute;
        max-width: 70%;
        width: 100%;
        max-height: 100vh;
        height: 100%;
        align-items: center;
        
    }
    
    .fondo-video
    {
        width: 100%;
        height: 100%;
        background: rgba(252, 252, 252, 0.459);
        z-index: 1;
        position: absolute;
        
    }
 /*   .video > video{
        width: 100%;
        height: 100vh;
    }*/
    .contacto
    {
        position: relative;
        z-index: 10;
    } 


    .wrap-contact2 {
  width: 400px;
  background: rgba(252, 252, 252, 0.589);
  border-radius: 30px;
  overflow: hidden;
  margin-top: 30px;
  padding: 15px;
}

.contact2-form {
  width: 100%;
}

/*------------------------------------------------------------------
[  ]*/

.contact2-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 29px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 20px;
}



/*------------------------------------------------------------------
[  ]*/

.wrap-input2 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #adadad;
  margin-bottom: 37px;
}

.input2 {
  display: block;
  width: 100%;

  font-family: Poppins-Regular;
  font-size: 15px;
  color: #555555;
  line-height: 1.2;
  background: transparent;
}

.focus-input2 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input2::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: rgba(219,21,99,1);
  background: -webkit-linear-gradient(45deg, #d5007d, #e53935);
  background: -o-linear-gradient(45deg, #d5007d, #e53935);
  background: -moz-linear-gradient(45deg, #d5007d, #e53935);
  background: linear-gradient(45deg, #d5007d, #e53935);
}

.focus-input2::after {
  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0;

  font-family: Poppins-Regular;
  font-size: 13px;
  color: #474343;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

/*---------------------------------------------*/
input.input2 {
  height: 45px;
}

input.input2 + .focus-input2::after {
  top: 16px;
  left: 0;
}

textarea.input2 {
  min-height: 115px;
  padding-top: 13px;
  padding-bottom: 13px;
}

textarea.input2 + .focus-input2::after {
  top: 16px;
  left: 0;
}

.input2:focus + .focus-input2::after {
  top: -13px;
}

.input2:focus + .focus-input2::before {
  width: 100%;
}

.has-val.input2 + .focus-input2::after {
  top: -13px;
}

.has-val.input2 + .focus-input2::before {
  width: 100%;
}

/*------------------------------------------------------------------
[ Button ]*/
.container-contact2-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 13px;
}

.wrap-contact2-form-btn {
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 2px;
  width: auto;
  overflow: hidden;
  margin: 0 auto;
}

.contact2-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: rgba(219,21,99,1);
  background: -webkit-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
  background: -o-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
  background: -moz-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
  background: linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact2-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 244px;
  height: 50px;

 

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  

}

.wrap-contact2-form-btn:hover .contact2-form-bgbtn {
  left: 0;
}

/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-contact2 {
    padding: 72px 15px 90px 15px;
  }
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: white;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 0px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
@media (max-width: 767px)
{
    .contact2-form {
    width: 100%;
    
    padding: 20px;
    border-radius: 10px;
    }
    .wrap-contact2
    {
      background: rgba(221, 221, 221, 0.199);
    }
    .row-video
    {
        display: none;
    }
}

</style>

<div class="container-fuild">
    <div class="row row-video">
        <div class="fondo-video"></div>
        <video  src="/assets/video-contacto/video-contacto.mp4" autoplay muted loop style="height: 100%">
        </video>
    </div>
    <div class="row contacto">
        <div class="col-md-6">
            AQUI VA PUBLICIDAD
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            

            <div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contactanos
					</span>

					<div class="wrap-input2 validate-input" data-validate="Nombre es requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="Nombre completo"></span>
					</div>

          <div class="wrap-input2 validate-input" data-validate="Telefono es requerido">
						<input class="input2" type="text" name="celular">
						<span class="focus-input2" data-placeholder="Telefono celular"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Correo es requerido: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="Correo electronico"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Mensaje es requerido">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="Mensaje"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								ENVIAR MENSAJE
							</button>
						</div>
					</div>
				</form>
			</div>
        
        </div>
    </div>
</div>
<script>
    
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input2').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
            
  
    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }

        return check;
    });


    $('.validate-form .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
</script>
@endsection
