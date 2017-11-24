<?php

/**
 * Description of StudentsController
 *
 * @author pierre
 */
class StudentsController extends AppController
{

    /**
     * List of students
     */
    public function index()
    {
        // Get students to display in table
        $students = $this->Student->find('all');
        // send data to the view
        $this->set('students', $students);
    }

    /**
     * Add new student
     * @return CakeResponse|null
     */
    public function add()
    {
        // add student treatment
        if ($this->request->is('post')) {
            // set student data
            $this->Student->set($this->request->data);
            // validate this data
            if ($this->Student->validates()) {
                if ($this->Student->save()) {
                    $this->Flash->set("Elève ajouté avec succès !", array('element' => 'info', 'params' => array('class' => 'alert-success')));
                    return $this->redirect(array('controller' => 'students', 'action' => 'index'));
                } else {
                    $this->Flash->set("une erreur est survenue lors de l'enregistrement de l'élève", array('element' => 'info', 'params' => array('class' => 'alert-error')));
                }
            } else {
                $this->Flash->set("Merci de renseigner correctement les champs", array('element' => 'info', 'params' => array('class' => 'alert-warning')));
            }
        }
    }

    /**
     * Edit student
     * @param $studentId
     * @return CakeResponse|null
     */
    public function edit($studentId)
    {
        // edit student treatment
        if ($this->request->is('post') || $this->request->is('put')) {
            // set data
            $this->Student->set($this->request->data);
            // we must redefine student for the view
            $this->set('student', $this->Student->data);
            // validate data
            if ($this->Student->validates()) {
                // save to db
                if ($this->Student->save()) {
                    // validation message
                    $this->Flash->set("informations mises à jour !", array('element' => 'info', 'params' => array('class' => 'alert-success')));
                    // return to student list
                    return $this->redirect(array('controller' => 'students', 'action' => 'index'));
                } else {
                    // error message db
                    $this->Flash->set("une erreur est survenue lors de la mise à jour des informations", array('element' => 'info', 'params' => array('class' => 'alert-error')));
                }
            } else {
                // error message fields
                $this->Flash->set("Merci de renseigner correctement les champs", array('element' => 'info', 'params' => array('class' => 'alert-warning')));
            }

        } else {
            // find the student in db
            if ($student = $this->Student->findById($studentId)) {
                // send to the view
                $this->set('student', $student);
            } else {
                // student not found, redirect to list
                return $this->redirect(array('controller' => 'students', 'action' => 'index'));
            }
        }
    }

    /**
     * Delete student
     * @param $studentId
     * @return CakeResponse|null
     */
    public function delete($studentId)
    {
        // delete this student with all data related (grades)
        if ($this->Student->delete($studentId, true)) {
            // success message
            $this->Flash->set("l'élève a bien été supprimé!", array('element' => 'info', 'params' => array('class' => 'alert-success')));
        } else {
            // error message
            $this->Flash->set("Erreur lors de la suppression de l'élève", array('element' => 'info', 'params' => array('class' => 'alert-error')));
        }
        // redirect to student list
        return $this->redirect(array('controller' => 'students', 'action' => 'index'));
    }

}
