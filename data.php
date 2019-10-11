<?php 

$items = [
    [
        "image" => "images/animals.jpeg",
        "title" => "Primer slide",
        "caption" => "Esto es una demo para la clase virtual.",
    ],
    [
        "image" => "images/tech.jpeg",
        "title" => "Segundo slide",
        "caption" => "Esto es una demo para la clase virtual.",
    ],
    [
        "image" => "images/sport.jpeg",
        "title" => "Tercer slide",
        "caption" => "Esto es una demo para la clase virtual.",
    ],
    [
        "image" => "images/nature.jpeg",
        "title" => "Cuarto slide",
        "caption" => "Esto es una demo para la clase virtual.",
    ],
];

$links = [
    [
        "url" => "#home",
        "text" => "Home",
        "alt" => "(current)",
    ],
    [
        "url" => "#features",
        "text" => "Features",
        "alt" => null,
    ],
    [
        "url" => "#pricing",
        "text" => "Pricing",
        "alt" => null,
    ],
    [
        "url" => "#pricing",
        "text" => "Pricing",
        "alt" => null,
        "children" => [
            [
                "url" => "#pricing",
                "text" => "Pricing",
                "alt" => null,
            ],
            [
                "url" => "#pricing",
                "text" => "Pricing",
                "alt" => null,
            ],
            [
                "url" => "#pricing",
                "text" => "Pricing",
                "alt" => null,
            ],
        ]
    ],
];