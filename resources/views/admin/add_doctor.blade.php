

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">

    label
    {

      display: inline-block;
      width: 200px;
    }


    </style>
    
    @include('admin.css')

  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">









      <div class="container" align="center" style="padding-top: 100px;">

        
        @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">x</button>

          {{session()->get('message')}}


        </div>

        @endif
          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf


        <div style="padding: 15px;">


              <label for="">Doctor Name</label>
              <input type="text" placeholder="Write the name" name="name" style="color:black" required="">
        </div>


        <div style="padding: 15px;">
         <label>Phone</label>
          <input type="number" placeholder="Write the phone number" name="phone" style="color:black"required="">
    </div>

    <div style="padding: 15px;">


      <label for="">Speciality</label>
      <select name="speciality" style="color: black; width:226px;" required="">

        <option value="">Select</option>
        <option value="skin">skin</option>
        <option value="heart">heart</option>
        <option value="eye">eye</option>
        <option value="nose">nose</option>
      </select>
    </div>


<div style="padding: 15px;">


  <label for="">Room No.</label>
  <input type="text" placeholder="Write the room no." name="room" style="color:black"required="">
</div>


<div style="padding: 15px;">


  <label for="">Doctor Image</label>
  <input type="file" name="file" required="">
</div>

<div style="padding: 15px;">

  <button type="submit" class="btn btn-success">Submit</button>


</div>


          </form>
        </div>


        
      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
