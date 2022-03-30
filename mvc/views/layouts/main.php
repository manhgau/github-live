
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ShopLilFam</title>
    <link rel="stylesheet" href="<?php echo build_css_url('main.css');?>"/>
    <link rel="stylesheet" href="<?php echo build_css_url('base.css'); ?>" />   
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>/public/fonts/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css" />

</head>
<body>   
    <?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?> 
    <?php require_once "./mvc/views/blocks/nav.php" ?>	
    <?php echo $page_content ?>
	<?php require_once "./mvc/views/blocks/footer.php" ?>   
    <?php require_once "./mvc/views/pages/model.php" ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function addCart(id){
        $.post("<?php echo build_layout_url('home/add_to_cart'); ?>",{'id':id}, function(data, status){
            //  alert("Data: " + data + "\nStatus: " + status);
            // alert(data);
         });        
    }
</script>
</html>