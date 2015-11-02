<?php
/**
 * ARPU Test Project for GitHub
 *
 * Testing plugin for ARPU for GitHub
 *
 * @package   AS_ARPU_TEST_PROJECT_Git_Hub
 * @author    G
 * @license   proprietary
 * @link      http://appsaloon.be
 * @copyright 2015 AppSaloon BVBA
 *
 * @wordpress-plugin
 * Plugin Name:       ARPU Test Project for GitHub
 * Description:       Plugin used to test the updating functionality of the ARPU plugin (during development)
 * Version:           1.0.2
 * Author:            AppSaloon
 * Author URI:        http://www.appsaloon.be
 */

add_filter( 'arpu_github_plugins', 'arpu_github_test_add_to_github_plugins' );

function arpu_github_test_add_to_github_plugins( $github_plugins ) {
    $github_plugins[] = array(
        'plugin_file' => __FILE__,
        'github_owner' => 'AppSaloon',
        'github_project_name' => 'arpu-test-project',
        'access_token' => '27dfbbcf0b78579865f6aa0e6530014b71bb0e77'
    );

    return $github_plugins;
}