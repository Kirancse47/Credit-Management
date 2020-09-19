<?php
 $con=mysqli_connect('localhost','id14907308_root','Kiranadmin@47');
 mysqli_select_db($con,'id14907308_tsf_db');
 $q="select * from credit where id=".$_POST["b"];
 $result=mysqli_query($con ,$q);
//  $row=mysqli_fetch_array($result);
//   mysqli_close($con)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="viewStyle.css" />
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<script type="text/javascript" language="javascript">
	function f1(){
		alert("Credit Transfer Succesfull...")
	}
 </script>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="tsflogo.png" >
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="insertForm.php">Create User</a></li>
            <li class="item"><a href="transferForm.php">View all User & Transfer</a></li>
            <li class="item"><a href="history.php">Transaction History</a></li>
            <li class="item"><a href="view.php">View</a></li>
        </ul>
    </nav>

    <section id="home">
	<h1>Credit Record Management</h1>
  <table id="view_table">
    <tr>
	 <th>Name</th>
	 <th>Email Id</th>
	 <th>Contact No</th>
	 <th> Total Credit</th>
	</tr>
    <?php
	  $row=mysqli_fetch_array($result);
	?>
	<tr>
	 <td><?php echo $row['name']; ?></td>
	 <td><?php echo $row['email']; ?></td>
	 <td><?php echo $row['contact']; ?></td>
	 <td><?php echo $row['credit']; ?></td>
	</tr>
  </table>
  <form action="transferUpdate.php" method="post">
	<table>
	<tr>
	 <td><input type="hidden" name="from" value="<?php echo $row['name']; ?>"/></td>
	</tr>
	<tr>
	 <th>Transfer To</th>
	 <td><select name="to" id="to">
	 <?php
					$txt = $row['name'];
                    $query = "SELECT * FROM credit where name!='".$txt."'";
                    $result = mysqli_query($con,$query);
	 ?>
	 <?php while($row1=mysqli_fetch_array($result)):;?>
	 <option name="to"><?php echo $row1[1];?></option>
	 <?php endwhile;?>
	 </select></td>
	</tr>

	 <tr>
	 <th>Transfer amount</th>
	 <td><input type="number" name="amount" id="amt" required /></td>
	</tr>

	<tr>
	 <th></th>
	 <td><input type="submit" onclick="f1()" value="Transfer" /></td>
	</tr>

	</table>
  </form>
    </section>


</body>

</html>
