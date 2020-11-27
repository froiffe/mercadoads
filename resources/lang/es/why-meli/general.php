<?php

return [
    'video-poster' => 'assets/images/nosotros/nosotros-video-01.jpg',
    'video-poster-webp' => 'assets/images/nosotros/nosotros-video-01.webp',
    'video-url' => 'https://www.youtube.com/embed/tHASFbwyovc?controls=0',
    'module1' => [
        'subtitle' => 'por qué nosotros',
        'title' => 'Somos el medio indicado para tu marca',
        'description' => 'Somos líderes en tecnología, eCommerce y pagos a través de internet en todo Latinoamérica. Tenemos audiencias masivas con mindset de compra y conocemos a fondo su recorrido en cientos de productos y categorías. Ofrecemos estrategias full-funnel para que tu marca pueda alcanzar su máximo potencial.',
        'video-url' => 'assets/images/nosotros/nosotros-porqueno.gif'
    ],
    'module2' => [
        'title' => '3 razones para elegirnos',
        'items' => [
            0 => [
                'title' => '<div class="word">1. Relevancia</div><div class="phrase">Millones de compradores descubriendo y comparando todos los días</div>',
                'description' => 'Todos los días, millones de usuarios ingresan a Mercado Libre predispuestos a escuchar marcas, ver contenido y absorber todo tipo de información que les ayude a tomar la decisión de compra correcta. Personas que nosotros podemos identificar para crear segmentaciones avanzadas y alcanzar con mensajes relevantes. Audiencias que luego le ofreceremos a tu marca, para que tus anuncios puedan llegar a los usuarios con mayor intención de compra.',
                'button' => 'Conoce las audiencias',
                'route-url' => url(trans('routes.audiences')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-01.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-01.webp'
            ],
            1 => [
                'title' => '<div class="word">2. Efectividad</div><div class="phrase">Soluciones de Branding y Performance en todo el recorrido de compra</div>',
                'description' => 'En Mercado Ads las marcas y productos no necesitan pretender ser otra cosa. Ofrecemos una propuesta publicitaria integral que garantiza la efectividad de tu campaña: desde anuncios nativos de performance hasta experiencias de marca inmersivas para el usuario. Tenemos soluciones para todas las estrategias de marketing y para cada etapa del recorrido de compra.',
                'button' => 'Conoce las soluciones',
                'route-url' => url(trans('routes.solutions')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-02.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-02.webp'
            ],
            2 => [
                'title' => '<div class="word">3. Objetividad</div><div class="phrase">Insights de compra que solo un e-commerce te puede dar</div>',
                'description' => 'Desde métricas de marca hasta insights sobre el comportamiento de compra y post-compra de los usuarios, tenemos datos que solo un medio de e-commerce líder te puede dar. ¡A la hora de tomar decisiones con objetividad, la data es nuestro criterio!',
                'button' => 'Ver insights',
                'route-url' => url(trans('routes.insights')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-03.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-03.webp'
            ],
        ],
        'view-more' => 'Ver más',
        'view-less' => 'ver menos'
    ],
    'module3' => [
        'subtitle' => 'Brand Safety',
        'title' => 'Ser innovador en un contexto seguro',
        'description' => 'Cuidamos las medidas de Brand Safety y aseguramos que todas las campañas salgan en el entorno que desean, sin fraude y sin contenido de riesgo o inapropiado, en un contexto donde el usuario está dispuesto a escuchar lo que tu marca tiene para decir.',
        'desktop-image-url' => 'assets/images/nosotros/nosotros-brand-bk.jpg',
        'desktop-image-url-webp' => 'assets/images/nosotros/nosotros-brand-bk.webp',
        'mobile-image-url' => 'assets/images/nosotros/nosotros-brand-bk-mobile.jpg',
        'mobile-image-url-webp' => 'assets/images/nosotros/nosotros-brand-bk-mobile.webp'
    ],
    'module4' => [
        'title' => 'Mercado Libre en números',
        'description' => 'Conoce algunas estadísticas generales del negocio:',
        'items' => [
            0 => [
                'image-url' => 'assets/images/nosotros/numeros-01.png',
            ],
            1 => [
                'image-url' => 'assets/images/nosotros/numeros-02.png',
            ],
            2 => [
                'image-url' => 'assets/images/nosotros/numeros-03.png',
            ],
            3 => [
                'image-url' => 'assets/images/nosotros/numeros-04.png',
            ]
            // 4 => [
            //     'image-url' => 'assets/images/nosotros/numeros-05.gif',
            // ],
            // 5 => [
            //     'image-url' => 'assets/images/nosotros/numeros-06.gif',
            // ],
            // 6 => [
            //     'image-url' => 'assets/images/nosotros/numeros-07.gif',
            // ],
            // 7 => [
            //     'image-url' => 'assets/images/nosotros/numeros-08.gif',
            // ],
        ]
    ]
];
