@include('login.css')
<script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>
<header>
  <div id="wrap">
    <div class="logo"><img src="{{asset('images/logo.png')}}" border="0"></div>
    
    <div class="admintxt">Admin panel</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
<div class="clear"></div>
<div class="bodycont">
  <div id="wrap2" style="min-height:530px;">
    <div class="login-cont">
      <h1 class="loginhd">Login Here</h1>

      
      @if($errors->any())
							{!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
							@endif
							@if(Session::get('error') && Session::get('error') != null)
							<div style="color:red">{{ Session::get('error') }}</div>
							@php
							Session::put('error', null)
							@endphp
							@endif
							@if(Session::get('success') && Session::get('success') != null)
							<div style="color:green">{{ Session::get('success') }}</div>
							@php
							Session::put('success', null)
							@endphp
							@endif
              <br>

      <form action="{{route('store')}}" method="post">
                            @csrf
                            @method('post')
   <div class="login-row">
        <div class="loginname">Email</div>
        <div class="admintxtfld-box">
          <input type="text" name="email">
        </div>        
        <div class="clear"></div>
      </div>
<!--       <div class="loginreq-field">* This Field Required </div> -->
      
      <div class="login-row">
        <div class="loginname">Password</div>
        <div class="admintxtfld-box">
          <input type="password" name="password">
        </div>
        <div class="clear"></div>
      </div>
      
      <div class="clear"></div>
      <div class="contact-row" style="width:325px;">
        <div style="background:none; border:none; margin-top:15px;">
        <a href="admin.html" style="text-decoration:none;">
          <input type="submit" class="btn" value="Login">
          </a><br>
        </div>
   </form>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>      
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="{{asset('images/akslogo.png')}}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      
      <div class="clear"></div>
    </div>
  </footer>



