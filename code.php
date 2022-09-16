<?php
session_start();
include('dbcon.php');

 if (isset($_POST['delete_btn']))
 {
    print_r($_POST['delete_btn']);
    $del_id=$_POST['delete_btn'];
    $ref_table='contacts/'.$del_id;
    $delete=$database->getReference($ref_table)->remove();
    if ($delete) {
    $_SESSION['status']="Contact Deleted Sucessfully";
    header('Location: index.php');
  }
  else
  {
    $_SESSION['status']="Contact Not Delete";
    header('Location: index.php');
  }
 }





 if (isset($_POST['update_contact'])) {
     $key=$_POST['key'];
     $f_name=$_POST['f_name'];
      $l_name=$_POST['l_name'];
       $email=$_POST['email'];
        $phone=$_POST['phone'];


   $updateData = [
                 'fname'=>$f_name,
                 'lname'=>$l_name,
                 'email'=>$email,
                 'phone'=>$phone
             ];
             $ref_table='contacts/'.$key;
 $update=$database->getReference($ref_table)->update($updateData);
   if ($update) {
    $_SESSION['status']="Contact Updated Sucessfully";
    header('Location: index.php');
  }
  else
  {
    $_SESSION['status']="Contact Not update";
    header('Location: index.php');
  }



}

if(isset($_POST['save_contact']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];

    $postData = [
'fname'=>$first_name,
'lname'=>$last_name,
'email'=>$Email,
'phone'=>$Phone,

];
$ref_table="contacts";
$postRef_result = $database->getReference($ref_table)->push($postData);
if($postRef_result)
{
    $_SESSION['status']='contact added Successfully';
    header('location:index.php');
}
else
{
    $_SESSION['status']='contact not Added';
    header('location:index.php');
}

}

?>