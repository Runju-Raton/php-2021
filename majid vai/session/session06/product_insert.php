<?php
    include 'header.php';
?>

   
    <div method="POST" class="ptable" style="width:70%; float:right; margin-top:100px;">
    
                <table align="center">
                    <tr>
                        <th><label for="">Product Name:</label></th>
                        <td><input type="text" name="pname"></td>
                    </tr>
                    <tr>
                        <th><label for="">Product Description:</label></th>
                        <td><input type="text" name="pdescription"></td>
                    </tr>
                    <tr>
                        <th><label for="">Product Price:</label></th>
                        <td><input type="text" name="pprice"></td>
                    </tr>
                    <tr>
                        <th><label for="">Discount:</label></th>
                        <td><input type="text" name="pdiscount"></td>
                    </tr>
                    <tr>
                        <th><label for="">Picture:</label></th>
                        <td><input type="file" name="pic"></td>
                    </tr>
                    <tr>
                        
                        <td><input type="submit" name="save" value="Save Data"></td>
                    </tr>
                </table>
    </div>
