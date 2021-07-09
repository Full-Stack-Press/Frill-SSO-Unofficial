<?php

namespace unofficial\frill\sso;

use unofficial\frill\sso\Firebase\JWT\JWT;
class Token
{
    /**
     * @param string $key
     * @return string
     */
    public static function createToken(string $key) : string
    {
        $user = wp_get_current_user();
        $userData = ['email' => $user->user_email, 'id' => $user->ID, 'name' => $user->display_name];
        return JWT::encode($userData, $key, 'HS256');
    }
}
\class_alias('unofficial\\frill\\sso\\Token', 'Token', \false);
