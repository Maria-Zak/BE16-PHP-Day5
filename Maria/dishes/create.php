
<?php
session_start();
require_once '../components/db_connect.php';

if (isset($_SESSION['user']) != "") {
  header( "Location: ../home.php");
  exit;
}

if (!isset ($_SESSION['adm']) && !isset($_SESSION['user'])) {
  header( "Location: ../index.php");
  exit;
}

// $suppliers = "";
// $result = mysqli_query($connect, "SELECT * FROM suppliers");

// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//   $suppliers .=
//       "<option value='{$row['supplierId']}'>{$row['sup_name']}</option>";
// }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <title>PHP CRUD  |  Add Product</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'>Add Product</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table'>
                   <tr>
                       <th>Name</th>
                       <td><input class='form-control' type="text" name="name"  placeholder="Product Name" /></td>
                   </tr>   
                   <tr>
                       <th>Price</th>
                       <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td><input class='form-control' type="text" name="description" /></td>
                   </tr>
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="file" name="image" /></td>
                   </tr>
                   <tr>
                       <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                       <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>