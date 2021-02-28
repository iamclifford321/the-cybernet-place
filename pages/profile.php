<?php
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
            </ol> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header">
                  <h2 class="card-title">User Information</h2>
                  <button type="button" class="close edit-with-close-style">
                    <i class="fas fa-pen-square"></i>
                  </button>
              </div>
            <!-- /.card-header -->
                <div class="card-body">
                  <div class="div-for-info">


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" placeholder="Firstname" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control" placeholder="Lastname" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" id="email" class="form-control" placeholder="Email" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" id="username" class="form-control" placeholder="Username" readonly>
                            </div>
                        </div>
                    </div>

                  </div>
                  <div class="float-right">
                    <button type="button" class="btn btn-primary updateUser">Save</button>
                  </div>
                </div>
            <!-- /.card-body -->
            </div>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Change password</h3>
              </div>
            <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12 col-sm-12">
                          <div class="form-group">
                              <label for="oldPass">Old password</label>
                              <input type="password" id="oldPass" class="form-control" placeholder="Enter your old password">
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                              <label for="newPass">New password</label>
                              <input type="password" id="newPass" class="form-control" placeholder="Enter your new password">
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                              <label for="reTypePass">Retype new password</label>
                              <input type="password" id="reTypePass" class="form-control" placeholder="Retype password">
                          </div>
                      </div>
                  </div>

                  <div class="float-right">
                    <button type="button" class="btn btn-primary updatePass">Save</button>
                  </div>

                </div>
            <!-- /.card-body -->
            </div>
          </div>

        </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<script type="text/javascript">
  $(document).ready(function(){

      $(document).on('click', '.edit-with-close-style', function(){

        if ($('.edit-with-close-style i').attr('class') == 'fas fa-pen-square') {
          $('div.div-for-info input, div.div-for-info textarea').removeAttr('readonly')
          $('.edit-cus-footer').css('display', 'flex')
        }else{
          $('div.div-for-info input, div.div-for-info textarea').attr('readonly', '')
          $('.edit-cus-footer').css('display', 'none')

        }


        console.log($('div.div-for-info input, div.div-for-info textarea').removeAttr());
        $('.edit-with-close-style i').toggleClass('fa-pen-square').toggleClass('fa-window-close')
        // $('div.div-for-info input, div.div-for-info textarea').css('border')

      })

  })
</script>
