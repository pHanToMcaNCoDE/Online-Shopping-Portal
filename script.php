<script src="sweetalert2/sweetalert2.all.min.js"></script>

<?php

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){ ?>

    <script>
        var fire = document.querySelector('.submit').addEventListener('click', ()=>{
            Swal.fire({
                icon: 'success',
                title: 'Success',
                button: 'Ok',
            });
        })
        
    </script>

<?php }

?>