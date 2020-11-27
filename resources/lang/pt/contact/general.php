<?php

return [
    'title' => 'Alguma pergunta?',
    'subtitle' => 'Vamos conversar',
    'seller' => 'Sou um vendedor do Mercado Livre',
    'seller-url' => 'https://ads.mercadolivre.com.br/productAds',
    'advertiser' => 'Eu sou uma marca',
    'agency' => 'Eu sou uma agência',
    'form-title' => 'Preencha seus dados e <b>iremos analisar o seu perfil para lhe dar mais informações. </b>',
    'form-inputs' => [
        'name' => 'Nome completo',
        'lastname' => 'Sobrenome',
        'email' => 'Mail Corporativo',
        'area_code' => 'COD',
        'telephone' => 'Telefone',
        'business' => 'O negócio',
        'business_type' => [
            'name' => 'Tipo de empresa',
            'items' => [
                'Agência',
                'Marca com Loja oficial Mercado Livre',
                'Marca fora do Mercado Livre',
                'Vendedor no Mercado Livre',
            ],
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
                'Uruguai',
                'Outro',
            ]
        ],
        'industry_type' => [
            'name' => 'Tipo de indústria',
            'items' => [
                'Automotivo/Auto-partes',
                'Bens de Consumo',
                'Tecnologia/Electrônicos',
                'Casa, cama & banho',
                'Moda',
                'Bancos',
                'Seguradoras',
                'Telecomunicações',
                'Outras',
            ]
        ],
        'investment' => [
            'name' => 'Investimento mínimo',
            'items' => [
                'Menos de 25K BRL',
                'Mais de 25K BRL',
            ]
        ],
        'message' => 'mensagem',
    ],
    'form-names' => [
        'name' => 'Nome completo',
        'lastname' => 'Sobrenome',
        'email' => 'Mail Corporativo',
        'area_code' => 'COD',
        'telephone' => 'Telefone',
        'business' => 'O negócio',
        'business_type' => 'Tipo de empresa',
        'country' => 'País',
        'industry_type' => 'Tipo de indústria',
        'investment' => 'Investimento mínimo',
        'message' => 'mensagem',
    ],
    'emails' => [
        'product-ads' => [
            'from-name' => 'Mercado Ads',
            'subject' => 'A solução que você procura é Product Ads',
            'img' => 'muchacho.png',
            'title' => 'Conheça como Product Ads <br class="desktop">pode ajudar a alavancar seu negócio',
            'body' => 'Com base em seu perfil, convidamos você a consultar nossa ferramenta de autogestão e saber mais sobre como levar seu negócio a um novo patamar com publicidade.',
            'linkedin' => [
                'text' => 'Siga-nos no',
                'link' => 'https://www.linkedin.com/showcase/mercadoadsbrasil',
            ],
            'copyright' => 'Mercado Libre te envía este mail porque al registrarte optaste por recibir&nbsp;información.<br><br><span style="color:#333333;">A equipe do Mercado Ads Copyright © 1999-2020 Ebazar.com.br LTDA.',
        ]
    ],
    'investment' => [
        'title' => 'Com base no seu perfil, convidamos você a consultar nossa ferramenta de autogestão.',
        'button-link' => 'https://ads.mercadolivre.com.br/productAds',
    ],
    'fields-required' => 'Campos obrigatórios.',
    'send' => 'enviar',
    'contact-success' => 'Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.',
    'go-back' => 'volte',
    'captcha-error' => 'Você deve marcar o Captcha para continuar.',
    'email-valid-error' => 'Por favor, solicitamos que você indique um email corporativo',
];
