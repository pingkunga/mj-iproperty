<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>::: iProperty ::: | Exclusive Warehouse for Rent!!</title>
        <meta http-equiv="Content-Language" content="Thai" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php
        echo $this->Html->css('styles.css');
        echo $this->Javascript->link('slide/jquery.js', 'false');
        echo $this->Javascript->link('slide/sliding_effect.js', 'false');

        echo $this->Html->css('lightbox');
        echo $this->Javascript->link('js/prototype', 'false');
        echo $this->Javascript->link('js/scriptaculous.js?load=effects,builder', 'false');
        echo $this->Javascript->link('js/lightbox', 'false');
        echo $html->css('style');
        
        //slide-bar

        ?>
    </head>
    <body>
        <center>
            <table width="804">
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
                                    <h2><?php echo $html->image('images/dateandtime_topic.jpg') ?></h2>
                                    <embed width="170" height="170" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://www.swfstore.co.uk/uploads/c2264cc52e/clock.swf">
                                    <h2><?php echo $html->image('images/navi_topic.jpg') ?></h2>
                                    <ul id="sliding-navigation">
                                        <li  class="sliding-element"><!--<a href="#">Home</a>-->
                                            <?php echo $html->link('Home', '/webs/home') ?>
                                        </li>
                                        <li  class="sliding-element"><!--<a href="#">About Us</a>-->
                                            <?php echo $html->link('About Us', '/webs/aboutUs') ?>
                                        </li>
                                        <li  class="sliding-element"><!--<a href="#">Product</a>-->
                                            <?php echo $html->link('Service', '/webs/service') ?>
                                        </li>
                                        <li  class="sliding-element"><!--<a href="#">Directory</a>-->
                                            <?php echo $html->link('Directory', '/webs/directory') ?>
                                        </li>
                                        <li  class="sliding-element"><!--<a href="#">Directory</a>-->
                                            <?php echo $html->link('Gallery', '/webs/gallery') ?>
                                        </li>
                                        <li class="sliding-element"><!--<a href="#">Contact Us</a>-->
                                            <?php echo $html->link('Contact Us', '/webs/contact') ?>
                                        </li>
                                    </ul>
                                        <br />
                                        <?php
                                            $ec_username = 'iproperty'; // <--- your username

                                            if (!$ec_fsock = fsockopen('www.easycounter.com', 80, $errno, $errstr, 2)) {
                                                echo '<img src="http://www.easycounter.com/images/error.png" >';
                                            } else {
                                                fputs($ec_fsock, "GET /php.counter.php?username=" . urlencode($ec_username) . " HTTP/1.0\r\n" .
                                                        "Host:www.easycounter.com\r\n\r\n");
                                                $ec_buffer = '';
                                                while (!feof($ec_fsock))
                                                    $ec_buffer .= fgets($ec_fsock, 1024);
                                                echo substr($ec_buffer, strpos($ec_buffer, "\n\r\n") + 3);
                                                fclose($ec_fsock);
                                            }
                                        ?>
                                        <br />
                                        <script language="javascript">function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><style> html .fb_share_link { padding:2px 0 0 20px; height:16px; background:url(http://static.ak.facebook.com/images/share/facebook_share_icon.gif?6:26981) no-repeat top left; }</style><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="fb_share_link">แบ่งปัน</a>
                                        <?php 
                                             echo $html->image('images/logo.jpg',array('width'=>0,'height'=>0));
                                        ?>
                                        <img src="http://img5.imageshack.us/img5/3868/logowjh.jpg" style="display:none" />
                                    
                                </div>
                            </div>

                            <div style="clear: both;"> </div>

                            <div id="footer">
                                © 2011 All Rights Reserved | Iproperty <br /></div>
                        </div>
                    </td>
                </tr>
            </table>
        </center>

    </body>
</html>