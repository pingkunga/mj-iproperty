<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>::: iProperty ::: | Exclusive Warehouse for Rent!!</title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php echo $html->css('style'); ?>
    </head>
    <body>
<center>
        <table>
            <tr border="0" bgcolor="#ffffff">
                <td>
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
                            <?php echo $html->link('Service', '/tests/service') ?>
                        </li>
                        <li><!--<a href="#">Directory</a>-->
                            <?php echo $html->link('Directory', '/tests/directory') ?>
                        </li>
                        <li><!--<a href="#">Directory</a>-->
                            <?php echo $html->link('Gallery', '/tests/gallery') ?>
                        </li>
                        <li><!--<a href="#">Contact Us</a>-->
                            <?php echo $html->link('Contact Us', '/tests/contact') ?>
                        </li>
                        <br />
                    </ul>


                </div>
            </div>

            <div style="clear: both;"> </div>

            <div id="footer">
                © 2011 All Rights Reserved | Iproperty
            </div>
        </div>
                </td>
            </tr>
      </table>
    </center>
    </body>
</html>