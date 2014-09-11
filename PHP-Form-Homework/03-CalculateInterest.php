
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CalculateInterest</title>
</head>
<body>
<form metod="get" action="">
    <label for="amountBox">Enter Amount</label>
    <input type="text" name="amountBox" id="amountBox"><br>
    <input type="radio" name="currency" value="USD" id="USD">
    <label for="USD">USD</label>
    <input type="radio" name="currency" value="EUR" id="EUR">
    <label for="EUR">EUR</label>
    <input type="radio" name="currency" value="BGN" id="BGN">
    <label for="BGN">BGN</label>
    <br>
    <label for="interestBox">Compound Interest Amount</label>
    <input type="text" name="interestBox" id="interestBox"><br>
    <select name="tenor">
        <option disabled selected>--select tenor--</option>
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" value="Calculate" name="calculate">
</form>

<?php
if($_GET && isset($_GET['calculate'])){
    $amount = $_GET['amountBox'];
    $currency = $_GET['currency'];
    $interest = $_GET['interestBox']/100/12;
    $tenor = $_GET['tenor'];

    $futureValue = number_format(($amount * pow((1 + $interest), $tenor)), 2,'.','');
    switch($currency){
        case 'USD': echo("$ $futureValue");break;
        case 'EUR': echo("$futureValue EUR");break;
        case 'BGN': echo("$futureValue BGN");break;
        default;break;
    }
}
?>

</body>
</html>

<!--<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title>Calculate Interest</title>
</head>
<body>
<form method="post">
    <label for="amount">Enter Amount</label>
    <input type="text" name="amount" id="amount"/><br/>
    <input type="radio" name="currency" value="USD" id="usd"/>
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="EUR" id="eur"/>
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="BGN" id="bgn"/>
    <label for="bgn">BGN</label>
    <br/>
    <label for="interest">Compount Interest Amount</label>
    <input name="interest" id="interest"/><br/>
    <select name="period-months">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" name="submit" value="Calculate">
    <?php
/*    if ($_POST && isset($_POST["submit"])) {
        // Basic validation
        if (isset($_POST["amount"]) && isset($_POST["currency"]) && isset($_POST["interest"]) && isset($_POST["period-months"])) {
            $amount = $_POST["amount"];
            $currency = $_POST["currency"];
            $interest = $_POST["interest"];
            $periodInMonths = $_POST["period-months"];
            if (is_numeric($amount) && is_numeric($interest) && is_numeric($periodInMonths)) {
                if ($interest > 0 && $interest <= 100) {
                    // Compound interest formula: http://en.wikipedia.org/wiki/Compound_interest#Compound_Interest
                    // (It may be a bit confusing at first, but it is easier than calculating in the iterative way :))
                    // (Also, arithmetic progressions are good :D)
                    $numberOfYears = $periodInMonths / 12;
                    $valueAtEndOfPeriod = $amount * pow(1 + ($interest / 100) / 12, 12 * $numberOfYears);
                    echo formatCurrency($valueAtEndOfPeriod, $currency);
                } else {
                    echo "Invalid interest rate. It should be a number between 0 and 100.";
                }
            } else {
                echo "The data you entered is invalid.";
            }
        } else {
            echo "You have not filled in all required fields.";
        }
    }

    function formatCurrency($amount, $currency)
    {
        $roundedAmount = round($amount, 2);
        switch ($currency) {
            case "USD":
                return "$" . $roundedAmount;
            case "EUR":
                return "€" . $roundedAmount;
            case "BGN":
                return $roundedAmount . " лв.";
            default:
                // Unknown currency - do not append any sign
                return $roundedAmount;
        }
    }

    */?>
</form>
</body>
</html>-->