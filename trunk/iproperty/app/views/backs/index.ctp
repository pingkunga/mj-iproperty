<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

                    <h2><?php echo $html->image('images/homeback_topic.jpg') ?></h2>

                    <div class="articles">
                    <br />
                    ตารางแสดงสมาชิกที่ติดต่อเช่าโกดัง
                       <br/><br/>
                       </div>
                       <!--directory table-->
                       <table width ="100%" class="talang">
                           <th class="talang">
                               ชื่อผู้เช่า
                           </th>
                           <th class="talang">
                               ที่อยู่ผู้เช่า
                           </th>
                           <th>
                               หมายเลขโทรศัพท์
                           </th>
                           <th class="talang">
                               หมายเลขโทรสาร
                           </th>
                           <th class="talang">
                               จัดการ
                           </th>
                           <?php
                           foreach($this->data as $row){
                               echo '<tr>';

                               echo '<td class="talang">';
                                echo $row['Directorys']['name'];
                               echo '</td>';

                               echo '<td class="talang">';
                                echo $row['Directorys']['address'];
                               echo '</td>';

                               echo '<td class="talang">';
                                echo $row['Directorys']['phone'];
                               echo '</td>';

                               echo '<td class="talang">';
                                echo $row['Directorys']['fax'];
                               echo '</td>';

                               echo '<td class="talang">';
                               //echo $form->create();
                                //echo $form->button('edit');
                                //echo $form->button('delete');
                                echo $html->link('edit','/backs/edit/'.$row['Directorys']['id']);
                                echo '&nbsp;';
                                echo $html->link('delete','/backs/delete/'.$row['Directorys']['id'],null,'want to delete???');
                                //echo $form->end();
                               echo '</td>';

                               echo '</tr>';

                           }
                           ?>
                       </table>
                       <?php
                       echo '<br />';
                       echo $html->link('เพิ่มข้อมูล',array('action'=>'insert'));
                       ?>
                        
               
                

                
