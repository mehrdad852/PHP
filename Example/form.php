<?php function validad($data){

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;


}

?>



<?php
if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $firstName = validad($_POST['firstName']);
    $lastName = validad($_POST['lastName']);
    $birthday = validad($_POST['birthday']);
    echo "$firstName : $lastName : $birthday";
    
}

?>




<html>

<head> 
    <title> PHP </title>
</head>
<body>

   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
    

<input type="text" name="firstName"  placeholder="FirstName">
<input type="text" name="lastName"  placeholder ="lastName">
<select name="birthday" >
<?php
    for($i=1340;$i<1402;$i++):
     ?>
    <option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
endfor;
?>
</select>
<input type="submit" value="Send" name="btn"> 
 </form>
</body>


</html>
