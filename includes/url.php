<?php

/**
 * Redirect to another URL on the same site
 *
 * @param string $path The path to redirect to
 *
 * @return void
 */

function redirect($path) {

    header("Location: $path");
    exit;
}
