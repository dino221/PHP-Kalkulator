<?php

$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';

if (is_numeric($first_num) && is_numeric($second_num)) {

    switch ($operator) {

        case "Add":

            $result = $first_num + $second_num;

        break;

        case "Subtract":

            $result = $first_num - $second_num;

        break;

        case "Multiply":

            $result = $first_num * $second_num;

        break;

        case "Divide":

            $result = $first_num / $second_num;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-KALKULATOR</title>
</head>
<body>
    <div id="page wrap">
        <h1>PHP-Jednostavan kalkulator </h1>
            <form action = " " method = "post" id = "quiz-form">
                <p>
                    <input type = "number" name = "first_num" id ="first_num" required = "required" value="<?php echo $first_num; ?>" /> <b>Prvi broj </b>
                </p>
                <p>
                    <input type = "number" name = "second_num" id ="second_num" required = "required" value="<?php echo $second_num; ?>" /> <b>Drugi broj </b>
                </p>
                <p>
                    <input readonly = "readonly" name = "result" value="<?php echo $result; ?>" /> <b>Rezultat</b>
                </p>
                    <input  type = "submit" name = "operator" value = "Add" />
                    <input type = "submit" name = "operator" value = "Subtract" />
                    <input type = "submit" name = "operator" value = "Multiply" />
                    <input type = "submit" name = "operator" value = "Divide" />
            </form>
    </div>

                

</body>
</html>
