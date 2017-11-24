<?php echo $this->Flash->render(); ?>

<h2>Modifier les informations de l'élève #<?php echo $student['Student']['id'] ?></h2>

<?php
echo $this->Form->create('Student');
echo $this->Form->input('Student.firstname', array('label' => 'Prénom', 'value' => $student['Student']['firstname']));
echo $this->Form->input('Student.lastname', array('label' => 'Nom', 'value' => $student['Student']['lastname']));
echo $this->Form->input('Student.birthday', array('label' => 'Date de naissance', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 30, 'maxYear' => date('Y') - 6));
echo $this->Form->hidden('Student.id', array('value' => $student['Student']['id']));
echo $this->Form->button('Modifier', array('type' => 'submit', 'class' => 'btn btn-primary'));
echo $this->Form->end();
?>
