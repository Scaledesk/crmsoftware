<?php // template used by formigniter
$this->load->view('templates/header.php');
$this->load->view('formigniter/header.php');
$this->load->view("formigniter/{$page}");
$this->load->view('templates/footer.php');
?>
