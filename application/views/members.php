<html>
    <head>
        <title>user</title>
    </head>
    <body>
        <div class="container">
            <div>
                <h1><?php echo $this->session->all_userdata()['email']; ?></h1>
                <a href='<?php echo base_url()."index.php/main/logout"?>'>Logout</a></div>
                       
        </div>
        
        <div>
            <div style="float:left">
                <a href="<?php echo base_url()."index.php/product";?>"><img src="<?php echo base_url();?>style/images/red.jpg"> </a>
            </div>
            <div style="float:left">
                <a href ="<?php echo base_url()."index.php/product/index/Veg";?>"><img src="<?php echo base_url();?>style/images/green.jpg" style="padding-left: 200px"></a>
            </div>
            
        </div>
        
    </body>


</html>


