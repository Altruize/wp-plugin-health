<?php

if (!defined('WPINC')) {
    die;
}

define('ALTRUIZE_HEALTH', '0.0.1');

function altruize_health_ok() {
    return rest_ensure_response('OK');
}

function altruize_register_health_route() {
    register_rest_route('altruize-health/v1', '/health', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'altruize_health_ok',
        'permission_callback' => function() { return true; },
    ));
}

add_action('rest_api_init', 'altruize_register_health_route');
