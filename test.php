<?php

    shell_exec('touch index.html');
    shell_exec('echo "<h1>Hai all</h1>" > index.html');

    $output = shell_exec('index.html');
    echo "$output";

    $nama = readline("Nama : ");
    $nim = readline("NIM : ");
    $kelas = readline("Kelas : ");
    
    echo `Nama : $nama`;
    echo `NIM : $nim`;
    echo `Kelas : $kelas`;