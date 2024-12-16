<?php

// error handler
$ERRORS = []; // global array to store errors
function _handleError($errno, $errstr, $errfile, $errline) {
    global $ERRORS;
    $ERRORS[] = "Error[$errno]: $errstr in $errfile on line $errline"; // push new error
    return true; // Prevent the PHP internal error handler from running
}
