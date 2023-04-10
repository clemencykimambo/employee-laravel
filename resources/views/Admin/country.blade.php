
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

              <h1 class="title" >add Country</h1>

              
            <form action="{{url('uploadcountry')}}" method="post" enctype="multipart/form-data">
             @csrf
              <div style="padding: 15px">

                <label for="">country name</label>
                <input style="color:black" type="text" name="name" placeholder="country  name" required>
              </div>

              <div style="padding: 15px">

             <label for="">country code</label>
               <input style="color:black" type="text" name="country_code" placeholder="country code" required>
             </div>

              
           
              <div style="padding: 15px" >
                <input class="btn btn-success" type="submit" value="save">
              </div>

          </form>



          <!-- partial -->
      @include('Admin.script')
  </body>
</html>