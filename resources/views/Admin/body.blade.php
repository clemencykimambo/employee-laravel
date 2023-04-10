<div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Employees</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">6.</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Departiment</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">6.</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Countries</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">4.</h2>
                          <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

       
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Employee list</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> id</th>
                            <th> first name </th>
                            <th> last name </th>
                            <th> Address </th>
                            <th> phone </th>
                            <th> Dpartiment  </th>
                            <th> Country  </th>
                            <th> Action 1  </th>
                            <th> Action 2 </th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $employee)
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            
                            </td>
                            <td> {{$employee -> id}}  </td>
                            <td>{{$employee -> fname}}</td>
                            <td> 
                            <span class="ps-2">{{$employee -> lname}}</span>
                            </td>
                            <td> {{$employee -> address}} </td>
                            <td> {{$employee -> phone}} </td>
                            <td> {{$employee -> departiment}} </td>
                            <td> {{$employee -> country}} </td>


                             <td><a class="btn btn-danger" href = 'delete/{{ $employee->id }}'>Delete</a></td>
                              
                             <td><a class="btn btn-success" href = 'update/{{ $employee->id }}'>update</a></td> 
                             
                            
                          
                          </tr>

                          @endforeach
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center ">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © employee 2021</span>
              
            </div>
          </footer>