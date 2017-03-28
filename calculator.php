<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    
</head>
<body>
    <h1>Calculator</h1>
<!--printing out the buttons-->
        <button id="1" value="1" class="button">1</button>
        <button id="2" value="2" class="button">2</button>
        <button id="3" value="3" class="button">3</button><br>
        <button id="4" value="4" class="button">4</button>
        <button id="5" value="5" class="button">5</button>
        <button id="6" value="6" class="button">6</button><br>
        <button id="7" value="7" class="button">7</button>
        <button id="8" value="8" class="button">8</button>
        <button id="9" value="9" class="button">9</button><br>
        <button id="0" value="0" class="button">0</button>
        <button id="." value="." class="button">.</button><br>
        <button id="+" value="+" class="operand">+</button>
        <button id="-" value="-" class="operand">-</button>
        <button id="/" value="/" class="operand">/</button>
        <button id="*" value="*" class="operand">*</button>
    
        <div class="input_fields">
            <!--//printing out the first number-->
            <input id="num1" type="text" style="text-align:right" disabled>
            <!--//printing out the operand-->
            <input id="operand" type="text" style="text-align:right" disabled>
            <!--//printing out the second number-->
            <input id="num2" type="text" style="text-align:right" disabled>
            <!--//printing out the result-->
            <input class="form-control" id="result" type="text" style="text-align:right" disabled>
        </div>
        <input type="submit" value="Calculate" id="calculate">

    <script src="jquery.min.js"></script>
    <script>
    /*declaring variables*/
    var first_field = true;
    var number1 = "";
    var number2 = "";
     
    /*inserting number to the first field*/
    $(".button").click(function(){
        if(first_field == true){
            number1 += $(this).val();
            $("#num1").val(number1);
        }
    });

    /*inserting number to the operand field*/
     $(".operand").click(function(){
        $("#operand").val($(this).val());
        /*closing down the first field*/
        first_field = false;
        /*inserting number to the second field*/
        $(".button").click(function(){
            number2 += $(this).val();
          $("#num2").val(number2);
            });
    })

    
    /*ajax request to calculate*/
    $("#calculate").click(function(){
        var num1 = $("#num1").val();
        var num2 = $("#num2").val();
        var operand = $("#operand").val();
        $.ajax({
            "url": "calculation.php",
            "method": "post",
            data: {
                "num1": num1,
                "num2": num2,
                "operand": operand
            }
        }).done(function(data){
            $("#result").val(data);
        }).fail(function(){
            alert("Something went wrong, come back later!");
        })
    })
    </script>
</body>
</html>