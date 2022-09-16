<?php
session_start();
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
                <form action="code.php" method="POST">
            <div class="form-group mb-3">
                <label for="">First Name</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Last Name</label>
                <input type="text" name="last_name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email Address</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Phone Number</label>
                <input type="number" name="phone" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button type="submit" name="save_contact" class="btn btn-primary"> Save contact</button>
            </div>

        </form>
        
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>



