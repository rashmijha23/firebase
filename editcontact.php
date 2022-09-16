<?php
include('includes/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                       Add Contacts
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    include('dbcon.php');
                    if(isset($_GET['id']))
                    {
                        $key_child=$_GET['id'];
                        $ref_table='contacts';
                        $getdata=$database->getReference($ref_table)->getChild($key_child)->getValue();
                     if ($getdata>0) 
                        {
                            ?>
                             <form action="code.php" method="POST">
                                <input type="hidden" name="key" value="<?=$key_child;?>">
                        <div class="form-group mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="<?=$getdata['fname']?>" name="f_name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="<?=$getdata['lname']?>" name="l_name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?=$getdata['email']?>" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone No</label>
                            <input type="number" class="form-control" value="<?=$getdata['phone']?>" name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="update_contact" class="btn btn-primary">Update Contact</button>
                        </div>
                    </form>
                            <?php
                        }
                        else
                        {
                            $_SESSION['status']="Invaild Id";
                            header('Location:index.php');
                            exit();
                        }
                    }
                    
                    else
                    {

                            $_SESSION['status']="Not Found";
                            header('Location:index.php');
                            exit();
                    }
                    ?>

                
        
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>



