<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>

  <?php
  $Name = "Jimmy";
  $Age = 10;
  $Age += 12;
  $gpa = 32.98723;
  $isMale = true;
  $alphabet = array("aaa", "bbb", "ccc", "ddd");
  $alphabet[3] = "zzz";
  $grades = array("jim" => "F", "may" => "A");
  $grades["jim"] = "A+";
  echo "<h1> Hello World </h1>";
  echo "<hr>";
  echo "<p> this is my site </p>";
  echo " My name is $Name <br>";
  echo "Am $Age years old <br>";
  echo "gpa $gpa <br>";
  echo "is Male $isMale";
  echo "<br>";
  echo $Name;
  echo "<br>";
  echo strtolower($Name);
  echo "<br>";
  echo strtoupper($Name);
  echo "<br>";
  echo strlen($Name);
  echo "<br>";
  echo $Name[0];
  echo "<br>";
  echo str_replace("Jimm", "ma", $Name);
  echo "<br>";
  echo substr($Name, 0, 3);
  echo "<br>";
  echo (5 + 5) * 20;
  echo "<br>";
  echo abs(-100);
  echo "<br>";
  echo pow(2, 3);
  echo "<br>";
  echo sqrt(144);
  echo "<br>";
  echo max(2, 10);
  echo "<br>";
  echo $alphabet[3];
  echo "<br>";
  echo $grades["jim"];
  function sayfunction($num)
  {
    echo "<br>";
    echo "function $num";
  }
  sayfunction(1);
  sayfunction(2);

  function returnnum($num)
  {
    echo "<br>";
    return $num * 2;
  }
  echo returnnum(2);
  echo "<br>";
  $isMale = false;
  if ($isMale) {
    echo "you are male";
  } else {
    echo "you are feemale";
  }
  echo "<br>";

  $index = 1;
  while ($index <= 5) {
    echo "$index <br>";
    $index++;
  }
  echo "<br>";

  for ($i = 1; $i <= 5; $i++) {
    echo "$i <br>";
  }
  include "html.html";

  $jim = "php1";
  $may = "php2";
  include "php.php";


  class Book {
    var $title;
    var $pages;
    var $number;

    function __construct($num)
    {
      echo "book $num created <br>" ;
    }
    
  }

  $book1 = new Book(1);
  $book1->title = "Harry potter";

  echo "title : $book1->title";

  

  ?>



  </dody>

</html>