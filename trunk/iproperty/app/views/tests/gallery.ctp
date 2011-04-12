<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
                    <!--<a href="images/image-1.jpg" rel="lightbox" title="my caption">image #1</a>-->
                    <h2><?php echo $html->image('images/gallery_topic.jpg') ?></h2>

                        <br />
                        <table class="talang">
                            <tr>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware1.jpg', $this->webroot.'img/images/ware1.jpg', ''); ?>
                                </td>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware2.jpg', $this->webroot.'img/images/ware2.jpg', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware3.jpg', $this->webroot.'img/images/ware3.jpg', ''); ?>
                                </td>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware4.jpg', $this->webroot.'img/images/ware4.jpg', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware5.jpg', $this->webroot.'img/images/ware5.jpg', ''); ?>
                                </td>
                                <td>
                                    <?php echo $lightbox->img($this->webroot.'img/images/thumb_ware7.jpg', $this->webroot.'img/images/ware7.jpg', ''); ?>
                                </td>
                            </tr>
                        </table>