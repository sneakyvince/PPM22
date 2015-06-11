<?php session_start(); ?>

<head>
    <?php include( 'php/head.php'); ?>
</head>

<body>

    <div class="splash">
        <img src="img/logo.png" id="splashlogo">
        <h1 id="splashtekst">Five Elephants</h1>
    </div>

    <?php include( 'php/menu.php'); ?>
    <div class="container">
        <div class="content">
            <img src="http://placehold.it/921x400" />
            <h1>About Us</h1>

            <form action="" method="post">
                <h1>Bericht</h1>
                <input type="text" name="bericht" id="bericht">
                <h1>Naam</h1>
                <input type="text" name="naam" id="naam">
                <h1>E-mail</h1>
                <input type="text" name="email" id="email">
                <div>
                    <input type="button" value="verstuur" id="checkall" onclick="checkAll()">
                    </td>
                </div>
            </form>
</body>
<?php include( 'php/footer.php'); ?>