<title>Editing Form</title>

<h1>Editing Form</h1>
<?php
echo $form->create();
echo $form->hidden('id');
?>
<table width ="80%">
    <tr>
        <td>
            ชื่อ
        </td>
        <td>
            <?php
            //echo $form->input('name', array('value' => $this->data['Directorys']['name']));
            echo $form->input('name', array('label' =>''));
            ?>
        </td>
    </tr>
    <tr>
        <td>
            ที่อยู่
        </td>
        <td>
            <?php
            //echo $form->input('address', array('value' => $this->data['Directorys']['address']));
            echo $form->input('address', array('label' =>''));
            ?>
        </td>
    </tr>
    <tr>
        <td>
            โทรศัพท์
        </td>
        <td>
            <?php
            //echo $form->input('phone', array('value' => $this->data['Directorys']['phone']));
            echo $form->input('phone', array('label' =>''));
            ?>
        </td>
    </tr>
    <tr>
        <td>
           โทรสาร
        </td>
        <td>
            <?php
           // echo $form->input('fax', array('value' => $this->data['Directorys']['fax']));
            echo $form->input('fax', array('label' =>''));
            ?>
        </td>
    </tr>
    <tr>

        <td>
            <?php
            echo $form->end('save');
            ?>
        </td>
    </tr>
</table>
