<?php

function is_logged_in()
{
    // memanggil library CI, agar bisa memakai $this
    $ci = get_instance();

    // jika tidak ada session / ada yang akses paksa melalui url, maka redirect ke auth
    if (!$ci->session->userdata('auth')['username']) {
        redirect('auth');
    }
}
