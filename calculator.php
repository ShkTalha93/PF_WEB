<!DOCTYPE HTML>
<html>

<body>

    <?php
    class Calculator
    {
        // Properties
        // public $val1;
        // public $val2;
    
        // Methods
        function addition($val1, $val2)
        {
            return $val1 + $val2;
        }
        function subtraction($val1, $val2)
        {
            return $val1 - $val2;
        }
        function multiplication($val1, $val2)
        {
            return $val1 * $val2;
        }
        function devision($val1, $val2)
        {
            return $val1 / $val2;
        }


    }

    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $oprnd = $_POST['submit'];
        $fun = new Calculator();
        switch ($oprnd) {
            case '+':
                $result = $fun->addition($num1, $num2);
                break;
            case '-':
                $result = $fun->subtraction($num1, $num2);
                break;
            case 'x':
                $result = $fun->multiplication($num1, $num2);
                break;
            case '/':
                $result = $fun->devision($num1, $num2);
                break;


        }


    }
    ?>


    <h1>Simple Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        First number <input type="number" name="num1" value=""><br><br>
        Second number <input type="number" name="num2" value=""><br><br>
        <input type="submit" name="submit" value="+">
        <input type="submit" name="submit" value="-">
        <input type="submit" name="submit" value="x">
        <input type="submit" name="submit" value="/"><br><br>
        Result: <input type='text' value="<?php echo $result; ?>"><br><br>
    </form>


</body>


</html>