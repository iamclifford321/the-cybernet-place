<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <!-- <h3 class="card-title">List of Customers</h3> -->
                    <div class="float-right"><button class="btn btn-primary newCustomer-btn" data-toggle="modal" data-target="#newCustomer">New</button></div>

                </div>
                <!-- /.card-header -->
                    <div class="card-body">
                        <table id="customerTable" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
            </div>
        </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- modal -->
<div class="modal fade" id="newCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="div-for-info">


          <div class="row">
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input type="text" id="firstname" class="form-control" placeholder="Firstname">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="lastname">Lastname</label>
                      <input type="text" id="lastname" class="form-control" placeholder="Lastname">
                  </div>
              </div>

          </div>
          <div class="row">
              <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" id="email" class="form-control" placeholder="Email">
                  </div>
              </div>
          </div>
          <div class="username-div">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" id="username" class="form-control" placeholder="Username">
                    </div>
                </div>
            </div>
          </div>

          <div class="password-div">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" id="password" class="form-control" placeholder="Enter password">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="rePassword">Retype password</label>
                      <input type="password" id="rePassword" class="form-control" placeholder="Retype password">
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary saveTheUsers" user_id="">Save</button>
      </div>
    </div>
  </div>
</div>



<!-- modal delete -->

<div class="modal fade" id="deleteCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="id_user">
        <h4 class="msgFordeletemodal" style="text-align: center">Do you want to delete this user?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger deletecusBtn">Yes</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        reloadTheList();
        function reloadTheList(){
            $.ajax({
                url:'dist/php/passer/user_getter.php',
                method: 'POST',
                dataType: "JSON",
                data: {
                    'action': 'getTheUsers'
                },
                success:function(res){
                  console.log(res);
                  var today = new Date();
                    for (let i = 0; i < res.length; i++) {
                      var thisYou = '';
                      if (res[i]['user_id'] == '<?php echo $_SESSION['user_id']; ?>') {
                        thisYou = `<b>(Current user)</b>`
                      }
                      $("#customerTable tbody").append(
                        `<tr>
                          <td>${i + 1}</td>
                          <td>${res[i]['first_name']} ${res[i]['last_name']} ${thisYou}</td>
                          <td>${res[i]['email']}</td>
                          <td>${res[i]['user_name']}</td>
                          <td style="text-align:center">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="" data-toggle="dropdown" href="#" style="font-size: 23px; color:#5a5a5a">
                                        <i class="fas fa-caret-square-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="min-width:100px !important">
                                        <a href="#" class="dropdown-item edit-user" data-toggle="modal" data-target="#newCustomer"
                                        first_name="${res[i]['first_name']}" last_name="${res[i]['last_name']}"
                                        email="${res[i]['email']}" user_name="${res[i]['user_name']}" user_Id="${res[i]['Id']}"
                                        >
                                            <i class="fas fa-pen mr-2"></i> Edit
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item delete-user" data-toggle="modal" data-target="#deleteCustomer" user_id="${res[i]['Id']}">
                                            <i class="fas fa-trash mr-2"></i> Delete
                                        </a>
                                    </div>
                                </li>

                            </ul>
                          </td>
                        </tr>`
                      )

                    }

                    $("#customerTable").DataTable({
                      responsive: true,
                      "columnDefs": [
                        { "orderable": false, "targets": 4   },
                        { "width": "5%", "targets": 4 }
                      ],
                    });
                },
                error: function(res){
                    console.log(res);
                }
            })
        }
        $(document).on('click', '.delete-user', function(){
          $('#id_user').val( $(this).attr('user_id') );
        })
        $(document).on('click', '.edit-user', function(){

          $('.username-div').css('display','block')
          $('.password-div').css('display','none')
          var first_name = $(this).attr('first_name');
          var last_name = $(this).attr('last_name');
          var email = $(this).attr('email');
          var user_name = $(this).attr('user_name');
          var user_Id = $(this).attr('user_Id');

          $('#firstname').val(first_name)
          $('#lastname').val(last_name)
          $('#email').val(email)
          $('#username').val(user_name);
          $('.saveTheUsers').attr( 'user_Id', user_Id )


        })
        $(document).on('click', '.newCustomer-btn', function(){
          $('.username-div').css('display','none')
          $('.password-div').css('display','block')
          $('#firstname').val('')
          $('#lastname').val('')
          $('#email').val('')
          $('#username').val('');
          $('.user_id').val('')
        })


        $(document).on('click', '.deletecusBtn', function(){
          var id_user = $('#id_user').val();
          console.log(id_user);
          $.ajax({
            url:'dist/php/passer/user_getter.php',
            method: 'POST',
            dataType: "JSON",
            data: {
              'action' : 'deleteUser',
              'user_id' : id_user
            }, success: function(res){
              console.log(res['status']);
              if (res['status'] == 'Success') {
                location.reload();
              }else{
                  console.log( res );
              }
            }
          })

        })


        $(document).on('click', '.saveTheUsers', function(){
          var user_id = $(this).attr('user_id');
          console.log( user_id );
          var firstname = $('#firstname').val();
          var lastname = $('#lastname').val();
          var email = $('#email').val();
          var password = $('#password').val();
          if ( firstname == '' || lastname == '' || email == '' ) {
            Swal.fire(
              'Validaton error',
              'Fill in all information needed!',
              'error'
            )
            return false;
          }

          if (user_id == '') {
            if ($('#rePassword').val() != password || password == '') {
              Swal.fire(
                'Validaton error',
                'Password Error',
                'error'
              );

              $('#rePassword').css('border-color', 'red');
              $('#password').css('border-color', 'red');

              return false;
            }
          }else{

            if ($('#username').val() == '') {
              Swal.fire(
                'Validaton error',
                'Fill in all information needed!',
                'error'
              )
              return false;
            }
          }

          $.ajax({
            url:'dist/php/passer/user_getter.php',
            method: 'POST',
            dataType: "JSON",
            data: {
              'action' : 'saveUser',
              'user_id' : user_id,
              'firstname' : firstname,
              'lastname' : lastname,
              'email' : email,
              'username' : $('#username').val(),
              'password' : password
            }, success: function(res){
              console.log(res['status']);
              if (res['status'] == 'Success') {
                location.reload();
              }else{
                  console.log( res );
              }
            }
          })

        })

        function formatDateForNxt( date_var ){

            var monthNames = ["January", "Febuary", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
            var dateObj = new Date( date_var );
            var month = monthNames[dateObj.getMonth()];
            var day = String(dateObj.getDate()).padStart(2, '0');
            var year = dateObj.getFullYear();
            console.log( dateObj.getHours());

            var output = month  + '\n'+ day  + ', ' + year;
            return output;

        }

    })
</script>
