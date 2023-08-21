<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/wiwa1978/LaravelApp.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('10.10.10.10')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Laravel Sample App');

// Hooks

after('deploy:failed', 'deploy:unlock');
