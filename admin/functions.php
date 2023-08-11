<?php
function ifEmpty($value, $msg = "خطأ ، هذا الحقل مطلوب", $redirect="index.php")
{
    global $formErrors;
    if (isset($value)) {

        $filtered = filter_var($value, FILTER_SANITIZE_STRING);

        if (empty($filtered)) {
            error($msg,$redirect);
        }
    }
}


function success($msg, $redirect = 'index.php')
{
    echo "<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '$msg',
        showConfirmButton: false,
        timer: 3000
    }).then((result) => {
        
            window.location = '" . $redirect . "';
        
    });
            </script>";
            exit();
}
function error($msg, $redirect = 'index.php')
{
    echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title:' $msg',
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
                    
                    window.location = '" . $redirect . "';
                    
                });
            </script>";
            exit();
}
