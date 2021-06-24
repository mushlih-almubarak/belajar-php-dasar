<?php
    // Function time akan menampilkan dalam format detik. 259200 detik = 3 hari 
    // PHP, hari ini, ditambahan 259200 detik lagi, akan menjadi hari apa?
    echo date("l", time()+259200);
    echo "<br>";
    // PHP, hari ini, dikurang 259200 detik lagi, akan menjadi hari apa?
    echo date("l", time()-259200);
?>