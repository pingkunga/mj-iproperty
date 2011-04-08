<title>Insert/Edit Form</title>
<?php
    if(empty($this->data)){
       echo '<h2>';
       echo $html->image('images/insertdata_topic.jpg');
       echo '</h2>';
    }else{
       echo '<h2>';
       echo $html->image('images/edit_topic.jpg');
       echo '</h2>';
    }

echo $form->create(null,array('action'=>'save'));
?>
<br />
<table>
    <tr>
        <td>
            ชื่อผู้เช่า
        </td>
        <td>
            <?php
            echo $form->input('name',array('label'=>''));
            //echo $form->error('name');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            ที่อยู่ผู้เช่า
        </td>
        <td>
            <?php
            echo $form->input('address',array('label'=>''));
            //echo $form->error('address');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            หมายเลขโทรศัพท์
        </td>
        <td>
            <?php
            echo $form->input('phone',array('label'=>''));
            //echo $form->error('phone');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            หมายเลขโทรสาร
        </td>
        <td>
            <?php
            echo $form->input('fax',array('label'=>''));
           // echo $form->error('fax');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
        <td>
            <?php
            echo $form->end('submit');
            ?>
        </td>
    </tr>

</table>
