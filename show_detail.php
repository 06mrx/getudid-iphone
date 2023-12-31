<?php 
    $subject = "This is my UDID from iOS device";
    $body  = "Hello<br /> This is my UDID: {$_GET['UDID']} <br />";
    $body .= "Device product: {$_GET['DEVICE_PRODUCT']} <br />";
    $body .= "Device version: {$_GET['DEVICE_VERSION']} <br />";
    $body .= "Device name: {$_GET['DEVICE_NAME']} <br />";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
        <div class="flex justify-center h-screen w-screen items-center">
            <div class="flex flex-col items-center">
                <h1 class="font-semibold text-3xl">Your Device Information</h1>
                <p>UDID: <span class="text-green-600"><?php echo $_GET['UDID']; ?></span></p>
                <p>Device product: <?php echo $_GET['DEVICE_PRODUCT']; ?></p>
                <p>Device version: <?php echo $_GET['DEVICE_VERSION']; ?></p>
                <p>Device name: <?php echo $_GET['DEVICE_NAME']; ?></p>
            </div>
            
        </div>
    </body>
</html>