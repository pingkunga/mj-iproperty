<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>::: iProperty ::: | Exclusive Warehouse for Rent!!</title>
        <meta http-equiv="Content-Language" content="Thai" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="cache-control" content="no-cache"/>

        <?php
        //<!--jQuery SlideBar-->
        echo $this->Html->css('styles.css');
        echo $this->Javascript->link('slide/jquery.js', 'false');
        echo $this->Javascript->link('slide/sliding_effect.js', 'false');
        //<!--End jQuery SlideBar-->
        ?>

        <?php       
        //Global CSS theme
        echo $html->css('style');

        //<!--jQuery ui-->
        echo $this->Html->css('ui-lightness/jquery-ui-1.8.11.custom.css');
        echo $this->Javascript->link('jquery_ui/jquery-1.5.1.min.js', 'false');
        echo $this->Javascript->link('jquery_ui/jquery-ui-1.8.11.custom.min.js', 'false');
        //<!--End jQuery ui tab-->
        //<!--Prototype Light Box-->
        echo $this->Html->css('lightbox');
        echo $this->Javascript->link('lightbox/prototype', 'false');
        echo $this->Javascript->link('lightbox/scriptaculous.js?load=effects,builder', 'false');
        echo $this->Javascript->link('lightbox/lightbox', 'false');
        //<!--End Prototype Light Box-->
        ?>
<!--         <script type="text/javascript">
             jQuery.noConflict();
             jQuery(document).ready(function () {
                 jQuery(function loadPage(url){
//                alert(url);
                   jQuery("#showInfo").load(url);
                 });
              });
//             
//                
//             });
         </script>-->
<!--        jQuery ui config
        <style type="text/css">
            /* ปรับขนาดตัวอักษรของข้อความใน tabs
            สามารถปรับเปลี่ยน รายละเอียดอื่นๆ เพิ่มเติมเกี่ยวกับ tabs
            ในไฟล์ css/smoothness/jquery-ui-1.7.2.custom.css หัวข้อ tabs
            */
            .ui-tabs{
                font-family:tahoma;
                font-size:11px;
            }
        </style>
        <script type="text/javascript">
            $(function(){
                // แทรกโค้ต jquery
                // กำหนดแบบทั่วไป
                $("#tabs").tabs();

                // กำหนดแบบเลื่อนหัวข้อซ้าย ขวาได้
                //	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});

                // กำหนดแบบให้ซ่อนรายละเอียด เมื่อคลิกที่หัวข้อแท็บซ้ำ
                // $("#tabs").tabs({collapsible: true});

                // กำหนดให้แสดงรายละเอียดเมื่อนำเมาท์มาอยู่เหนือหัวข้อแท็บ
                // $("#tabs").tabs({event: 'mouseover'});
            });
        </script>-->


    </head>
    <body>
        <center>
            <table width="804">
                <tr border="0" bgcolor="#ffffff">
                    <td>
                        <div id="wrap">
                           <div id="header">

                            </div>
                            <br />
                            <center><?php echo $html->image('images/sorry.gif') ?></center>
                            

                            <div id="content" >
                                <div  id="showInfo" class ="right">
                                    <?php echo $content_for_layout; ?>
                                </div>
                                <div class="left">
                                    <?php echo $this->element('navigation'); ?>
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