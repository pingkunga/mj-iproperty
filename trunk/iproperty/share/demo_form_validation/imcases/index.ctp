<?php echo $this->Form->button('Add',array('type'=>'button','action'=>'new')); ?>
<table>
    <thead>
    <th>no</th>
    <th>title</th>
    <th>type</th>
    <th>link</th>
    <th>action</th>
    </thead>
<?php $i=0;foreach ($this->data as $rows): ?>
    <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $rows['Medias']['title']; ?></td>
        <td><?php echo $rows['Medias']['type']; ?></td>
        <td><?php echo $rows['Medias']['link']; ?></td>
        <td>
        <?php
            echo $this->Html->link('Edit',array(
                'action'=>'edit',
                $rows['Medias']['id']
            ));
            echo '&nbsp;';
            echo '&nbsp;';
            echo '&nbsp;';
            echo $this->Html->link('Delete',array(
                'action'=>'delete',
                $rows['Medias']['id']
            ));
        ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>
