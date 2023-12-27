<?php return array(
    'root' => array(
        'name' => 'arostech/test2',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '066d4e59e5dd5322ed9ddb5d18227f27f6cc1f3d',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'arostech/test2' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '066d4e59e5dd5322ed9ddb5d18227f27f6cc1f3d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
