<?php

include('includes/header.php');


?>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <?php

            if(isset($_SESSION['status']))
            {
                echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                unset($_SESSION['status']);
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>
                        PHP Firebase crud - Realtime Database
                        <a href="add-contact.php" class="btn btn-primary float-end">Add Contacts</a>
            
                    </h4>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>sl no.</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>phone no</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('dbcon.php');
                        $ref_table='contacts';
                        $fetchdata= $database->getReference($ref_table)->getValue();
                        if($fetchdata>0)
                       
                        {
                            $i=0;
                             foreach ($fetchdata as $key => $row)
{
                                ?>
                            <tr>
                                <td><?=++$i;?></td>
                                <td><?=$row['fname'];?></td>
                                <td><?=$row['lname'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['phone'];?></td>
                                <td>
                                    <a href="editcontact.php?id=<?= $key?>" class="btn btn-primary btn-sm">Edit</a>

                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                       <button type="submit" class="btn btn-primary btn-sm" value="<?=$key?>" name="delete_btn">Delete</button> 
                                    </form>
                                   
                                </td>
                            </tr>
                                <?php
}
                        }
                        else
                        {
                                ?>
                                <tr>
                                    <td colspan="7">NO record found</td>
                                </tr>
                                <?php
                        }
                        ?>
                       
                    </tbody>
                </table>
              

            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');

?>



