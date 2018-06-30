<nav class="navbar navbar-inverse  " id="my-navbar">

     <div class="container">
       <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-target="#navbar-collapse" data-toggle="collapse">
         <span class="icon-bar"></span>
          <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>

      <a href="#" class="navbar-brand">Dbs</a>         
       </div><!--End navbar header-->

       <div class="collapse navbar-collapse" id="navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
           <li class="{{Request::is('/') ? 'active' : ''}}" ><a href="/">Home</a></li>
           <li class="{{Request::is('about') ? 'active' : ''}}" ><a href="/about">About</a></li>
           <li class="{{Request::is('contact') ? 'active' : ''}}" ><a href="/contact">Contact Us</a></li>
          
         </ul>
       </div>
     </div><!--End container-->
</nav>