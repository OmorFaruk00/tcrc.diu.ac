<?php

function getVisitorIp() {
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        return $_SERVER['HTTP_X_FORWARDED'];
    } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        return $_SERVER['HTTP_FORWARDED'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        return $_SERVER['REMOTE_ADDR'];
    } else {
        return 'UNKNOWN';
    }
}

function getCountryCode($ip) {
    $url = "https://ipinfo.io/{$ip}/json";
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    return isset($data['country']) ? $data['country'] : 'UNKNOWN';
}

$visitorIp = getVisitorIp();
$countryCode = getCountryCode($visitorIp);
$currentDate = date('Y-m-d');

$servername = "10.11.12.70";
$username = "admin";
$password = "Diu2009*)(root";
$dbname = "tcrc_website";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$checkConditionSql = "SELECT COUNT(*) as count FROM bcgd WHERE date = '$currentDate' AND country_code = '$countryCode' AND ip = '$visitorIp'";
$checkConditionResult = $conn->query($checkConditionSql);
$checkConditionCount = $checkConditionResult->fetch_assoc()['count'];
if ($checkConditionCount > 0) {
    // return  "already count.";
    // console.log('already count')
} else {
    // SQL query to insert data
    $sql = "INSERT INTO bcgd (ip, country_code, date) VALUES ('$visitorIp', '$countryCode', '$currentDate')";
    $conn->query($sql);    
}


$totalVisitorsSql = "SELECT COUNT(*) as total FROM bcgd";
$totalVisitorsResult = $conn->query($totalVisitorsSql);
$totalVisitors = $totalVisitorsResult->fetch_assoc()['total'];

$countCountryCodesSql = "SELECT COUNT(DISTINCT country_code) AS unique_country_count FROM bcgd";
$countCountryCodesResult = $conn->query($countCountryCodesSql);
$countCountryCodes = $countCountryCodesResult->fetch_assoc()['unique_country_count'];

// SQL query to count total visitors for today
$countTodayVisitorsSql = "SELECT COUNT(*) AS total_today_visitors FROM bcgd WHERE date = '$currentDate'";
$countTodayVisitorsResult = $conn->query($countTodayVisitorsSql);
$countTodayVisitors = $countTodayVisitorsResult->fetch_assoc()['total_today_visitors'];

// Calculate the date 30 days ago
$thirtyDaysAgo = date('Y-m-d', strtotime('-30 days'));

// SQL query to count total visitors for the last 30 days
$countLast30DaysVisitorsSql = "SELECT COUNT(*) AS total_last_30_days_visitors FROM bcgd WHERE date >= '$thirtyDaysAgo'";
$countLast30DaysVisitorsResult = $conn->query($countLast30DaysVisitorsSql);

$countLast30DaysVisitors = $countLast30DaysVisitorsResult->fetch_assoc()['total_last_30_days_visitors'];

// Close connection
$conn->close();
          
        } catch (Exception $e) {
            return $e->getMessage();
        }


?>

<div>

    {{-- {{$totalVisitors}}
    {{$countCountryCodes}}
    {{$countTodayVisitors}}
    {{$countLast30DaysVisitors}} --}}
    <!-- ======= Counts Section ======= -->
    <div id="counts" class="counts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5 mt-lg-0">
                    <div class="count-box" style="height: 145px">
                        <i class="bi bi-eye"></i>
                        <span > {{$countTodayVisitors ?? 0}}</span>
                        <p><strong> Today Visitor </strong></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5  mt-lg-0">
                    <div class="count-box" style="height: 145px">
                        <i class="bi bi-eye"></i>
                        <span > {{$countLast30DaysVisitors ?? 0}}</span>
                        <p> <strong>Last 30 Days Visitor</strong></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-5 mt-lg-0">
                    <div class="count-box" style="height: 145px">
                        <i class="bi bi-eye"></i>
                        <span > {{$totalVisitors ?? 0}}</span>
                        <p><strong> Total Visitor</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mt-5 mt-lg-0">
                    <div class="count-box" style="height: 145px">
                        <i class="bi bi-eye"></i>
                        <span >{{$countCountryCodes}}</span>
                        <p><strong> Country</strong></p>
                    </div>
                </div>

            </div>

        </div>
    </div><!-- End Counts Section -->

    {{-- <script type="text/javascript">
        var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Parse the response to get the country code
            var responseText = this.responseText.replace(/(\r\n|\n|\r)/gm, "");
            var country_code = responseText.split('loc=')[1].split('tls=')[0];

            // Get existing data from local storage
            var existingData = localStorage.getItem('uniqueCountryCodes');

            // Parse the existing data as JSON or initialize an empty array
            var uniqueCountryCodes = existingData ? JSON.parse(existingData) : [];

            // Check if the country code already exists
            var isCountryCodeExists = uniqueCountryCodes.includes(country_code);

            // If the country code doesn't exist, add it
            if (!isCountryCodeExists) {
                uniqueCountryCodes.push(country_code);

                // Update the data in local storage
                localStorage.setItem('uniqueCountryCodes', JSON.stringify(uniqueCountryCodes));

                // Display the country code
                // document.getElementById("countrycode-container").innerHTML = country_code;
            } else {
                // console.log('Country code already exists in local storage');
            }
        }
    };
    // OPEN HTTP Request
    xhttp.open("GET", "https://www.cloudflare.com/cdn-cgi/trace", true);
    xhttp.send();
    </script>
    <script type="text/javascript">
        // Function to get data from local storage and display/count it
    function getDataFromLocalStorage() {
        // Get data from local storage
        var storedData = localStorage.getItem('uniqueCountryCodes');

        // Parse the data as JSON or initialize an empty array
        var data = storedData ? JSON.parse(storedData) : [];

        // Display the data
        // var container = document.getElementById('countrycode-container');
        // container.innerHTML = 'Country Codes: ' + data.join(', ');

        // Count the number of items
        var countryCount = data.length;
        document.getElementById("country").innerHTML = countryCount;
        // console.log('Number of Country Codes:', countryCount);
    }
    // Call the function
    getDataFromLocalStorage();
    </script> --}}



</div>