<?php
  require 'views/components/head.php';
  require 'views/components/header.php';

  ?>
<form action="/auth/auth.php" method="POST">
  <div class="mx-auto my-36 flex h-[auto] w-[350px] flex-col border-2 bg-white text-black shadow-xl">
    <div class="mx-8 mt-7 mb-1 flex flex-row justify-start space-x-2">
      <div class="h-7 w-3 bg-[#0DE6AC]"></div>
      <div class="text-center font-sans text-xl font-bold">
        <h1>Change Password</h1>
      </div>
    </div>
    <div class="flex flex-col items-center">
      <input class="my-2 w-72 border p-2" name="username" type="hidden" value=""/>
      <!-- <input class="my-2 w-72 border p-2" name="username2" type="text" placeholder="Username" /> -->
      <input class="my-2 w-72 border p-2" name="old_password" type="password" placeholder="Old Password" />
      <input class="my-2 w-72 border p-2" name="password" type="password" placeholder="New Password" />
      <input class="my-2 w-72 border p-2" name="password2" type="password" placeholder="Confirm New Password" />
      <!-- <input class="my-2 w-72 border p-2" name="device ID" type="number" placeholder="SmartDew Device ID" /> -->
    </div>
    <div class="my-2 flex justify-center">
      <button type="submit" name="register" class="w-72 border bg-[#0DE6AC] hover:bg-[#b8f8f5] ease-in-out transition-all duration-200 p-2 font-sans">Update</button>
    </div>
    <div class="mx-7 my-3 flex justify-between text-sm font-semibold">
      <div>
        <!-- <h1>Forget Password</h1> -->
      </div>
      <div>
        <!-- <a href="" class="underline underline-offset-2">Signup</a> -->
      </div>
    </div>
  </div>
</form>

<?php
  require 'views/components/footer.php';
?>