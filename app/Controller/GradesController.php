<?php

/**
 * Description of GradesController
 *
 * @author pierre
 */
class GradesController extends AppController
{

    /**
     * To use more models
     * @var type
     */
    public $uses = array('Grade', 'Student');

    /**
     * Add grade to student
     * @param int $studentId
     */
    public function add($studentId)
    {
        // on post test and save post data
        if ($this->request->is('post')) {
            // set data
            $this->Grade->set($this->request->data);
            // validate data
            if ($this->Grade->validates()) {
                // save to db
                if ($this->Grade->save()) {
                    // validation message
                    $this->Flash->set("Note enregistrée !", array('element' => 'info', 'params' => array('class' => 'alert-success')));
                    // redirect to secure the post request
                    $this->redirect(array('controller' => 'grades', 'action' => 'add', $this->Grade->field('student_id')));
                } else {
                    // error message
                    $this->Flash->set("Erreur d'enregistrement: Merci de contacter le support technique: support@...", array('element' => 'info', 'params' => array('class' => 'alert-error')));
                }
            } else {
                // error message
                $this->Flash->set("Note non enregistée: certains champs ne sont pas valides", array('element' => 'info', 'params' => array('class' => 'alert-warning')));
            }
        }

        // send student data to the view
        if ($student = $this->Student->findById(intval($studentId))) {
            $this->set('student', $student);
        } else {
            // student not found, return to student list
            $this->redirect(array('controller' => 'students', 'action' => 'index'));
        }

    }

}
