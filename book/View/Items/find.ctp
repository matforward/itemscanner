<?php
echo $this->Form->create('Item', array(
    'url' => array_merge(array('action' => 'find'), $this->params['pass'])
));
echo $this->Form->input('nama', array('div' => false));
echo $this->Form->submit(__('Search'), array('div' => false));
echo $this->Form->end();
?>