<?php

try {

    $db = new mysqli("localhost", "root", "", "message_sample_db");
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $is_done = $db->query("INSERT INTO `messages`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

    if ($is_done == TRUE) {
        echo "<h2>Thank you for your message</h2>";
    }
}

?>
<section class="message" id="cnt">
    <h2>Contact Us</h2>
    <hr>

    <form method="post" class="message-request" action="">
        <p>Name</p>
        <input type="text" name="name" placeholder="enter your name" require><br><br>
        <p>Email</p>
        <input type="email" name="email" placeholder="enter email" require><br><br>
        Message
        <textarea name="msg" cols="30" rows="10"></textarea><br><br>
        <input type="submit" class="submit-form" value="Send" placeholder="enter your name">

    </form>
</section>

<span class="linija"></span>