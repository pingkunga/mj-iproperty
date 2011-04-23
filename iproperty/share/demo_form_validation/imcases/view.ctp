<?php
echo $this->Form->create(null,array('action'=>'save'));
echo $this->Form->hidden('id');
echo $this->Form->input('title');
echo $this->Form->input('type');
echo $this->Form->input('link');
echo $this->Form->end('Submit');
?>
