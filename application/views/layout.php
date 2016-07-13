<!DOCTYPE html>
<html>
    <head>
        <?php include SRC_VIEW.'/parts/head.php';?>
        <style>
            .content{width:900px; margin:0 auto;}
            .header, .view, .footer{border:1px solid #006699; margin:8px; }
            .header, .footer{ text-align: center;}
            .form-login{margin:20px auto; width:250px;}
            .lbl{float:left; width:40%; }
            .inp{float:right; width:50%; }
            .clear{clear:both;}
            
            table td{ border:1px solid #006699;}
        </style>
        
    </head>
    <body>
        <div class="content">
        <?php include SRC_VIEW.'/parts/header.php';?>
        <?php if(key_exists('rpt', $params)):?>
            <div style="padding:10px; border:1px solid #ff0000; font-weight:bold; text-align:center;">
                <?php echo $params['rpt'];?>
            </div>
        <?php endif;?>
        <div class="view">
            <?php include SRC_VIEW."/parts/contents/$acti.php";?>
        </div>
        <?php include SRC_VIEW.'/parts/footer.php';?>
        </div>
    </body>
</html>
