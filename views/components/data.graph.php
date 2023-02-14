<div class="shadow-lg rounded-lg overflow-hidden w-full max-w-[1200px] absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%]">
  <div class="py-3 px-5 bg-gray-50">HUMIDITY</div>
  <canvas class="p-10 bg-primary-100" id="chartBar"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <?php
  
  // inserts data into the database table "data"
  // $sql = "INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('$date', '$id', '$device_id', '$username', '$temp', '$humidity', '$water_level')";
  // updates date in the database table "data"
  // $sql = "UPDATE data SET date = '$date' WHERE username = '$username'";
  // dummy data inserted into the database table "data"
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-02-01', '1', '0001', 'mark', '29', '64', '99')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-02-14', '1', '0001', 'mark', '30', '65', '98')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-02-28', '1', '0001', 'mark', '31', '66', '97')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-03-11', '1', '0001', 'mark', '32', '67', '96')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-03-25', '1', '0001', 'mark', '33', '68', '95')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-04-08', '1', '0001', 'mark', '34', '69', '94')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-04-22', '1', '0001', 'mark', '35', '70', '93')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-05-06', '1', '0001', 'mark', '36', '71', '92')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-05-20', '1', '0001', 'mark', '37', '72', '91')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-06-03', '1', '0001', 'mark', '38', '73', '90')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-06-17', '1', '0001', 'mark', '39', '74', '89')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-07-01', '1', '0001', 'mark', '40', '75', '88')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-07-15', '1', '0001', 'mark', '33', '56', '79')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-07-29', '1', '0001', 'mark', '34', '57', '78')
  // INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('2023-08-12', '1', '0001', 'mark', '29', '56', '95')
  // change all device_id in data table where deivce_id = 0001 to 1001
  // UPDATE data SET device_id = '1001' WHERE device_id = '0001'
  include './dbconnect.php';
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM data WHERE username = '$username' LIMIT 24";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
<script>
// Creates an array from each item in the database table "data" in php
const data = <?php echo json_encode($data); ?>;
  
const labels = data.map((item) => item.date);
const temp = data.map((item) => item.temp);
const humidity = data.map((item) => item.humidity);
const water_level = data.map((item) => item.water_level);
// water_level.push(100);
// humidity.push(100);
// temp.push(70);
  labels.sort();
  // console.log(labels);

  console.log(data);

</script>
<!-- Chart bar -->
<script>
  const labelsBarChart = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July"
  ];
  const dataBarChart = {
    labels: labels,
    datasets: [
      {
        label: "Humidty %",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        // data: [80, 90, 85, 70, 97, 80, 70, 60],
        data: humidity,
      },
      {
        label: "Temperature °C",
        backgroundColor: "hsl(352, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        // data: [24, 30, 28, 34, 32, 45, 50, 50],
        data: temp,
      },
      {
        label: "Water Level",
        backgroundColor: "hsl(210, 79.9%, 50.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        // data: [94, 90, 88, 78, 84, 90, 82, 100],
        data: water_level,
      }
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBar"),
    configBarChart
  );
</script>