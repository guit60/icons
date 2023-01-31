<?php ob_start(); ?>
<dialog id="mydialog" close>
   
    <div class="bt_close" onclick="$dialog.close()">
        <img width="24px" src="img/svg/icon_square-cross-regular.svg">
    </div>
    <div class="content"></div> 
    <div class="bts">
        <button id="btnSVG-download">PNG</button>
    </div>
    </div>
</dialog>
<div class="grid-container">
    <?php echo $html_icons; ?>
</div>
<?php 
    $content = ob_get_clean();
    require('/home/tucherch/www/guillaumeroberge.com/icons/view/template.php'); 
?>