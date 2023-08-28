@include('login.css')


<header>
  <div id="wrap">
       <div class="logo"><img src="{{asset('images/logo.png')}}" border="0"></div>
    <div class="topmenu">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="{{route('changepass')}}">Change Password</a>&nbsp;|</li>
        <li><a href="{{route('logout')}}"><img src="{{asset('images/logout.png')}}" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
<nav>
    <ul id="qm0" class="qmmc" >
      <li><a href="{{route('dashboard')}}" class="qmactive">Dashboard</a></li>            
      <li><a href="#">Product</a>
          <ul>
          	<li><a href="{{route('show.category')}}">Add Category</a></li>
            <li><a href="{{route('show.subcategory')}}">Add  Sub Category</a></li>
          	
          	<li><a href="{{route('product')}}">Add Product</a></li>
          
          </ul>
      </li>      
  
      
    </ul>
  </nav>
  
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