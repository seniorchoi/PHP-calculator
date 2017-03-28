<?php
if(isset($_POST["num1"]) && isset($_POST["operand"]) && isset($_POST["num2"])){
    if (($_POST["operand"] == "/") && ($_POST["num2"] == 0)){
        echo "Division by 0 is not allowed.";
    }

    if ($_POST["operand"] == "+"){
        echo $_POST["num1"] + $_POST["num2"];
    }else if ($_POST["operand"] == "-"){
        echo $_POST["num1"] - $_POST["num2"];
    }else if ($_POST["operand"] == "*"){
        echo $_POST["num1"] * $_POST["num2"];
    }else if ($_POST["operand"] == "/"){
        echo $_POST["num1"] / $_POST["num2"];
    }
}else{
    echo "Enter two numbers!";
}
