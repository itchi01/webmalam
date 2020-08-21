<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    //metode 2 switch
        $username="operator";
        $pass="111";

        switch ($username=="admin" && $pass=="123"){
            case"admin" && 123:
                echo"selamat datang admin";
                break;
        }

        switch ($username=="operator" && $pass=="111"){
            case"operator" && 111:
                echo"selamat datang operator";
                break;
        }*/
    ?>  

    <?php
    //metode array
        $username1="iswandi1";
        $pass1="operator1";

        switch ([$username1, $pass1]){
            case["admin1","admin1"]:
                echo"selamat datang admin1";
                break;

            case["iswandi1", "operator1"]:
                echo"selamat datang iswandi1";
                break;

            default:
                echo"username atau password anda salah";
                break;
        }
    ?>
</body>
</html>