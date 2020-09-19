
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
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
	<form action="insertion.php" method="post">
   <table>
    <tr>
	 <th>Name</th>
	 <td><input type="text" name="name" required /></td>
	</tr>
	<tr>
	 <th>Email Id</th>
	 <td><input type="text" name="email" required /></td>
	</tr>
	<tr>
	 <th>Contact No</th>
	 <td><input type="text" name="contact" required /></td>
	</tr>
	<tr>
	 <th>Total Credit</th>
	 <td><input type="number" name="credit" required /></td>
	</tr>
	<tr>
	 <th></th>
	 <td colspan="2"><input type="submit" value="Insert" />
	 	 <input type="reset" /></td>
	</tr>
   </table>
  </form>
    </section>



    
</body>

</html>
