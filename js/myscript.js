$(document).ready(function () {
    $("form").validate();
    $("#register").validate();
    $(document).ready(function () {
        $("form").validate();
        $(".dtp").datepicker({
            changeYear: true,
            minDate: 0,
            changeMonth: true,
            dateFormat: "d-M-yy DD"
        });
    })

});
$(document).ready(function () {
    $(document).ready(function () {
        $(".dtp111").datepicker({
            changeYear: true,
           // minDate: 0,
            changeMonth: true,
            dateFormat: "yy-m-d"
        });
    })

});

function searchbus() {
    var doj = $("#doj").val();
    var source = $("#source").val();
    var destination = $("#destination").val();
    if (doj == '' || source == '' || destination == '') {
        alert();
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("output").innerHTML = this.responseText;
                window.scrollTo(0, document.body.scrollHeight);
            }
        };
        xmlhttp.open("POST", "searchbus.php?doj=" + doj + "&source=" + source + "&des=" + destination, true);
        xmlhttp.send();
    }
}

var seats = [];
var grandtotal=0;
var seatprice=0;
var seatnos='';
function chooseseats(obj, busid, price) {
    //alert(obj.value);
    if (document.getElementById(obj.id).className == 'btn btn-success') {
        seats.push(obj.value);
        document.getElementById(obj.id).className = 'btn btn-info';
    }
    else {
        var index = seats.indexOf(obj.value);
        if (index > -1) {
            seats.splice(index, 1);
        }
        document.getElementById(obj.id).className = 'btn btn-success';
    }
    var tab = '<table class="table table-striped">' +
        '<tr>' +
        '<th>Sr No.</th>' +
        '<th>Seat No</th>' +
        '<th>Price</th>' +
        '</tr>';
    var k = 0;
     grandtotal = 0;
     seatprice=price;
    for (i = 0; i < seats.length; i++) {
        grandtotal += price;
        k++;
        var seatno=seats[i];
        seatnos+=seatno+',';
        tab += '<tr>' +
            '<td>' + k + '</td>'+
        '<td>' + seatno + '</td>'+
        '<td>' + price + '</td>' +
        '</tr>';
    }
    tab += '<tr>' +
        '<td colspan="2">Grand Total</td>' +
        '<td>' + grandtotal + '</td>' +
        '</tr></table>' +
        '<div class="row">' +
        '<div class="text-right">' +
        '<input type="button" class="book btn" value="Pay Now" onclick="paynow()">' +
        '</div>' +
        '</div>';
    document.getElementById("selectedseats").innerHTML = tab;



}
function paynow() {
    var useremail=$("#useremail").val();
    var busid=$("#busid").val();
    if(useremail=='')
    {
        window.location.href="index.php";
    }
    else
    {
        var amount=grandtotal*100;
        var options = {
            "key": "rzp_test_dRWiKHS7zr2Gki",
            "amount": amount,
            "name": "",
            "description": "",
            "image": "",
            "handler": function (response) {
                //alert(response.razorpay_payment_id);
                if( response.razorpay_payment_id == "")
                {
                    //alert('Failed');
                    window.location.href = "bookbuses.php?q="+busid+"&status=failed";
                }
                else {
                    //alert('Success');
                    window.location.href = "insert_payment.php?status=success&id="+busid+"&seats="+seats+"&price="+seatprice+"&gt="+grandtotal;
                }
            },
            "prefill": {
                "name": "",
                "email": useremail
            },
            "notes": {
                "address": ""
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
}