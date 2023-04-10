
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('Admin.css')


      <style>
           .title
           {
            color: white;
            padding-top: 25px;
            font-size: 25px;
           }
           label
           {
            display: inline-block;
            width: 200px;
           }
           
     </style>

     
  </head>
  <body>
    
      @include('Admin.sidebar')
      <!-- partial -->
      @include('Admin.navbar')
        <!-- partial -->
      

        <div class="container-fluid page-body-wrapper">
         <div class="container" align="center" >

              <h1 class="title" >add employee</h1>

              
            <form action="{{url('uploademployee')}}" method="post" enctype="multipart/form-data">
             @csrf
              <div style="padding: 15px">

                <label for="">first name</label>
                <input style="color:black" type="text" name="fname" placeholder="give a employee first name" required>
              </div>

              <div style="padding: 15px">

             <label for="">last name</label>
               <input style="color:black" type="text" name="lname" placeholder="give a employee name" required>
             </div>

              <div style="padding: 15px">

                <label for="">address</label>
                <input style="color:black" type="text" name="address" placeholder="give a employee address" required>
              </div>

              <div style="padding: 15px">

                <label for="">phone number</label>
                <input style="color:black" type="number" name="phone" placeholder="give a phone number" required>
              </div>

              <div style="padding: 15px">

                <label for="">departiment</label>
                <input style="color:black" type="text" name="departiment" placeholder="give a employee departiment" required>
              </div>

              <div style="padding: 15px">

              <label for="">country</label>
              <input style="color:black" type="text" name="country" placeholder="give a employee country" required>
              </div>

           
              <div style="padding: 15px" >
                <input class="btn btn-success" type="submit" value="save">
              </div>

          </form>



          <!-- partial -->
      @include('Admin.script')
  </body>
</html>