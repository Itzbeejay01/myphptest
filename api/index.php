<?php
include 'inser.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Registration Form</title>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto mt-10">
    <div class="w-full max-w-sm mx-auto bg-white p-8 rounded shadow-md form-container">
      <div class="bg-blue-500 text-white font-bold py-2 px-4 rounded mb-4 text-center">
       <div class="flex flex-row items-center justify-center ">
        <p class="text-xl font-bold mx-2">Timer:</p>
        <p id="countdown" class="text-xl font-bold"></p>
       </div>
      </div>
      <form id="myForm" method="post">
        <div class="mb-4">
          <label for="fullname" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
          <input type="text" id="fullname" name="fullname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="matricNumber" class="block text-gray-700 text-sm font-bold mb-2">Matric Number</label>
          <input type="text" id="matricNumber" name="matricNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
          <label for="phoneNumber" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
          <input type="text" id="phoneNumber" name="phoneNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="submitButton">Submit</button>
      </form>
    </div>
  </div>

  <script>
    var countdow = 10;
    var countdownElement = document.getElementById('countdown');
    var form = document.getElementById('myForm');
    var nameInput = document.getElementById('fullname');
    var nameInput = document.getElementById('matricNumber');
    var nameInput = document.getElementById('phoneNumber');
    var submitButton = document.getElementById('submitButton');

    function updateCountdown() {
        countdown--;
        countdownElement.textContent = countdown;

        if (countdown <= 0) {
           // clearInterval(interval);
            submitButton.click();
            nameInput.value = ''; // Clear the input field
        }
    }

    var interval = setInterval(updateCountdown, 1000);
</script>
</body>

</html>
