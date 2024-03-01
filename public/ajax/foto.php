
    <?php
    // Perbaikan path require
    require '../function.php';

    // Query database
    $query = "SELECT * FROM fotos";
    $foto = query($query);

    // Output hasil
    var_dump($foto);
    ?>