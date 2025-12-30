<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Coffee Time - Objednajte si</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php include './components/header.php';?>

   

<main class="body-form  ">
   <h1>OBJEDNAJTE SI</h1>
 <form class="main-form" method="post" action="./orders/create.php">
    <label for="fname">First name:</label>
  <input type="text"  name="fname" required>
  <label for="lname">Last name:</label>
  <input type="text"  name="lname" required>
  <label for="email">Email:</label>
  <input type="text"  name="email" required>
  <label for="tel">Tel. číslo:</label>
  <input type="tel"  name="tel" placeholder="+421..." required>
  <label for="adresa">Adresa:</label>
  <input type="text"  name="address" placeholder="Zimná 58/4, Spišská Nová Ves, 05201" required>
  <label for="datum">Dátum:</label>
  <input type="date" name="date" required></td>

<br>
<p class="section-title">Objednávku chcem:</p>
<div class="options-box">
<label><input type="radio" name="order-type" value="kaviareň">Vyzdvihnúť v kaviarni </label>
<br>
  <label><input type="radio" name="order-type" value="domov">Doručiť domov</label>
</div>


 <p class="section-title">Ponuka kávy:</p>
 <div class="options-box">
  <label><input type="checkbox" name="order-item" value="Espresso"> Espresso</label>
                    <label><input type="checkbox" name="order-item" value="Espresso Lungo"> Espresso Lungo</label>
                    <label><input type="checkbox" name="order-item" value="Cappuccino">Cappuccino </label>
                    <label><input type="checkbox" name="order-item" value="Latte"> Latte</label>
                     <label><input type="checkbox" name="order-item" value="Flat White"> Flat White</label>
</div>
                     

<p class="section-title">Ponuka koláčov:</p>
<div class="options-box">
  <label><input type="checkbox" name="order-extra" value=" Čokoládová brownie"> Čokoládová brownie</label>
                    <label><input type="checkbox" name="order-extra" value=" Čokoládové coocie"> Čokoládové coocie</label>
                    <label><input type="checkbox" name="order-extra" value="Malinová coocie">Malinová coocie </label>
                    <label><input type="checkbox" name="order-extra" value="Karamelový chesecake"> Karamelový chesecake</label>
                     <label><input type="checkbox" name="order-extra" value="Red velvet"> Red velvet</label>

</div>

<br>


  <input type="submit" value="Submit">

</form> 








   <div>
        <a href="/orders">view orders</a>
    </div>


</main>







    <?php include './components/footer.php';?>
</body>