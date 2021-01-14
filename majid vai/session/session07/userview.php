<?php
    include "header.php"
?>

    <table align="center" class="table w-75  overflow-hidden mt-5 d-inline  table-dark" >
        <tr class="bg-primary">
        <th>Id</th>
        <th>Full name</th>
        <th>User Name</th>
        <th>Email Adress</th>
        <th>Password</th>
        <th>Status</th>
        <th colspan='2' class="text-center">Action</th>
        </tr>
        
        <?php 
            $con=new mysqli("localhost","root","","theme");
            if($con->connect_error){
                echo "Connection Error: ".$con->coonect_error;
            }
            else{
                $alldata=$con->query("SELECT *FROM tbl_users");
                if($alldata->num_rows>0){
                    while($data=$alldata->fetch_assoc()){
                        echo "<tr class='bg-danger'>
                        <td>".$data['id']."</td>
                        <td>".$data['t_fname']."</td>
                        <td>".$data['t_uname']."</td>
                        <td>".$data['t_email']."</td>
                        <td>".$data['t_pass']."</td>
                        <td>".$data['status']."</td>
                        <td><a href='approve.php?thisId=".$data['id']."' class='btn btn-success'>Approve</a></td>
                        <td><a href='block.php?thisId=".$data['id']."' class='btn btn-secondary'>Block</a></td>
                        </tr>";
                    }
                }
                else{
                    echo "The database is empty! Please, Insert some data";
                }
            }
        ?>  
   </table>
</body>
</html>