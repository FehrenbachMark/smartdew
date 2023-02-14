<?php
  require 'views/components/head.php';
  require 'views/components/header.php';

  ?>

<form action="/controllers/update.php" method="POST">
  <div class="mx-auto my-36 flex h-[auto] w-[350px] flex-col border-2 bg-white text-black shadow-xl">
    <div class="mx-8 mt-7 mb-1 flex flex-row justify-start space-x-2">
      <div class="h-7 w-3 bg-[#0DE6AC]"></div>
      <div class="text-center font-sans text-xl font-bold">
        <h1>Add SmartDew Data</h1>
      </div>
    </div>
    <div class="flex flex-col items-center">
      <input class="my-2 w-72 border p-2" name="date" type="date" placeholder="Date" required />
      <label for="humidty">Humidty %</label>
      <span id="humidity-range">0</span>
      <input id="humidity" class="my-2 w-72 border p-2" name="humidity" type="range" min="0" max="100" value="0" placeholder="humidity" />
      <label for="water_level">Water Level %</label>
      <span id="water-range">0</span>
      <input id="water_level" class="my-2 w-72 border p-2" name="water_level" type="range" min="0" max="100" value="0" placeholder="water_level" />
      <label for="temperature">Temperature °C</label>
      <span id="temperature-range">0</span>
      <input id="temperature" class="my-2 w-72 border p-2" name="temperature" type="range" min="-20" max="70" value="0" placeholder="temperature" />
      <!-- <input class="my-2 w-72 border p-2" name="username" type="hidden" />
      <input class="my-2 w-72 border p-2" name="device_id" type="hidden" />
      <input class="my-2 w-72 border p-2" name="temperature" type="hidden" /> -->
      <input type="hidden" name="data">
      <?php
      echo '<input class="my-2 w-72 border p-2" name="username" type="hidden" value="'.$_SESSION['username'].'" />';
      echo '<input class="my-2 w-72 border p-2" name="device_id" type="hidden" value="'.$_SESSION['device_id'].'" />';
      echo '<input class="my-2 w-72 border p-2" name="id" type="hidden" value="'.$_SESSION['id'].'" />';
      ?>
      
    </div>
    <div class="my-2 flex justify-center">
      <button type="submit" name="login"class="w-72 border bg-[#0DE6AC] hover:bg-[#b8f8f5] ease-in-out transition-all duration-200 p-2 font-sans">Save</button>
    </div>
    <div class="mx-7 my-3 flex justify-between text-sm font-semibold">
      <div>
        <!-- <h1>Forget Password</h1> -->
      </div>
      <div>
        <!-- <a href="/register" class="underline underline-offset-2">Send</a> -->
      </div>
    </div>
  </div>
</form>

<?php
  require 'views/components/footer.php';
?>