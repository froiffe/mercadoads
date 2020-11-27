<?php

return [
    'title' => '¿Alguna consulta?',
    'subtitle' => 'Hablemos',
    'seller' => 'Soy vendedor de mercado libre',
    'seller-url' => 'https://ads.mercadolibre.com.ar/productAds',
    'advertiser' => 'Soy una marca',
    'agency' => 'Soy anunciante',
    'form-title' => 'Completa tus datos y <b>analizaremos tu perfil para darte más información</b>',
    'form-inputs' => [
        'name' => 'Nombre completo',
        'lastname' => 'Apellido',
        'email' => 'Mail Corporativo',
        'area_code' => 'Cod',
        'telephone' => 'Teléfono',
        'business' => 'Empresa',
        'business_type' => [
            'name' => 'Tipo de empresa',
            'items' => [
                'Agencia',
                'Marca por fuera de Mercado Libre',
                'Tienda Oficial',
                'Vendedor dentro de Mercado Libre',
            ]
        ],
        'country' => [
            'name' => 'País',
            'items' => [
                'Argentina',
                'Brasil',
                'Chile',
                'Colombia',
                'México',
                'Perú',
                'Uruguay',
                'Otro',
            ]
        ],
        'industry_type' => [
            'name' => 'Tipo de industria',
            'items' => [
                'Automotriz',
                'Consumo Masivo',
                'Masivo',
                'Tecnología/Electrónica',
                'Hogar',
                'Moda',
                'Bancos',
                'Seguros',
                'Telecomunicaciones',
                'Otras',
            ]
        ],
        'investment' => [
            'name' => 'Inversión mínima',
            'items' => [
                'Menos de 6K USD',
                'Más de 6K USD',
            ]
        ],
        'message' => 'Mensaje',
    ],
    'form-names' => [
        'name' => 'Nombre completo',
        'lastname' => 'Apellido',
        'email' => 'Mail Corporativo',
        'area_code' => 'Código de área',
        'telephone' => 'Teléfono',
        'business' => 'Empresa',
        'business_type' => 'Tipo de empresa',
        'country' => 'País',
        'industry_type' => 'Tipo de industria',
        'investment' => 'Inversión mínima',
        'message' => 'Mensaje',
    ],
    'emails' => [
        'product-ads' => [
            'from-name' => 'Mercado Ads',
            'subject' => 'La respuesta que buscas es Product Ads',
            'img' => 'muchacho-ES.png',
            'title' => 'Conoce cómo Product Ads <br class="desktop">puede hacer crecer tu negocio ',
            'body' => 'En base a tu perfil, te invitamos a consultar nuestra herramienta de autogestión y conocer más sobre cómo llevar tu negocio al siguiente nivel. ',
            'linkedin' => [
                'text' => 'Siguenos en',
                'link' => 'https://www.linkedin.com/showcase/mercadoads',
            ],
            'copyright' => 'Mercado Libre te envía este mail porque al registrarte optaste por recibir&nbsp;información.<br><br>El Equipo de Mercado Ads © 1999-2020 Mercado&nbsp;Libre&nbsp;S.R.L.',
        ]
    ],
    'investment' => [
        'title' => 'En base a tu perfil, te invitamos a consultar nuestra herramienta de autogestión. ',
        'button-link' => 'https://ads.mercadolibre.com.ar/productAds',
    ],
    'fields-required' => 'Campos obligatorios.',
    'send' => 'enviar',
    'contact-success' => 'Tu mensaje fue enviado con éxito. Muy pronto nos pondremos en contacto.',
    'go-back' => 'volver',
    'captcha-error' => 'Debe marcar el Captcha para poder continuar.',
    'email-valid-error' => 'Por favor, te solicitamos indiques un mail corporativo',
];
