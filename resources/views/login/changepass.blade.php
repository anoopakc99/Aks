@include('login.css')
@include('login.navbar')


<div id="wrap" >
  <section class="bodymain" style="min-height:580px;">
    <aside class="middle-container">
      <div class="admin-inr"><br>

	<form action="{{ route('update-password') }}" method="post">
        @csrf
        <div class="form-outer" style="margin-left:320px; width:500px;">
		          <h1>Change Password</h1>

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

		          <div class="contact-row">
		            <div class="name">Current Password</div>
		            <div class="txtfld-box">
                    <input type="password" name="oldpassword">
		            </div>
		            <div class="req-field"> This Field Required </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">New Password</div>
		            <div class="txtfld-box">
                    <input type="password" name="new_password">
		            </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">Confirm Password</div>
		            <div class="txtfld-box">
                    <input type="password" name="new_password_confirmation">
		            </div>
		          </div>
		          <div class="clear">&nbsp;</div>
		          <div class="contact-row">
		            <div class="name" style="float:right; width:1px;">&nbsp;</div>
		            <div style="background:none; border:none; float:left;">
		              <!-- <input type="button" class="btn" value="Change Password"> -->
                      <input type="submit" class="btn btn-primary" value=" Change Passwordd " />
                      </form>
		              <br>
		            </div>
		          </div>
		        </div>
		        <div class="clear">&nbsp;</div>
		        
        <div class="clear"></div>
   
      </div>
    </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>      
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      
      <div class="clear"></div>
    </div>
  </footer>