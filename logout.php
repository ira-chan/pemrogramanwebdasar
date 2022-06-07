<?php
session_start();//mengaktifkan session
session_destroy();//menghapus session
header("location:../index.php?pesan=logout");//mengalihkan halaman sambil mengirim pesan logout