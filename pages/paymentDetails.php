<style media="screen">

</style>
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Customer trasactions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customer info</h3>
                <button type="button" class="close edit-with-close-style">
                  <i class="fas fa-pen-square"></i>
                </button>
            </div>
          <!-- /.card-header -->
              <div class="card-body">


                  <div class="div-for-info">
                    <input type="hidden" id="idForCustomer">

                      <div class="row">
                          <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label for="firstname">Firstname</label>
                                  <input type="text" id="firstname" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label for="lastname">Lastname</label>
                                  <input type="text" id="lastname" class="form-control" readonly>
                              </div>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label for="email">email</label>
                                  <input type="email" id="email" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" id="phone" class="form-control" readonly>
                              </div>
                          </div>
                      </div>


                      <div class="row">
                          <div class="col-md-5 col-sm-12">
                              <div class="form-group">
                                  <label for="street">Street</label>
                                  <input type="text" id="street" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="col-md-7 col-sm-12">
                              <div class="form-group">
                                  <label for="barangay">Barangay</label>
                                  <input type="text" id="barangay" class="form-control" readonly>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label for="municipality">Municipality</label>
                                  <input type="text" id="municipality" class="form-control" readonly>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label for="province">Province</label>
                                  <textarea class="form-control" id="province" cols="10" rows="2" readonly></textarea>
                              </div>
                          </div>
                      </div>


                  </div>


              </div>

              <div class="modal-footer edit-cus-footer" style="display:none">
                <button type="button" class="btn btn-primary saveTheCustomers">Save</button>
              </div>


          <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>

        <div class="col-md-8 col-sm-12">
            <div class="card">
              <div class="card-header">

                  <h3 class="card-title">List of customer transactions</h3>

                  <!-- <div class="float-right"><button class="btn btn-primary newCustomer-btn" data-toggle="modal" data-target="#newCustomer">New</button></div> -->

              </div>
            <!-- /.card-header -->
                <div class="card-body">

                  <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-5">


                                        <div class="form-group">
                                            <label>Filtered by Status:</label>
                                            <select class="form-control" id="statusFilter" style="width: 100%;">
                                            </select>

                                            <button type="submit" class="btn btn-secondary" id="searchWithfilter">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>

                  <div class="table-subscription">
                    <div class="container-fluid">
                      <table id="transacTable" class="table table-striped table-bordered table-hover">

                          <tfoot>
                            <tr>
                                <th colspan="2" style="text-align:right">Total:</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th colspan=""></th>
                                <th colspan="2"></th>

                            </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>

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


<div class="modal fade" id="payTheBills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="p_id">
        <input type="hidden" id="p_amount">
        <div class="form-group">
          <label for="">Amount</label>
          <input type="number" class="form-control" id="amount-tobesaved">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary proceddPButton">Proceed</button>
      </div>
    </div>
  </div>
</div>


<script>

$(document).ready(function(){

    $(document).on('click', '.saveTheCustomers', function(){
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
                'cus_id': $('#idForCustomer').val()
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

    var url = window.location.search;
    var urlParams = new URLSearchParams(url);
    var customer_id = urlParams.get('customer_id');
    var filter = urlParams.get('filter');

    var options = ['none', 'Paid', 'Balanced', 'Haven\'t paid'];
    for (var i = 0; i < options.length; i++) {
      var isSelected = '';
      var value = options[i];
      if (options[i] == filter) {
        isSelected = 'selected'
      }
      if (options[i] == "Haven\'t paid") {
        value = 'didnot pay';
      }
      $('#statusFilter').append(`<option value="${value}" ${isSelected}> ${options[i]} </option>`);
    }

    $(document).on('click', '.p_button', function(){
      $('#p_id').val($(this).attr('id-tobe'))
      $('#p_amount').val($(this).attr('amount-tobe'))
      $('#amount-tobesaved').val($(this).attr('amount-tobe'))
    })
    $(document).on('click', '.proceddPButton', function(){
      // $('#p_id').val($(this).attr('id-tobe'))
      // $('#p_amount').val($(this).attr('amount-tobe'))
      if ( parseFloat($('#p_amount').val()) == parseFloat($('#amount-tobesaved').val())) {
        console.log('ok');

        saveThePayment( $('#p_id').val(), $('#amount-tobesaved').val(), 'Paid' );


      }else if (parseFloat($('#p_amount').val()) < parseFloat($('#amount-tobesaved').val())) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Amount entered overpassed the customer\'s balance fee for the month!',
        })
      }else if(parseFloat($('#p_amount').val()) > parseFloat($('#amount-tobesaved').val()) && parseFloat($('#amount-tobesaved').val()) != ''){

        Swal.fire({
          title: 'Are you sure?',
          text: "The amount entered is lower than the customer\'s fee for the month, this will update the status to Balanced",
          icon: 'warning',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Proceed',
          showCancelButton: true
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
        console.log('old is greater than new');
      }
    })
    function saveThePayment( idFor, amountFor, status){
      $.ajax({
        url:'dist/php/passer/customer_getter.php',
        method: 'POST',
        dataType: "JSON",
        data : {
          'action' : 'saveTransaction',
          'idFor' : idFor,
          'amountFor' : amountFor,
          'status' : status
        },success: function(){

        }
      })
    }


    $.ajax({
      url:'dist/php/passer/customer_getter.php',
      method: 'POST',
      dataType: "JSON",
      data : {
        'action' : 'getTheTransaction',
        'customer_id' : customer_id,
        'filtered' : filter
      },success: function( res ){
        console.log(res);
        var dataSet = [];
        $('#idForCustomer').val(res['customer_details'][0]['Id'])
        $('#firstname').val(res['customer_details'][0]['first_name'])
        $('#lastname').val(res['customer_details'][0]['last_name'])
        $('#email').val(res['customer_details'][0]['email'])
        $('#phone').val(res['customer_details'][0]['phone_number'])
        $('#street').val(res['customer_details'][0]['street'])
        $('#barangay').val(res['customer_details'][0]['barangay'])
        $('#municipality').val(res['customer_details'][0]['municipality'])
        $('#province').val(res['customer_details'][0]['province'])

        for (var i = 0; i < res['customer_trasactions'].length; i++) {
          // customer_details
          // customer_trasactions
          var buttonDis = '';

          var monthlyBalance = parseFloat(res['customer_trasactions'][i]['amount']) - parseFloat(res['customer_trasactions'][i]['amount_paid']);
          if ( monthlyBalance == 0) {
            buttonDis = 'disabled';
          }
          var actionButton = `<button class="btn btn-info p_button" ${buttonDis} data-toggle="modal" data-target="#payTheBills" amount-tobe="${monthlyBalance}" id-tobe="${res['customer_trasactions'][i]['id']},${res['customer_trasactions'][i]['customer_id']}"> <i class="fas fa-money-check-alt mr-2"></i> Pay</button>`;
          var datePay = formatDateForNxt(res['customer_trasactions'][i]['date_pay'])

          var PaidDate = (res['customer_trasactions'][i]['paid'] == '0000-00-00') ? 'N/A' : formatDateForNxt(res['customer_trasactions'][i]['paid']);
          var statusBill = (res['customer_trasactions'][i]['status_bill'] == 'didnot pay') ? 'Haven\'t paid' : res['customer_trasactions'][i]['status_bill'];
          var dataSetInner = [
            i+1,
            datePay,
            PaidDate,
            res['customer_trasactions'][i]['amount'],
            statusBill,
            res['customer_trasactions'][i]['amount_paid'],
            monthlyBalance,
            actionButton
          ];
        dataSet.push( dataSetInner )
          // $("#transacTable tbody").append(
          //   `<tr>
          //     <td>${i + 1}</td>
          //     <td>${datePay}</td>
          //     <td>${res['customer_trasactions'][i]['amount']}</td>
          //     <td>${res['customer_trasactions'][i]['amount_paid']}</td>
          //     <td>${res['customer_trasactions'][i]['status_bill']}</td>
          //     <td>${res['customer_trasactions'][i]['status_bill']}</td>
          //   <tr>`
          // )

        }

        // $("#transacTable").DataTable();
        $('#transacTable').DataTable( {
            "columnDefs": [
              { "orderable": false, "targets": 5 }
            ],
            data: dataSet,
            columns: [
                {title : "#" },
                { title: "Date" },
                { title: "Paid date"},
                { title: "Total amount" },
                { title: "Status" },
                { title: "Amount paid" },
                { title: "Monthly balance" },
                { title: "Action" },
            ],

            "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };

                // Total over all pages

                // total = api
                //     .column( 2 )
                //     .data()
                //     .reduce( function (a, b) {
                //         return intVal(a) + intVal(b);
                //     }, 0 );

                // Total over this page
                pageTotal_Amount = api
                    .column( 3, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                // Update footer

                $( api.column( 3 ).footer() ).html(
                    pageTotal_Amount
                );


                // Total over this page
                pageTotal_Amount_paid = api
                    .column( 5, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                // Update footer

                $( api.column( 5 ).footer() ).html(
                    pageTotal_Amount_paid
                );


                // Total over this page
                pageTotal_Monthly_balance = api
                    .column( 6, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                // Update footer

                $( api.column( 6 ).footer() ).html(
                    pageTotal_Monthly_balance
                );
            }


      });
      }, error: function(res){
        console.log(res);
      }
    })


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


  $("#searchWithfilter").on('click', function(){

    window.location.href='?page=paymentDetails&customer_id='+ customer_id + '&filter=' + $('#statusFilter').val()

  })
})


</script>
