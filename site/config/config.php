<?php 
return [
    'debug' => true,
    'panel' =>[
        'install' => true
    ],
    'api' => [
        'allowInsecure' => true,
        'basicAuth' => true
    ],
    'hooks' => [
        'page.create:after' => function ($page) {
            if ( $page->parent() && $page->parent()->template() == 'gallery' ){
                if ( $page->past_event()->isNotEmpty() ){
                    $page->changeTitle( page( $page->past_event() )->title() );
                    $page->changeSlug( Str::slug( page( $page->past_event() )->title() . "-" . page( $page->past_event() )->date() ));
                } else if( $page->title()->isNotEmpty() ){
                    $page->changeSlug( Str::slug( $page->title() ));
                }
            }
        }
    ]

];