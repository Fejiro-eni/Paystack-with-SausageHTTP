<?php 
include 'lib/SausageHTTP.php';

?>

<!DOCTYPE html>
<html>

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" /> 
</head>

<body>

    <div class="container">  
        <h2>Summary</h2>     
        <table>
            <tr><td>Cloths</td> <td> &#8358;1000</td></tr>
            <tr><td>Shoes</td> <td>&#8358;2000</td></tr>
            <tr><td>Table</td> <td>&#8358;500</td></tr>
            <tr><td>Chairs</td> <td>&#8358;200</td></tr>
            <tr><td>Total</td> <td>&#8358;3700</td></tr>
        </table> 
        <button  onclick="payWithPaystack()"> Pay </button>
    </div>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="app.js"></script>
</body>

</html>
