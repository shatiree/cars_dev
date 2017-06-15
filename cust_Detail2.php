<?php

                if(isset($_POST["submit"])){
                    include('config/db.php');

                    $name = $_POST["cust_name"];
                    $ic =  $_POST["cust_ic"];
                    $email = $_POST["cust_email"];
                    $address = $_POST["cust_address"];
                    $home = $_POST["cust_phone_home"];
                    $office = $_POST["cust_phone_office"];
                    $mobile = $_POST["cust_phone_mobile"];

                    $sql = mysqli_query($con,"INSERT INTO tb_cust_info (cust_name, cust_ic, cust_email, cust_address, cust_p_home, cust_p_office, cust_p_mobile)
                                VALUES ('$name','$ic','$email','$address', '$home', '$office', '$mobile')");

                    if ($sql) {
                        echo "<script type= 'text/javascript'>alert('New record created successfully');
                              location.href = 'index.php?page=cust_List' </script>";

                    }


                }
?>
`