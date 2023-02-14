<div class="shadow-lg rounded-lg overflow-hidden w-1/2 max-w-[600px]">
  <div class="py-3 px-5 bg-gray-50">WATER LEVEL</div>
  <canvas class="p-10 bg-primary-100" id="chartBar3"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  const labelsBarChart3 = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
  ];
  const dataBarChart3 = {
    labels: labelsBarChart3,
    datasets: [
      {
        label: "Water Level",
        backgroundColor: "hsl(210, 79.9%, 50.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [0, 10, 5, 2, 20, 30, 45],
      },
    ],
  };

  const configBarChart3 = {
    type: "bar",
    data: dataBarChart3,
    options: {},
  };

  var chartBar3 = new Chart(
    document.getElementById("chartBar3"),
    configBarChart3
  );
</script>