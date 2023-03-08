<?php

session_start();

echo "<h1> Successfully login";

// echo $email;

session_abort();

?>

<style>
    body{
        display: flex;
        height: 100vh;
        width: 100%;
        align-items:center;
        justify-content:center;
        font-family:sans-serif;
        background:linear-gradient(#fff, #ddd, lightblue);
    }

    html{
        font-size:62.5%;
    }
</style>