<?php return array(
    'root' => array(
        'name' => 'sietseveenman/kirby3-toilet',
        'pretty_version' => '0.9',
        'version' => '0.9.0.0',
        'reference' => NULL,
        'type' => 'kirby-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getkirby/composer-installer' => array(
            'pretty_version' => '1.2.1',
            'version' => '1.2.1.0',
            'reference' => 'c98ece30bfba45be7ce457e1102d1b169d922f3d',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../getkirby/composer-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sietseveenman/kirby3-toilet' => array(
            'pretty_version' => '0.9',
            'version' => '0.9.0.0',
            'reference' => NULL,
            'type' => 'kirby-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/var-dumper' => array(
            'pretty_version' => 'v6.1.5',
            'version' => '6.1.5.0',
            'reference' => 'd0833493fb2413a86f522fb54a1896a7718e98ec',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/var-dumper',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);