<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Home Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="cartcss.css">
<script type="text/javascript" src = cartJS.js></script>
</head>
<body onload="main()">
    <header>
            <ul class = "navigationbar">
                <li class="navitem"><strong><a href = "index.html"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.html">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.html">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
            <div>
                 <strong><a id = "signuplabel" href="signUpLogin.html">Sign Up/Login</a></strong>
                 <a id = "ordernowlabel" href="ntuclassics.html"><img src = "images/button_ready-for-delivery.PNG" width = 220px height = 40px></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
            <div id = "row">
            <textarea id = "customisationsbox" name = "customisations" id = "customisations" rows = "15" cols="80" placeholder="Enter Customisations here"></textarea><br><br>
        </div>
            </header>
    <div>
    <?php
                session_start();
                function createTableCart($cart)
                {
                    $counter = 0;
                    echo "<table border=\"1\">";
                    echo "<tr><th>Qty</th><th>Pizza</th><th>Subtotal</th></tr>";
                    reset($cart);
                    $value = current($cart);
                    while($value)
                    {
                        echo "<td>".$value."</td>\n";
                        $value = next($cart);
                        $counter++;
                        if($counter == 3)
                        {
                            echo "<tr>";
                            $counter = 0;
                        }
                    }
                    echo"</table><br><br><br><br>";
                }
                createTableCart($_SESSION['cart']);
                ?>
        </div>
    </div>
</body>
</html>