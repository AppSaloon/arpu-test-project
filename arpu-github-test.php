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
 * Description:       Plugin used to test the updating functionality of the ARPU plugin 2
 * Version:           1.0.4
 * Author:            AppSaloon
 * Author URI:        http://www.appsaloon.be
 */

add_filter( 'arpu_github_plugins', 'arpu_github_test_add_to_github_plugins' );

function arpu_github_test_add_to_github_plugins( $github_plugins ) {
    $github_plugins[] = array(
        'plugin_file' => __FILE__,
        'github_owner' => 'AppSaloon',
        'github_project_name' => 'arpu-test-project',
        'access_token' => '2b2c235880753c72a986c4659154ad69c76acc96'
    );

    return $github_plugins;
}
