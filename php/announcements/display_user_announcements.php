<?php include "announcement_list.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../metaData.php"; ?>
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
    <link rel="stylesheet" type="text/css" href="../../css/Announcements/displayutil.css">
    <link rel="stylesheet" type="text/css" href="../../css/Announcements/displaymain.css">
</head>
<body>
<header>
	<?php include "announcement_navbar.php";?>
</header>

<!-- ######################################################################################################################################################################################### -->
<!-- ############################################################################################################################################################################## -->

<!--Open Modal -->
<div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">رؤية الإعلان</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="open_id" id="open_id">
                <div class="form-row" style="width: 100%;">
                    <input id="showtitle" class="input--style-6" type="text" name="title" readonly style="text-align: center; margin: auto;  padding: 1rem; font-size:2rem; font-weight: bold;"/>
                </div>
                <div class="form-row">
                    <h3 style="text-align: center; width: 100%; padding: 1rem;"> : إضيفت بواسطة</h3>
                </div>
                <div class="form-row">
                    <div class="value" style="width: 100%;">
                        <input id="showbody" name="body" style="text-align: center; margin: auto; font-size: 1.5rem; width: 100%;" readonly/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ######################################################################################################################################################################################### -->
<div>
    <div>
        <div style="width: 98vw !important; background-color: white; color: black; margin: auto; margin-top: 2rem;">
            <div>
                <h2 style="text-align: center; font-weight: bold; padding-bottom: 2rem; color: red;">جدول الإعلانات</h2>
                <div style="padding: 1rem .5rem 1rem .5rem; background-color: lightgray;">
                    <table style="width: 98vw; table-layout: fixed;">
                        <thead>
                        <tr style="text-align: center; color: black; font-weight:bold; font-size: 1.5rem;">
                            <th style="display:none;">#</th>
                            <th> العنوان</th>
                            <th> التاريخ</th>
                            <th> المضمون</th>
                            <th> الملف</th>
                            <th> الإجراءات</th>
                        </tr>
                        </thead>
                    </table>
                </div>

                <div style="width: 100%;">
                    <table style="table-layout: fixed;">
						<?php
						if(mysqli_num_rows($results)){
							// output data of each row
							while($row = $results->fetch_assoc()) {
								$date = $row["upload_date"];
								?>
                                <tbody>
                                <tr style="height: 15vh; font-size: 1.2rem;">
                                    <td style="display:none;"> <?php echo $row['id'] ?></td>
                                    <td style="text-align: center;"> <?php echo $row["title"]  ?></td>
                                    <td style="text-align: center;"> <?php echo date("m/d/Y g:i A", strtotime($date)); ?></td>
                                    <td style="text-align: center; display: none;"> <?php echo $row["addedBy"]  ?></td>
                                    <td  style="text-align: center;" > <?php echo $row["body"] ?></td>
                                    <td style="text-align: center;">
                                        <a href= "download_announcements.php?id=<?php echo $row['id'];?>" class="btn btn-info">Download File</a>
                                    </td>
                                    <td style="font-size: 2rem;">
                                        <button type="button" class="btn btn-info openbtn" style="font-size: 1.2rem;">فتح الإعلان</button>
                                    </td>
                                </tr>
                                </tbody>
							<?php }
							echo "</table>";
						} else { echo "<h5 style='text-align: center; margin: 2rem;'>&nbsp&nbspلم بتم إضافة أي إعلان بعد </h5>"; }
						mysqli_close($conn);
						?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.openbtn').on('click', function(){
            $('#openmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            $('#open_id').val(data[0]);
            $('#showtitle').val(data[1]);
            $('#showbody').val(data[3]);


        });
    });
</script>

<script>
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
</script>


<script>

    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            $('#update_id').val(data[0]);
            $('#title').val(data[1]);
            $('#body').val(data[4]);

        });
    });

</script>
<!--===============================================================================================-->
<script src="../js/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function(){
            ps.update();
        })
    });


</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


</body>
</html>
