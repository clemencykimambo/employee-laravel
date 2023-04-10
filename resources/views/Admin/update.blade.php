

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public" />
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

              <h1 class="title" >update employee</h1>

              
            <form action="updateemployee/{{$data->id}}" method="post" enctype="multipart/form-data">
             @csrf
              <div style="padding: 15px">

                <label for="">first name</label>
                <input style="color:black" type="text" name="fname" value="{{$data->fname}}" required>
              </div>

              <div style="padding: 15px">

             <label for="">last name</label>
               <input style="color:black" type="text" name="lname" value="{{$data->lname}}" required>
             </div>

              <div style="padding: 15px">

                <label for="">address</label>
                <input style="color:black" type="text" name="address" value="{{$data->address}}" required>
              </div>

              <div style="padding: 15px">

                <label for="">phone number</label>
                <input style="color:black" type="number" name="phone" value="{{$data->phone}}"  required>
              </div>

              <div style="padding: 15px">

                <label for="">departiment</label>
                <input style="color:black" type="text" name="departiment" value="{{$data->departiment}}" required>
              </div>

              <div style="padding: 15px">

              <label for="">country</label>
              <input style="color:black" type="text" name="country" value="{{$data->country}}" required>
              </div>

           
              <div style="padding: 15px" >
                <input class="btn btn-success" type="submit" value="save">
              </div>

          </form>








          <!-- partial -->
      @include('Admin.script')

  </body>
</html>