

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

              <th style="padding: 15px;">Customer Name</th>
              <th style="padding: 15px;">Email</th>
              <th style="padding: 15px;">Phone</th>
              <th style="padding: 15px;">Doctor Name</th>
              <th style="padding: 15px;">Date</th>
              <th style="padding: 15px;">Message</th>
              <th style="padding: 15px;">Status</th>
              <th style="padding: 15px;">Approved</th>
              <th style="padding: 15px;">Canceled</th>

            </tr>

            @foreach ($data as $appoint)
                
           

            <tr align="center" style="background-color: skyblue">

              <td>{{$appoint->name}}</td>
              <td>{{$appoint->email}}</td>
              <td>{{$appoint->phone}}</td>
              <td>{{$appoint->doctor}}</td>
              <td>{{$appoint->date}}</td>
              <td>{{$appoint->message}}</td>
              <td>{{$appoint->status}}</td>
              <td> <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
              <td> <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>

              </tr>

              @endforeach

          </table>

        </div>



      </div>
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
