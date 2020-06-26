<?php
use app\components\widgets\Menu;



echo Menu::widget([

    'options' =>
     ['class' => 'sidebar-menu tree',
     'data-widget'=> 'tree'],

        'items' => [
              [
                'label' => 'Leads',
                'url' => [
                    '/lead/index'
                ],
                'icon' => 'fa fa-building'
            ],

            [

                'label' => 'customer',
                'icon' => 'fa fa-tags',
                'url' => [
                    '/customer/index'
                ],
                'visible' => true,
                // 'items' => [
                //      [
                //         'label' => 'View orders',
                //         'url' => [ '/customer/index'],
                //         'visible' => true,
                //         'icon' => 'fa fa-circle-o'
                //     ],

                    //  [
                    //     'label' => 'Manage',
                    //     'url' => ['pos-orders/view-orders'],
                    //     'visible' => true,
                    //     'icon' => 'fa fa-circle-o'
                    // ],

                //]

            ],/*close Quotation mnu*/


            [

                'label' => 'Cases',
                'icon' => 'fas fa-users-tie',
                'url' => [
                    '/case/index'
                ],
                'visible' => true,
                // 'items' => [
                //      [
                //         'label' => 'add',
                //         'url' => ['suppliers/create'],
                //         'visible' => true,
                //         'icon' => 'fa fa-circle-o'
                //     ],
                //
                //      [
                //         'label' => 'Manage',
                //         'url' => ['suppliers/index'],
                //         'visible' => true,
                //         'icon' => 'fa fa-circle-o'
                //     ],
                //
                // ]

            ],
            [
            'label' => 'logout',
            'icon' => 'fa fa-user-tie',
            'url' => [
                '/site/logout'
            ],
            'visible' => true,
              ],
              [
              'label' => 'login',
              'icon' => 'fa fa-user-tie',
              'url' => [
                  '/site/login'
              ],
              'visible' => true,
                ],



        ],//end Main Item

]);//end menu
