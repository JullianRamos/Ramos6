<!DOCTYPE html>
<html>
<head>
    <title>Order System</title>
</head>
<body>
    <h2> MOSS PEECEE</h2>
    <form method="post" action="">

        <label>ITEM 1: MONITOR 165 hz</label>
        <label>Price: &#8369;5500</label>
        <br><br>

        <label>ITEM 2: GAMING MOUSE RAKK TALAN</label>
        <label>Price: &#8369;2500</label>
        <br><br>

        <label>ITEM 3: ARCADE STICK 8bit Do </label>
        <label>Price: &#8369;2900</label><br><br>

        <label>ITEM 4: KEYBOARD HyperX ALLOY ORIGINS 65 </label>
        <label>Price: &#8369;4500</label><br><br>

        <label>ITEM 5: HEADSET Steelseries ARCTIS 7 </label>
        <label>Price: &#8369;7000</label><br><br>

        <label for="quantity1">Quantity of MONITOR:</label>
        <input type="number" id="quantity1" name="quantity1" min="0" required><br><br>

        <label for="quantity2">Quantity of GAMING MOUSE:</label>
        <input type="number" id="quantity2" name="quantity2" min="0" required><br><br>

        <label for="quantity3">Quantity of ARCADE STICK:</label>
        <input type="number" id="quantity3" name="quantity3" min="0" required><br><br>

        <label for="quantity4">Quantity of KEYBOARD:</label>
        <input type="number" id="quantity4" name="quantity4" min="0" required><br><br>

        <label for="quantity5">Quantity of HEADSET:</label>
        <input type="number" id="quantity5" name="quantity5" min="0" required><br><br>

        <label for="cash">Amount of Cash:</label>
        <input type="number" id="cash" name="cash" required><br><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>

    <?php
    if(isset($_POST['submit'])){
        // Retrieve values from the form
        $quantity1 = $_POST['quantity1'];
        $quantity2 = $_POST['quantity2'];
        $quantity3 = $_POST['quantity3'];
        $quantity4 = $_POST['quantity4'];
        $quantity5 = $_POST['quantity5'];


        $price1 = 5500;
        $price2 = 2500;
        $price3 = 2900;
        $price4 = 4500;
        $price5 = 7000;
        $cash = $_POST['cash'];

        // Calculate total cost
        $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4) + ($quantity5 * $price5);

        // Calculate change
        $change = $cash - $total_cost;

        // Display total cost and change
        echo "<h3>Order Summary:</h3>";
        echo "Total Cost: &#8369;" . $total_cost . "<br>";
        if ($change >= 0) {
            echo "Your change is: &#8369;" . $change;
        } else {
            echo "Insufficient cash! Please provide more.";
        }
    }
    ?>
</body>
</html>