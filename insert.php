<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Process Parking Spaces Section
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['parking_submit'])) {
    $location = $_POST["location"];
    $availability = $_POST["availability"];

    $sql = "INSERT INTO parking_spaces (location, availability) VALUES ('$location', '$availability')";
    $conn->beginTransaction();
    $conn->exec($sql);
    $conn->commit();

   if (!empty($location)) {
        $sql = "SELECT * FROM parking_spaces WHERE location = '$location'";
        $result = $conn->query($sql);

        echo "<h3>Parking Space Information:</h3>";
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "Location: " . $row["location"] . " - Available: " . $row["availability"] . "<br>";
            }
        } else {
            echo "No information available for Location: $location";
        }
    } else {
        echo "Please provide a valid Location.";
    }
}
// Process Traffic Data Section
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['traffic_submit'])) {
    $location = $_POST["location"];
    $traffic_intensity = $_POST["traffic_intensity"];

    $sql = "INSERT INTO traffic_data (location, traffic_intensity) VALUES ('$location', '$traffic_intensity')";
    $conn->beginTransaction();
    $conn->exec($sql);
    $conn->commit();

        $sql = "SELECT * FROM traffic_data WHERE location = '$location'";
        $result = $conn->query($sql);

        echo "<h3>Traffic Data Information:</h3>";
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "Location: " . $row["location"] . " - Traffic Intensity: " . $row["traffic_intensity"] . "<br>";
            }
        } else {
            echo "No information available for Location: $location";
        }
}
?>