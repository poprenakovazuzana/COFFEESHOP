    <!-- menu.php -->
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Coffee Time - Menu</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

    <?php include './components/header.php';?>



    <main class="menu-container">
        <h1 class="menu-title">Menu</h1>

        <div class="menu-product menu-product-a">
            <img class="menu-product-image" src="/images/coffees.jpg"/>
            <div class="menu-product-desc">
                 <table class="menu-product-table">
                    <tr>
                        <th>KÁVA</th>
                        <th>CENA</th>
                    </tr>
                    <tr>
                        <td>Espresso</td>
                        <td>1.50 €</td>
                    </tr>
                    <tr>
                        <td>Espresso Lungo</td>
                        <td>1.80 €</td>
                    </tr>
                    <tr>
                        <td>Cappuccino</td>
                        <td>3.00 €</td>
                    </tr>
                    <tr>
                        <td>Latte</td>
                        <td>3.20 €</td>
                    </tr>
                    <tr>
                        <td>Flat White</td>
                        <td>3.50 €</td>
                    </tr>
                  
           
                </table>
            </div>
        </div>
    
        <div class="menu-product menu-product-b">
            <div class="menu-product-desc">
                 <table class="menu-product-table">
                    <tr>
                        <th>KOLÁČE</th>
                        <th>CENA</th>
                    </tr>
                    <tr>
                        <td> Čokoládová brownie</td>
                        <td>3.50 €</td>
                    </tr>
                    <tr>
                        <td> Čokoládové coocie</td>
                        <td>3.00 €</td>
                    </tr>
                    <tr>
                        <td>Malinová coocie</td>
                        <td>3.50 €</td>
                    </tr>
                    <tr>
                        <td> Karamelový chesecake</td>
                        <td>3.00 €</td>
                    </tr>
                    <tr>
                        <td>Red velvet</td>
                        <td>3.50 €</td>
                    </tr>
                  
           
                </table>
            </div>
            <img class="menu-product-image" src="/images/snacks.jpg"/>

        </div>

     

    
    </main>

    <?php include './components/footer.php';?>


</body>
</html>
