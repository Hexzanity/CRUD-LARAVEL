<?php

if (isset($_SESSION['first_name']) && isset($_SESSION['id'])) {
    $fname = $_SESSION['first_name'];
    $id = $_SESSION['id'];
    echo strtoupper($fname);
}
