<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Review Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="reviewCSS.css">
<script type="text/javascript" src = "validateReview.js"></script>
</head>
<body>
    <header>
            <?php
            include 'headerOrderNow.php';
            ?>
    </header>
    <div id = "centreform">
    <form method="GET" action = "confirmreview.php" onsubmit="return validateReviewForm()">
        <strong><label>Full Name:* </label></strong><input type="text" name = "FullName" id = "fullname" required><br><br>
        <strong><label>Email Address:* </label></strong><input type="email" name = "email address" id = "emailaddress" required><br><br>
        <strong><label><input type = "radio" name = "radioStar" id = "1Star"/>1 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "2Star"/>2 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "3Star"/>3 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "4Star"/>4 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "5Star"/>5 Stars</label></strong><br><br>
        <textarea name = "enjoyedtextbox" id = "enjoyedtextbox" rows = "6" cols="50" placeholder="What did you enjoy?" required></textarea><br><br>
        <textarea name = "improvedtextbox" id = "improvedtextbox" rows = 6 cols = "50" placeholder="What could be improved" required></textarea><br><br> 
        <input id = "submitbutton" type = "image" src="images/button_submit-review.png" width="150"></form>
    </div>
    <?php
    include 'footer.html';
    ?>
</body>
</html>