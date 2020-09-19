<?php
 $from=$_POST['from'];
 $to=$_POST['to'];
 $amount=$_POST['amount'];
 
 $con=mysqli_connect('localhost','id14907308_root','Kiranadmin@47');
 mysqli_select_db($con,'id14907308_tsf_db');
 
 $p="update credit set credit=credit-$amount where name='$from'";
 mysqli_query($con,$p);
 $q="update credit set credit=credit+$amount where name='$to'";
 mysqli_query($con,$q);

 $r="insert into history (payer,payee,amt) values('$from','$to',$amount)";
 mysqli_query($con,$r);

 $s="select * from credit";
 $result=mysqli_query($con,$s);
 $num=mysqli_num_rows($result);

 mysqli_close($con);
 ?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfer Updated</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="viewStyle.css" />
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

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
	 for($i=1;$i<=$num;$i++)
	 {
		 $row=mysqli_fetch_array($result);
	?>
	<tr>
	 <td><?php echo $row['name']; ?></td>
	 <td><?php echo $row['email']; ?></td>
	 <td><?php echo $row['contact']; ?></td>
	 <td><?php echo $row['credit']; ?></td>
	</tr>
	<?php
	 }
	?>
  </table>

    </section>


</body>

</html>
