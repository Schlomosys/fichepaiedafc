@extends('layouts.app')

@section('content')
<link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
<style type="text/css">
.hide {
	display: none;
}


.tweet-info-counts {
  display: flex;
  margin-left: 60px;
  margin-top: 10px;
}
.tweet-info-counts div {
  display: flex;
  margin-right: 20px;
}
.tweet-info-counts div svg {
  color:#657786;
  margin-right: 0px;
}

@media screen and (max-width:430px){
 
  .tweet-info-counts {
  display: flex;
  margin-left: 50px;
}
.tweet-info-counts div {
  margin-right: 10px;
}
}
/*.post-footer-option li{
    float:left;
    margin-right:50px;
    padding-bottom:15px;
}

.post-footer-option li a{
    color:#AFB4BD;
    font-weight:500;
    font-size:1.3rem;
}



.anchor-username h4{
    font-weight:bold;    
}

.anchor-time{
    color:#ADB2BB;
    font-size:1.2rem;
}

.post-footer-comment-wrapper{
    background-color:#F6F7F8;
}*/
.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -0px;
    /*right: -5px;*/
    top: 20px;
    opacity: 0.1;
}
.overviewcard {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color: #d3d3;
}

.main-cards {
  column-count: 1;
  column-gap: 20px;
  margin: 20px;
}

.carda {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  background-color: #82bef6;
  margin-bottom: 20px;
  -webkit-column-break-inside: avoid;
  padding: 24px;
  box-sizing: border-box;
  overflow-y: scroll;
}

/* Force varying heights to simulate dynamic content */
.carda:first-child {
  height: 485px;
}

.carda:nth-child(2) {
  height: 200px;
}

.carda:nth-child(3) {
  height: 265px;
}


    .label-info{
            background-color: #17a2b8;

        }
        .label {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,
            border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }


    /*@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap");*/
  @import url("https://fonts.googleapis.com/css?family=Dosis:300,400,700&display=swap");
    


    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Dosis ExtraLight';
  
}


/* HEADINGS */

h1, p {
  color: #fff;
  text-align: center;
  line-height: 1.4;
}

h1 {
  font-size: 2.2rem;
}

h2 {
  color: #000;
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 10px;
}

/* BASIC SETUP */

.page-wrapper {
  width: 100%;
  height: auto;

}

.nav-wrapper {
  width: 100%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: #fff;
}

.grad-bar {
  width: 100%;
  height: 5px;
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
  background-size: 400% 400%;
  	-webkit-animation: gradbar 15s ease infinite;
	-moz-animation: gradbar 15s ease infinite;
	animation: gradbar 15s ease infinite;
}

/* NAVIGATION */

.navbar {
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  height: 50px;
  overflow: hidden;
}

.navbar img {
  height: 16px;
  width: auto;
  justify-self: start;
  margin-left: 20px;
}

.navbar ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(6,1fr);
  justify-self: end;
  
}

.nav-item a {
  color: #045480;
  /*font-size: 0.9rem;*/
  font-size:16px;
  /*font-weight: 400;*/
  font-family: 'Dosis';
  font-weight: bold;
  text-decoration: none;
 /* transition: color 0.3s ease-out;*/
}

.nav-item a:hover {
  color: #f8e806;
}

/* SECTIONS */

.headline {
  width: 100%;
  height: 20vh;
  min-height: 200px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('{{ asset("/uploads/images/dedrasicon.png") }}');
 
  /*background-size:contain;*/
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: 100%;
  height: 500px;
  background-color: #f1f1f1;
  display: flex;
  padding: 20px 20px 15px 50px;
  justify-content: center;
  overflow-y: scroll;
}
.container{
    
}

.feature-container {
  flex-basis: 30%;
  margin-top: 10px;
}

.feature-container p {
  color: #000;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 15px;
}

.feature-container img {
  width: 100%;
  margin-bottom: 15px;
}

/* SEARCH FUNCTION */

#search-icon {
  font-size: 0.9rem;
  margin-top: 3px;
  margin-left: 15px;
  transition: color 0.3s ease-out;
}

#search-icon:hover {
  color: #3498db;
  cursor: pointer;
}

.search {
  transform: translate(-35%);
  -webkit-transform: translate(-35%);
  transition: transform 0.7s ease-in-out;
  color: #3498db;
}

.no-search {
  transform: translate(0);
  transition: transform 0.7s ease-in-out;
}

.search-input {
  position: absolute;
  top: -4px;
  right: -125px;
  opacity: 0;
  z-index: -1;
  transition: opacity 0.6s ease;
}

.search-active {
  opacity: 1;
  z-index: 0;
}

input {
  border: 0;
  border-left: 1px solid #ccc;
  border-radius: 0; /* FOR SAFARI */
  outline: 0;
  padding: 5px;
}

/* MOBILE MENU & ANIMATION */

.menu-toggle .bar{
  width: 25px;
  height: 3px;
  background-color: #3f3f3f;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menu-toggle {
  justify-self: end;
  margin-right: 25px;
  display: none;
}

.menu-toggle:hover{
  cursor: pointer;
}

#mobile-menu.is-active .bar:nth-child(2){
  opacity: 0;
}

#mobile-menu.is-active .bar:nth-child(1){
  -webkit-transform: translateY(8px) rotate(45deg);
  -ms-transform: translateY(8px) rotate(45deg);
  -o-transform: translateY(8px) rotate(45deg);
  transform: translateY(8px) rotate(45deg);
}

#mobile-menu.is-active .bar:nth-child(3){
  -webkit-transform: translateY(-8px) rotate(-45deg);
  -ms-transform: translateY(-8px) rotate(-45deg);
  -o-transform: translateY(-8px) rotate(-45deg);
  transform: translateY(-8px) rotate(-45deg);
}

/* KEYFRAME ANIMATIONS */

@-webkit-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

/* Media Queries */

  /* Mobile Devices - Phones/Tablets */

@media only screen and (max-width: 720px) { 
  .features {
    flex-direction: column;
    padding: 50px;
  }
  
  /* MOBILE HEADINGS */
  
  h1 {
    font-size: 1.9rem;
  }
  
  h2 {
    font-size: 1rem;
  }
  
  p {
    font-size: 0.8rem;
  }
  
  /* MOBILE NAVIGATION */
     
  .navbar ul {
    display: flex;
    flex-direction: column;
    position: fixed;
    justify-content: start;
    top: 70px;
    background-color: #fff;
    width: 100%;
    height: calc(100vh - 55px);
    transform: translate(-101%);
    text-align: center;
    overflow: hidden;
  }
  
  .navbar li {
    /*padding: px;*/
   
  }
  
  .navbar li:first-child {
    margin-top: 70px;
  }
  
  .navbar li a {
    font-size: 1rem;
  }
   
  .menu-toggle, .bar {
    display: block;
    cursor: pointer;
  }
  
  .mobile-nav {
  transform: translate(0%)!important;
}
  
  /* SECTIONS */
  
  .headline {
    height: 10vh;
  }
    
  .feature-container p {
    margin-bottom: 25px;
  }
  
  .feature-container {
    margin-top: 20px;
  }
  
  .feature-container:nth-child(2) {
    order: -1;
  }
  
  /* SEARCH DISABLED ON MOBILE */
  
  #search-icon {
    display: none;
  }
  
  .search-input {
  display: none;
 }



/* Grid*/
 .col {
    clear: both;
    float: none;
    margin-left: auto;
    margin-right: auto;
    width: auto !important;
  }
  
}


.item {
  flex: 0 32%;
  height: 100px;
  margin-bottom: 2%; /* (100-32*3)/2 */
}
  
    
    
    /*
    CSS GRID
    **/
   

.grid-row {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
}

.grid-item {
    z-index: 1;
  height: 250px;
  flex-basis: 20%;
  -ms-flex: auto;
  width: 250px;
  position: relative;
  padding: 10px;
  box-sizing: border-box;
}

.grid-row a {
  text-decoration: none;
}

.wrapping-link {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  color: currentColor;
}

.grid-item-wrapper {
  -webkit-box-sizing: initial;
  -moz-box-sizing: initial;
  box-sizing: initial;
  background: #aaa;
  margin: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  position: relative;
}

.grid-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.grid-image-top {
  height: 45%;
  width: 120%;
  background-size: cover;
  position: relative;
  background-position: 50% 50%;
  left: -10.5%;
  top: -4.5%;
  display: none;
}

.grid-image-top .centered {
  text-align: center;
  transform: translate(-50%, -50%);
  background-size: contain;
  background-repeat: no-repeat;
  position: absolute;
  top: 54.5%;
  left: 50%;
  width: 60%;
  height: 60%;
  background-position: center;
}

.rex-ray-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/Rex-Ray-icon-209x300.png);
}


.sputnik-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/sputnik-1-300x257.png);
}

.edgex-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/edge-x-300x287.png);
}

.openswitch-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/open-switch-300x207.png);
}

.scaleio-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/K8s_ScaleIO_Color-white-thumb-221x300.png);
}

.csi-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/csi-1-300x99.png);
}

.kubernetes-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/kubernetes-300x293.png);
}

.grpc-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/grpc-300x105.png);
}

.envoy-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/envoy_logo-5028052-300x91.png);
}

.istio-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/istio-203x300.png);
}

.grid-item-content {
  padding: 0 20px 20px 20px;
}

.item-title {
  font-size: 24px;
  line-height: 26px;
  font-weight: 700;
  margin-bottom: 18px;
  display: block;
}

.item-category {
  text-transform: uppercase;
  display: block;
  margin-bottom: 20px;
  font-size: 14px;
}

.item-excerpt {
  margin-bottom: 20px;
  display: block;
  font-size: 14px;
}

.more-info {
  position: absolute;
  bottom: 0;
  margin-bottom: 25px;
  padding-left: 0;
  transition-duration: .5s;
  font-size: 12px;
  display: flex;
}

.more-info i {
  padding-left: 5px;
  transition-duration: .5s;
}

.grid-item:hover .more-info i {
  padding-left: 20px;
  transition-duration: .5s;
}

.more-info i::before {
  font-size: 16px;
}

.grid-item:hover .grid-item-wrapper {
  padding: 2% 2%;
  margin: -2% -2%;
}
@media(max-width: 1333px) {
  .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 1073px) {
   .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 815px) {
  .grid-item {
    flex-basis: 50%;
  }
}

@media(max-width: 555px) {
  .grid-item {
    flex-basis: 100%;
  }
}

    
    /*
    CSS
    **/
    
</style>
<div class="row justify-content-center" style="font-family: 'Dosis';
font-weight: bold; color:black; margin-top:100px;"><img class="photocouv" alt="100x100" src="{{ asset("uploads/images/daflogo.png") }}" data-holder-rendered="true" style="height:50px; width:125px; margin-top:-50px;"></div>
<div class="container" style="">
  <h1 class="row justify-content-center" style="font-family: 'Dosis';
      font-weight: bold; color:black;"> CONNEXION</h1>
    <div class="row justify-content-center">
      
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">{{ __('Connexion') }}</div>-->

                <div class="card-body">
                    <form method="POST" id="myform" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family: 'Dosis';
                            font-weight: bold;">{{ __('E-Mail') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family: 'Dosis';
                            font-weight: bold;">{{ __('Mot de passe') }}</label>

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
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <div class="col-md-6 offset-md-4">
                                <button class="submit btn btn-block btn-primary" type="submit">
                                  <i class="loading-icon fa-lg fas fa-spinner fa-spin hide" ></i> &nbsp; 
                                  <i class="czi-user mr-2 ml-n1"></i>
                                  <span class="btn-txt">{{ __('CONNEXION') }}</span></button>
                              </div>
                             

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                    </form>
                    <div class="col-md-8 offset-md-4">
                     <a href="{{ url('/') }}"> <button type="submit" class="btn btn-outline-warning">
                          Retourner à l'Accueil
                      </button></a>

                     
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $("#myform").submit(function() {
    $(".result").text("");
    $(".loading-icon").removeClass("hide");
    $(".submit").attr("disabled", true);
    $(".btn-txt").text("Chargement ...");
  });
});               
                         

</script>
</div>
@endsection
