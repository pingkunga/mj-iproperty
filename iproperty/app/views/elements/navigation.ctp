<h2><?php echo $html->image('images/dateandtime_topic.jpg') ?></h2>
<embed width="170" height="170" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://www.swfstore.co.uk/uploads/c2264cc52e/clock.swf">
    <h2><?php echo $html->image('images/navi_topic.jpg') ?></h2>
    <ul id="sliding-navigation">
        <li  class="sliding-element"><!--<a href="#">Home</a>-->
            <?php
            echo $ajax->link('Home',
                    array('controller' => 'webs', 'action' => 'home'),
                    array('update' => 'showInfo')
            );
//echo $html->link('Home', array('onclick'=>'loadPage("/webs/home");'))
            ?>
        </li>
        <li  class="sliding-element"><!--<a href="#">About Us</a>-->
            <?php
            echo $ajax->link('About Us',
                    array('controller' => 'webs', 'action' => 'aboutUs'),
                    array('update' => 'showInfo')
            );
// echo $html->link('About Us', '/webs/aboutUs') ?>
        </li>
        <li  class="sliding-element"><!--<a href="#">Product</a>-->
            <?php
            echo $ajax->link('Service',
                    array('controller' => 'webs', 'action' => 'service'),
                    array('update' => 'showInfo')
            );
//echo $html->link('Service', '/webs/service') ?>
        </li>
        <li  class="sliding-element"><!--<a href="#">Directory</a>-->
            <?php
            echo $ajax->link('Directory',
                    array('controller' => 'webs', 'action' => 'directory'),
                    array('update' => 'showInfo')
            );
// echo $html->link('Directory', '/webs/directory') ?>
        </li>
        <li  class="sliding-element"><!--<a href="#">Directory</a>-->
            <?php
            echo $ajax->link('Gallery',
                    array('controller' => 'webs', 'action' => 'gallery'),
                    array('update' => 'showInfo')
            );
// echo $html->link('Gallery', '/webs/gallery') ?>
        </li>
        <li class="sliding-element"><!--<a href="#">Contact Us</a>-->
            <?php
            echo $ajax->link('Contact Us',
                    array('controller' => 'webs', 'action' => 'contact'),
                    array('update' => 'showInfo')
                    
            );
// echo $html->link('Contact Us', '/webs/contact') ?>
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
            echo $html->image('images/logo.jpg', array('width' => 0, 'height' => 0));
    ?>
    <img src="http://img5.imageshack.us/img5/3868/logowjh.jpg" style="display:none" />

