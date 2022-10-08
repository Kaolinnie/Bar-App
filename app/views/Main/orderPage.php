<!DOCTYPE html lang="en">
<head>
    <script type="text/javascript" src="/app/resources/scripts/jquery.min.js"></script>    
    <title>Laurentian Lanes</title>
    <link rel="stylesheet" href="/app/resources/styles/main.css">
    <link rel="stylesheet" href="/app/resources/styles/order.css">
</head>
<body class="homePage">
    <img class="logo" src="/app/resources/images/logo.png" alt="">

    <!-- <div class="appDivision clientNameDiv">
        <form action="" method="get">
            <input type="text" placeholder="Client's Name" id="clientName"><br>
            <span onclick="submitClientName()">Next</span>
        </form>
    </div> -->
    <div class="appDivision laneNumberDiv">
        <label>Lane Number: <input type="text" pattern="[0-9]*" inputmode="numeric" id="laneNumber"></label>
    </div>
    <div class="appDivision orderItems"></div>

    <script type="text/javascript" src="/app/resources/scripts/main.js"></script>
</body>
</html>