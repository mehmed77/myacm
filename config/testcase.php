<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 18.09.2015
 * Time: 23:55
 */

function state_case($state, $case){
    $accepted   = "Accepted";
    switch ($state) {
        case -2: $accepted  = "<span class='text-center text-primary h4'>Running...</span>";
            break;
        case -1: $accepted = "<span class='text-center h4'>Running...</span>";
            break;
        case 2: $accepted = "<span class='text-center text-danger'>Wrong answer[ $case ]</span>";
            break;
        case 3: $accepted = "<span class='text-center text-danger'>Time limit Excidend [ $case ]</span>";
            break;
        case 4: $accepted = "<span class='text-center text-danger'>Compilation Error</span>";
            break;
        case 5: $accepted = "<span class='text-center text-danger'>Security violation</span>";
            break;
        case 6: $accepted = "<spam class='text-center text-danger'>Runtime error [ $case ]</spam>";
            break;
        case 7: $accepted = "<span class='text-center text-danger'>Presentation error [ $case ] </span>";
            break;
        case 8: $accepted = "<span class='text-center  text-success'>Memory limit exceeded [ $case ] </span>";
            break;
        default: $accepted = "<span class='text-center text-success h4'>Accepted</span>";
            break;
    }
    return $accepted;
}