
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
  </head>
  <body>

    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

  </body>

      <script src="js/jquery.min.js"></script>
      <script src="js/datatables.min.js"></script>

  <script>

  $(document).ready(function(){
    $.ajax({
      url:"ajax.php",
      success:function(e){
        $("#example tbody").append(e);
        $('#example').DataTable();
      }
    });
  });


  </script>
</html>
