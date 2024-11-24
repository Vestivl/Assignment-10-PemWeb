<?php
require_once 'controller/HomeController.php';

$controller = new HomeController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        $index = $_POST['index'] ?? '';
        $controller->deleteJournal($index);
    } else {
        $name = $_POST['name'] ?? '';
        $year = $_POST['year'] ?? '';
        $controller->addJournal($name, $year);
    }
}

// Panggil index() untuk menampilkan view dan mengoper controller
$controller->index();