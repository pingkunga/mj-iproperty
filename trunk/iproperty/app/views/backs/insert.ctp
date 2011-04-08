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
            echo $form->input('name');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Address
        </td>
        <td>
            <?php
            echo $form->input('address');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone
        </td>
        <td>
            <?php
            echo $form->input('phone');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Fax
        </td>
        <td>
            <?php
            echo $form->input('fax');
            ?>
        </td>
    </tr>

        <?php
echo $form->end('submit');
?>
</table>
