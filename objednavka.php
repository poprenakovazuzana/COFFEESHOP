<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Coffee Time - Objednajte si</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php include './components/header.php';?>

<main class="body-form">
 <form>
    <label for="fname">First name:</label>
  <input type="text"  name="fname">
  <label for="lname">Last name:</label>
  <input type="text"  name="lname">
  <label for="email">Email:</label>
  <input type="text"  name="email">
  <label for="tel">Tel. číslo:</label>
  <input type="tel"  name="tel.čislo" placeholder="+421...">
  <label for="adresa">Adresa:</label>
  <input type="text"  name="adresa" placeholder="Zimná 58/4, Spišská Nová Ves, 05201">
  <label for="datum">Dátum:</label>
  <input type="date" name="nardátum" required></td>

<br>

 <label for="objednavka">čo si chcete obejdnať:</label>
<label><input type="radio" name="objednavka" value="kava">Káva</label>
  <label><input type="radio" name="objednavka" value="jedlo">Jedlo</label>

<br>

 <label for="objednavka">Ponuka Kávy:</label>
  <label><input type="checkbox" name="ponuka-kava" value=" Espresso"> Espresso</label>
                    <label><input type="checkbox" name="ponuka-kava" value="Espresso Lungo"> Espresso Lungo</label>
                    <label><input type="checkbox" name="ponuka-kava" value="Cappuccino">Cappuccino </label>
                    <label><input type="checkbox" name="ponuka-kava" value="Latte"> Latte</label>
                     <label><input type="checkbox" name="ponuka-kava" value="Flat White"> Flat White</label>

                     <br>

<label for="objednavka">Ponuka jedla:</label>
  <label><input type="checkbox" name="ponuka-kava" value=" Čokoládová brownie"> Čokoládová brownie</label>
                    <label><input type="checkbox" name="ponuka-kava" value=" Čokoládové coocie"> Čokoládové coocie</label>
                    <label><input type="checkbox" name="ponuka-kava" value="Malinová coocie">Malinová coocie </label>
                    <label><input type="checkbox" name="ponuka-kava" value="Karamelový chesecake"> Karamelový chesecake</label>
                     <label><input type="checkbox" name="ponuka-kava" value="Red velvet"> Red velvet</label>






  <input type="submit" value="Submit">
  <input type="submit" value="Submit">

</form> 








</main>







    <?php include './components/footer.php';?>
</body>