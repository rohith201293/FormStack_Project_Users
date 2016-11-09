<?php

class PageController{

  public   function getShowHomePage(){
    include(__DIR__  .  "/../views/register.php");

   }
  public   function getShowRegisterPage(){
    include(__DIR__  .  "/../views/register.php");
      }
    public   function postShowRegisterPage(){
      //  include(__DIR__  .  "/../views/home.php");
      echo   "posted";
        }

       public function  getTestDB(){
          //$user =   users::find(0);
         //echo "its o";
        $name = "";
         try{
$conn = new  PDO("mysql:host= 127.0.0.1 dbname=my_app","root","secret");
echo  "connects";
    }
    catch(PDOExecption  $pe)
  {
    die("connectionError");
  }
/*
  $sql=  "select  *  from  hello";
  $stmt =  $conn->prepare($sql);
  $stmt->execute();
  $rows  =  $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach($rows as $row)
  {
    $name  =   $row['first_name'];
  }
  echo  $name;
      //  echo   $user->first_name;

*/
echo  "connects";
        }

}
