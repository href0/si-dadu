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

function alert($type, $message)
{
    $ci = get_instance();

    return $ci->session->set_flashdata(
        'message',
        '<div class="alert alert-' . $type . '" role="alert">' . $message . '</div>'
    );
}
