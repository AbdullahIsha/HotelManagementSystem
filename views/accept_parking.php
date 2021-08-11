<?php
    require_once('../php/session_header.php');
    require_once("../services/managerService.php");

    if (isset($_GET['id'])) {
    $parking = getParkingByID($_GET['id']); 
  }else{
    header('location: order.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
 <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="empDetail.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
    <td>
    <ul>
      <li><a href="check_in_out.php"> Check IN/OUT </a></li>
      <li><a href="invoice.php"> Invoice Management </a></li>
      <li><a href="booking.php"> Bookings </a></li>
      <li><a href="order.php"> Order </a></li>
      <li><a href="cars.php"> Parking / Resurvations</a></li>
      <li><a href="complain.php"> Complains From Customer </a></li>
      <li><a href="manager_page.php">Home </a></li>
    </ul>
  </td>
  <td width="80%">
    <fieldset>
      <legend>Parking Accept</legend>
      <form action="../php/managerController.php" method="post">
        <table border="0" cellspacing="0" cellpadding="5" align="center" width="100%">
           <tr>
             <td width="30%">CheckIn Time</td>
             <td><?=$parking['checkIntime']?></td>
           </tr>
           <tr>
             <td width="30%">Customer Name</td>
             <td><?=$parking['customerName']?></td>
           </tr>
           <tr>
             <td width="30%">Customer ID</td>
             <td><?=$parking['customer_id']?></td>
           </tr>
           
           <tr>
           <td colspan="2"><hr></td>
           </tr>
           <tr>
             <td colspan="2" align="right">
              <input type="hidden" name="id" value="<?=$parking['id']?>">
              <input type="submit" name="AcceptParking" value="Confirm">
             </td>
           </tr>
          
        </table>

      </form>
    </fieldset>
  </td>
  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
</body>
</html>