<title>Insert Form</title>

<h1>Inserting Form</h1>
<?php
echo $form->create();
?>
<table>
    <tr>
        <td>
            Name
        </td>
        <td>
            <?php
            echo $form->input('name',array('label'=>''));
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
