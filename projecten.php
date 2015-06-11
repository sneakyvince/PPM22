<?php session_start();
require_once( 'couch/cms.php' );
?>
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
            <img src="<cms:editable name='image' label='Afbeelding' width='900' height='400' type='image' />" id="bigimage" />
            <h1><cms:editable name='titel' label='Titel Pagina' desc='Bijvoorbeeld: Ja.' type='text' /></h1>
            <cms:editable name='content' label='Tekst Pagina' desc='Tekst' type='richtext' />


            
            
            
            
                        
                        
                    					<cms:pages masterpage='projectitem.php' orderby='publish_date' order='asc'>
            <div class="projectitem">
                <a href="<cms:show k_page_link  />"><img class="resize" src="img/<cms:show titel />/vierkant.jpg">
                </a>
                <h2 class="projectitemtitle"><cms:show titel /></h2>
            </div>
					</cms:pages>    

            
            <!--
            
            
            
            <div class="projectitem">
                <a href="<cms:show k_page_url />"><img class="resize" src="img/<cms:show titel />/vierkant.jpg">
                </a>
                <h2 class="projectitemtitle"><cms:show titel /></h2>
            </div>
            <div class="projectitem">
                <a href="#"><img class="resize" src="http://placehold.it/425x425">
                </a>
                <h2 class="projectitemtitle">Fusion</h2>
            </div>
            <div class="projectitem">
                <a href="#"><img class="resize" src="http://placehold.it/425x425">
                </a>
                <h2 class="projectitemtitle">Metrieken</h2>
            </div>
            <div class="projectitem">
                <a href="#"><img class="resize" src="http://placehold.it/425x425">
                </a>
                <h2 class="projectitemtitle">Hendriks</h2>
            </div>-->

            <?php include( 'php/footer.php'); ?>
        </div>
</body>

</html>
        <?php COUCH::invoke(); ?>