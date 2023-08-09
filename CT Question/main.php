<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <h1>Order Form</h1>
    
    <form method="post">
        <h2>Select Light Bulbs:</h2>
        <input type="checkbox" name="bulbs[]" value="bulb1"> Four 100-watt light bulbs (TK. 200)<br>
        <input type="checkbox" name="bulbs[]" value="bulb2"> Eight 100-watt light bulbs (TK. 400)<br>
        <input type="checkbox" name="bulbs[]" value="bulb3"> Four 100-watt LED bulbs (TK. 600)<br>
        
        <h2>Select Payment Method:</h2>
        <input type="radio" name="payment" value="Visa"> Visa<br>
        <input type="radio" name="payment" value="MasterCard"> Master Card<br>
        <input type="radio" name="payment" value="Discover"> Discover<br>
        
        <input type="submit" name="calculate" value="Calculate Total">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        // Define the prices and tax rate
        $prices = array(
            'bulb1' => 200,
            'bulb2' => 400,
            'bulb3' => 600
        );
        $tax_rate = 0.06;
        
        // Retrieve user input from checkboxes and radio buttons
        $selected_bulbs = isset($_POST['bulbs']) ? $_POST['bulbs'] : array();
        $selected_payment_method = isset($_POST['payment']) ? $_POST['payment'] : '';
        
        // Calculate the total cost
        $total_cost = 0;
        foreach ($selected_bulbs as $bulb) {
            $total_cost += $prices[$bulb];
        }
        $total_cost_with_tax = $total_cost * (1 + $tax_rate);
        
        // Display the order summary
        echo "<h2>Order Summary:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Ordered Item</th><th>Price</th></tr>";
        foreach ($selected_bulbs as $bulb) {
            echo "<tr><td>$bulb</td><td>TK. {$prices[$bulb]}</td></tr>";
        }
        echo "<tr><td>Subtotal</td><td>TK. $total_cost</td></tr>";
        echo "<tr><td>Tax (6%)</td><td>TK. " . number_format($total_cost * $tax_rate, 2) . "</td></tr>";
        echo "<tr><td>Total</td><td>TK. " . number_format($total_cost_with_tax, 2) . "</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
