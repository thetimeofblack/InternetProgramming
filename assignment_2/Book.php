<?php
/**
 * Created by PhpStorm.
 * User: Heyining
 * Date: 2018/12/9
 * Time: 13:07
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

    $bookobject = new book();
    $bookobject->setBookName($_POST['bookname']);
    $bookobject->setAuthor($_POST['author']);
    $bookobject->setRate($_POST['rate']);
    $bookobject->setTitle($_POST['title']);
    $bookobject->setStatus($_POST['status']);
    $bookobject->setComment($_POST['comment']);

    echo $bookobject->toString() ;
    $db = new DBConnection($bookobject);
    $db->saveBook();
    $db->showBookList();



?>


