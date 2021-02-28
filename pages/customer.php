<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Customers</h1>
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
                                    <th>Address</th>
                                    <th>Next pay date</th>
                                    <th>Phone number</th>
                                    <th>Email</th>
                                    <th>Started</th>

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
        <h5 class="modal-title" id="exampleModalLongTitle">New Customer</h5>
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
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" id="email" class="form-control" placeholder="Email">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" class="form-control" placeholder="Phone number">
                  </div>
              </div>
          </div>


          <div class="row">
              <div class="col-md-5 col-sm-12">
                  <div class="form-group">
                      <label for="street">Street</label>
                      <input type="text" id="street" class="form-control" placeholder="eg.Purok 1">
                  </div>
              </div>
              <div class="col-md-7 col-sm-12">
                  <div class="form-group">
                      <label for="barangay">Barangay</label>
                      <input type="text" id="barangay" class="form-control" placeholder="eg.Calolot">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="municipality">Municipality</label>
                      <input type="text" id="municipality" class="form-control" placeholder="Municipality">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="province">Province</label>
                      <textarea class="form-control" id="province" cols="10" rows="2" placeholder="Province"></textarea>
                  </div>
              </div>
          </div>


        </div>
        <!-- <div class="pay-section">
            <div class="row">
                <div class="col-md-10 col-sm-8">
                    <div class="form-group">
                        <label for="street">Subscriptions</label>
                        <select id="subscription_all" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="form-group">
                        <label for="month_sub">Months</label>
                        <select id="month_sub_drop" class="form-control">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" id="value-of-payment">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="text" id="month_sub" class="" readonly style="font-size: 40px; border: none; backgound:none; outline:none; color:#4a4040">
                </div>
            </div>

        </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary saveTheCustomers" customer_id="">Save</button>
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
        <h4 class="msgFordeletemodal" style="text-align: center"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger deletecusBtn">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- modal pay -->

<!-- <div class="modal fade" id="paySubsciption" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay subscrition</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="pay-section">
            <div class="row">
                <div class="col-md-10 col-sm-8">
                    <div class="form-group">
                        <label for="street">Subscriptions</label>
                        <select id="subscription_all_for_pay" class="form-control">
                        </select>
                    </div>
                </div>
                <input type="hidden" id="customer_id_for_pay">
                <input type="hidden" id="record_id_for_pay">
                <input type="hidden" id="next_payment_for_pay">
                <input type="hidden" id="due_indicator_for_pay">

                <div class="col-md-2 col-sm-4">
                    <div class="form-group">
                        <label for="month_sub">Months</label>
                        <select id="month_sub_drop_for_pay" class="form-control">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" id="value-of-payment_for_pay">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="text" id="month_sub_for_pay" class="" readonly style="font-size: 40px; border: none; backgound:none; outline:none; color:#4a4040">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger proceed_payment">Proceed</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Script -->
<script>
    $(document).ready(function(){
        reloadTheList();
        function reloadTheList(){
            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data: {
                    'action': 'getTheCustomers'
                },
                success:function(res){

                  var today = new Date();
                    for (let i = 0; i < res.length; i++) {

                        var formatted_stated = formatDate( res[i]['date_started'] )
                        var formatted_next_payment = formatDateForNxt( res[i]['next_payment'] )
                        var dayT = (today.getDate().length == 1) ? '0' + today.getDate() :  today.getDate();
                        var monthT = ((today.getMonth()+1)) ? '0' + (today.getMonth()+1) :  (today.getMonth()+1);
                        var datenow = today.getFullYear()+'-'+ monthT +'-' + dayT ;
                        // var dueD = res[i]['next_payment'];
                        var Duedate = res[i]['next_payment'].split(' ')[0];

                         var rtrn = compare_dates(new Date(datenow), new Date(Duedate));
                         var classTobeForDate = '';
                         var msgForDue = '';
                         if ( rtrn == 'Due') {
                           classTobeForDate = 'passedDue'
                           msgForDue = '<span class="badge badge-danger"><small> Passed due </small></span>'
                         }else if( rtrn == 'equal'){
                           classTobeForDate = 'inTime'
                           msgForDue = '<span class="badge badge-warning"><small> Due </small></span>'
                         }else{
                           classTobeForDate = 'still'
                           console.log(rtrn);
                           msgForDue = '<span class="badge badge-success"><small> good </small></span>'
                         }

                        $("#customerTable tbody").append(
                            `<tr>
                                <td>${i + 1}</td>
                                <td> <a href="?page=paymentDetails&customer_id=${res[i]['customer_id']}&filter=none">${res[i]['first_name']} ${res[i]['last_name']}</a> </td>
                                <td> <a target="blank" href="https://www.google.com/maps/place/${res[i]['barangay']}, ${res[i]['municipality']} ${res[i]['province']}"> ${res[i]['street']} ${res[i]['barangay']}, ${res[i]['municipality']} ${res[i]['province']} </a></td>
                                <td>${formatted_next_payment}</td>
                                <td>${res[i]['phone_number']}</td>
                                <td>${res[i]['email']}</td>
                                <td>${formatted_stated}</td>

                                <td style="text-align:center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="" data-toggle="dropdown" href="#" style="font-size: 23px; color:#5a5a5a">
                                            <i class="fas fa-caret-square-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="min-width:100px !important">
                                            <a href="#" class="dropdown-item cus-edit-date" data-toggle="modal" data-target="#newCustomer" customer_id="${res[i]['Id']}"
                                            first_name="${res[i]['first_name']}" last_name="${res[i]['last_name']}" email="${res[i]['email']}" phone_number="${res[i]['phone_number']}"
                                            street="${res[i]['street']}" barangay="${res[i]['barangay']}" municipality="${res[i]['municipality']}" province="${res[i]['province']}"
                                            >
                                                <i class="fas fa-edit mr-2"></i> Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item cus-delete-date" data-toggle="modal" data-target="#deleteCustomer" customer_id="${res[i]['Id']}" customer_name="${res[i]['first_name']} ${res[i]['last_name']}">
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
                        { "orderable": false, "targets": 7 },
                        { "width": "5%", "targets": 7 }
                      ],
                    });
                },
                error: function(res){
                    console.log(res);
                }
            })
        }
        // $(document).on('click', '.cus-pay-date', function(){
        //
        //     $('#customer_id_for_pay').val($(this).attr('customer_id'));
        //
        //     $('#record_id_for_pay').val($(this).attr('record_id'));
        //
        //     $('#next_payment_for_pay').val($(this).attr('next_payment'));
        //
        //     $('#due_indicator_for_pay').val($(this).attr('due_indicator'));
        //
        //
        //     $.ajax({
        //         url:'dist/php/passer/customer_getter.php',
        //         method:'POST',
        //         dataType: 'JSON',
        //         data:{
        //             'action':'getThesubsForDrop',
        //         }, success: function( res ){
        //           console.log( res );
        //           $('#subscription_all_for_pay').html('');
        //             dataForPrice = res['dataForPrice'];
        //             for (let i = 0; i < res['dataFor'].length; i++) {
        //               console.log( res['dataFor'][i]);
        //                 $('#subscription_all_for_pay').append(
        //                     `<option value="${res['dataFor'][i]['Id']}">${res['dataFor'][i]['sub_name']} - ${res['dataFor'][i]['amount']} / Month</option>`
        //                 )
        //             }
        //
        //             var amount = parseFloat(dataForPrice[$('#subscription_all_for_pay').val()]);
        //             var quantity = parseFloat($('#month_sub_drop_for_pay').val());
        //             var totalPrice = amount * quantity;
        //             console.log(totalPrice);
        //             $('#month_sub_for_pay').val( new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'PHP' }).format(totalPrice) );
        //             $('#value-of-payment_for_pay').val(totalPrice);
        //
        //         }
        //
        //     })
        //
        // })
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


        function formatDateForNxt( date_var ){

            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var dateObj = new Date( date_var );
            var month = monthNames[dateObj.getMonth()];
            var day = String(dateObj.getDate()).padStart(2, '0');
            var year = dateObj.getFullYear();
            console.log( dateObj.getHours());

            var output = month  + '\n'+ day  + ', ' + year;
            return output;

        }

        $(document).on('click', '.cus-edit-date', function(){

            var customer_id = $(this).attr('customer_id');
            var first_name = $(this).attr('first_name');
            var last_name = $(this).attr('last_name');
            var email = $(this).attr('email');
            var phone_number = $(this).attr('phone_number');
            var street = $(this).attr('street');
            var barangay = $(this).attr('barangay');
            var municipality = $(this).attr('municipality');
            var province = $(this).attr('province');

            $('#firstname').val(first_name);
            $('#lastname').val(last_name);
            $('#email').val(email);
            $('#phone').val(phone_number);
            $('#street').val(street);
            $('#barangay').val(barangay);
            $('#municipality').val(municipality);
            $('#province').val(province);
            $('.saveTheCustomers').attr('customer_id', customer_id);


        })

        $(document).on('click', '.cus-delete-date', function(){
            $('.deletecusBtn').attr('customer_id', $(this).attr('customer_id'))
            $('h4.msgFordeletemodal').html(
                `Are you sure you want to delete <br> <u> <b>${$(this).attr('customer_name')}?</b></u>`
                );
            console.log($(this).attr('customer_id'));

        })
        $(document).on('click', '.deletecusBtn', function(){

            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data:{
                    'action':'deleteCustomer',
                    'cus_id': $(this).attr('customer_id')
                }, success: function( res ){

                    if(res.status == 'success'){
                        location.reload();
                    }else{
                        console.log( res );
                    }
                }
            })

        })

        $(document).on('click', '.saveTheCustomers', function(){
            var cus_id = $(this).attr('customer_id');
            if(
            $('#firstname').val() != '' &&
            $('#lastname').val() != '' &&
            $('#phone').val() != '' &&
            $('#street').val() != '' &&
            $('#barangay').val() != '' &&
            $('#municipality').val() != '' &&
            $('#province').val()){

            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method: 'POST',
                dataType: "JSON",
                data:{
                    'action':'saveCustomer',
                    'firstname': $('#firstname').val(),
                    'lastname': $('#lastname').val(),
                    'email': $('#email').val(),
                    'phone': $('#phone').val(),
                    'street': $('#street').val(),
                    'barangay': $('#barangay').val(),
                    'municipality': $('#municipality').val(),
                    'province': $('#province').val(),
                    'cus_id': cus_id
                }, success: function( res ){

                    if(res.status == 'success'){
                        location.reload();
                    }else{
                        console.log( res );
                    }
                    $(this).attr('customer_id','');

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
        var compare_dates = function(datenow,Duedate){
           if (datenow > Duedate) return ("Due");
         else if (datenow < Duedate) return ("Still");
         else return ("equal");
        }

        var dataForPrice;
        $(document).on('click', '.newCustomer-btn', function(){


            $('#firstname').val('');
            $('#lastname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#street').val('');
            $('#barangay').val('');
            $('#municipality').val('');
            $('#province').val('');
            $('.saveTheCustomers').attr('customer_id','');
            $.ajax({
                url:'dist/php/passer/customer_getter.php',
                method:'POST',
                dataType: 'JSON',
                data:{
                    'action':'getThesubsForDrop',
                }, success: function( res ){
                  $('#subscription_all').html('');
                    dataForPrice = res['dataForPrice'];
                    for (let i = 0; i < res['dataFor'].length; i++) {
                        $('#subscription_all').append(
                            `<option value="${res['dataFor'][i]['Id']}">${res['dataFor'][i]['sub_name']} - ${res['dataFor'][i]['amount']} / Month</option>`
                        )
                    }

                    var amount = parseFloat(dataForPrice[$('#subscription_all').val()]);
                    var quantity = parseFloat($('#month_sub_drop').val());
                    var totalPrice = amount * quantity;
                    console.log(totalPrice);
                    $('#month_sub').val( new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'PHP' }).format(totalPrice) );
                    $('#value-of-payment').val(totalPrice);

                }

            })
        })


        $(document).on('change', '#month_sub_drop_for_pay, #subscription_all_for_pay', function(){

            var amount = parseFloat(dataForPrice[$('#subscription_all_for_pay').val()]);
            var quantity = parseFloat($('#month_sub_drop_for_pay').val());
            var totalPrice = amount * quantity;
            console.log(totalPrice);
            $('#month_sub_for_pay').val( new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'PHP' }).format(totalPrice) );
            $('#value-of-payment_for_pay').val(totalPrice);

        })

        $(document).on('change', '#subscription_all, #month_sub_drop', function(){

            // const settings = {
            //     "async": true,
            //     "crossDomain": true,
            //     "url": "https://d7sms.p.rapidapi.com/secure/send",
            //     "method": "POST",
            //     "headers": {
            //         "content-type": "application/json",
            //         "authorization": "undefined",
            //         "x-rapidapi-key": "ba9714e2eamsh567b07d6aefe412p164b64jsn4215200e4f7c",
            //         "x-rapidapi-host": "d7sms.p.rapidapi.com"
            //     },
            //     "processData": false,
            //     "data": {
            //         "coding": "8",
            //         "from": "SMSInfo",
            //         "hex-content": "00480065006c006c006f",
            //         "to": 09094373300
            //     }
            // };
            //
            // $.ajax(settings).done(function (response) {
            //     console.log(response);
            // });

            var amount = parseFloat(dataForPrice[$('#subscription_all').val()]);
            var quantity = parseFloat($('#month_sub_drop').val());
            var totalPrice = amount * quantity;
            console.log(totalPrice);
            $('#month_sub').val( new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'PHP' }).format(totalPrice) );
            $('#value-of-payment').val(totalPrice);
        })
        // $('#subscription_all').select2();
    })
</script>
