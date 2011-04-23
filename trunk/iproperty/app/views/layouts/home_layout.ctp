<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>::: iProperty ::: | Exclusive Warehouse for Rent!!</title>
        <meta http-equiv="Content-Language" content="Thai" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--        <META HTTP-EQUIV="Refresh" CONTENT="30;URL=/web/webs/home">-->


        <?php


            //<!--Easy slider jquery-->
            echo $this->Html->css('screen.css');
            echo $this->Javascript->link('easyslider/jquery.js', 'false');
            echo $this->Javascript->link('easyslider/easySlider1.7.js', 'false');
            //<!--End Easy slider jquery-->

            echo $this->Html->css('style.css');
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#slider").easySlider({
                    auto: true,
                    continuous: true
                });
            });
        </script>
    </head>
    <body>
        <center>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
            <table width="804">
                <tr border="0" bgcolor="#ffffff">
                    <td>
                        <div class ="content">
                             <?php echo $content_for_layout; ?>
                        </div>
                        <div style="clear: both;"> </div>

                        <div id="footer">
                            © 2011 All Rights Reserved | Iproperty
                        </div>

                    </td>
                </tr>
            </table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
        </center>

    </body>
</html>