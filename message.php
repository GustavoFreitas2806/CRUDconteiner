<?php
    //se não estiver vázio, apresenta mensagem 
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Aviso:</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    //limpa variável, para não deixar armazenada para não conflitar com as próximas ações.
    unset($_SESSION['message']);
    endif;
?>