<!DOCTYPE  html>
<html>
    <head>
        <title> LOGIN </title>
        <link rel="stylesheet" href="style.css">
        <style>
    #clock {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin: 50px;
    }
  </style>
</head>
<body>
<div id="clock"></div>

<script>
  function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Add leading zeros if needed
    hours = (hours < 10) ? '0' + hours : hours;
    minutes = (minutes < 10) ? '0' + minutes : minutes;
    seconds = (seconds < 10) ? '0' + seconds : seconds;

    var timeString = hours + ':' + minutes + ':' + seconds;

    document.getElementById('clock').innerHTML = timeString;
  }

  // Update the clock every second
  setInterval(updateClock, 1000);

  // Initial call to display the time immediately
  updateClock();
</script>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label class="1"> User Name</label>
        <input type="text" name="uname" placeholder="Enter Your User Name"><br><br>
        <label class="1">Password</label>
        <input type="password" name="pword" placeholder="Type your Password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>