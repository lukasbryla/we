<?php


function novaAuta(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "auta";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn -> set_charset("utf8");

    $sql = "SELECT * FROM novaauta";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class=\"col-3\">
                <div class=\"card\" style=\"width: 17rem;\">
                    <img src=\"https://img2.auto.cz/img/29/normal690/6041102_tesla-cybertruck-tesla-cybertruck-v0.jpg?v=0\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{$row['name']}</h5>
                        <p class=\"card-text\">{$row['description']}</p>
                        <p class=\"card-text\">Pouze {$row['price']}Kč.</p>
                    </div>
                </div>
            </div>
        ";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}

?>

<div class="black-spacer">
    <div class="container">
        <p class="color-white">Autorizovaný prodejce cybertrucků</p>
    </div>
</div>

<div class="container padding-bottom">

    <p>Auta na prodej</p>

    <div class="row justify-content-around">
        <?php novaAuta(); ?>
    </div>

</div>
