<?php

function tplHead($title, $style): void {
    require $_SERVER["DOCUMENT_ROOT"] . "/includes/head.inc.php";
}

function tplHeader($active, $title): void {
    require $_SERVER["DOCUMENT_ROOT"] . "/includes/header.inc.php";
}

function tplFooter(): void {
    require $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.inc.php";
}