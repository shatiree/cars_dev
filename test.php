<?php
require ('config/db.php');
require('paginator.php');
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM tb_cust_info WHERE cust_ic LIKE '%$search%'";

    $result = mysqli_query($con, $query);

    echo ' 
                    <div class="col-md-12">
                        <table class="table table-responsive" id="myData">';


      if(mysqli_num_rows($result) == 0){
          echo 'There is No Record.';
      }

        while($row = mysqli_fetch_array($result)){
        echo '
                                     <tr>
                                     <td><input type="radio" id="check" name="check" value="' . $row['cust_id'] . '"></td>
                                     <td>' . $row['cust_ic'] . '</td>
                                     <td>' . $row['cust_name'] . '</td>
                                     </tr>';
       }

//    echo $paginator->createLinks($links, 'pagination pagination-sm');


    echo '                </table>
                    </div>';
}
?>