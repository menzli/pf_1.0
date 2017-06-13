<?php

// Lancé un écoute sur tous ce qui se passe dans le front controller
// Si il y à une erreur un fait une redirection vers
// TODO production
/*function shutdown() {
    $error = error_get_last();
    if ($error['type'] === E_ERROR) {
        header("Location:./application/views/error/error_index.html");
    }
}
register_shutdown_function('shutdown');*/

require_once(dirname(__FILE__)."/framework/core/Framework.class.php");
Framework::run();