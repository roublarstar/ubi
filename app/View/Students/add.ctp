<?php echo $this->Flash->render(); ?>

<h2>Ajouter un élève</h2>

<?php
echo $this->Form->create('Student');
echo $this->Form->input('Student.firstname', array('label' => 'Prénom'));
echo $this->Form->input('Student.lastname', array('label' => 'Nom'));
echo $this->Form->input('Student.birthday', array('label' => 'Date de naissance', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 30, 'maxYear' => date('Y') - 6));
echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary'));
echo $this->Form->end();
?>