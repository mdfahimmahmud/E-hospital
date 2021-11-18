

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">


        <div align="center" style="padding-top: 100px;">

          <table>

            <tr style="background-color: black">

              <th style="padding: 15px;">Doctor Name</th>
              <th style="padding: 15px;">Phone</th>
              <th style="padding: 15px;">Speciality</th>
              <th style="padding: 15px;">Room No.</th>
              <th style="padding: 15px;">Image</th>
              <th style="padding: 15px;">Delete</th>
              <th style="padding: 15px;">Update</th>
              

            </tr>

            @foreach($data as $doctor)

            <tr align="center" style="background-color: skyblue">

              <td>{{$doctor->name}}</td>
              <td>{{$doctor->phone}}</td>
              <td>{{$doctor->speciality}}</td>
              <td>{{$doctor->room}}</td>
              <td> <img height="100px" width="100px" src="doctorimage/{{$doctor->image}}" alt=""> </td>
              <td> <a onclick="return confirm ('Are you sure to delete this?')" class="btn btn-success" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>

              <td> <a class="btn btn-danger" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>


            </tr>

            @endforeach


          </table>

        </div>


      </div>


    
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
