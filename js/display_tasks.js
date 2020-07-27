
$(document).ready(function(){
    $('.openbtn').on('click', function(){
        $('#openmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);

        $('#open_id').val(data[0]);
        $('#showtitle').val(data[2]);
        $('#showbody').val(data[1]);
    });
});

$(document).ready(function(){
    $('.deletebtn').on('click', function(){
        $('#deletemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);

        $('#delete_id').val(data[0]);

    });
});
$(document).ready(function(){
    $('.editbtn').on('click', function(){
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);

        $('#update_id').val(data[0]);
        $('#title').val(data[2]);
        $('#body').val(data[1]);

    });
});

$(document).ready(function(){
    $('.donebtn').on('click', function(){
        $('#donemodel').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);

        $('#updateStatusDone').val(data[0]);

    });
});


$('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);
    $(window).on('resize', function(){
        ps.update();
    })
});

// <script src="../js/jquery/jquery-3.2.1.min.js"></script>
//     <script src="vendor/bootstrap/js/popper.js"></script>
//     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
//
//     <script src="vendor/select2/select2.min.js"></script>
//     <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
//     <script>
//
// </script>
// <script src="js/main.js"></script>