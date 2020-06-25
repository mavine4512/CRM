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
                'icon' => 'fa fa-dashboard'
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
                'icon' => 'fas fa-user-tie',
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






        ],//end Main Item

]);//end menu
