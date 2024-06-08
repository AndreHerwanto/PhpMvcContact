<?php
// controllers/ContactController.php

require_once 'models/Contact.php';

class ContactController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleFormSubmit();
        } else {
            $this->showForm();
        }
    }

    private function handleFormSubmit() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $contact = new Contact($name, $email, $message);
        $contact->save();

        $_SESSION['success_message'] = 'Your message has been sent successfully.';
        header('Location: index.php');
        exit();
    }

    private function showForm() {
        include 'views/index.php';
    }
}
?>
