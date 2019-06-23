<?php  
   session_start();
    
  if(!isset($_SESSION['auth']))
      header('location:403.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PROFILE PAGE</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    
    <h1>WELCOME TO THE PROFILE PAGE</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus assumenda veritatis facilis sunt ullam dolore esse maiores delectus? Perspiciatis numquam tempore, consectetur totam voluptas recusandae ex id sequi, eum provident error minima quam delectus aperiam expedita pariatur quis aspernatur impedit! Eius quaerat consectetur quod soluta, nobis placeat dicta enim, voluptates consequuntur quam nihil atque ipsam, eligendi cum iusto voluptate mollitia, quia qui eos hic vel natus iste dolorum? Incidunt repudiandae molestiae, tempora, obcaecati deserunt eum blanditiis voluptatem consequuntur ea fugit rerum ut accusantium, illum dolores animi enim inventore! Molestias necessitatibus, molestiae aliquid tempora fugit cum, repellendus quasi. Sequi, totam similique!</p>
</body>
</html>