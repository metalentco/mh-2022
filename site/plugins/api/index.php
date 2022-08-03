<?php

Kirby::plugin('my/api', [
  'api' => [
    'routes' => [
      [
        'pattern' => 'my-endpoint',
        'action'  => function () {
          return [
            'hello' => 'world'
          ];
        }
      ]
    ]
  ]
]);