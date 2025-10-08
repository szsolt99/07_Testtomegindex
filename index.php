<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testtömeg</title>
</head>
<body>
    <h1>Testtömegindex</h1>

    <form method="post">
        <label for="weight">Testsúly (kg):</label>
        <input type="number" name="weight" step="0.1" required><br><br>

        <label for="height">Magasság (cm):</label>
        <input type="number" name="height" step="0.1" required><br><br>
        <input type="submit" value="Számítás">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = floatval($_POST["weight"]);
        $height = floatval($_POST["height"]) / 100;

        if ($height > 0) {
            $bmi = $weight / ($height * $height);
            echo "Eredmény: " . round($bmi, 2) . "<br>";

            if ($bmi < 16) {
                echo "Súlyos sovány.";
            } 
            elseif ($bmi < 16.99) {
                echo "Mérsékelten sovány.";
            } 
            elseif ($bmi < 18.49) {
                echo "enyhe sovány.";
            } 
            elseif ($bmi < 24.99) {
                echo "Normál.";
            } 
            elseif ($bmi < 29.99) {
                echo "Túlsúlyos.";
            } 
            elseif ($bmi < 34.99) {
                echo "I. fokú elhízás.";
            } 
            elseif ($bmi < 39.99) {
                echo "II. fokú elhízás.";
            } 
            else {
                echo "III. fokú elhízozás.";
            }
        } else {
            echo "Hibás magasság érték!";
        }
    }
    ?>
</body>
</html>