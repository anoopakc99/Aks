@include('login.css')
@include('login.navbar')

<div id="wrap">
  <div class="clear" style="height:5px;"></div>

<form action="{{route('category.add')}}" method="post">
  @csrf
  @method('post')
  <div id="wrap2">
    <h1>Add Category</h1>
    <br>
    <div class="form-raw">
      <div class="form-name">Category Name</div>
      <div class="form-txtfld">
        <input type="text" name="name">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" name="status" value="1">
      </div>      
      <div class="clear"></div>
    </div>
        
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width:290px;">
          <input type="submit" class="btn" value="Submit">
       
      </div>
    </div>
</form>
  </div>
  <div class="clear">&nbsp;</div>
</div>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    <tr>
    @foreach ($data as $list)
      <td align="left" valign="top">{{$list->id}}</td>
      <td align="left" valign="top">{{$list->name}}</td>
      @if($list->status=='1')
      
      <td align="left" valign="top"><div class="btn btn-success btn-sm">Active</div></td>
    
    @elseif($list->status=='0')
    
      <td align="left" valign="top"><div class="btn btn-danger btn-sm">Inactive</div></td>
    
    @endif
      <td align="left" valign="top"><a href="{{route('category.edit', $list->id)}}">Edit</a></td>
      <td align="center" valign="top"><a href="{{route('category.delete',$list->id)}}"><img src="images/icon-bin.jpg" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr>
 @endforeach
  </table>
  <div class="clear">&nbsp;</div>
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

  
  <!-- <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script> -->
