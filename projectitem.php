<?php session_start();
require_once( 'couch/cms.php' );
?>
<cms:template hidden='0' clonable='1' order='4' executable='0' />
<!doctype HTML>
<html>

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
            <img src="<cms:editable name='image' width='920' height='400' type='image' />" id="bigimage" />
            <h1><cms:editable name='titel' label='Titel Project' desc='Bijvoorbeeld: Loods 8' type='text' /></h1>
            <cms:editable name='content' label='Tekst Homepagina' desc='Tekst' type='richtext' />

            <div class="thumbnailcontainer">
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/1.jpg" src="img/<cms:show k_page_title />/thumbs/1.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/2.jpg" src="img/<cms:show k_page_title />/thumbs/2.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/3.jpg" src="img/<cms:show k_page_title />/thumbs/3.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/4.jpg" src="img/<cms:show k_page_title />/thumbs/4.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/5.jpg" src="img/<cms:show k_page_title />/thumbs/5.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/6.jpg" src="img/<cms:show k_page_title />/thumbs/6.jpg" />
                <img class="thumbnail" onclick="changePic(this.alt);" alt="img/<cms:show k_page_title />/7.jpg" src="img/<cms:show k_page_title />/thumbs/7.jpg" />
            </div>

            <?php include( 'php/footer.php'); ?>
        </div>
</body>

</html>
    <?php COUCH::invoke(); ?>