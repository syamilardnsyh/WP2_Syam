<?php
class StudentController extends CI_Controller{
    public function showInputForm() {
        include('../views/input_form.php');
    }

    public function processInput() {
        $name = $_POST['name'];
        $nis = $_POST['nis'];
        $class = $_POST['class'];
        $birthdate = $_POST['birthdate'];
        $birthplace = $_POST['birthplace'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];

        include('../views/submission_result.php');
    }
}
?>