<!DOCTYPE HTML>
<html>
<head>
<title>My circle</title>
</head>
<body>
<?php
class MyCircle {
  // Properties
  private $radius=5;
  

  // Methods
 public function __constructor($radius)
    {
    $this->radius = $radius;
    }
public function __destructor() 
    {
      "destructor";
    }
 public function getRadius()
     {
        return $this->radius;
     }
public function setRadius($radius)
     {
        $this->radius = $radius;
     }
public function getArea()  
{
    return $this->radius*$this->radius*pi();
}   

  }
  ?>
  <?php
  $theArea=new MyCircle(5);
  echo "Radius ".$theArea->getRadius();
  echo "<br>";
  echo "Area is".$theArea->getArea();
  echo "<br>";
 

?>
</body>
</html>