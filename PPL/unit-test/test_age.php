<?php
// File: test_age.php
require_once "Validator.php";

// Test Case 1: umur valid
try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: " . $e->getMessage() . "\n";
}

// test case 2: nama valid
try {
    $result = validateName("nopal");
    echo "PASS: Nama nopal diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama nopal tidak diterima. Error: " . $e->getMessage() . "\n";
}

// test case 3: nama kosong
try {
    $result = validateName("");
    echo "PASS: Nama kosong\n";
} catch (Exception $e) {
    echo "FAIL: Nama tidak boleh kosong. Error: " . $e->getMessage() . "\n";

}

