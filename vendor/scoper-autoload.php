<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('RedirectHandler', false) && !interface_exists('RedirectHandler', false) && !trait_exists('RedirectHandler', false)) {
    spl_autoload_call('frill\sso\RedirectHandler');
}
if (!class_exists('Settings', false) && !interface_exists('Settings', false) && !trait_exists('Settings', false)) {
    spl_autoload_call('frill\sso\Settings');
}
if (!class_exists('Token', false) && !interface_exists('Token', false) && !trait_exists('Token', false)) {
    spl_autoload_call('frill\sso\Token');
}
if (!class_exists('ComposerAutoloaderInit9ae51db2047537785c02dcff882db51d', false) && !interface_exists('ComposerAutoloaderInit9ae51db2047537785c02dcff882db51d', false) && !trait_exists('ComposerAutoloaderInit9ae51db2047537785c02dcff882db51d', false)) {
    spl_autoload_call('frill\sso\ComposerAutoloaderInit9ae51db2047537785c02dcff882db51d');
}
if (!class_exists('ParagonIE_Sodium_Crypto', false) && !interface_exists('ParagonIE_Sodium_Crypto', false) && !trait_exists('ParagonIE_Sodium_Crypto', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Crypto');
}
if (!class_exists('ParagonIE_Sodium_Crypto32', false) && !interface_exists('ParagonIE_Sodium_Crypto32', false) && !trait_exists('ParagonIE_Sodium_Crypto32', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Crypto32');
}
if (!class_exists('SplFixedArray', false) && !interface_exists('SplFixedArray', false) && !trait_exists('SplFixedArray', false)) {
    spl_autoload_call('frill\sso\SplFixedArray');
}
if (!class_exists('ParagonIE_Sodium_Core32_Poly1305_State', false) && !interface_exists('ParagonIE_Sodium_Core32_Poly1305_State', false) && !trait_exists('ParagonIE_Sodium_Core32_Poly1305_State', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Poly1305_State');
}
if (!class_exists('ParagonIE_Sodium_Core32_HChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core32_HChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core32_HChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_HChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core32_Util', false) && !interface_exists('ParagonIE_Sodium_Core32_Util', false) && !trait_exists('ParagonIE_Sodium_Core32_Util', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Util');
}
if (!class_exists('ParagonIE_Sodium_Core32_Int32', false) && !interface_exists('ParagonIE_Sodium_Core32_Int32', false) && !trait_exists('ParagonIE_Sodium_Core32_Int32', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Int32');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_H', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_H', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_H', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_H');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Fe', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Fe', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Fe', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Fe');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Cached', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Cached', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Cached', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Ge_Cached');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P3', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P3', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P3', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Ge_P3');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P2', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P2', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P2', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Ge_P2');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp');
}
if (!class_exists('ParagonIE_Sodium_Core32_Int64', false) && !interface_exists('ParagonIE_Sodium_Core32_Int64', false) && !trait_exists('ParagonIE_Sodium_Core32_Int64', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Int64');
}
if (!class_exists('ParagonIE_Sodium_Core32_XSalsa20', false) && !interface_exists('ParagonIE_Sodium_Core32_XSalsa20', false) && !trait_exists('ParagonIE_Sodium_Core32_XSalsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_XSalsa20');
}
if (!class_exists('ParagonIE_Sodium_Core32_Ed25519', false) && !interface_exists('ParagonIE_Sodium_Core32_Ed25519', false) && !trait_exists('ParagonIE_Sodium_Core32_Ed25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Ed25519');
}
if (!class_exists('ParagonIE_Sodium_Core32_X25519', false) && !interface_exists('ParagonIE_Sodium_Core32_X25519', false) && !trait_exists('ParagonIE_Sodium_Core32_X25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_X25519');
}
if (!class_exists('ParagonIE_Sodium_Core32_BLAKE2b', false) && !interface_exists('ParagonIE_Sodium_Core32_BLAKE2b', false) && !trait_exists('ParagonIE_Sodium_Core32_BLAKE2b', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_BLAKE2b');
}
if (!class_exists('ParagonIE_Sodium_Core32_HSalsa20', false) && !interface_exists('ParagonIE_Sodium_Core32_HSalsa20', false) && !trait_exists('ParagonIE_Sodium_Core32_HSalsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_HSalsa20');
}
if (!class_exists('ParagonIE_Sodium_Core32_Curve25519', false) && !interface_exists('ParagonIE_Sodium_Core32_Curve25519', false) && !trait_exists('ParagonIE_Sodium_Core32_Curve25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Curve25519');
}
if (!class_exists('ParagonIE_Sodium_Core32_Poly1305', false) && !interface_exists('ParagonIE_Sodium_Core32_Poly1305', false) && !trait_exists('ParagonIE_Sodium_Core32_Poly1305', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Poly1305');
}
if (!class_exists('ParagonIE_Sodium_Core32_XChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core32_XChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core32_XChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_XChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core32_SecretStream_State', false) && !interface_exists('ParagonIE_Sodium_Core32_SecretStream_State', false) && !trait_exists('ParagonIE_Sodium_Core32_SecretStream_State', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_SecretStream_State');
}
if (!class_exists('ParagonIE_Sodium_Core32_ChaCha20_IetfCtx', false) && !interface_exists('ParagonIE_Sodium_Core32_ChaCha20_IetfCtx', false) && !trait_exists('ParagonIE_Sodium_Core32_ChaCha20_IetfCtx', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_ChaCha20_IetfCtx');
}
if (!class_exists('ParagonIE_Sodium_Core32_ChaCha20_Ctx', false) && !interface_exists('ParagonIE_Sodium_Core32_ChaCha20_Ctx', false) && !trait_exists('ParagonIE_Sodium_Core32_ChaCha20_Ctx', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_ChaCha20_Ctx');
}
if (!class_exists('ParagonIE_Sodium_Core32_ChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core32_ChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core32_ChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_ChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core32_Salsa20', false) && !interface_exists('ParagonIE_Sodium_Core32_Salsa20', false) && !trait_exists('ParagonIE_Sodium_Core32_Salsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_Salsa20');
}
if (!class_exists('ParagonIE_Sodium_Core32_SipHash', false) && !interface_exists('ParagonIE_Sodium_Core32_SipHash', false) && !trait_exists('ParagonIE_Sodium_Core32_SipHash', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core32_SipHash');
}
if (!class_exists('SodiumException', false) && !interface_exists('SodiumException', false) && !trait_exists('SodiumException', false)) {
    spl_autoload_call('frill\sso\SodiumException');
}
if (!class_exists('ParagonIE_Sodium_Compat', false) && !interface_exists('ParagonIE_Sodium_Compat', false) && !trait_exists('ParagonIE_Sodium_Compat', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Compat');
}
if (!class_exists('ParagonIE_Sodium_File', false) && !interface_exists('ParagonIE_Sodium_File', false) && !trait_exists('ParagonIE_Sodium_File', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_File');
}
if (!class_exists('ParagonIE_Sodium_Core_Poly1305_State', false) && !interface_exists('ParagonIE_Sodium_Core_Poly1305_State', false) && !trait_exists('ParagonIE_Sodium_Core_Poly1305_State', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Poly1305_State');
}
if (!class_exists('ParagonIE_Sodium_Core_HChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core_HChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core_HChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_HChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core_Util', false) && !interface_exists('ParagonIE_Sodium_Core_Util', false) && !trait_exists('ParagonIE_Sodium_Core_Util', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Util');
}
if (!class_exists('ParagonIE_Sodium_Core_Base64_Common', false) && !interface_exists('ParagonIE_Sodium_Core_Base64_Common', false) && !trait_exists('ParagonIE_Sodium_Core_Base64_Common', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Base64_Common');
}
if (!class_exists('ParagonIE_Sodium_Core_Base64_UrlSafe', false) && !interface_exists('ParagonIE_Sodium_Core_Base64_UrlSafe', false) && !trait_exists('ParagonIE_Sodium_Core_Base64_UrlSafe', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Base64_UrlSafe');
}
if (!class_exists('ParagonIE_Sodium_Core_Base64_Original', false) && !interface_exists('ParagonIE_Sodium_Core_Base64_Original', false) && !trait_exists('ParagonIE_Sodium_Core_Base64_Original', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Base64_Original');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_H', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_H', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_H', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_H');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Fe', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Fe', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Fe', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Fe');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Cached', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Cached', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Cached', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Ge_Cached');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P3', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P3', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P3', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Ge_P3');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P1p1', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P1p1', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P1p1', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Ge_P1p1');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P2', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P2', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P2', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Ge_P2');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Precomp', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Precomp', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Precomp', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519_Ge_Precomp');
}
if (!class_exists('ParagonIE_Sodium_Core_XSalsa20', false) && !interface_exists('ParagonIE_Sodium_Core_XSalsa20', false) && !trait_exists('ParagonIE_Sodium_Core_XSalsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_XSalsa20');
}
if (!class_exists('ParagonIE_Sodium_Core_Ed25519', false) && !interface_exists('ParagonIE_Sodium_Core_Ed25519', false) && !trait_exists('ParagonIE_Sodium_Core_Ed25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Ed25519');
}
if (!class_exists('ParagonIE_Sodium_Core_X25519', false) && !interface_exists('ParagonIE_Sodium_Core_X25519', false) && !trait_exists('ParagonIE_Sodium_Core_X25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_X25519');
}
if (!class_exists('ParagonIE_Sodium_Core_BLAKE2b', false) && !interface_exists('ParagonIE_Sodium_Core_BLAKE2b', false) && !trait_exists('ParagonIE_Sodium_Core_BLAKE2b', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_BLAKE2b');
}
if (!class_exists('ParagonIE_Sodium_Core_HSalsa20', false) && !interface_exists('ParagonIE_Sodium_Core_HSalsa20', false) && !trait_exists('ParagonIE_Sodium_Core_HSalsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_HSalsa20');
}
if (!class_exists('ParagonIE_Sodium_Core_Ristretto255', false) && !interface_exists('ParagonIE_Sodium_Core_Ristretto255', false) && !trait_exists('ParagonIE_Sodium_Core_Ristretto255', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Ristretto255');
}
if (!class_exists('ParagonIE_Sodium_Core_Curve25519', false) && !interface_exists('ParagonIE_Sodium_Core_Curve25519', false) && !trait_exists('ParagonIE_Sodium_Core_Curve25519', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Curve25519');
}
if (!class_exists('ParagonIE_Sodium_Core_Poly1305', false) && !interface_exists('ParagonIE_Sodium_Core_Poly1305', false) && !trait_exists('ParagonIE_Sodium_Core_Poly1305', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Poly1305');
}
if (!class_exists('ParagonIE_Sodium_Core_XChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core_XChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core_XChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_XChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core_SecretStream_State', false) && !interface_exists('ParagonIE_Sodium_Core_SecretStream_State', false) && !trait_exists('ParagonIE_Sodium_Core_SecretStream_State', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_SecretStream_State');
}
if (!class_exists('ParagonIE_Sodium_Core_ChaCha20_IetfCtx', false) && !interface_exists('ParagonIE_Sodium_Core_ChaCha20_IetfCtx', false) && !trait_exists('ParagonIE_Sodium_Core_ChaCha20_IetfCtx', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_ChaCha20_IetfCtx');
}
if (!class_exists('ParagonIE_Sodium_Core_ChaCha20_Ctx', false) && !interface_exists('ParagonIE_Sodium_Core_ChaCha20_Ctx', false) && !trait_exists('ParagonIE_Sodium_Core_ChaCha20_Ctx', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_ChaCha20_Ctx');
}
if (!class_exists('ParagonIE_Sodium_Core_ChaCha20', false) && !interface_exists('ParagonIE_Sodium_Core_ChaCha20', false) && !trait_exists('ParagonIE_Sodium_Core_ChaCha20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_ChaCha20');
}
if (!class_exists('ParagonIE_Sodium_Core_Salsa20', false) && !interface_exists('ParagonIE_Sodium_Core_Salsa20', false) && !trait_exists('ParagonIE_Sodium_Core_Salsa20', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_Salsa20');
}
if (!class_exists('ParagonIE_Sodium_Core_SipHash', false) && !interface_exists('ParagonIE_Sodium_Core_SipHash', false) && !trait_exists('ParagonIE_Sodium_Core_SipHash', false)) {
    spl_autoload_call('frill\sso\ParagonIE_Sodium_Core_SipHash');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('add_action')) {
    function add_action() {
        return \frill\sso\add_action(...func_get_args());
    }
}
if (!function_exists('is_user_logged_in')) {
    function is_user_logged_in() {
        return \frill\sso\is_user_logged_in(...func_get_args());
    }
}
if (!function_exists('wp_login_url')) {
    function wp_login_url() {
        return \frill\sso\wp_login_url(...func_get_args());
    }
}
if (!function_exists('get_home_url')) {
    function get_home_url() {
        return \frill\sso\get_home_url(...func_get_args());
    }
}
if (!function_exists('get_option')) {
    function get_option() {
        return \frill\sso\get_option(...func_get_args());
    }
}
if (!function_exists('add_options_page')) {
    function add_options_page() {
        return \frill\sso\add_options_page(...func_get_args());
    }
}
if (!function_exists('current_user_can')) {
    function current_user_can() {
        return \frill\sso\current_user_can(...func_get_args());
    }
}
if (!function_exists('_e')) {
    function _e() {
        return \frill\sso\_e(...func_get_args());
    }
}
if (!function_exists('settings_fields')) {
    function settings_fields() {
        return \frill\sso\settings_fields(...func_get_args());
    }
}
if (!function_exists('do_settings_sections')) {
    function do_settings_sections() {
        return \frill\sso\do_settings_sections(...func_get_args());
    }
}
if (!function_exists('esc_attr_e')) {
    function esc_attr_e() {
        return \frill\sso\esc_attr_e(...func_get_args());
    }
}
if (!function_exists('register_setting')) {
    function register_setting() {
        return \frill\sso\register_setting(...func_get_args());
    }
}
if (!function_exists('add_settings_section')) {
    function add_settings_section() {
        return \frill\sso\add_settings_section(...func_get_args());
    }
}
if (!function_exists('add_settings_field')) {
    function add_settings_field() {
        return \frill\sso\add_settings_field(...func_get_args());
    }
}
if (!function_exists('__')) {
    function __() {
        return \frill\sso\__(...func_get_args());
    }
}
if (!function_exists('esc_attr')) {
    function esc_attr() {
        return \frill\sso\esc_attr(...func_get_args());
    }
}
if (!function_exists('wp_get_current_user')) {
    function wp_get_current_user() {
        return \frill\sso\wp_get_current_user(...func_get_args());
    }
}
if (!function_exists('composerRequire9ae51db2047537785c02dcff882db51d')) {
    function composerRequire9ae51db2047537785c02dcff882db51d() {
        return \frill\sso\composerRequire9ae51db2047537785c02dcff882db51d(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \frill\sso\includeIfExists(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_stream_xchacha20')) {
    function sodium_crypto_stream_xchacha20() {
        return \frill\sso\sodium_crypto_stream_xchacha20(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_stream_xchacha20_xor')) {
    function sodium_crypto_stream_xchacha20_xor() {
        return \frill\sso\sodium_crypto_stream_xchacha20_xor(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_is_valid_point')) {
    function sodium_crypto_core_ristretto255_is_valid_point() {
        return \frill\sso\sodium_crypto_core_ristretto255_is_valid_point(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_add')) {
    function sodium_crypto_core_ristretto255_add() {
        return \frill\sso\sodium_crypto_core_ristretto255_add(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_sub')) {
    function sodium_crypto_core_ristretto255_sub() {
        return \frill\sso\sodium_crypto_core_ristretto255_sub(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_from_hash')) {
    function sodium_crypto_core_ristretto255_from_hash() {
        return \frill\sso\sodium_crypto_core_ristretto255_from_hash(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_random')) {
    function sodium_crypto_core_ristretto255_random() {
        return \frill\sso\sodium_crypto_core_ristretto255_random(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_random')) {
    function sodium_crypto_core_ristretto255_scalar_random() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_random(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_invert')) {
    function sodium_crypto_core_ristretto255_scalar_invert() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_invert(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_negate')) {
    function sodium_crypto_core_ristretto255_scalar_negate() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_negate(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_complement')) {
    function sodium_crypto_core_ristretto255_scalar_complement() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_complement(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_add')) {
    function sodium_crypto_core_ristretto255_scalar_add() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_add(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_sub')) {
    function sodium_crypto_core_ristretto255_scalar_sub() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_sub(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_mul')) {
    function sodium_crypto_core_ristretto255_scalar_mul() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_mul(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_scalarmult_ristretto255')) {
    function sodium_crypto_scalarmult_ristretto255() {
        return \frill\sso\sodium_crypto_scalarmult_ristretto255(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_scalarmult_ristretto255_base')) {
    function sodium_crypto_scalarmult_ristretto255_base() {
        return \frill\sso\sodium_crypto_scalarmult_ristretto255_base(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_core_ristretto255_scalar_reduce')) {
    function sodium_crypto_core_ristretto255_scalar_reduce() {
        return \frill\sso\sodium_crypto_core_ristretto255_scalar_reduce(...func_get_args());
    }
}
if (!function_exists('sodiumCompatAutoloader')) {
    function sodiumCompatAutoloader() {
        return \frill\sso\sodiumCompatAutoloader(...func_get_args());
    }
}
if (!function_exists('sodium_crypto_stream_xchacha20_keygen')) {
    function sodium_crypto_stream_xchacha20_keygen() {
        return \frill\sso\sodium_crypto_stream_xchacha20_keygen(...func_get_args());
    }
}
if (!function_exists('add_filter')) {
    function add_filter() {
        return \frill\sso\add_filter(...func_get_args());
    }
}
if (!function_exists('plugin_basename')) {
    function plugin_basename() {
        return \frill\sso\plugin_basename(...func_get_args());
    }
}
if (!function_exists('frill_sso_page_settings_link')) {
    function frill_sso_page_settings_link() {
        return \frill\sso\frill_sso_page_settings_link(...func_get_args());
    }
}
if (!function_exists('admin_url')) {
    function admin_url() {
        return \frill\sso\admin_url(...func_get_args());
    }
}
if (!function_exists('frill_sso_row_meta')) {
    function frill_sso_row_meta() {
        return \frill\sso\frill_sso_row_meta(...func_get_args());
    }
}

return $loader;