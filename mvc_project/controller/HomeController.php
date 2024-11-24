<?php
require_once 'model/Journal.php';

class HomeController {
    private $journals = [];

    public function __construct() {
        // Inisialisasi dengan beberapa data jurnal
        $this->journals = [
            new Journal('My Third Journal Entry', '2023'),
            new Journal('My Second Journal Entry', '2022'),
            new Journal('My First Journal Entry', '2021')
        ];
    }

    public function index() {
        // Oper jurnal ke view
        $journals = $this->getJournals();
        require 'view/index.php'; // Panggil view di sini
    }

    public function addJournal($name, $year) {
        $newJournal = new Journal($name, $year);
        $this->journals[] = $newJournal;
        $this->index(); // Tampilkan kembali daftar setelah menambah
    }

    public function deleteJournal($index) {
        if (isset($this->journals[$index])) {
            unset($this->journals[$index]);
            $this->journals = array_values($this->journals); // Reset indeks array
        }
        $this->index(); // Tampilkan kembali daftar setelah menghapus
    }

    public function getJournals() {
        return $this->journals;
    }
}