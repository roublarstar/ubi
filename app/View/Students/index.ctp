<h2>Liste des élèves</h2>

<?php  
    // info on student treatment
    echo $this->Flash->render();
    
    // Btn add student
    echo $this->Html->link('Ajouter un élève','/students/add',array('class'=> 'btn btn-primary'));
?>

<table class="table table-responsive">
    <thead>
      <tr>
        <th>#</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Date de Naissance</th>
        <th>Notes</th>
        <th>Modifier</th>
        <th>Suppr.</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(is_array($students) && count($students) > 0) {
        foreach ($students as $student) { ?>
          <tr>
            <td><?php echo $student['Student']['id']; ?></td>
            <td><?php echo $student['Student']['firstname']; ?></td>
            <td><?php echo $student['Student']['lastname']; ?></td>
            <td>
              <?php
              // format date d/m/y
              $birthday = new DateTime($student['Student']['birthday']);
              echo $birthday->format('d/m/Y');
              ?>
            </td>
            <td><?php echo $this->Html->link($this->Html->tag('i', null, array('class' => 'icon-star-empty')), '/grades/add/' . $student['Student']['id'], array('escape' => false, 'title' => 'Noter')); ?></td>
            <td><?php echo $this->Html->link($this->Html->tag('i', null, array('class' => 'icon-edit')), '/students/edit/' . $student['Student']['id'], array('escape' => false, 'title' => 'Modifier')); ?></td>
            <td><?php echo $this->Html->link($this->Html->tag('i', null, array('class' => 'icon-trash')), '/students/delete/' . $student['Student']['id'], array('escape' => false, 'title' => 'Supprimer'), array("êtes-vous sûr de vouloir supprimer cet élèves et toutes ses notes ?")); ?></td>
          </tr>
        <?php
        }
      }else{
        ?>
        <tr>
          <td colspan="7">Pas d'élève en base</td>
        </tr>
        <?php
      }
      ?>
    </tbody>
</table>