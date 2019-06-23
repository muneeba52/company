<?php
   class User
   {
       private $name;
       private $username;
       private $password;
       private $cpassword;
       private $email;
       
       public $Error=false;
     
       function isAuthentic($connection){
           $username=$this->username;
           $password=$this->password;
           
           $query="Select * from users where username='$username' and password='$password'";
           
           $result=mysqli_query($connection,$query);
           
           if(mysqli_num_rows($result)>0)
               return true;
           return false; 
       }
       
       function SaveToDb($connection){
           $name=$this->name;
           $username=$this->username;
           $password=$this->password;
           $email=$this->email;
           
           $query="INSERT INTO users VALUES(NULL,'$name','$username','$password','$email')";
           
           mysqli_query($connection,$query);
           echo "USER REGISTERED SUCCESSFULLY";
       }
       
       function setName($name){
           if(!empty($name)){
              $this->name=$name; 
           }else{
               echo "<span class='error'>* Please write a valid name</span>";
               $this->Error=true;
           }
       }
       

       
       function setUsername($username){
           if(!empty($username)){
               $this->username=$username;
           }else{
               echo "<span class='error'>* Please write a valid username</span>";
                $this->Error=true;
           }
       }
     
       
       function setPassword($password){
           if(!empty($password)){
               $this->password=$password;
           }else{
               echo "<span class='error'>* Please write a valid password</span>";
                $this->Error=true;
           }
       }
     
       
       function setCPassword($cpassword){
           if(empty($cpassword)){
                echo "<span class='error'>* Please confirm your password</span>";
                $this->Error=true;
           }else if($cpassword!=$this->password){
               echo "<span class='error'>* Please confirm your password</span>";
                $this->Error=true;
           }
           else{
               $this->cpassword=$cpassword;
           }
       }
       
       function setEmail($email){
           if(empty($email)){
               echo "<span class='error'>* Please write your email</span>";
                $this->Error=true;
           }
            else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "<span class='error'>* Invalid Email Format</span>";
                 $this->Error=true;
           }else{
               $this->email=$email;
           }
       }
       

      
   }

?>