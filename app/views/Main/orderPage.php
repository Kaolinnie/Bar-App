<!DOCTYPE html lang="en">
<head>
    <script type="text/javascript" src="/app/resources/scripts/jquery.min.js"></script>    
    <title>Laurentian Lanes</title>
    <link rel="stylesheet" href="/app/resources/styles/main.css">
    <link rel="stylesheet" href="/app/resources/styles/order.css">
</head>
<body>
    <!-- <img class="logo" src="/app/resources/images/logo.png" alt=""> -->

    <section class="appDivison">
    <div class='numInputDiv'>
  <div class='tensInput numInput'>
    <button class='numButton' onclick='increaseTens()'>
      ^
    </button>
    <span class='tensSpan numSpan'>0</span>
    <button class='numButton' onclick='decreaseTens()'>
      v
    </button>
  </div>
  <div class='onesInput numInput'>
    <button class='numButton' onclick='increaseOnes()'>
      ^
    </button>
    <span class='onesSpan numSpan'>0</span>
    <button class='numButton' onclick='decreaseOnes()'>
      v
    </button>
  </div>
</div>
</section>

    <section class="appDivision">
        <label>Name: <input type="text" id="laneName"></label>
    </section>
    
    <a onclick="submitClientName()">
        <span>Next Page</span>
    </a>

    <script type="text/javascript" src="/app/resources/scripts/main.js"></script>
</body>
</html>