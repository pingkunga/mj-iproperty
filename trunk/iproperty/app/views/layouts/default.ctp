<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>IProperty MJ Bangkok</title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php echo $html->css('style'); ?>
    </head>
    <body>

        <div id="wrap">

            <div id="header">
                
            </div>

            <div id="content">
                <div class ="right">
                    <?php echo $content_for_layout; ?>
                </div>
                <div class="left">

                    <h2><?php echo $html->image('images/navi_topic.jpg') ?></h2>
                    <ul>
                        <li><!--<a href="#">Home</a>-->
                            <?php echo $html->link('Home', '/pages/home') ?>
                        </li>
                        <li><!--<a href="#">About Us</a>-->
                            <?php echo $html->link('About Us', '/tests/aboutUs') ?>
                        </li>
                        <li><!--<a href="#">Product</a>-->
                            <?php echo $html->link('Product', '/tests/Product') ?>
                        </li>
                        <li><!--<a href="#">Directory</a>-->
                            <?php echo $html->link('Directory', '/tests/directory') ?>
                        </li>
                        <li><!--<a href="#">Contact Us</a>-->
                            <?php echo $html->link('Contact Us', '/tests/contact') ?>
                        </li>
                    </ul>


                </div>
            </div>

            <div style="clear: both;"> </div>

            <div id="footer">
                ©2011 Iproperty
            </div>
        </div>

    </body>
</html>