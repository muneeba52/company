<?php  
   session_start();
    
  if(!isset($_SESSION['auth']))
      header('location:403.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
</head>
<body>
 <a href="logout.php">Logout</a>
    <h1>Change Password Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos aliquam harum provident, quo tenetur necessitatibus natus minus vitae. Voluptatibus possimus, minima, cupiditate facere illum accusamus dicta adipisci officiis suscipit, nulla quis molestiae tempora beatae modi molestias aspernatur tenetur quos dolores illo explicabo odit! Asperiores voluptate dignissimos, quae aut sed debitis iusto et, possimus quia, aliquam, excepturi placeat deserunt sit reprehenderit laborum qui. Tempore maiores incidunt voluptas quas aliquid vel repellat fugiat natus libero, mollitia, soluta dolores hic ut suscipit molestiae ipsa voluptate fuga. Possimus soluta distinctio sint dolor, autem labore pariatur ipsam error assumenda beatae tempore. Aperiam facere nesciunt veritatis?</p>
</body>
</html>