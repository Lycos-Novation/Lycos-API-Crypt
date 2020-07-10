<?php
$_POST = json_decode(file_get_contents('php://input'), true);
$POSTD = $_POST;

if($POSTD['action'] === 'crypt'){
    if(empty($POSTD['plain'])){
        $error['error'] = 'Please specify a plain text.';
        echo json_encode($error);
    }
    require 'func.php';
    $return['hash'] = chiffrer($POSTD['plain']);
    echo json_encode($return);
}
elseif($POSTD['action'] === 'compare'){
    require 'func.php';
    if(empty($POSTD['plain'])){
        $error['error'] = 'Please specify a plain text to compare.';
        echo json_encode($error);
    }
    if(empty($POSTD['hash'])){
        $error['error'] = 'Please specify a hash to compare.';
        echo json_encode($error);
    }
    $return['corresponds'] = compare($POSTD['hash'], $POSTD['plain']);
    echo json_encode($return);
}
elseif((empty($POSTD['action'])) || ($POSTD['action'] != 'compare') || ($POSTD['action'] != 'crypt')){
    $error['error'] = 'Please specify a valid action.';
    echo json_encode($error);
}
?>