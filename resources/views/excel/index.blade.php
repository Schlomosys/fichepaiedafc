<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<!-- Styles -->

    <!--Color Picker-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    
    
   <!--SHARE-->
   <script src="https://kit.fontawesome.com/5846046699.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
   <link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Dosis:300,400,700&display=swap");
    .hide {
	display: none;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      list-style: none;
      font-family: 'Dosis';
      font-weight: bold;
      text-decoration: none;
      /*font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;*/
      /*font-size: 18px;*/
     
      
      /*font-family: "Montserrat", sans-serif;*/
    }
    body{
      margin: 0;
      padding: 0;
    /*  color: #fff;*/
     
      box-sizing: border-box;
     /* background-color:#1F2739;*/
      background-color:#ffffff;
    }
   .wrapper {
  display: flex;
  width: 100%;
}

.wrapper .sidebar{
  position: relative;
}

.wrapper .sidebar .bg_shadow{
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background: #000;
  z-index: 998;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.wrapper .sidebar__inner {
  width: 250px;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  background: #2a58ae;
  z-index: 999;
  transition: all 0.3s ease;
  overflow: scroll;
  -webkit-overflow-scrolling: touch;
}

.wrapper .main_container {
  margin-left: 250px;
  width: calc(100% - 250px);
  position: absolute;
   transition: all 0.3s ease;
   /*overflow: scroll;
  -webkit-overflow-scrolling: touch;*/
}

.profile_info {
  padding: 30px 50px;
  text-align: center;
}
/*.wrapper .sidebar__inner .flex-scroll {
      overflow-y:scroll;
      min-height:0;
      -webkit-box-flex:1;
      flex:1;
      }*/

.profile_info .profile_img {
  width: 125px;
  /*margin: 0 auto 15px;*/
  margin: auto;
  justify-content:center;
  
}
 .profile_info .profile_img img {

  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}

 .profile_info .profile_data .name {
  font-size: 20px;
  font-weight: 500;
  color: #fff;
  
}

 .profile_info .profile_data .role {
  font-weight: 300;
  color: #167EBE;
  margin-bottom: 15px;
}

 .profile_info .profile_data .btn {
  padding: 10px;
  border: 1px solid #1fafec;
  border-radius: 25px;
  color: #1fafec;
  cursor: pointer;
}

 .profile_info .profile_data .btn:hover {
  background: #1fafec;
  color: #fff;
}

.siderbar_menu li a {
  padding: 10px 50px;
  display: block;
  height: 90px;
  position: relative;
  margin-bottom: 1px;
  /*color: #88a3d0;*/
  color:#167EBE;
  text-align: center;
  text-transform: uppercase;
  font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
  
}

 .siderbar_menu li a .icon {
  font-size: 20px;
  margin-bottom: 5px;
}

 .siderbar_menu li a:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #1fafec;
  display: none;
}

 .siderbar_menu li a:hover,
 .siderbar_menu li a.active {
  background: #1d4c9e;
  color: #fff;
}

 .siderbar_menu li a:hover:before,
 .siderbar_menu li a.active:before {
  display: block;
}

.wrapper .main_container .top_navbar {
  width: calc(100% - 250px);
  height: 60px;
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 15px 25px;
  position: fixed;
  top: 0;
  left: 250px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
   transition: all 0.3s ease;
}

.wrapper .main_container .top_navbar .hamburger {
  width: 30px;
  height: 30px;
  position: relative;
  display: none;
}

.wrapper .main_container .top_navbar .hamburger .fas {
  color: #88a3d0;
  font-size: 25px;
  cursor: pointer;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.wrapper .main_container .top_navbar .menu {
  display: flex;
  align-items: center;
}

.wrapper .main_container .top_navbar .menu li a {
  margin: 0 5px;
  padding: 0 5px;
  position: relative;
  color: #1d4c9e;
  font-weight: 400;
  text-align: center;
}

.wrapper .main_container .top_navbar .menu li a:before {
  content: "";
  position: absolute;
  bottom: -20px;
  left: 0;
  width: 100%;
  height: 3px;
  background: #1fafec;
  display: none;
}

.wrapper .main_container .top_navbar .menu li a.active,
.wrapper .main_container .top_navbar .menu li a:hover {
  color: #1fafec;
}

.wrapper .main_container .top_navbar .menu li a:hover:before,
.wrapper .main_container .top_navbar .menu li a.active:before {
  display: block;
}

.wrapper .main_container .top_navbar .right_bar {
  display: flex;
  align-item: center;
}

.wrapper .main_container .top_navbar .right_bar li {
  margin: 0 10px;
}

.wrapper .main_container .top_navbar .right_bar .fas {
  font-size: 25px;
  cursor: pointer;
  color: #88a3d0;
}

.wrapper .main_container .top_navbar .right_bar li:hover,
.wrapper .main_container .top_navbar .hamburger .fas:hover {
  opacity: 0.4;
}

.wrapper .main_container .container {
  padding-top: 50px;
  margin-top: 0px;
  width: 100%
  /*overflow: auto;*/
  height: calc(100vh - 50px);
}

.wrapper .main_container .container .item {
  background: #fff;
  padding: 0px;
  border-bottom: 1px solid #d9e2e7;
  font-size-adjust: 18px;
  line-height: 22px;
  margin-bottom: 15px;
}

.wrapper .sidebar__inner .close{
    position: absolute;
    top: 5px;
    right: 15px;
    font-size: 25px;
    color: #fff;
  display: none;
  cursor: pointer;
}

.wrapper .sidebar__inner .close:hover{
  opacity: 0.5;
}
   
    table {
      border: 1px solid #ccc;
      border-collapse: collapse;
      margin: 0;
      padding: 0;
      width: 100%;
      table-layout: fixed;
    }
    
    table caption {
      font-size: 1.5em;
      margin: .5em 0 .75em;
    }
    
    table tr {
     /* background-color:  color: #185875;*/
      
      /*background-color: #185875;*/
      border: 1px solid #ddd;
      padding: .35em;
    }
    
    table th,
    table td {
      padding: .625em;
      text-align: center;
    }
    
    table th {
      font-size: .85em;
      letter-spacing: .1em;
      text-transform: uppercase;
    }
    
    @media screen and (max-width: 1700px) {
      table {
        border: 0;
      }
    
      table caption {
        font-size: 1.3em;
      }
      
      table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      
      table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }
      
      table td {
        border-bottom: 1px solid #ddd;
        display: block;
        font-size: .8em;
        text-align: right;
      }
      
      table td::before {
        /*
        * aria-label has no advantage, it won't be read inside a table
        content: attr(aria-label);
        */
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
      }
      
      table td:last-child {
        border-bottom: 0;
      }
    }
       /*.dropdown-header {
        text-align: center;
        font-size: 1em;
        color: #ddd;
        background:#212531;
        background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
    }
    .sidenav__list .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #222;
        box-shadow: none;
    }
    .dropdown-menu.show {
        top: 0;
    }
       */
    .card{
      position:relative;
      margin:15px 10px 10px 10px;
      width:100%;
      height:100%;
      background: #fff;
      transform-style:preserve-3d;
      transform:perspective(2000px);
      transition:1s;
      box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
      left: -5%;
      top:-8%;
      /*border-radius:5%;*/
    
    }
    
    .card:hover{
      z-index:1;
     /* transform:perspective(2000px) rotate(-10deg);
      box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);*/
    }
    
    .card .img-container{
      position:relative;
      width:100%;
      height:100%;
      border:1px solid #000;
      box-sizing:border-box;
      transform-origin:left;
      z-index:1;
      transition:1s;
      /*border-radius:5%;*/
    }
    
    .card .img-container img{
      position:absolute;
      left:0;
      top:0;
      height:100%;
      width:100%;
      object-fit:cover;
      /*border-radius:5%;*/
    }
    
    .card:hover .img-container{
      /*transform:rotateY(-135deg);*/
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
    
        /**CSS*/
     
    
    /* Assign grid instructions to our parent grid container, mobile-first (hide the sidenav) */
    .grid-container {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 50px 1fr 50px;
      grid-template-areas:
        'header'
        'main'
        'footer';
      height: 100vh;
    }
    
    .menu-icon {
      position: fixed; /* Needs to stay visible for all mobile scrolling */
      display: flex;
      top: 5px;
      left: 10px;
      align-items: center;
      justify-content: center;
      background-color: #dadae0;
      border-radius: 50%;
      z-index: 1;
      cursor: pointer;
      padding: 12px;
    }
    
    /* Give every child element its grid name */
    .header {
      grid-area: header;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      /*background-color: #202020;*/
      background-color: #FFFFFF;
    }
    
    /* Make room for the menu icon on mobile */
    .header__search {
      margin-left: 42px;
    }
    
    .sidenav {
      grid-area: sidenav;
      display: flex;
      flex-direction: column;
      height: 100%;
      width: 240px;
      position: fixed;
      overflow-y: auto;
      transform: translateX(-245px);
      transition: all .6s ease-in-out;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
      z-index: 2; /* Needs to sit above the hamburger menu icon */
      background-color:#e9e7e7;
    }
    
    .sidenav.active {
      transform: translateX(0);
    }
    
    .sidenav__close-icon {
      position: absolute;
      visibility: visible;
      top: 8px;
      right: 12px;
      cursor: pointer;
      font-size: 20px;
      color: rgb(7, 1, 1);
    }
    
    .sidenav__list {
      padding: 0;
      margin-top: 85px;
      list-style-type: none;
    }
    
    .sidenav__list-item {
      padding: 20px 20px 20px 20px;
      color: #ddd;
    }
    .active{
    
      background-color: #e9e7e7;
    }
    
    .sidenav__list-item:hover {
      background-color: rgba(250, 91, 91, 0.2);
      cursor: pointer;
    }
    
    .main {
      grid-area: main;
      background-color:#F9F9F9
    }
    
    .main-header {
      display: flex;
      justify-content: space-between;
      margin: 20px;
      padding: 20px;
     /* height: 150px;*/
      height: 50px;
     
      background-color: #e3e4e6;
      color: slategray;
    }
    
    .main-overview {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(265px, 1fr));
      grid-auto-rows: 94px;
      grid-gap: 20px;
      margin: 20px;
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
      background-color:#F9F9F9;
      margin-bottom: 20px;
      -webkit-column-break-inside: avoid;
      padding: 24px;
      box-sizing: border-box;
      overflow-y: scroll;
    }
    
    /* Force varying heights to simulate dynamic content */
    .carda:first-child {
      height: 1000px;
    }
    
    .carda:nth-child(2) {
      height: 200px;
    }
    
    .carda:nth-child(3) {
      height: 265px;
    }
    
    .footer {
      grid-area: footer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 16px;
      background-color: #648ca6;
    }
    
    /* Non-mobile styles, 750px breakpoint */
    @media only screen and (min-width: 46.875em) {
      /* Show the sidenav */
      .grid-container {
        grid-template-columns: 240px 1fr;
        grid-template-areas:
          "sidenav header"
          "sidenav main"
          "sidenav footer";
      }
    
      .header__search {
        margin-left: 0;
      }
    
      .sidenav {
        position: relative;
        transform: translateX(0);
      }
    
      .sidenav__close-icon {
        visibility: hidden;
      }
    }
    
    /* Medium screens breakpoint (1050px) */
    @media only screen and (min-width: 65.625em) {
      /* Break out main cards into two columns */
      .main-cards {
        column-count: 1;
        /*column-count: 2;*/
      }
    }
    
        /*
        CSS
        **/
    
        /**
        ACCOUNT CSS
        */
      
    
    
    /*body {
      background: #bbc7df;
      font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
      line-height:1.5;
      
    }*/
    
    .wrapper {
      display: flex;
      width: 100%;
    }
    
    .wrapper .sidebar{
      position: relative;
    }
    
    .wrapper .sidebar .bg_shadow{
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      background: #000;
      z-index: 998;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }
    
    .wrapper .sidebar__inner {
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      background: #2a58ae;
      z-index: 999;
      transition: all 0.3s ease;
      overflow: scroll;
      -webkit-overflow-scrolling: touch;
    }
    
    .wrapper .main_container {
      margin-left: 250px;
      width: calc(100% - 250px);
      position: absolute;
       transition: all 0.3s ease;
       /*overflow: scroll;
      -webkit-overflow-scrolling: touch;*/
    }
    
 .profile_info {
      padding: 30px 50px;
      text-align: center;
    }
    /*.wrapper .sidebar__inner .flex-scroll {
          overflow-y:scroll;
          min-height:0;
          -webkit-box-flex:1;
          flex:1;
          }*/
    
  .profile_info .profile_img {
      width: 125px;
      /*margin: 0 auto 15px;*/
      margin: auto;
      justify-content:center;
      
    }
    
    .profile_info .profile_img img {
    
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 40%;
    }
    
 .profile_info .profile_data .name {
      font-size: 20px;
      font-weight: 500;
      color:#045480;font-weight:bold;
    }
    
   .profile_info .profile_data .role {
      font-weight: 300;
      color: #0c3b8d;
      margin-bottom: 15px;
    }
    
 .profile_info .profile_data .btn {
      padding: 10px;
      border: 1px solid #1fafec;
      border-radius: 25px;
      color: #1fafec;
      cursor: pointer;
    }
    
 .profile_info .profile_data .btn:hover {
      background: #1fafec;
      color: #fff;
    }
    
   .siderbar_menu li a {
      padding: 10px 50px;
      display: block;
      height: 90px;
      position: relative;
      margin-bottom: 1px;
      color: #167EBE;
      text-align: center;
      text-transform: uppercase;
      font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
    }
    
 .siderbar_menu li a .icon {
      font-size: 20px;
      margin-bottom: 5px;
    }
    
   .siderbar_menu li a:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      background: #1fafec;
      display: none;
    }
  .siderbar_menu li a:hover,
.siderbar_menu li a.active {
      background: #1d4c9e;
      color: #fff;
    }
    
  .siderbar_menu li a:hover:before,
   .siderbar_menu li a.active:before {
      display: block;
    }
    
    .wrapper .main_container .top_navbar {
      width: calc(100% - 250px);
      height: 60px;
      background: #fff;
      display: flex;
      justify-content: space-between;
      padding: 15px 25px;
      position: fixed;
      top: 0;
      left: 250px;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
       transition: all 0.3s ease;
    }
    
    .wrapper .main_container .top_navbar .hamburger {
      width: 30px;
      height: 30px;
      position: relative;
      display: none;
    }
    
    .wrapper .main_container .top_navbar .hamburger .fas {
      color: #88a3d0;
      font-size: 25px;
      cursor: pointer;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    .wrapper .main_container .top_navbar .menu {
      display: flex;
      align-items: center;
    }
    
    .wrapper .main_container .top_navbar .menu li a {
      margin: 0 5px;
      padding: 0 5px;
      position: relative;
      color: #1d4c9e;
      font-weight: 400;
      text-align: center;
    }
    
    .wrapper .main_container .top_navbar .menu li a:before {
      content: "";
      position: absolute;
      bottom: -20px;
      left: 0;
      width: 100%;
      height: 3px;
      background: #1fafec;
      display: none;
    }
    
    .wrapper .main_container .top_navbar .menu li a.active,
    .wrapper .main_container .top_navbar .menu li a:hover {
      color: #1fafec;
    }
    
    .wrapper .main_container .top_navbar .menu li a:hover:before,
    .wrapper .main_container .top_navbar .menu li a.active:before {
      display: block;
    }
    
    .wrapper .main_container .top_navbar .right_bar {
      display: flex;
      align-item: center;
    }
    
    .wrapper .main_container .top_navbar .right_bar li {
      margin: 0 10px;
    }
    
    .wrapper .main_container .top_navbar .right_bar .fas {
      font-size: 25px;
      cursor: pointer;
      color: #88a3d0;
    }
    
    .wrapper .main_container .top_navbar .right_bar li:hover,
    .wrapper .main_container .top_navbar .hamburger .fas:hover {
      opacity: 0.4;
    }
    
    .wrapper .main_container .container {
      padding: 0px;
      margin-top: 0px;
      overflow: auto;
      height: calc(100vh - 50px);
    }
    
    .wrapper .main_container .container .item {
      background: #fff;
      padding: 0px;
      border-bottom: 1px solid #d9e2e7;
      font-size-adjust: 18px;
      line-height: 22px;
      margin-bottom: 15px;
    }
    
    .wrapper .sidebar__inner .close{
        position: absolute;
        top: 5px;
        right: 15px;
        font-size: 25px;
        color: #fff;
      display: none;
      cursor: pointer;
    }
    
    .wrapper .sidebar__inner .close:hover{
      opacity: 0.5;
    }
      .ufirstname{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
        
        
      }
      .uemail{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
        padding-right:40%; 
        color:gray; 
       
      }
      .upseudo{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .udatecreate{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
        color:gray;
        &::before{content:"·"; margin:0 5px;}
    
      }
      .entete{
        padding-right:0%; 
      }
    
    @media screen and (max-width: 800px){
      .wrapper .sidebar__inner{
        left: -100%;
      }
      .wrapper .main_container,
      .wrapper .main_container .top_navbar{
        margin-left: 0;
        width: 100%;
      }
      .wrapper .main_container .top_navbar{
        left: 0;
      }
      .wrapper.active .sidebar__inner{
        left: 0;
      }
      .wrapper .sidebar__inner .close,
      .wrapper .main_container .top_navbar .hamburger{
        display: block;
      }
      .wrapper.active .sidebar .bg_shadow{
        visibility: visible;
        opacity: 0.7;
      }
      .ufirstname{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .uemail{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
        padding-right:40%; 
      }
      .upseudo{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .udatecreate{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
    
      }
      .entete{
        padding-right:0%; 
      }
    }
    
    @media screen and (max-width: 530px){
      .wrapper .main_container .top_navbar .menu{
        display: none;
      }
      .wrapper .main_container .top_navbar{
        margin-left: 0;
        width: 100%;
      }
      .ufirstname{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .uemail{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
        padding-right:32%; 
      }
      .upseudo{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
      }
      .udatecreate{
        white-space: nowrap; 
        width: 20%; 
        overflow: hidden;
        text-overflow: ellipsis; 
    
      }
      .entete{
        padding-right:0%; 
      }
    }
    /*
    CODE DE POST CSS
    **/
    .dropbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .at {
      color: red;
    }
    
    .hash {
      color: blue;
    }
    
    
    .jqueryHashtags .highlighter {
      white-space: pre-wrap;
      color: transparent;
      overflow: hidden;
      position: absolute;
      padding-left: 7px;
      padding-top: 5px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 20px;
    }
    
    .jqueryHashtags .theSelector {
      background-color: transparent;
      position: relative;
      direction: ltr;
      font-size: 14px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      resize: none !important;
      -webkit-transition: height 0.2s;
      border: 1px solid #cccccc;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      padding: 4px 6px;
      vertical-align: middle;
      min-height: 48px !important;
      line-height: 20px;
    }
    
    .jqueryHashtags .hashtag {
      background: -webkit-linear-gradient(#dce6f8, #bdcff1);
      border-radius: 2px;
      box-shadow: 0 0 0 1px #a3bcea;
      font-size: 14px;
      white-space: pre-wrap;
      word-break: break-word;
      line-height: 20px;
    }
    
    
    
    /*
    CODE DE POST CSS
    **/
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
      height: 300px;
      flex-basis: 20%;
      -ms-flex: auto;
      width: 250px;
      position: relative;
      padding: 10px;
      box-sizing: border-box;
      border-radius: 25px;
     margin-top:25px;
      margin-bottom: 70px;
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
     /* border-radius: 25px;*/
      -webkit-box-sizing: initial;
      -moz-box-sizing: initial;
      box-sizing: initial;
      background: #aaa;
      margin: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
     /* -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
      transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);*/
      position: relative;
    }
    
    .grid-item-container {
      height: 100%;
      width: 100%;
      /*position: relative;*/
    }
    .photocouv{
    
    
    }
    .grid-image-top {
     /* height: 45%;
      width: 120%;*/
      height: 100%;
      width: 100%;
      background-size: cover;
      position: relative;
      background-position: 50% 50%;
     /* left: -10.5%;
      top: -4.5%;*/
      left:-15%;
      top: -10.5%;
      /*display: none;*/
    }
    
    .grid-image-top .centered {
      text-align: center;
      transform: translate(-50%, -50%);
      background-size: contain;
      background-repeat: no-repeat;
      position: absolute;
      top: 58%;
      left: 65.5%;
      right: 65%;
      width: 60%;
      height: 60%;
      background-position: center;
    }
    
    .rex-ray-image {
     /* background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/Rex-Ray-icon-209x300.png);*/
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
      padding: 0 0px 0px 0px;
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
      /*padding: 2% 2%;
      margin: -2% -2%;*/
     /* z-index:1111;
      transform:perspective(2000px) rotate(-10deg);
      box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);*/
    }
    @media(max-width: 1333px) {
      .grid-item {
        height: 350px;
        flex-basis: 33.33%;
      }
    }
    
    @media(max-width: 1073px) {
       .grid-item {
        height: 350px;
        flex-basis: 45.33%;
      }
    }
    
    @media(max-width: 815px) {
      .grid-item {
        height: 400px;
        flex-basis: 50%;
      }
    }
    
    @media(max-width: 555px) {
      .grid-item {
        height: 500px;
        flex-basis: 100%;
      }
    }
    
        
        
    </style>
</head>
<body>
    
<div class="grid-container">
    <div class="menu-icon">
     <i class="fas fa-bars header__menu"></i>
   </div>
    
   <header class="header">
     <div class="header__search">
      <div class="mx-auto pull-right">
        <img class="photocouv" alt="100x100" src="{{ asset("uploads/images/daflogo.png") }}" data-holder-rendered="true" style="height:50px; width:125px;">
    </div>
     </div>
     <div class="header__avatar">
       @if (auth()->user()->profile_image)
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->profile_image) }}" data-holder-rendered="true" style="height:35px; width:35px;  object-fit: cover; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:35px; width:35px; " id="pic"></a>
      @endif  
    </div>
   </header>
   
 
   <aside class="sidenav">
     
     <div class="sidenav__close-icon">
       <i class="fas fa-times sidenav__brand-close"></i>
     </div>

     <div class="profile_info">
      <div class="profile_img">
        @if (auth()->user()->profile_image)
        <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->profile_image) }}" data-holder-rendered="true" style="height:65px; width:65px;  object-fit: cover; " id="pic"></a>
       <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
        <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
        @else
        <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:65px; width:65px; " id="pic"></a>
        @endif    
       
      </div>
      <div class="profile_data">
          <p class="name">{{ auth()->user()->firstname }}   </p>  
          <p class="name">{{ auth()->user()->lastname}}</p>
         <!-- <div data-toggle="modal" data-target="#modal" class="title m-b-md"><div class="btn">Éditer le profil</div></div>-->
         
         
          <div data-toggle="modal" data-target="#modal" class="title m-b-md"><div class="btn">Éditer le profil</div></div>
          
      </div>
  </div>
  <div class="flex-scroll scroll-styled pad2">
  <ul class="siderbar_menu">
      <li><a href="{{ route("importExportView") }}" class="active">
        <div class="icon"><i class="fas fa-home"></i></div>
        <div class="title">ACCUEIL</div>
        </a></li>  
    <!--<li><a href="" >
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="title">FORUM</div>
        </a></li>  
    <li><a href="">
        <div class="icon"><i class="fas fa-heart"></i></div>
        <div class="title">FAVORIS</div>
        </a></li>  -->
    <!--<li><a href="">
          <div class="icon"><i class="fas fa-clock"></i></div>
          <div class="title">DONNEES</div>
          </a></li>-->    
   
   <li><a href="">
        <div class="icon"><i class="fas fa-cog"></i></div>
        <div class="title">PARAMÈTRES</div>
        </a></li>
    <li><a href="">
        <div class="icon"><i class="fas fa-question-circle"></i></div>
        <div class="title">AIDE</div>
        </a></li>
  </ul>
</div>
     
     
     
    {{-- <div class="p-4 pt-5">
      @if (auth()->user()->image)
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->image) }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/public/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/public/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
      @endif  

     <!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/photoNaN.png);"></a>-->
      <ul class="list-unstyled components mb-5" style="padding-top:50%;">
       
        <li class="">
          <a href="#">Profil</a>
         <!-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>
          </ul>-->
        </li>
        <li>
          <a href="#">Annonce de recherche</a>
      </li>
        <li>
            <a href="#">Offres</a>
        </li>
        
        <li class="active">
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle active">Mon CV</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="#">CV Numérique</a>
            </li>
            <li class="active">
                <a href="#">CV téléchargé</a>
            </li>
            
          </ul>
        </li>
        <li>
          <a href="#">Formations</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramètres</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="">Modifier profil</a>
            </li>
            <li>
                <a href="#">Mise à jour mot de passe</a>
            </li>
            <li>
              <a href="#">Suppression du compte</a>
          </li>
            
          </ul>
        </li>
        <li> <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Déconnection') }}
       </a>


       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
        </li>
      </ul>

      <div class="footer">
      </div>

    </div>--}}
   </aside>
 
   <main class="main">
     <div class="main-header">
       <div class="main-header__heading" style="font-weight:bold; font-size:20px; text-transform:uppercase; margin-top:-15px;" > <div class="">
        <!--<form action="{{ route("user.account", $user->pseudo) }}" method="GET" role="search">

            <div class="input-group">
             
                
                <input type="text" class="form-control border-secondary rounded-pill pr-5" name="term" placeholder="Rechercher une ligne" id="term">
                <div class="col-auto">
                  <button class="btn btn-outline-light text-dark border-0 rounded-pill ml-n5" type="button">
                      <i class="fa fa-search"></i>
                  </button>
              </div>

              <a href="{{ route("user.account", $user->pseudo) }}" class=" ">
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button" title="Refresh page">
                      <span class="fas fa-sync-alt"></span>
                  </button>
              </span></a>
            </div>
        </form>-->
    </div></div>
       <div class="main-header__updates"><!--<a class="nav-link" href="#"><i >{{ date('Y-m-d ') }} </i></a>-->
        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><div class="icon" style="font-size: 25px;
          cursor: pointer;
          color: #88a3d0; margin-top:-20px;"><i class="fas fa-sign-out-alt"></i></div></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      
      </div>
     </div>
     <div style="background-color:white;">
      @if ($errors->any())
      <div class="alert alert-danger">
            <strong>oops!</strong> Vos entrées sont invalides.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
      </ul>

  </div>
@endif
@if(Session::has('success'))
 <div class="alert alert-success">
    {{ Session::get('success') }}
  @php
    Session::forget('success');
  @endphp
</div>
@endif
@if (\Session::has('success'))
  <div class="alert alert-success">
<ul>
<li>{!! \Session::get('success') !!}</li>
</ul>
</div>
@endif
    
    
    </div>
     <h3 style="display: flex; align-items: center; justify-content: center; color:#045480;font-weight:bold" >FICHES DE PAIE DEDRAS-ONG</h3>
     <h3 style=" display: flex; align-items: center; justify-content: center; "> </h3>
     <div class="d-flex justify-content-center">
     
  </div>
     <div class="main-cards">
      <div class="carda">
        <!--<div class="row">-->
         
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
          <p>{{ $message }}</p>
          </div>
          @endif
          <div class="container" style="top:0px;">
            <!--<div class="grid-row">-->
                   
                <!--<div class="container" style="margin-top: 5rem;">-->
                    @if($message = Session::get('success'))
                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <strong>Success!</strong> {{ $message }}
                        </div>
                    @endif
                    {!! Session::forget('success') !!}
                    <br />
                    <!--<h2 class="text-title">Import Export Excel/CSV - LaravelCode</h2>-->
                   <div data-toggle="modal" data-target="#modale" class="title m-b-md"><button class="btn btn-outline-danger">SIGNATURE</button></div>
                  <!-- <a href="{{ route('exportExcel', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></div>
                    <a href="{{ route('exportExcel', 'csv') }}"><button class="btn btn-success">Download CSV</button></a>
                    <a href="{{ route('generatepdf') }}"><button class="btn btn-success">Envoyer les Fiches de Paies</button></a>-->
                    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="import_file" />
                        <button class="btn btn-success">Importer le fichier excel__ Extension <span style="color:rgb(255, 230, 0);"> .xlsx </span></button>
                    </form>
             

    @if($bullpaies->first())
    <!--<a href="{{ route('generatepdf') }}"><button class="btn btn-success">Envoyer les Fiches de Paies</button></a>-->
    <div class="text-center lh-1 mb-2">
      <div class="col-md-6 offset-md-4" style="padding-top:15px; padding-bottom:15px;">
        <a href="{{ route('generatepdf') }}"><button class="submit btn btn-block btn-primary envoi">
          <i class="loading-icon fa-lg fas fa-spinner fa-spin hide" ></i> &nbsp; 
          <i class="czi-user mr-2 ml-n1"></i>
          <span class="btn-txt">Envoyer les Fiches de Paies</span></button></a>
      </div>
  </div>
    
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th># Matricule</th>
            <th>Projet</th>
            <th>Nom & prénoms</th>
            <th style="padding-right:75px;">email</th>
            <!--<th>Catégorie</th>-->
            <th style="padding-left:50px;">Titre</th>
            <th>Salaire Net</th>
            <th>Mois</th>
            <th>Année</th>
            <th width="200px">Action</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($bullpaies as $key => $doc)  
          <tr class="panel panel-info" >
        <td data-label="ID">{{ $doc->id}}</td>
            
          <td data-label="# Matricule">{{ $doc->num_mat}}</td>
          
          
          <td data-label="Projet">{{ $doc->projet}}</td>
          <td data-label="Nom & prénoms">{{ $doc->nom_prenoms }}</td>
          <td data-label="email" style="padding-right:75px;" >{{$doc->email}}</td>
          <!--<td data-label="Catégorie">{{ $doc->categorie }}</td>-->
          <td data-label="Tittre" style="padding-left:50px;">{{ $doc->titre }}</td>
          <td data-label="Salaire Net">{{ $doc->salaire_net }}</td>
          <td data-label="Mois">{{ $doc->mois }}</td>
          <td data-label="Annee">{{ $doc->annee}}</td>

          <!--<td><input type="checkbox" name="checkbox[]" value="" ></td>-->
          
          <td data-label="Action">
          <a class="btn btn-info" href="{{ route('visualiser', $doc->id) }}">Visualiser la fiche</a>
          <!--<a class="btn btn-primary" href="">Modifier</a>-->
          </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      
      @else
      <div class="text-center lh-1 mb-2">
        <span class="fw-bold" style="color: rgb(255, 145, 0); padding-top:200px;" > <h1>Veuillez importer les données</h1></span>
    </div>
      @endif 

             
              
            <!--</div>-->
          </div>
          
      {{--<table>
        <thead>
          <tr>
            <th>No</th>
            <th>Couverture</th>
            <th>Titre</th>
            <th>Auteur</th>
            <!--<th>Status</th>
            <th>Date</th>-->
            <th>Accreditation</th>
            <th width="280px">Action</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($docdads as $key => $doc)  
          <tr class="panel panel-info" data-id="{{ $doc->id }}">
            
            <td data-label="#">{{ $doc->id }}</td>
          <td data-label="Couverture">
                  @if ($doc->photocouv!=null)
                       <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="width:200px; height:250px;" ></a>
                  @else
                       <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style="width:200px; height:250px;"></a>
                  @endif



          </td>
          
          <td data-label="Titre">{{ $doc->title }}</td>
          <td data-label="Auteur">{{ $doc->auteur }}</td>
          <td data-label="Accreditation">{{ $doc->visibility()->first()->name}}</td>
          <!--<td><input type="checkbox" name="checkbox[]" value="" ></td>-->
          
          <td data-label="Action">
          <a class="btn btn-info" href="">Show</a>
          <a class="btn btn-primary" href="">Edit</a>
       
         {{-- {!! Form::open(['method' => 'DELETE','route' => ['docdads.destroy', $doc->id],'style'=>'display:inline']) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}--}}
          {{--</td>
          </tr>
          @endforeach
        
        </tbody>
      </table>--}}
           
 
   
    
    <!--</div>-->
        


      {{--<div class="container">
        <div class="grid-row">
          @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    
          @foreach ($docdads as $key => $doc)  
          
          <div class="grid-item">
           <!-- <a class="wrapping-link" href="">
              
            </a>-->
            <div class="grid-item-wrapper">
              <div class="card">
                <div class="img-container">
                  <!--<img src="http://santoshg.com/codepen/iron_man.jpg" alt=""/>-->
                  @if ($doc->photocouv!=null)
                       <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="" ></a>
                  @else
                       <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style=""></a>
                  @endif
                </div>
                <div class="card-details">
                  <h4 style="color:red;">DEDRAS</h4>
                  <p> {{ $doc->title }} </p>
                </div>
              </div>
             
            </div>
            <div style=" margin-top: 15px; height:45px;"><span style="color:black; font-size:17px; font-weight:bold; ">{{ $doc->title }}</span></div>
            <div style="margin-top: 15px;"><a class="btn btn-light" href="{{ route('admin.docshow',$doc->id) }}">Voir details</a></div>
            {{--<div class="grid-item-wrapper">
             {{-- @if ($doc->photocouv!=null)
      <a href="#" > <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100px; width:100px;  object-fit: cover; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/public/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="photocouv" alt="100x100" src="{{ asset("/public/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:100px; width:100px; " id="pic"></a>
      @endif
             <div class="grid-item-container">
                <div class="grid-image-top rex-ray" style="width:100%; height:100%;">
                  <span class="centered project-image-bg rex-ray-image" style="width:100%; height:100%;">
                     {{-- @if ($doc->photocouv!=null)
      <a href="#" > <img class="" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100px; width:100px;  object-fit: cover; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/public/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="" alt="100x100" src="{{ asset("/public/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:100%; width:100%; object-fit: cover; " id="pic"></a>
      @endif
      <div class="card" style=" height:92%; width:90%; object-fit: cover; padding-top:0px;">
        <div class="img-container">
          <img src="http://santoshg.com/codepen/iron_man.jpg" alt=""/>
        </div>
        <div class="card-details">
          <h2>Iron Man</h2>
          <p>Iron Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was co-created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby. </p>
        </div>
      </div>

                  </span>
                </div>
               <!--<div class="card" style="width: 100%; height:99%">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>-->
                
              </div>
            </div>--}}
         {{--  </div>
         
          @endforeach
          
 
        </div>
      </div>--}}
     
      
      </div>
  

     {{--<div class="card">
        <div class="card border-success mb-3" style="max-width: 100%;">
          <div class="card-header bg-transparent border-success"></div>
          <div class="card-body text-success">
            <div class="table-responsive">
            <!--<h5 class="card-title">Success card title</h5>-->
            <table class="table table-bordered">
              <tr>
              <th>No</th>
              <th>Couverture</th>
              <th>Titre</th>
              <th>Nom</th>
              <th>Auteur</th>
              <th>Type</th>
            
             
              <!--<th>Roles</th>-->
              <th width="280px">Action</th>
              </tr>
              @foreach ($docdads as $key => $doc)  
              <tr>
              <td>{{ $doc->id}}</td>
              <td>{{ $doc->image}}</td>
              <td>{{ $doc->titre}}</td>
              <td>{{ $doc->nom}}</td>
              <td>{{ $doc->auteur}}</td>
              <td>{{ $doc->type}}</td>
              
             <!-- <td>{{ $doc->description }}</td>
              <td>{{ $doc->creation_date}}</td>
              <td>{{ $doc->created_at}}</td>
              <td>{{ $doc->updated_at}}</td>-->
             <!-- <td></td>-->
             <!-- <td></td>-->
              
               {{--<td>
                   @if(!empty($user->getRoleNames()))
              @foreach($user->getRoleNames() as $v) 
                
              <label class="badge badge-success">{{ $v }}</label>
              @endforeach
              @endif
              </td>--}}
             {{-- <td>
              <a class="btn btn-info" href="">Read</a>
              {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->pseudo) }}">Edit</a> --}}
             {{--  <a class="btn btn-primary" href="">
              <i class="fas fa-trash-alt"></i></a>
            
              </td>
              </tr>
              @endforeach
              </table>
            </div>
            
          </div>
          <div class="card-footer bg-transparent border-success">Footer</div>
        </div>




      </div>--}}
      <!--<div class="carda"></div>
      <div class="carda">Card</div>-->
    </div>
     
    <!-- <div class="main-overview">
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
     </div>
 
    
   </main>
 
   <footer class="footer">
     <div class="footer__copyright">&copy; 2018 MTH</div>
     <div class="footer__signature">Made with love by pure genius</div>
   </footer>-->
 </div>

<!--MODALS   __ __--------------------------__________ MODALS-->

<!--CODEE__-->
 <!-- Modal HTML Markup -->

 <div id="modal" class="modal fade">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title" style="color:black;"> Éditer le profil</h1>
    <button type="button" class="close" data-dismiss="modal">
      <span style="">&times;</span>
    </button>
  </div>
  <div class="modal-body">
  <div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
          </div>
          <div class="col-4 text-right">
           <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
          </div>
        </div>
      </div>
      <div class="card-body" style="background:rgb(240, 245, 242); " >
        @if ($errors->any())
              <div class="alert alert-danger">
                <strong>oops!</strong> Vos entrées sont invalides.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                      @endforeach
                  </ul>
  
              </div>
        @endif
        @if(Session::has('success'))
             <div class="alert alert-success">
              {{ Session::get('success') }}
             @php
               Session::forget('success');
              @endphp
        </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <ul>
          <li>{!! \Session::get('success') !!}</li>
          </ul>
           </div>
         @endif
         <form action="{{ route('user.updateprofile',$user->pseudo) }}" method="POST" role="form" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
              <label for="firstname" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold;">Prénom</label>
              <div class="col-md-6">
                  <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="lastname" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold;">Nom</label>
              <div class="col-md-6">
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
              </div>
          </div>

          

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right"style="color:black; font-weight:bold;">Email</label>
              <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
              </div>
          </div>
          <div class="form-group row">
              <label for="profile_image" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold;">Photo de profil</label>
              <div class="col-md-6">
                  <input id="profile_image" type="file" class="form-control" name="profile_image">
                  {{--@if (auth()->user()->image)
                      <code>{{ auth()->user()->image }}</code>
                  @endif--}}
              </div>
          </div>
          <div class="form-group row mb-0 mt-5">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary" style="color:black; font-weight:bold;">Enregistrer</button>
              </div>
          </div>
      </form>
      </div>
    </div>
  </div>
    
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>
 



<!--CODEE__-->
<!-- Modal HTML Markup -->



<!--MODALS  __ __--------------------------__________MODALS-->
<!--MODALS   __ __--------------------------__________ MODALS-->

<!--CODEE__-->
 <!-- Modal HTML Markup -->

 <div id="modale" class="modal fade">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title" style="color:black;"> EDITER LA SIGNATURE</h1>
    <button type="button" class="close" data-dismiss="modal">
      <span style="">&times;</span>
    </button>
  </div>
  <div class="modal-body">
  <div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
          </div>
          <div class="col-4 text-right">
           <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
          </div>
        </div>
      </div>
      <div class="card-body" style="background:rgb(240, 245, 242); " >
        @if ($errors->any())
              <div class="alert alert-danger">
                <strong>oops!</strong> Vos entrées sont invalides.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                      @endforeach
                  </ul>
  
              </div>
        @endif
        @if(Session::has('success'))
             <div class="alert alert-success">
              {{ Session::get('success') }}
             @php
               Session::forget('success');
              @endphp
        </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <ul>
          <li>{!! \Session::get('success') !!}</li>
          </ul>
           </div>
         @endif
         <form action="{{ route('adsignature') }}" method="POST" role="form" enctype="multipart/form-data">
          @csrf
         

          <div class="form-group row">
              <label for="profile_image" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold;">Signature</label>
              <div class="col-md-6">
                  <input id="profile_image" type="file" class="form-control" name="profile_image">
                  {{--@if (auth()->user()->image)
                      <code>{{ auth()->user()->image }}</code>
                  @endif--}}
              </div>
          </div>
          <div class="form-group row mb-0 mt-5">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary" style="color:black; font-weight:bold;">Enregistrer</button>
              </div>
          </div>
      </form>
      </div>
    </div>
  </div>
    
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
const menuIconEl = $('.menu-icon');
const sidenavEl = $('.sidenav');
const sidenavCloseEl = $('.sidenav__close-icon');

// Add and remove provided class names
function toggleClassName(el, className) {
  if (el.hasClass(className)) {
    el.removeClass(className);
  } else {
    el.addClass(className);
  }
}

// Open the side nav on click
menuIconEl.on('click', function() {
  toggleClassName(sidenavEl, 'active');
});

// Close the side nav on click
sidenavCloseEl.on('click', function() {
  toggleClassName(sidenavEl, 'active');
});

$('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
	$(this).parent(".sub-menu").children("ul").slideToggle("100");
	$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(".hamburger .fas").click(function(){
    $(".wrapper").addClass("active")
})

$(".wrapper .sidebar .close").click(function(){
    $(".wrapper").removeClass("active")
})




</script>

<!--PARTIE AJAX-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {     

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.liko').click(function(){    
    var id = $(this).parents(".panel").data('id');
    var d = $('#'+this.id+'-bs3').html();
    var cObjId = this.id;
    var cObj = $(this);
    var c = $(this).parent("div").find(".tl-follower").text();
    var ex=cObj.parents(".panel").find(".tl-follower").text();
   

    $.ajax({
       type:'POST',
       url:"",
       data:{id:id},
       success:function(data){
       console.log(ex);
          if(data.success==false){
            //$('#'+cObjId+'-bs3').text(parseInt(c)-1);
            //var numb=idbis-1;
            //idbis=idbis+1;
            cObj.parents(".panel").find(".tl-follower").html(parseInt((ex)+1) );
            cObj.parents(".panel").find(".favori").html(`<i class="fa fa-heart fa-lg " style="color:red;"></i>` );
            //idbis=idbis+1;
            //$(cObj).removeClass("like-post");
          }else if(data.success==true){
            //idbis=idbis+1;
            cObj.parents(".panel").find(".tl-follower").html(parseInt((ex)-1) );
            cObj.parents(".panel").find(".favori").html(`<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>` );
            //idbis=idbis-1;
            //$('#'+cObjId+'-bs3').text(parseInt(c)+1);
           // $(cObj).addClass("like-post");
          }
       }
    });

});      

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});                                        
}); 
 



</script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
 

$('.card-text').each(function(e) {
  //Get full string as words
  var words = $(this).text().split(" ");
  for (var i = 0; i < words.length; i++) {
    if (words[i].charAt(0) == "#") {
      words[i] = "<a href=''>"+"<span class=hash >" + words[i] + "</span>"+"</a>";
    }

    if (words[i].charAt(0) == "@") {
      words[i] = "<span class=at >" + words[i] + "</span>";
    }
  }

  $(this).html(words.join(" "));

});

 });
    //test
   





</script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
  //for (let index = 0; index < posts.length; index++) {
//$('.card-text').each(function(i, obj) {
 /* const posts=document.getElementsByClassName(".card-text");
  for (let index = 0; index < posts.length; index++) {
     let myhtml = $('.card-text').html();
  //var myhtml = document.getElementsByClassName("card-text");
const mytypes = myhtml.match(/(@|#)+[^\s<\.]+/g);
//x.innerHTML = `<a href="example.org" style="color:red;">${x.textContent}</a>`

const myReplace = (mytype) => {
  const isat = mytype.includes('@');
  const replacestring = `<span class="${isat ? 'at' : 'hash'}">${mytype}</span>`;
  myhtml = myhtml.replace(mytype, replacestring);
};

mytypes.forEach(el => myReplace(el));
//$('.card-text').html(myhtml);

);*/
    //test
   



//});
 // }
   //$("textarea").hashtags();
   $("textarea").wrap('<div class="jqueryHashtags"><div class="highlighter"></div></div>').unwrap().before('<div class="highlighter"></div>').wrap('<div class="typehead"></div></div>');
   $("textarea").addClass("theSelector");
	//	autosize($(this));
    $("textarea").on("keyup", function() {
			var str = $("textarea").val();
			$("textarea").parent().parent().find(".highlighter").css("width",$("textarea").css("width"));
			str = str.replace(/\n/g, '<br>');
			if(!str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([\u0600-\u06FF]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([\u0600-\u06FF]+)/g)) {
                if(!str.match(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#/g)) { //arabic support, CJK support
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}else{
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}
				if(!str.match(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@/g)) {
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}else{
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}
			}
			$("textarea").parent().parent().find(".highlighter").html(str);
		});
		$("textarea").parent().prev().on('click', function() {
			$("textarea").parent().find(".theSelector").focus();
		});
   
		
    
    //$("textarea").hashtags();

   // $(".card-text").hashtags();
    
}
);

 /*(function($) {
	$.fn.hashtags = function() {
		$(this).wrap('<div class="jqueryHashtags"><div class="highlighter"></div></div>').unwrap().before('<div class="highlighter"></div>').wrap('<div class="typehead"></div></div>');
		$(this).addClass("theSelector");
	//	autosize($(this));
		$(this).on("keyup", function() {
			var str = $(this).val();
			$(this).parent().parent().find(".highlighter").css("width",$(this).css("width"));
			str = str.replace(/\n/g, '<br>');
			if(!str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([\u0600-\u06FF]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([\u0600-\u06FF]+)/g)) {
                if(!str.match(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#/g)) { //arabic support, CJK support
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}else{
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}
				if(!str.match(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@/g)) {
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}else{
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}
			}
			$(this).parent().parent().find(".highlighter").html(str);
		});
		$(this).parent().prev().on('click', function() {
			$(this).parent().find(".theSelector").focus();
		});

  	};
})(jQuery);*/

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {     



$('.partage').click(function(){    
    var key = $(this).parents(".share").data('id');
    console.log(key);
    document.getElementById("#links").innerHTML = "<div></div>";
    //var slinks=document.getElementsByClassName(".links");
    //slinks.html = '<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>';
    //slinks.toString().replace('<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>');
   // slinks.parents(".sharelink").find(".links").html(`<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>` );
    //var d = $('#'+this.id+'-bs3').html();
    //var cObjId = this.id;
    //var cObj = $(this);
                                          
}); 
 

 })

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('.envoi').click(function(){  
    $(".result").text("");
    $(".loading-icon").removeClass("hide");
    $(".envoi").attr("disabled", true);
    $(".btn-txt").text("Chargement ...");
  });
});               
                         

</script>

</body>
</html>
