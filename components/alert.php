<?php

if (isset($warning_msg)) {
    // Check if $warning_msg is an array, if not convert it to an array
    $warning_msg = is_array($warning_msg) ? $warning_msg : [$warning_msg];
    foreach ($warning_msg as $msg) {
        echo '<script>swal("' .$msg.'", "", "warning");</script>';
    }
}

if (isset($info_msg)) {
    // Check if $info_msg is an array, if not convert it to an array
    $info_msg = is_array($info_msg) ? $info_msg : [$info_msg];
    foreach ($info_msg as $msg) {
        echo '<script>swal("' .$msg.'", "", "info");</script>';
    }
}

if (isset($error_msg)) {
    // Check if $error_msg is an array, if not convert it to an array
    $error_msg = is_array($error_msg) ? $error_msg : [$error_msg];
    foreach ($error_msg as $msg) {
        echo '<script>swal("' .$msg.'", "", "error");</script>';
    }
}
?>
