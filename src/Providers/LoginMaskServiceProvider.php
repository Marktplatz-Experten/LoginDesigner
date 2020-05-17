<?php

namespace  LoginMask\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use IO\Helper\ResourceContainer;


class LoginMaskServiceProvider extends TemplateServiceProvider
{
	public function register() 
	{

	}
        public function boot(Twig $twig, Dispatcher $dispatcher)
        {
            $dispatcher->listen("IO.Resources.Import", function(ResourceContainer $container)
            {         
               $container->addScriptTemplate('LoginMask::ItemList.Components.CategoryItem'); 
            },0);
        }	
}
