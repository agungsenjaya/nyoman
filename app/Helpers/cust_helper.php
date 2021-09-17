<?php 
//
//
//
function casie($a) {
    switch (strlen($a)) {
        case 0:
            return '000';
            break;
        case 1:
            return '00' . $a;
            break;
        case 2:
            return '0' . $a;
            break;
        default:
            return $a;
            break;
    }
}
function streplace($a) {
    return str_replace('.','',$a);
}
?>