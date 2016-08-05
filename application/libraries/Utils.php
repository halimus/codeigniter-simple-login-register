<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utils {
    /* =========================================================================
     * @param string $algo The algorithm (md5, sha1, whirlpool, etc)
     * @param string $data The data to encode
     * @param string $salt The salt (This should be the same throughout the system probably)
     * @return string The hashed/salted data
      ======================================================================== */

    public static function hash($algo, $data, $salt) {
        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);
        return hash_final($context);
    }

    /* =========================================================================
      Clear the old cache (usage optional)
      ======================================================================= */

    public static function no_cache() {
        $ci = & get_instance();
        $ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $ci->output->set_header("Pragma: no-cache");
    }

}

?>