<?php
    require("dbconnection.php");
    require("dao.php");

    $d=new dao();
    extract($_GET);
    session_start();
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1><?php
    //echo $id;
    //exit();
    $q=$d->select("register","id='$id'");
    $data = mysqli_fetch_array($q);
    
    ?>

    <form action="controller.php" method="POST" enctype="multiupart/form-data">
         
    <table>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <tr><td>Name:</td><td><input type="text" name="tname" value="<?php echo $data['name'];?>"></td></tr>
        <tr><td>Email:</td><td><input type="email" name="tmail" value="<?php echo $data['email'];?>"></td></tr>
        <tr><td>Phone.no:</td><td><input type="number" name="tno" value="<?php echo $data['phone'];?>"><td></td>
        <tr><td>Gender:</td><td><input type="radio" name="tgen" value="Male">Male<input type="radio" name="tgen" value="Female">Female</td></tr>
        
        <tr><td>Address:</td><td><textarea name="tadd" cols="20" value=""><?php echo trim($data['address']);?></textarea></td></tr>
        <tr><td>Country:</td><td><select name="tcon">
            <option value="<?php echo $data['country'];?>"><?php echo $data['country'];?></option>
            <option name="india">India</option>
            <option name="USA">USA</option>
            <option name="Austrelia">Austrelia</option>
            <option name="Canada">Canada</option>
        </select></td></tr>
        <tr><td>interest:</td><td>  <?php $chk=$data['interest'];
                      $in=explode(",",$chk);
                ?>
                <input <?php if(in_array("cricket",$in)){echo "checked";}?> type="checkbox" name="in[]" value="cricket">cricket
                <input <?php if(in_array("comp",$in)){echo "checked";}?> type="checkbox" name="in[]" value="comp">comp
                <input <?php if(in_array("onetwothree",$in)){echo "checked";}?> type="checkbox" name="in[]" value="onetwothree">onetwothree</td></tr>
        <tr><td><input type="submit" name="btnUpdate" value="submit"></td><td><input type="reset" name="reset" value="reset"></td><td><a href="Database_view.php">Go to database</td></tr>
</table>
    </form> 

</body>
</html>