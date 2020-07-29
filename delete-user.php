<?php
//Contact US
               
require 'crud/databaseconfig.php';
    
    if(isset($_POST["delete"])){
        $id = $_POST['id'];
       
        $sql = "DELETE FROM users WHERE id =:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $delete = $stmt->execute();
         header('Location:admin.php');
        exit;
    }
   
?>

<h1>Delete a User by ID</h1>
<form id="form" action="delete-user.php" method="post">
    <input type="text" id="id" name="id" placeholder="put the user id"><br>
    <button type="submit" name="delete">Delete</button>
</form>

<?php
   
    $query = $conn->query('SELECT id , username FROM users');
    $users = $query->fetchAll();
?>
<table class="demo" border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>
    <?php foreach($users as $user):?>
    <tr>
        <td><?php echo $user['id'];?></td>
        <td><?php echo $user['username'];?></td>
    </tr>
    <?php endforeach;?>