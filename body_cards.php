<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flex Card Hover Slider</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
<?php
// Puedes agregar cualquier lógica PHP aquí si es necesario
?>
<div class="flex-container">
    <div class="flex-slide home">
        <div class="flex-title flex-title-home">Home</div>
        <div class="flex-about flex-about-home"><p>Click here to navigate to the home section of the website</p></div>
    </div>
    <div class="flex-slide about">
        <div class="flex-title">About</div>
        <div class="flex-about"><p>Click here to navigate to the About section of the website</p></div>
    </div>
    <div class="flex-slide work">
        <div class="flex-title">Work</div>
        <div class="flex-about">
            <p>Listing relevant snippets of work:</p>
            <ul>
                <li>First piece of work</li>
                <li>Second piece of work</li>
                <li>Third piece of work</li>
            </ul>
        </div>
    </div>
    <div class="flex-slide contact">
        <div class="flex-title">Contact</div>
        <div class="flex-about">
            <p>Use the contact form below</p>
            <form class="contact-form" method="post" action="contact.php">
                <p>Email <input type="text" name="email"></p>
                <p>Comment <textarea name="comment" rows="5"></textarea></p>
                <p><input type="submit" value="Send Message"></p>
            </form>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/769286/jquery.waitforimages.min.js'></script>
<script src="./script/cards.js"></script>
</body>
</html>
