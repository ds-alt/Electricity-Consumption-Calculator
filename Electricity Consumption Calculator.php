<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Consumption Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
    <div class="container mt-5">		
        <h1 class="mb-4" style="color: dodgerblue;">Electricity Consumption Calculator</h1>     
        <h5 class="mb-3 alert alert-primary">Calculate electricity consumption in kWh for 30 days.</h5>
        <form method="post">
            <div class="form-group" style="margin-top: 50px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="100">
                    Refrigerator (100W)
                </label>
                
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[100][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[100][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="500">
                    Washing Machine (500W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[500][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[500][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="150">
                    Television (150W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[150][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[150][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="1200">
                    Microwave (1200W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[1200][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[1200][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="200">
                    Computer (200W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[200][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[200][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="2000">
                    Air Conditioner (2000W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[2000][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[2000][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="1500">
                    Electric Stove (1500W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[1500][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[1500][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="3000">
                    Dryer (3000W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[3000][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[3000][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="60">
                    Light (60W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[60][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[60][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="800">
                    Toaster (800W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[800][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[800][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="75">
                    Fan (75W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[75][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[75][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="3000">
                    Water Heater (3000W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[3000][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[3000][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 30px;">
                <label>
                    <input type="checkbox" name="appliances[]" value="1500">
                    Kitchen Water Heater (1500W)
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Standard tariff hours:</label>
                        <input type="number" name="hours[1500][standard]" class="form-control" placeholder="Enter hours">
                    </div>
                    <div class="col-sm-6">
                        <label>Cheap tariff hours:</label>
                        <input type="number" name="hours[1500][cheap]" class="form-control" placeholder="Enter hours">
                    </div>
                </div>
            </div>
            
            <button type="submit" name="calculate" class="btn btn-primary">Calculate Consumption</button>
        </form>

      <?php
// Define electricity rates per kWh (in CZK)
$electricity_rate_standard = 4; // 4 CZK per kWh for standard tariff
$electricity_rate_cheap = 2;    // 2 CZK per kWh for cheap tariff

// Define tax rate (in %)
$tax_rate = 18; // 18% tax rate

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
    $total_consumption_standard = 0;
    $total_consumption_cheap = 0;
    $hours = $_POST['hours'];

    // Check if appliances are selected
    if (isset($_POST['appliances'])) {
        foreach ($_POST['appliances'] as $wattage) {
            // Check if both standard and cheap tariff hours are provided
            if (isset($hours[$wattage]['standard']) && isset($hours[$wattage]['cheap'])) {
                $standard_hours = intval($hours[$wattage]['standard']); // Convert to integer
                $cheap_hours = intval($hours[$wattage]['cheap']);       // Convert to integer

                // Calculate consumption for standard and cheap tariffs separately
                $total_consumption_standard += $wattage * $standard_hours;
                $total_consumption_cheap += $wattage * $cheap_hours;
            }
        }

        // Calculate consumption in kWh (kilowatt-hours) for both tariffs
        $total_consumption_kWh_standard = $total_consumption_standard / 1000;
        $total_consumption_kWh_cheap = $total_consumption_cheap / 1000;

        // Calculate monthly consumption (30 days) for both tariffs
        $monthly_consumption_kWh_standard = $total_consumption_kWh_standard * 30;
        $monthly_consumption_kWh_cheap = $total_consumption_kWh_cheap * 30;

        // Calculate total cost based on electricity rate for both tariffs
        $total_cost_standard = $monthly_consumption_kWh_standard * $electricity_rate_standard;
        $total_cost_cheap = $monthly_consumption_kWh_cheap * $electricity_rate_cheap;

        // Calculate total cost before tax
        $total_cost_before_tax = $total_cost_standard + $total_cost_cheap;

        // Calculate tax amount
        $tax_amount = ($total_cost_before_tax * $tax_rate) / 100;

        // Calculate total cost including tax
        $total_cost_including_tax = $total_cost_before_tax + $tax_amount;

        // Display the results
        echo "</br>";
        echo "<div class='mt-4 alert alert-light font-weight-bold' style='display: flex; justify-content: space-between;'>Standard Tariff:</div>";
		echo "<div class='alert alert-info' style='display: flex; justify-content: flex;'>Total daily consumption: $total_consumption_kWh_standard kWh</div>";
		echo "<div class='alert alert-info' style='display: flex; justify-content: flex;'>Total monthly consumption: $monthly_consumption_kWh_standard kWh</div>";
		echo "<div class='alert alert-success font-weight-bold' style='background-color: DodgerBlue; color: white; display: flex; justify-content: flex-end;'>Total cost: $total_cost_standard CZK</div>";

        echo "<div class='mt-4 alert alert-light font-weight-bold' style='display: flex; justify-content: space-between;'>Cheap Tariff:</div>";
		echo "<div class='alert alert-info' style='display: flex; justify-content: flex;'>Total daily consumption: $total_consumption_kWh_cheap kWh</div>";
		echo "<div class='alert alert-info' style='display: flex; justify-content: flex;'>Total monthly consumption: $monthly_consumption_kWh_cheap kWh</div>";
		echo "<div class='alert alert-success font-weight-bold' style='background-color: DodgerBlue; color: white; display: flex; justify-content: flex-end;'>Total cost: $total_cost_cheap CZK</div>";


        // Display total cost before tax
        echo "</br>";
        echo "<div class='alert alert-primary font-weight-bold' style='font-size: 18px;'>Total Cost Before Tax: $total_cost_before_tax CZK</div>";

        // Display tax amount
        echo "<div class='alert alert-primary font-weight-bold' style='font-size: 18px;'>Tax Amount ($tax_rate%): $tax_amount CZK</div>";

        // Display total cost including tax
        echo "<div class='alert alert-dark font-weight-bold' style='background-color: Tomato; font-size: 22px; display: flex; justify-content: space-between;'>Total Cost Including Tax: <span style='color: white;'>$total_cost_including_tax CZK</span></div>";

        

    } else {
        // Display error if no appliances are selected
        echo "<div class='mt-4 alert alert-warning font-weight-bold'>Please select at least one appliance.</div>";
    }
}
?>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
