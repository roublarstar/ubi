<?php
// info on grade treatment
echo $this->Flash->render();
?>

<h2><?php echo $student['Student']['firstname'] . ' ' . $student['Student']['lastname']; ?></h2>

<hr>

<h3>Ajouter une note</h3>

<?php
echo $this->Form->create('Grades');
echo $this->Form->input('Grade.subject', array('label' => 'Matière'));
echo $this->Form->input('Grade.rate', array('label' => 'Note'));
echo $this->Form->hidden('Grade.student_id', array('value' => $student['Student']['id']));
echo $this->Form->button('Ajouter', array('type' => 'submit', 'class' => 'btn btn-primary'));
echo $this->Form->end();
?>

<hr>

<h3>Historique des notes</h3>

<table class="table table-responsive">
    <thead>
    <tr>
        <th>Matière</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (is_array($student['Grade']) && count($student['Grade']) > 0) {
        foreach ($student['Grade'] as $grade) { ?>
            <tr>
                <td><?php echo $grade['subject']; ?></td>
                <td><?php echo $grade['rate']; ?></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="7">L'élève n'a pas encore de note</td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>