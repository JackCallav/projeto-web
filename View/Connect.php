<?php
    $Connect = mysqli_connect("localhost","root","","Projeto");

	if (mysqli_connect_errno()) {
        printf("Falha na conexão: %s\n", mysqli_connect_error());
        exit();
    }
?>