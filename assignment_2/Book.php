<?php
/**
 * Created by PhpStorm.
 * User: Heyining
 * Date: 2018/12/9
 * Time: 13:07
 */
/*
 * book class for encapsulation
 */
    class book{
           private $bookname;
           private $title;
           private $author;
           private $status ;
           private $rate ;
           private $comment;
           function __construct()
           {
               echo "create book object successfully<br/>";

           }

           public function getBookName(){
               return $this->bookname;
           }
           public function getTitle(){
               return $this->title;
           }

           public function getAuthor(){
               return $this->author;
           }

           public function getStatus()
           {
               return $this->status;
           }

           public function getComment(){
               return $this->comment ;
           }

           public function getRate(){
               return $this->rate ;
           }

           public function setBookName($bookname){
               $this->bookname = $bookname;
           }
           public function setTitle($title){
               $this->title = $title;
           }
           public function setAuthor($author){
               $this->author = $author;
           }
           public function setStatus($status){
               $this->status = $status;
           }

           public function setComment($comment){
               $this->comment = $comment;
           }

           public function setRate($rate){
               $this->rate = $rate ;
           }

           public function toString(){
               $string = "BookName" .$this->bookname."<br/>".
                        "Title:"    .$this->title."<br/>".
                        "Author:"   .$this->author."<br/>".
                        "Status:"   .$this->status."<br/>".
                        "Rate:"     .$this->rate . "<br/>".
                        "Comment:"  .$this->comment. "<br/>";
               return $string ;

           }
    }

    include "BookMySql.php";
/*
 *  prevent input from mistake also for security
 */
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    function validation(){
        $bookobject = new book();
        $rightnumber = 0 ;
        $errormasg = "";
        if($_SERVER["REQUEST_METHOD"]=="POST") {
                if (empty($_POST['bookname'])) {
                    $errormasg = $errormasg."Name is required.<br/> ";

            }else{
                    $name = $_POST['bookname'];
                    $name = test_input($name);
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $errormasg =$errormasg. "Only letters and white space allowed";
                    }else{
                        $bookobject->setBookName($name);
                        $rightnumber = $rightnumber + 1;
                    }

            }

            if (empty($_POST['author'])) {
                $errormasg = $errormasg."Author is required.<br/> ";

            }else{
                $author = $_POST['author'];
                $author = test_input($author);
                if (!preg_match("/^[a-zA-Z ]*$/",$author)) {
                    $errormasg =$errormasg. "Only letters and white space allowed";
                }else{
                    $bookobject->setAuthor($author);
                    $rightnumber = $rightnumber + 1;
                }
            }

            if (empty($_POST['rate'])) {
                $errormasg = $errormasg."Rate is required.<br/> ";
            }else {
                $rate = $_POST['rate'];
                $rate = test_input($rate);
                if (!preg_match('/^[0-9]*$/', $rate)) {
                    $errormasg = $errormasg . "Only number allowed for rate<br/>";
                } else {
                    $bookobject->setRate($rate);
                    $rightnumber = $rightnumber + 1;
                }
            }

            if (empty($_POST['title'])) {
                $errormasg = $errormasg."Title is required.<br/> ";

            }else{
                $title = $_POST['title'];
                $title = test_input($title);
                if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
                    $errormasg =$errormasg. "Only letters and white space allowed";
                }else{
                    $bookobject->setTitle($title);
                    $rightnumber = $rightnumber + 1;
                }
            }

            if (empty($_POST['status'])) {
                $errormasg = $errormasg."Status is required.<br/> ";
            }else{
                $bookobject->setStatus($_POST['status']);
                $rightnumber = $rightnumber + 1;
            }

            if (empty($_POST['comment'])) {
                $errormasg = $errormasg."Comment is required.<br/> ";

            }else{
                $bookobject->setComment($_POST['comment']);
                $rightnumber = $rightnumber + 1;

            }

            if ($rightnumber > 5) {
                $db = new DBConnection();
                $db->giveBook($bookobject);
                $db->saveBook();
                echo "<strong>insert book information successfully</strong><br/>";

            } else {
                echo "The book is ".$bookobject->toString() . "<br/>";
                echo "<strong>Something Wrong with your Input</strong><br/>";
                echo "The error is ".$errormasg."<br/>";
            }
        }else{
                echo "<strong>Wrong user</strong><br/>";
        }
        return null ;
    }




    validation();
//
//    echo $bookobject->toString() ;

// //   $db->showBookList();



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .center{
            text-align : center;
        }
        strong{
            text-align : center;
        }
    </style>
</head>
<body>
<form>
<input type="submit" action="Index.html" value="back"></input>
</form>
</body>
</html>


