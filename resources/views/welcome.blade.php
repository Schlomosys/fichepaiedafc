@extends('layouts.app')

@section('content')
<link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Share:ital,wght@0,700;1,700&display=swap');


.container {
  /* margin: auto; */
  /* width: 1000px; */
  display: flex;
  justify-content: center;
  flex-wrap: nowrap;
  margin-top: 15vh;
  
}

.panel {
  background-color: transparent;
  width: 200px;
  height: 300px;
  perspective: 1000px;
  font-family: "Share", sans-serif;
  font-style: italic;
  font-size: 9em;
  background-color: #e0e0e0;
}

.panel-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  /* transition: transform 0.75s; */
  transform-style: preserve-3d;
  animation: flip 4s linear forwards infinite;
  animation-direction: normal;
}

.panel-front,
.panel-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.panel-front {
  background-color: tomato;
  color: black;
}

.panel-back {
  background-color: teal;
  color: white;
  transform: rotateY(180deg);
  /* padding: 5px; */
}

.panel-front img {
  width: 300px;
  height: 300px;
}

@keyframes flip {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(360deg);
  }
}

#gtitre{
      font-family: 'Dosis';
      font-weight: bold; 
      text-align:left;
       padding-left:5%; 
       
       color:#0a5079 ;


}
#ptitre{
      font-family: 'Dosis';
      font-weight: bold; 
      text-align:left; padding-left:5%; color:#0e72ac ;
}
.trtitre{
  
  font-family: 'Dosis';
  font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
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
@media screen and (max-width:1080px){
  .trtitre{
 font-size: 18px;
font-family: 'Dosis';
font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
}
  #gtitre{
    font-size:25px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;

  }
  #ptitre{
    font-size:20px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;
  }
  .tweet-info-counts {
  display: flex;
  margin-left: 50px;
}
.tweet-info-counts div {
  margin-right: 10px;
}
}

@media screen and (max-width:430px){
  .trtitre{
 font-size: 16px;
font-family: 'Dosis';
font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
}
  #gtitre{
    font-size:20px;
    font-family: 'Dosis';
    font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;

  }
  #ptitre{
    font-size:16px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;
  }
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

.card{
  position:relative;
  margin:20px 0;
  /*width:200px;
  height:300px;*/
  
  
  background: #fff;
  transform-style:preserve-3d;
  transform:perspective(2000px);
  transition:1s;
  box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
  border:1px solid #000;



  /*  border-radius: 10px;*/
    /*border: none;*/
  
    margin-bottom: 30px;
}

.card:hover{
  z-index:1111;
  transform:perspective(2000px) rotate(-10deg);
  box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);
}

.card .img-container{
  position:relative;
  width:100%;
  height:250px;
  border:1px solid #000;
  box-sizing:border-box;
  transform-origin:left;
  z-index:1;
  transition:1s;
}

.card .img-container img{
  position:absolute;
  left:0;
  top:0;
  height:250px;
  width:100%;
  object-fit:cover;
  border:1px solid #000;
}

.card:hover .img-container{
  transform:rotateY(-135deg);
}

.card .card-details{
  position:absolute;
  left:0;
  top:0;
  box-sizing:border-box;
  padding:20px;
  color:#000;
}

 .card .card-details h2{
  margin:0;
  padding:0.5em 0;
  text-transform:uppercase;
  font-size:2em;
  color:#ed363a;
}

.card .card-details p{
  margin:0;
  padding:0;
  line-height:25px;
  font-size:1.1em;
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
  height: 5vh;
  min-height: 150px;
  background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0,0,0,0.7)), );
 
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
    height: 5vh;
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
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  
}

.item {
  flex: 0 32%;
  height: 100px;
  margin-bottom: 2%; /* (100-32*3)/2 */
}
  
    
    
    /*
    CSS GRID
    **/
    .container {
  max-width: 1335px;
  margin: 0 auto;
}

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
    <!--CODEE__-->
    
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<section ><!--<!__<onload="myFunction()" style="margin:0;">-->
  <!--<div id="loader"></div>-->
  <!--<div style="display:none;" id="myDiv" class="animate-bottom">-->
    <nav class="navbar">
      
       <img class="photocouv" alt="100x100" src="{{ asset("uploads/images/daflogo.png") }}" data-holder-rendered="true" style="height:50px; width:125px;">
       
       <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       <ul class="nav no-search">
         <li class="nav-item" ><a href="" style="background-color: rgb(247, 245, 148)"></a></li>
         <li class="nav-item" ><a href=""></a></li>
         <li class="nav-item"><a href=""></a></li>
         <li class="nav-item"><a href=""></a></li>
        
         <!--<i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">-->
      @auth
         <div class="transition"><a href="{{ route('importExportView')}}" class="" style="font-family: 'Dosis'; color:red;      ">FG -GENERATOR</a></div>
     @else
     <a  href="{{ route('login') }}" class="btn bg-transparent" style="color:rgb(255, 153, 0); font-weight:bold;"> CONNEXION</a>

         {{--@if (Route::has('register'))
             <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="font-family: 'Dosis ExtraLight';">CREER UN COMPTE</a>
         @endif--}}
     @endauth
         
       
       </ul>
      
     </nav>
<div class="page-wrapper ">
    <div class="nav-wrapper">
     <div class="grad-bar"></div>
     {{--<nav class="navbar">
       <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
       <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       <ul class="nav no-search">
         <li class="nav-item"><a href="#">Home</a></li>
         <li class="nav-item"><a href="#">About</a></li>
         <li class="nav-item"><a href="#">Work</a></li>
         <li class="nav-item"><a href="#">Careers</a></li>
         <li class="nav-item"><a href="#">Contact Us</a></li>
         <i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">
       </ul>
     </nav> color:#045480 ;--}}
     </div>
     <div class="d-flex justify-content-center">
      <div class="" style="padding-left:5%;"> 
         
      </div>
  </div> 
  
    <section class="headline">
      <h1  id="gtitre">BIENVENUE SUR LE GENERATEUR DE FICHES DE PAIE DEDRAS-ONG (DEDRAS- GFP).</h1>
      <h5 id="ptitre"> DEDRAS- GFP EST UN LOGICIEL PROPOSÉ PAR LA DIRECTION DES AFFAIRES FINANCIÈRES ET COMPTABLES DE DEDRAS -ONG  </h5>
      <!--<h5 style=" font-family: 'Dosis';
      font-weight: 200;text-align:left; color:white; padding-left:5%; padding-top:8px;">DAD-Dedras est la bibliothèque développé pour vous permettre d'avoir accès à certains documents. </h5>-->
     
  </section>
  <div class="col">
    <h2 class="trtitre"></h2>


  </div>
  <div class="container">
    <div class="panel">
      <div class="panel-inner">
        <div class="panel-front">
          <p>D</p>
        </div>
        <div class="panel-back">
          <p>D</p>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-inner">
        <div class="panel-front">
          <p>A</p>
        </div>
        <div class="panel-back">
          <p>A</p>
        </div>

      </div>
    </div>
    <div class="panel">
      <div class="panel-inner">
        <div class="panel-front">
          <p>F</p>
        </div>
        <div class="panel-back">
          <p>F</p>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-inner">
        <div class="panel-front">
          <p>C</p>
        </div>
        <div class="panel-back">
          <p>C</p>
        </div>

      </div>
    </div>
  </div>
  
      

      
      
      <div class="main-cards">
       
        
    
  
        <!--<div class="carda"></div>
        <div class="carda">Card</div>-->
      </div>
     </section>
   </div>

  <!--</div>-->

  
</section>
<script>
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage
    
    , 3000);
  }
  
  function showPage() {
    $("loader").hide();
    $("myDiv").style.display = "block";
  }
  </script>



   <script type="text/javascript">

    </script>

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});



</script>
@endsection
