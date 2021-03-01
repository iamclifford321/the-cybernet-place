<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Subscriptions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?page=report">Home</a></li>
            <li class="breadcrumb-item active">Subscrition</li>
        </ol> -->
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
                      <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
                      <div class="float-right"><button class="btn btn-primary newCustomer-btn" data-toggle="modal" data-target="#newSubs">New</button></div>
                  </div>
                <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tableSubs" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Discription</th>
                                    <th>Price</th>
                                    <!-- <th>Frequent</th> -->
                                    <th>Date created</th>
                                    <th>Action</th>
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
<div class="modal fade" id="newSubs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Subscription name">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" class="form-control" placeholder="Subscription price">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" cols="10" rows="2" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary saveTheSubs" subs_id=''>Save</button>
      </div>
    </div>
  </div>
</div>


<!-- modal delete -->

<div class="modal fade" id="deleteSubs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="msgFordeletemodal" style="text-align: center"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger deleteSubsBtn">Yes</button>
      </div>
    </div>
  </div>
</div>


<script>
    $(document).ready(function(){
        reloadTheList();
        function reloadTheList(){
            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data: {
                    'action': 'getTheSubs'
                },
                success:function(res){

                    for (let i = 0; i < res.length; i++) {
                        console.log(res[i]);
                        var createdDate = formatDate( res[i]['created_date'] )

                        $("#tableSubs tbody").append(
                            `<tr>
                                <td>${i + 1}</td>
                                <td>${res[i]['sub_name']}</td>
                                <td> ${res[i]['sub_description']} </td>
                                <td>${ new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'PHP' }).format(res[i]['amount'])  }</td>

                                <td>${createdDate}</td>
                                <td style="text-align:center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="" data-toggle="dropdown" href="#" style="font-size: 23px; color:#5a5a5a">
                                            <i class="fas fa-caret-square-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="min-width:100px !important">
                                            <a href="#" class="dropdown-item sub-edit-date" data-toggle="modal" data-target="#newSubs" subs_id="${res[i]['Id']}"
                                            name="${res[i]['sub_name']}" description="${res[i]['sub_description']}" price="${res[i]['amount']}">
                                                <i class="fas fa-edit mr-2"></i> Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item sub-delete-date" data-toggle="modal" data-target="#deleteSubs" subs_id="${res[i]['Id']}" name="${res[i]['name']}">
                                                <i class="fas fa-trash mr-2"></i> Delete
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                </td>
                            </tr>`
                        )

                    }

                    $("#tableSubs").DataTable(
                      {
                        responsive: true,
                        "columnDefs": [
                          { "orderable": false, "targets": 5 },
                          { "width": "5%", "targets": 5 }
                        ]
                      }
                    );
                },
                error: function(res){

                    console.log(res);
                }
            })
        }
        function formatDate( date_var ){

            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var dateObj = new Date( date_var );
            var month = monthNames[dateObj.getMonth()];
            var day = String(dateObj.getDate()).padStart(2, '0');
            var year = dateObj.getFullYear();
            console.log( dateObj.getHours());


            var hours = dateObj.getHours();
            var minutes = dateObj.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;

            var output = month  + '\n'+ day  + ', ' + year + ' @' + strTime;
            return output;

        }
        $(document).on('click', '.sub-edit-date', function(){

            $('#name').val($(this).attr('name'));
            $('#price').val($(this).attr('price'));
            $('#description').val($(this).attr('description'));
            $('.saveTheSubs').attr('subs_id', $(this).attr('subs_id'))

        })
        $(document).on('click', '.sub-delete-date', function(){
            $('.msgFordeletemodal').html(
                `Do you wan to delete <u> <b> ${$(this).attr('name')}? </b> </u>`
            )
            $('.deleteSubsBtn').attr('subs_id', $(this).attr('subs_id'))
        })
        $(document).on('click', '.deleteSubsBtn', function(){

            var sub_id = $(this).attr('subs_id');
            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data:{

                    'action':'deleteSubs',
                    'sub_id': sub_id,

                }, success: function( res ){

                    if(res.status == 'success'){
                        location.reload();
                    }else{
                        console.log( res );
                    }
                    $(this).attr('subs_id', '');
                }
            })

        })
        $(document).on('click', '.saveTheSubs', function(){

            var sub_id = $(this).attr('subs_id');
            var Subs_name = $('#name').val();
            var Subs_price = $('#price').val();
            var Subs_description = $('#description').val();


            if(
                Subs_name != '' &&
                Subs_price != '' &&
                Subs_price > 0 &&
                Subs_description != ''
                ){

            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data:{

                    'action':'saveSubs',
                    'sub_id': sub_id,
                    'Subs_name': Subs_name,
                    'Subs_price': Subs_price,
                    'Subs_description': Subs_description

                }, success: function( res ){

                    if(res.status == 'success'){
                        location.reload();
                    }else{
                        console.log( res );
                    }
                    $(this).attr('subs_id', '');
                }
            })

            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Validation error',
                    text: 'Please fill in all information needed',
                })
            }


        })
        $(document).on('click', '.newCustomer-btn', function(){
            $('#name').val('')
            $('#price').val('')
            $('#description').val('')
            $('.saveTheSubs').attr('subs_id', '');
        })
    })
</script>
