<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>


                    <h2><?php echo $html->image('images/directory_topic.jpg') ?></h2>
                    <div class="articles">
                        แสดงรายชื่อผู้ขอเช่าโกดัง
                    </div>
                    <br />
                       <table border ="1" width ="100%">
                           <th>
                               ชื่อผู้เช่า
                           </th>
                           <th>
                               ที่อยู่ผู้เช่า
                           </th>
                           <th>
                               หมายเลขโทรศัพท์
                           </th>
                           <th>
                               หมายเลขโทรสาร
                           </th>

                           <?php
                           foreach($this->data as $row){
                               echo '<tr>';

                               echo '<td>';
                                echo $row['Directorys']['name'];
                               echo '</td>';

                               echo '<td>';
                                echo $row['Directorys']['address'];
                               echo '</td>';

                               echo '<td>';
                                echo $row['Directorys']['phone'];
                               echo '</td>';

                               echo '<td>';
                                echo $row['Directorys']['fax'];
                               echo '</td>';

                              

                               echo '</tr>';
                           }
                           ?>
                       </table>
                        <br /><br />
                

                
