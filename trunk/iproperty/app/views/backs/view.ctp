<title>Insert/Edit Form</title>
<?php
    if(empty($this->data)){
       echo '<h2>';
       echo $html->image('images/insertdata_topic.jpg');
       echo '</h2>';
    }else{
       echo '<h2>';
       //echo $html->image('images/insertdata_topic.jpg');
       echo '</h2>';
    }
?>
<?php
echo $form->create(null,array('action'=>'save'));
?>
<table>
    <tr>
        <td>
            Name
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
            Address
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
            Phone
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
            Fax
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
