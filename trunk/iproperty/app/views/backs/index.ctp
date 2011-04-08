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
                       <!--directory table-->
                       <table border ="1" width ="100%">
                           <th>
                               name
                           </th>
                           <th>
                               address
                           </th>
                           <th>
                               phone
                           </th>
                           <th>
                               fax
                           </th>
                           <th>
                               manage
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

                               echo '<td>';
                               //echo $form->create();
                                //echo $form->button('edit');
                                //echo $form->button('delete');
                                echo $html->link('edit','/backs/edit/'.$row['Directorys']['id']);
                                echo '&nbsp;';
                                echo $html->link('delete','/backs/delete/'.$row['Directorys']['id']);
                                //echo $form->end();
                               echo '</td>';

                               echo '</tr>';
                           }
                           ?>
                       </table>
                       <!--directory table-->
                        <br /><br />
                        <img src="/iproperty/img/images/pic.jpg" alt="Example pic" style="border: 3px solid #ccc;" />
                        <br /><br />
                        directory articles1-2
                    </div>
                    <h2><a href="#">Example of heading 2</a></h2>
                    <div class="articles">
                        <?php
                        echo $html->link('insert',array('action'=>'insert'));
                        //echo '<a href="insert">Inserting</a>';
                         ?>
                    </div>
                

                
