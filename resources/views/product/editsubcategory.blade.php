
@include('login.navbar')


<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Sub Category</h1>
    <br>
    <form action="{{route('subcategory.update',$Subcategory->id)}}" method="post">
      @csrf
      
<div class="form-raw">
    
      <!-- <div class="form-name">Select Category</div> -->
      <option value="" selected="" class="form-name">  Select Category</option>
      <div class="form-txtfld">
      
      <select  name="category_id" >
        @foreach ($data as $list)
          
             <option value="{{ $list->id }}" {{ $Subcategory->category_id == $list->id ? 'selected' : '' }}>
                {{ $list->name }}
            </option>

             @endforeach
        </select>
      </div>
    </div>
      <div class="clear"></div>


  <div class="form-raw">
      <div class="form-name">Add Sub Category</div>
      <div class="form-txtfld">
        <input type="text" name="name" value="{{$Subcategory->name}}">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>    
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        @if($Subcategory->status == '1')
        <input type="checkbox" name="status" value="1" checked>
        @elseif($Subcategory->status == '0')
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