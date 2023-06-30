<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>UDID</title>
    <meta name="viewport" content="width=device-width" />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div>
      <div class="flex justify-center h-screen w-screen items-center">
        <div class="flex flex-col w-full md:w-6/12 lg:w-6/12 gap-3">
          <a
            href="get_mobileconfig.php"
            class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900"
          >
            Get Device UDID
          </a>
          <a
            href="processes_data.php"
            class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900"
          >
            Download ESign
          </a>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      // Function to retrieve the device UDID
      function getDeviceUDID() {
        var udid = "";
        try {
          udid = device.udid; // Access the UDID using the device object
        } catch (error) {
          document.getElementById("err").innerHTML = "eerror: " + error;
          console.log("Error retrieving UDID: " + error);
        }
        return udid;
      }

      // Call the function to retrieve the UDID
      var deviceUDID = getDeviceUDID();

      // Display the UDID on the webpage
      document.getElementById("udid").innerHTML = "UDID: " + deviceUDID;
    </script>
  </body>
</html>
