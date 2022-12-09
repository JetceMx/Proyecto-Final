<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-Pago.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Pago</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div class="container">

        <div class="card">

            <h1>Pago con Tarjetas Bancarias</h1>

            <div class="Tarjetas">

                <div class="left">
                    <input id="pp" type="radio" name="payment" />
                    <div class="radio"></div>
                    <label for="pp"> </label>
                </div>
                <div class="right">
                    <img src="../images/Visa.png" alt="Visa" height="150" width="150" />
                </div>

                <div class="left">
                    <input id="cd" type="radio" name="payment" />
                    <div class="radio"></div>
                    <label for="cd"> </label>
                </div>

                <div class="right">
                    <img src="../images/MasterCard.png" alt="mastercard" height="150" width="150" />
                </div>

            </div>

            <div class="row cardholder">

                <div class="info">
                    <label for="cardholdername">Nombre</label>
                    <input placeholder="Introduce tu Nombre" id="cardholdername" type="text" />
                </div>

            </div>

            <div class="row number">

                <div class="info">
                    <label for="cardnumber">Numero de Tarjeta</label>
                    <input id="cardnumber" type="text" pattern="[0-9]" maxlength="16"
                        placeholder="8888-8888-8888-8888" />
                </div>

            </div>

            <div class="row details">

                <div class="left">
                    <label for="expiry-date">Expira</label>
                    <select id="expiry-date">
                        <option>MM</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>/</span>
                    <select id="expiry-date">
                        <option>YYYY</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <div class="right">
                    <label for="cvv">CVC/CVV</label>
                    <input type="text" maxlength="3" pattern="[0-9]" id="CVV" placeholder="123" />
                </div>

            </div>

            <div class="button">
                <button type="submit" id="Sub">Pagar</button>
            </div>

        </div>

    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>