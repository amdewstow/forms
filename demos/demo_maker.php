<?php
    $raw = file_get_contents( 'http://127.0.0.2/forms/demos/demo.php' );
    file_put_contents( 'demo.html', $raw );
    echo $raw;