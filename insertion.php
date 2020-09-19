<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $credit=$_POST['credit'];
 
 $con=mysqli_connect('localhost','id14907308_root','Kiranadmin@47');
 mysqli_select_db($con,'id14907308_tsf_db');
 
 $q="insert into credit (name,email,contact,credit) values('$name','$email','$contact',$credit)";
 $status=mysqli_query($con,$q);
 mysqli_close($con);
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Creation</title>
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
    
    <p><?php if($status==1)
			  echo "Record inserted";
		   else
			  echo "Insertion Failed...User already exist or any field is blank!";
	  ?>
  </p>

    </section>


</body>

</html>
