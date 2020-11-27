<?php

return [
    'video-poster' => 'assets/images/nosotros/nosotros-video-01-por.jpg',
    'video-poster-webp' => 'assets/images/nosotros/nosotros-video-01-por.webp',
    'video-url' => 'https://www.youtube.com/watch?v=WLGZefxL400?controls=0',
    'module1' => [
        'subtitle' => 'Porque escolher o Mercado Ads?',
        'title' => 'Somos o parceiro de negócio ideal para sua marca',
        'description' => 'Mercado Livre é a companhia líder em tecnologia, e-commerce e serviços financeiros da América Latina. Conhecemos a jornada de compra do nosso consumidor e oferecemos estratégias full-funnel para que marcas como a sua possam atingir seu potencial máximo.',
        'video-url' => 'assets/images/nosotros/nosotros-porqueno-por.gif'
    ],
    'module2' => [
        'title' => '3 motivos para nos escolher',
        'items' => [
            0 => [
                'title' => '<div class="word">1. Relevância</div><div class="phrase">Milhões de compradores descobrindo e comparando todos os dias</div>',
                'description' => 'Todos os dias, milhares de usuários entram no Mercado Livre predispostos a conhecer novas marcas, visualizar conteúdos e absorver informações que os ajude a tomar uma decisão de compra. São pessoas que podemos identificar e criar segmentações assertivas. Uma audiência qualificada que está a disposição da sua marca, para que os seus anúncios cheguem aos usuários com intenção de compra.',
                'button' => 'Conheça seu público',
                'route-url' => url(trans('routes.audiences')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-01-por.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-01-por.webp'
            ],
            1 => [
                'title' => '<div class="word">2. Eficácia</div><div class="phrase">Soluções de Branding e Performance para toda a jornada de compra</div>',
                'description' => 'No Mercado Ads, oferecemos uma proposta integral de publicidade que garante a eficácia da sua campanha conforme seus objetivos: de anúncios nativos até experiências imersivas de marca. Temos soluções para todas as estratégias de marketing e para todas as etapas da jornada de compra.',
                'button' => 'Conheça todas as soluções',
                'route-url' => url(trans('routes.solutions')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-02-por.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-02-por.webp'
            ],
            2 => [
                'title' => '<div class="word">3. Objetividade</div><div class="phrase">Insights que apenas um e-commerce pode oferecer</div>',
                'description' => 'Construa sua estratégia de comunicação com base em dados de comportamento da nossa audiência no maior e-commerce da América Latina.',
                'button' => 'ver insights',
                'route-url' => url(trans('routes.insights')),
                'image-url' => 'assets/images/nosotros/nosotros-razones-03-por.jpg',
                'image-url-webp' => 'assets/images/nosotros/nosotros-razones-03-por.webp'
            ],
        ],
        'view-more' => 'Ver Mais',
        'view-less' => 'Veja Menos'
    ],
    'module3' => [
        'subtitle' => 'Brand Safety',
        'title' => 'Inovar em um espaço seguro',
        'description' => 'Garantimos todas as medidas de BrandSafety para que sua marca esteja num ambiente confiável, sem fraudes, riscos ou conteúdo inadequado. Assim, oferecemos um conteúdo adequado para que os usuários escutem o que sua marca tem para dizer.',
        'desktop-image-url' => 'assets/images/nosotros/nosotros-brand-bk-por.jpg',
        'desktop-image-url-webp' => 'assets/images/nosotros/nosotros-brand-bk-por.webp',
        'mobile-image-url' => 'assets/images/nosotros/nosotros-brand-bk-mobile-por.jpg',
        'mobile-image-url-webp' => 'assets/images/nosotros/nosotros-brand-bk-mobile-por.webp'
    ],
    'module4' => [
        'title' => 'O Mercado Livre em números',
        'description' => 'Conheça algumas estatísticas do nosso marketplace:',
        'items' => [
            0 => [
                'image-url' => 'assets/images/nosotros/numeros-01-por.png',
            ],
            1 => [
                'image-url' => 'assets/images/nosotros/numeros-05-por.png',
            ],
            2 => [
                'image-url' => 'assets/images/nosotros/numeros-02-por.png',
            ],
            3 => [
                'image-url' => 'assets/images/nosotros/numeros-03-por.png',
            ],
            4 => [
                'image-url' => 'assets/images/nosotros/numeros-04-por.png',
            ]
            // 4 => [
            //     'image-url' => 'assets/images/nosotros/numeros-05-por.gif',
            // ],
            // 5 => [
            //     'image-url' => 'assets/images/nosotros/numeros-06-por.gif',
            // ],
            // 6 => [
            //     'image-url' => 'assets/images/nosotros/numeros-07-por.gif',
            // ],
            // 7 => [
            //     'image-url' => 'assets/images/nosotros/numeros-08-por.gif',
            // ],
        ]
    ],
    'module5' => [
        'title' => 'Somos um dos<br> favoritos do público',
        'description' => 'o Mercado Ads foi eleito o <font style=\'font-weight:600\'>3º melhor ambiente de publicidade para os consumidores no Brasil</font>, de acordo com a pesquisa Media Reactions 2020 da Kantar.',
        'img' => 'assets/images/logo-kantar.png',
    ],
];
