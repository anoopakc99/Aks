
@include('login.navbar')



<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Product</h1>
    <br>
    <form action="{{route('productadd')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
      @csrf
      <div class="form-raw">
        <div class="form-name">Select Category</div>
        <div class="form-txtfld">
          <select name="category" id="country">
          <option>Select Option</option>
          @foreach ($data as $list)
          
            <option value="{{$list->id}}">{{$list->name}}</option>

            @endforeach
          </select>
        </div>
      </div>
      <div class="clear"></div>


      <div class="form-raw">
        <div class="form-name">Select Sub Category</div>
        <div class="form-txtfld">
          <select multiple="select" style="height: 100px;" name="subcategory" id="state">
            <option>Select Option</option>
            <option></option>

          </select>
        </div>
      </div>
      <div class="clear"></div>



      <div class="form-raw">
        <div class="form-name">Product Name</div>
        <div class="form-txtfld">
          <input type="text" name="productname">
        </div>
      </div>
      <div class="form-raw">
      <div class="form-name">Product Image1</div>
      <div class="form-txtfld">
        <input type="file" name="productimage">
        <div class="form-name"> Image Size ( Width=560px, Height=390px ) (Product page)</div>
      </div>
  </div>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Short Description</div>
    <div class="form-txtfld">
      <textarea name="shortdesc"></textarea>
    </div>
  </div>

  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Description</h1>
  <br>
  <div id="fields-container">
  <div class="form-raw">
    <div class="form-name"> &nbsp;</div>
    <div class="form-txtfld">
      <input type="text" placeholder="Title" name="title">
    </div>
  </div>
  
  <div class="form-raw" >
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld txtfld50"><input type="text" placeholder="heading" name="heading"></div>
    <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption" name="description"></div>
    <a href="#"><img src="images/delete.gif" class="remove-email" alt="" name=""></a>
  </div>
</div>
  <div class="form-raw" >
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld" style="width: 320px; text-align: right;" id="add-field"><a href="#" >Add More +</a></div>
  </div>






  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Features</h1>
  <br>
  <div class="form-raw" style="width:100%;" >
    <div class="form-name" >Content</div>
    <div class="form-txtfld" style="width:780px;" >
      <textarea style="width:100%; height:500px;" name="Contenct" id="summernote"></textarea>
      <script>
  $('textarea#summernote').summernote({
        placeholder: 'Content',
        tabsize: 2,
        height: 200,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
  </script>
    </div>
  </div>
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Upload PDF</h1>
  <br>


  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div>



  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading" name="pdf"></div>
    <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption" name="pdfile"></div>
    <a href="#"><img src="images/delete.gif" alt=""></a>
  </div>




  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">Active</div>
    <div class="form-txtfld">
      <input type="checkbox" name="status">
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld">

      <button type="submit" class="btn btn-primary btn-sm">Add Product</button>
    </div>
  </div>
</div>
</form>
<div class="clear">&nbsp;</div>
</div>
<div id="wrap2">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="53" align="left" valign="middle">Sr.No.</th>
      <th width="153" align="left" valign="middle">Select Category</th>
      <th width="71" align="left" valign="middle"> Select Sub Category</th>
      <th width="71" align="left" valign="middle"> Product Name</th>

      <th width="408" align="left" valign="middle">Short Description</th>
      <th width=" " align="left" valign="middle">Full Description</th>
      <th width="49" align="left" valign="middle">Status</th>

      <th width="49" align="left" valign="middle">Edit</th>
      <th width="61" align="left" valign="middle">Remove</th>
    </tr>

    @foreach ($dataa as $list)
  
    <tr>

      <td align="left" valign="top">{{$list->id}}</td>
 
      <td align="left" valign="top">{{$list->category_id }}</td>
     
    
      <td align="left" valign="top">{{$list->name}}</td>
      <td align="left" valign="top">{{$list->productname}}</td>
      <td align="left" valign="top">{{$list->shortdesc}}</td>

      <td align="left" valign="top">{{$list->Contenct}}</td>




      @if($list->status=='1')

      <td align="left" valign="top">
        <div class="btn btn-success btn-sm">Active</div>
      </td>

      @elseif($list->status=='0')

      <td align="left" valign="top">
        <div class="btn btn-danger btn-sm">Inactive</div>
      </td>

      @endif


      <td align="left" valign="top"><a href="{{route('productedit',$list->id)}}">Edit</a></td>
      <td align="center" valign="top"><a href="{{route('delete',$list->id)}}"><img src="images/icon-bin.jpg" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
      @endforeach
     
    </tr>

  </table>

  <div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>
      <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;"> <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      <div class="clear"></div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#country').change(function() {
        var category_id = $(this).val();
        if (category_id) {
          $.ajax({
            url: '/get-states/' + category_id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
              $('#state').empty();

              $.each(data, function(id, name) {
                $('#state').append(new Option(name, id));
              });
            }
          });
        } else {
          $('#state').empty();

        }
      });
    });
  </script>


  <!-- <script>
    $(document).ready(function() {
      toastr.options.timeOut = 10000;
      @if(Session::has('error'))
      toastr.error('{{ Session::get('
        error ') }}');
      @elseif(Session::has('success'))
      toastr.success('{{ Session::get('
        success ') }}');
      @endif
    });
  </script> -->



<script>
    $(document).ready(function() {
        // Add field when "Add Field" button is clicked
        $('#add-field').on('click', function() {
            var newField = '<div class=" form-raw "><input type="text" name="title[]" placeholder="title" required><input type="text" name="heading[]" placeholder="heading" required><input type="text" name="description[]" placeholder="description" required><button type="button"  class="remove-field"><img src="images/delete.gif"></button></div>';
            $('#fields-container').append(newField);
        });

        // Remove field when "Remove" button is clicked
        $('#fields-container').on('click', '.remove-field', function() {
            $(this).parent().remove();
        });
    });
</script>



  <!-- <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script> -->