<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form objects</title>
</head>
<body>

    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="">Name: </label> <input type="text" name="name" id="">
        <label for="">Surname: </label> <input type="text" name="surname" id="">
        <label for="">Date of birth: </label> <input type="date" name="" id="">
        <input type="submit" value="Send">
        <input type="reset" value="Clear">
    </form>

    <?php
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $birth = $_POST["date"];

        $person = new Person($name, $surname, $birth);

        class Person{
            private $firstName;
            private $lastName;
            private $dateOfBirth;

            function __construct($firstName = 'John', $lastName = 'Doe', $dateOfBirth = '1959-01-01'){
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->dateOfBirth = $dateOfBirth;
            }

            function getDateOfBirth(){
                return $this->dateOfBirth;
            }
            
            public function setDateOfBirth($date){
                $this->dateOfBirth = $date;
            }

            public function fullName(){
                return "{$this->firstName} {$this->lastName}";
            }

            public function age(){
                $today = date('Y-m-d');
                $diff = strtotime($today) - strtotime($this->dateOfBirth);
                $years = floor($diff / (365*60*60*24));
                return $years;
            }
        }
    ?>

</body>
</html>