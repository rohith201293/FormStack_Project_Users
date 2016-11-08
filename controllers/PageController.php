<?php

class PageController{

  public   function getShowHomePage(){
    include(__DIR__  .  "/../views/home.php");

   }
  public   function getShowRegisterPage(){
    include(__DIR__  .  "/../views/register.php");
      }
    public   function postShowRegisterPage(){
        //include(__DIR__  .  "/../views/doRegister.php");
      echo   "posted";
        }

}
