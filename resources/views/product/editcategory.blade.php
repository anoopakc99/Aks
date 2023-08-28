@include('login.css')
@include('login.navbar')

<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <form action="{{route('category.update',$list->id)}}" method="post">
  @csrf
  @method('post')
  <div id="wrap2">
    <h1>Add Category</h1>
    <br>
    <div class="form-raw">
      <div class="form-name">Category Name</div>
      <div class="form-txtfld">
        <input type="text" name="name" value="{{$list->name}}">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <!-- <input type="checkbox"  name="status" value="{{$list->status}}"> -->
        @if($list->status == '1')
        <input type="checkbox" name="status" value="1" checked>
        @elseif($list->status == '0')
        <input type="checkbox" name="status" value="0" >
        @endif
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
 
    </tr>
  </table>
  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<footer>