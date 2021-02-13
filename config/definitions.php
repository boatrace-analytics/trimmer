<?php

return [
    'Trimmer' => \DI\create('\Boatrace\Analytics\Trimmer')->constructor(
        \DI\get('MainTrimmer')
    ),
    'MainTrimmer' => function ($container) {
        return $container->get('\Boatrace\Analytics\MainTrimmer');
    },
];
