<?php
/**
 * namespace para nosso modulo Socio
 */
namespace Socio;

/**
 * Arquivo de configuração do modulo Socio
 * Respnsavel por gerenciar as configurações de:
 * Rotas, layout padrão, translator, Doctrine
 * controllers, views, translate, layouts etc.
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2015, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

return array(
    'router' => array(
        'routes' => array(
            'socio-home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/app-socio',
                    'defaults' => array(
                        'controller' => 'Socio\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    // Controllers Invocados
    'controllers' => array(
        'invokables' => array(
            'Socio\Controller\Index' => 'Socio\Controller\IndexController'
        ),
    ),
    //Configurando qual Layout vai ser o padrão mo modelo
    'module_layout' => array(
        'Socio' => 'layout/layout_socio.phtml'
    ),
    // definir e gerenciar layouts, erros, exceptions, doctype base
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout_socio.phtml',
            'error/404'               => __DIR__ . '/../../Core/view/error/404.phtml',
            'error/index'             => __DIR__ . '/../../Core/view/error/index.phtml',
            'partials/paginator'      => __DIR__ . '/../../Core/view/partials/paginator.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);