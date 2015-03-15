<?php
/**
 * namespace para nosso modulo Empresa
 */
namespace Empresa;

/**
 * Arquivo de configuração do modulo Empresa
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
            'empresa-home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/app-empresa',
                    'defaults' => array(
                        'controller' => 'Empresa\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    // Controllers Invocados
    'controllers' => array(
        'invokables' => array(
            'Empresa\Controller\Index' => 'Empresa\Controller\IndexController'
        ),
    ),
    //Configurando qual Layout vai ser o padrão mo modelo
    'module_layout' => array(
        'Empresa' => 'layout/layout_empresa.phtml'
    ),
    // definir e gerenciar layouts, erros, exceptions, doctype base
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout_empresa.phtml',
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