<div class="shadow-lg rounded-lg overflow-hidden w-1/2 max-w-[600px]">
  <div class="py-3 px-5 bg-gray-50">TEMPERATURE (deg C)</div>
  <canvas class="p-10 bg-primary-100" id="chartBar2"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  const labelsBarChart2 = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
  ];
  const dataBarChart2 = {
    labels: labelsBarChart2,
    datasets: [
      {
        label: "Temperature",
        backgroundColor: "hsl(52, 82.9%, 47.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [0, 10, 5, 2, 20, 30, 45],
      },
    ],
  };

  const configBarChart2 = {
    type: "bar",
    data: dataBarChart2,
    options: {},
  };

  var chartBar2 = new Chart(
    document.getElementById("chartBar2"),
    configBarChart2
  );
</script>