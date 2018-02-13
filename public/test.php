<?php
    echo password_hash('test', PASSWORD_BCRYPT, [
        'cost' => 12
    ]);
?>