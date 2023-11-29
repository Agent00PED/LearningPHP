<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>
<body>
    <?php
            #ดอลลาร์ไซน์ หรือ $ ตามด้วยตัวแปรที่ต้องการ เพื่อกำหนดตัวแปร
            #การใช้ตัวแปรในหนึ่งการดำเนินการ
        $color = "red";
        $Color = "blue";
            /* การใช้ตัวแปรมี 2 วิธี
                1.echo "(ข้อความ)" . $(ตัวแปร) .;
                2.echo "(ข้อความ) $(ตัวแปร)"; 
            */
        echo "My car is " . $color . "<br>";
        echo "My car is $color <br>";
        echo "My house is " . $Color . "<br>";
        echo "My house is $Color <br>";
        

            #การใช้ตัวแปรหลายตัวแปรในหนึ่งการดำเนินการ
        $name = "MasterJK";
        $age = "17";
        $weight = "55.5";
        echo "My name is $name age $age and weight $weight <br>";

            #การใช้ local scope กำหนดตัวแปรแบบ local
            #การกำหนดตัวแปรแบบ local ต้องกำหนดตัวแปรภายในฟังก์ชันเท่านั้น
        function myfunc() {
            $x = 10;
            echo "Local output $x";
            echo "<br>";
        }

            #การใช้ global scope กำหนดตัวแปรแบบ global
        $x = "5"; // global scope 
        myfunc();
        echo "Global output $x <br>";

            #การนำ global scope มาใช้ภายใน function
            #ตัวอย่างการใช้งาน บวกลบเลข
        $a = 5;
        $b = 10;
        $c = $a + $b;
        $d = $a - $b;
        function test() {
            global $a, $b ,$c ,$d;
            echo "$c <br>";
            echo "$d <br>";
            }
        test();

        $txt1 = "Learn PHP";
        $txt2 = "Text.exe";
            #การใช้คำสั่ง print ใน php
        echo "$txt1 $txt2 <br>";
            #การใช้ print ต้องใช้ . " " . เป็นการเพิ่มช่องว่างระหว่างข้อความ หรือใช้เพื่อเชื่อมข้อความแทนการวรรคปกติหรือเชื่อมข้อความปกติ
        print $txt1 . " " . $txt2;
        echo "<br>";

        /* ชนิดของข้อมูล Data Types หรือชนิดข้อมูลที่สามารถใช้ได้ใน php
            PHP Data Types
            - String = "Hello, World" 
            - Integer = 12345
            - Float = 3.14
            - Boolean = true, flase
            - Array = array("BMW", "Ford", "Benz");
            - Object
            - NULL
        */
        
        #ตัวอย่างการใช้งาน พร้อมการระบุตัวแปร
            /*การกำหนดตัวแปรทั่วไปโดยมีความหมายดังนี้
            - string หรือ text = ชนิดข้อมูลที่บ่งบอกข้อความ
            - int = ชนิดข้อมูลที่บ่งบอกชุดตัวเลข
            - float = ชนิดข้อมูลที่บ่งบอกชุดตัวเลขที่มีค่าทศนิยมร่วม
            - boolean = ชนิดข้อมูลตัวแปรที่มีแค่สองค่าคือ true กับ flase
            - array = ชนิดข้อมูลที่เก็บได้หลายค่า เช่น 
                    - การเก็บข้อความหลายข้อความในรูปแบบ array
                    - การเก็บข้อมูลชุดตัวเลขในรูปแบบ array
                        $array = array("BMW", "Ford", "Benz");
                        $array = array(1,2,3,4,5);
            */
        $text = "Hello World";
        $int = 12345;
        $float = 3.14;
        $boolean = true;
        $array = array("BMW", "Ford", "Benz");
            #การใช้คำสั่ง var_dump(ตัวแปร); เช็ค data type
        var_dump($text);
        echo "<br>";
        var_dump($int);
        echo "<br>";
        var_dump($float);
        echo "<br>";
        var_dump($boolean);
        echo "<br>";
        var_dump($array);
        echo "<br>";

            #การกำหนดตัวแปรให้เป็น null
        $text2 = "Hello PHP";
        $text2 = null;
        var_dump($text2);

            #ชนิดข้อมูลแบบ Object
            #ฟังก์ชันในคลาสถูกเรียกว่า method
        class Car {
            function Car() {
                $this->model = "BMW";
            }
        }
        #create and object
        $myCar = new Car();

        #show object properties
        echo "$myCar->model";

    ?>
</body>
</html>