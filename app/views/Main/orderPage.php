<!DOCTYPE html lang="en">

<head>
  <script type="text/javascript" src="/app/resources/scripts/jquery.min.js"></script>
  <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>Laurentian Lanes</title>
  <link rel="stylesheet" href="/app/resources/styles/main.css">
  <link rel="stylesheet" href="/app/resources/styles/order.css">
</head>

<body>
  <!-- <img class="logo" src="/app/resources/images/logo.png" alt=""> -->
  <section class='appDivisionsSection'>
    <div class="appDivision laneNumberDiv active" data-index="1">
      <label>Lane</label>
        <div class='numInputDiv'>
          <div class='tensInput numInput'>
            <button class='numButton' onclick='increaseTens()'><img src="/images/arrow.png"></button>
              <div class='tensSpan numSpan'><span>0</span></div>
            <button class='numButton decrease' onclick='decreaseTens()'><img src="/images/arrow.png"></button>
          </div>
          <div class='onesInput numInput'>
            <button class='numButton' onclick='increaseOnes()'><img src="/images/arrow.png"></button>
              <div class='onesSpan numSpan'><span>0</span></div>
            <button class='numButton decrease' onclick='decreaseOnes()'><img src="/images/arrow.png"></button>
          </div>
        </div>
    </div>
    <div class="appDivision laneNameDiv" data-index="2">
      <label>Name</label>
      <input type="text" id="laneName">
    </div>
    <div class="appDivision itemsDiv" data-index="3">
      <label>Items</label>
    </div>
  </section>
  <div class="actions">
    <button onclick="previousPage()">Previous</button>
    <button onclick="nextPage()">Next</button>
  </div>
  <script type="text/javascript" src="/app/resources/scripts/main.js"></script>
</body>

</html>