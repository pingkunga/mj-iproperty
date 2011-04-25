<?php
//    echo $this->Html->css('ui-lightness/jquery-ui-1.8.11.custom.css');
//    echo $this->Javascript->link('jquery_ui/jquery-1.5.1.min.js', 'false');
//    echo $this->Javascript->link('jquery_ui/jquery-ui-1.8.11.custom.min.js', 'false');
?>
<h2><?php echo $html->image('images/aboutus_topic.jpg') ?></h2>
<!--Solving Conflict-->
<!--<script type="text/javascript">
    jQuery.noConflict();
    jQuery(function() {
        jQuery( "#tabs" ).tabs();
    });
</script>-->
<!--End Solving Conflict-->
<!--Tab-->
 
<br />
<table>
    <tr>
        <td class="set_contain">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">เกี่ยวกับเรา</a></li>
                    <li><a href="#tabs-2">พันธกิจและวิสัยทัศน์</a></li>
                    <li><a href="#tabs-3">โครงสร้างองค์กร</a></li>
                </ul>
                <div id="tabs-1">
		ก่อตั้งเมื่อปีพ.ศ.2555 ด้วยความร่วมมือของ XXX กับ YYY ผนึกกำลังสร้างความเชื่อมั่น
                </div>
                <div id="tabs-2">
                1. สร้างโกดังให้เช่าด้วยคุณภาพ
                </div>
                <div id="tabs-3">
                ประธานบริษัท 
                </div>
            </div>
            <?=$ajax->tabs('tabs', array(
                 'event' => 'mouseover'
                 
))?>
        </td>
    </tr>
</table>
<br /><br />


