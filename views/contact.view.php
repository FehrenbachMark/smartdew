<?php
  require 'views/components/head.php';
  require 'views/components/header.php';

  ?>

<form action="/mail.php" method="POST">
  <div class="mx-auto my-36 flex h-[300px] w-[350px] flex-col border-2 bg-white text-black shadow-xl">
    <div class="mx-8 mt-7 mb-1 flex flex-row justify-start space-x-2">
      <div class="h-7 w-3 bg-[#0DE6AC]"></div>
      <div class="text-center font-sans text-xl font-bold">
        <h1>Contact Us</h1>
      </div>
    </div>
    <div class="flex flex-col items-center">
      <input class="my-2 w-72 border p-2" name="message" type="text" placeholder="What's your message?" />
      <input class="my-2 w-72 border p-2" name="email" type="text" placeholder="email" />
    </div>
    <div class="my-2 flex justify-center">
      <button type="submit" name="login"class="w-72 border bg-[#0DE6AC] hover:bg-[#b8f8f5] ease-in-out transition-all duration-200 p-2 font-sans">Send</button>
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