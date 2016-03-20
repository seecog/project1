<?php

$this->load->view("templates/erp_header");
$this->load->view('templates/erp_social_connect');
$this->load->view($content);

$this->load->view("templates/erp_footer");

?>