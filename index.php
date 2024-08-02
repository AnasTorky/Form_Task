<?php
$Firstname=null;
$Lastname=null;
$Nationalid=null;
$Address=null;
$Email=null;
$Phone=null;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Firstname= trim(addslashes($_POST['firstname']));
    $Lastname= trim(addslashes($_POST['lastname']));
    $Nationalid= trim(addslashes($_POST['nationalid']));
    $Address= trim(addslashes($_POST['address']));
    $Email= trim(addslashes($_POST['email']));
    $Phone= trim(addslashes($_POST['phone']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup Form</title>
        <style>
            .header{
                color: #684a4a;
                font-size: xx-large;
                text-align: center;
                font-family: 'Times New Roman';
                padding: 30px 0px;
                margin-left: 300px;
                margin-right: 300px;
            }
            .labels{
                font-size: x-large;   
            }
            input{
                height: 20px;
                padding: 3px;
                font-family: 'Times New Roman';
            }
            button{
                background-color: #e4e0cf;
                margin: 1px;
                border: 1px solid black;
                padding: 5px 12px;
                font-weight: 100;
                font-family: 'Times New Roman';
                font-size: large;
                margin-left: 48px;
            }
            .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 108vw;
            }
            form {
                width: 300px;
                padding: 20px;
            }
            th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #dddddd;
        }
  </style>
</head>
<body>
    <div class="header">
        Sign up form..
    </div>
    <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP SELF']?>">
            <label class="labels">First name</label><br>
            <input type="text" id="f_name" placeholder="First Name" name="firstname"><br><br>
            <label class="labels">Last name</label><br>
            <input type="text" id="l_name" placeholder="Last Name" name="lastname"><br><br>
            <label class="labels">National ID</label><br>
            <input type="text" id="l_name" placeholder="National ID" name="nationalid"><br><br>
            <label class="labels">Address</label><br>
            <input type="text" id="l_name" placeholder="Address" name="address"><br><br>
            <label class="labels">Email</label><br>
            <input type="text" id="Email" placeholder="Email" name="email"><br><br>
            <label class="labels">Phone number</label><br>
            <input type="text" id="num" placeholder="Phone number" name="phone"><br><br>
            <button name="Sign">Sign up</button>
        </form>
    </div>
    <?php
    if(isset($Firstname)&&isset($Lastname)&&isset($Nationalid)&&isset($Address)&&isset($Email)&&isset($Phone)){
        echo "<table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>National ID</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
                <tr>
                    <td>$Firstname</td>
                    <td>$Lastname</td>
                    <td>$Nationalid</td>
                    <td>$Address</td>
                    <td>$Email</td>
                    <td>$Phone</td>
                </tr>
        </table>"
    }
    ?>
</body>
</html>


