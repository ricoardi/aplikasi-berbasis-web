<?php
namespace myAreax;

class Fruitsx {
  public function myValuex(){
    return Fruitsx::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>
<h5>__CLASS__</h5>
<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
<hr>
<h5>__DIR__</h5>
<?php
echo __DIR__;
?>
<hr>
<h5>__FILE__</h5>
<?php
echo __FILE__;
?>
<hr>
<h5>__FUNCTION__</h5>
<?php
function myValue2(){
  return __FUNCTION__;
}
echo myValue2();
?>
<hr>
<h5>__LINE__</h5>
<?php
echo __LINE__;
?>
<hr>
<h5>__METHOD__</h5>
<?php
class Fruits2 {
  public function myValue3(){
    return __METHOD__;
  }
}
$kiwi = new Fruits2();
echo $kiwi->myValue3();
?>
<hr>
<h5>__NAMESPACE__</h5>
 <?php
namespace myArea;

use myAreax\Fruitsx;

function myValue3(){
  return __NAMESPACE__;
}
?>
<?php
echo myValue3();
?>
<hr>
<h5>__TRAIT__</h5>
<?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
<hr>
<h5>ClassName::class</h5>

<?php
$kiwix = new Fruitsx();
echo $kiwix->myValuex();
?>
</body>
</html>
