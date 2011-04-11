<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<h2><?php echo $html->image('images/contactus_topic.jpg') ?></h2>
<br />
<div class="data1">
    บริษัท ไอ พร๊อบเปอร์ตี้  จำกัด<br />
    ที่อยู่:23 ถนนทรานซิสเตอร์ แขวงหนองทรายขาว เขตเมือง กทม. 12345 <br />
    โทร. 02-123-4567 <br />
    แฟกซ์. 02-1234567 <br />
    อีเมล์.
</div>
<br />
<!--map-->
<div class="map">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=12.715786,101.16138&amp;daddr=&amp;hl=th&amp;geocode=&amp;mra=dme&amp;mrsp=0&amp;sz=15&amp;sll=12.714949,101.163182&amp;sspn=0.019466,0.027595&amp;ie=UTF8&amp;ll=12.714949,101.163182&amp;spn=0.014652,0.018239&amp;z=15&amp;output=embed"></iframe>
    <br /><?php
echo $html->image("images/mag_icon.gif", array('width' => '30', 'height' => '30'));
?><a href="http://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=12.715786,101.16138&amp;daddr=&amp;hl=th&amp;geocode=&amp;mra=dme&amp;mrsp=0&amp;sz=15&amp;sll=12.714949,101.163182&amp;sspn=0.019466,0.027595&amp;ie=UTF8&amp;ll=12.714949,101.163182&amp;spn=0.014652,0.018239&amp;z=15" target="_blank">ดูแผนที่ขนาดใหญ่ขึ้น</a>
    <?php
    echo $html->image("images/pdf_icon.gif"
                    , array('width' => '30', 'height' => '30'));
    ?><?php echo $html->link(' โหลดแผนที่แบบ pdf', '/files/MAP.pdf',array('target'=>'_blank')) ?>
</div>
<br /><br />




