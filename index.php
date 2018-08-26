<?php namespace home;?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php

        class User {

            public $name;
            public $pas;

            public function __construct($name, $pas) {
                $this->name = $name;
                $this->fam = $pas;
            }

            public function getInfo() {
                $inf = $this->name . " " . $this->fam;
                return $inf;
            }

        }

        class Moderator extends User {

            public $prava;
            private $Itis = 'moderator';

            public function __construct($name, $pas, $prava) {
                parent::__construct($name, $pas);
                $this->prava = $prava;
            }

            public function getInfo() {
                $inf = parent::getInfo();
                $inf .= " " . $this->prava . " " . $this->Itis;
                return $inf;
            }

        }

        $user1 = new Moderator("ivan", "12345", "True");
        echo $user1->getInfo();
        ?>





        <?php

        class MyClass {

            const CONST_VALUE = 'eeeeeee';

        }


        echo MyClass::CONST_VALUE;
        ?>


        <?php

        class Test {

            public static $NAME;

            public static function hello() {
                echo "<br><br> hello" . self::$NAME;
            }

        }

        test::$NAME = "<br> viktor";
        echo test::$NAME;
        Test::hello();
        ?>
        <br><br>
        <?php

        abstract class human {

            abstract public function hey();
        }

        class Sientist extends human {

            public function hey() {
                echo 'hello Sientist';
            }

        }

        $user12 = new Sientist;
        $user12->hey();
        ?>
        <br><br> 
        <?php

        interface firstInt {

            public function getName();
        }

        interface secondInt {

            public function getStatus();
        }

        class relize implements firstInt, secondInt {

            public $name = 'alex';
            public $status = 'admin';

            public function getName() {
                echo $this->name;
            }

            public function getStatus() {
                echo $this->status;
            }

        }

        $user31 = new relize;
        $user31->getName();
        $user31->getStatus();
        ?>
        <br><br>
<?php
class base{
    public function sayhello(){
        echo "hello";
}
}
trait world{
    public function sayhello2(){
        parent::sayhello();
        echo " world";
    }
}
class helloworld extends base{
    use world;
}
$says = new helloworld;
$says->sayHello2();

?>
        <br><br>
<?php
class addobj{
    public function __clone(){
        echo "cloned";
    }
}
$obj1=new addobj;
$obj2=clone $obj1;
?>
        
        <br>
        <br>
        <?php
        class testi{
            private $prava='users';
            public function __get($name){
                echo "popitka sozdan {$name} ";
            }
            public function __set($name, $val){
                echo "popitka ustanovlen {$name} to {$val}";
            }
        }
        $object = new testi();
        echo $object->prava;
        $object->prava='admins';
        ?>
    </body>
</html>
