<?php

class PageController
{
  /**
   * [This  method shows up  the home].
   * @return [html].
   */
    public function getShowHomePage()
    {
        include(__DIR__  .  "/../views/home.php");
    }
    /**
     * [This  page loads up  "/register" which  provides user  for inserting values]
     * @return [html]
     */
    public function getShowRegisterPage()
    {
        include(__DIR__  .  "/../views/register.php");
    }
    /**
     * [This method shows a comfirmation to user. In background connects to databse  and  insert values into  table]
     */
    public function InsertValues()
    {
        //include(__DIR__  .  "/../views/doRegister.php");
       $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Email= $_REQUEST['Email'];
        $password = $_REQUEST['password'];

        echo "Hello \t".   $first_name .  $last_name. "\t Sucessfully  inserted your  details!!!";
/*
       try{
           $conn = new  PDO("mysql:host= 127.0.0.1 dbname=my_app","root","secret");
           $sql=  "insert into users(first_name, last_name,Email,password)  values ('$first_name','$last_name', '$Email','$password')";
           $stmt =  $conn->prepare($sql);
           $stmt->execute();

                }
              catch(PDOExecption  $pe)
               {
                  die("connectionError".pe->getMessage());
               }


*/
    }
    /**
     * [This method shows a comfirmation to user. In background connects to databse  and  updates values into  table]]
     */
    public function UpdateValues()
    {
        //include(__DIR__  .  "/../views/doRegister.php");
       $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Email= $_REQUEST['Email'];
        $password = $_REQUEST['password'];

      echo "<h1>  Sorry  Cannot  Dispaly  details due  to database  connectivity  Issue.</h1>";
/*
       try{
           $conn = new  PDO("mysql:host= 127.0.0.1 dbname=my_app","root","secret");
           $sql=  "update  users Set last_name='$last_name',Email='$Email',password='$password' where first_name='$first_name';
           $stmt =  $conn->prepare($sql);
           $stmt->execute();

                }
              catch(PDOExecption  $pe)
               {
                  die("connectionError".pe->getMessage());
               }


*/

    }
    /**
     * [This method shows a comfirmation to user. In background connects to databse  and  Deletes values into  table]
     */

    public function DeleteValues()
    {
        //include(__DIR__  .  "/../views/doRegister.php");
       $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Email= $_REQUEST['Email'];
        $password = $_REQUEST['password'];

      echo "<h1>  Sorry  Cannot  Dispaly  details due  to database  connectivity  Issue.</h1>";
  /*
       try{
           $conn = new  PDO("mysql:host= 127.0.0.1 dbname=my_app","root","secret");
           $sql=  " delete (first_name, last_name,Email,password)  from  users where ="last_name= $first_name";
           $stmt =  $conn->prepare($sql);
           $stmt->execute();

                }
              catch(PDOExecption  $pe)
               {
                  die("connectionError".pe->getMessage());
               }


  */

      }

/**
 * [ShowDetails: This method shows the list of rows  and cloumns  from the  database]
 */
    public function ShowDetails()
    {
        echo "<h1>  Sorry  Cannot  Dispaly  details due  to database  connectivity  Issue.</h1>";


          // tried using Eloquent. but  due to database  couldnot use it.
         /*
          $user =   users::find(1);
         echo   $user->first_name;

      // hard coded using php connections.

       $first_name, $last_name,$ Email, $password;
         try{

        $conn = new  PDO("mysql:host= 127.0.0.1 dbname=my_app","root","secret");
         $sql=  "select  *  from  users";
         $stmt =  $conn->prepare($sql);
         $stmt->execute();
        $rows  =  $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach($rows as $row)
          {
           $name  =   $row['first_name'];
            echo $first_name . $last_name;
           }


               }
         catch(PDOExecption  $pe)
             {
               die("connectionError".pe->getMessage());
            }

*/
    }
}
