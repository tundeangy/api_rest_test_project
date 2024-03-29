<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\LoaderResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\LoaderResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\FileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\XmlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\YamlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\PhpFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\GlobFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\DirectoryLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\DirectoryRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestRouteProcessor.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\Reader\\RestControllerReader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\Reader\\RestActionReader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestYamlCollectionLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestXmlCollectionLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\AnnotationClassLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\InflectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\DoctrineInflector.php';

$a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'};
$b = new \Symfony\Component\Config\Loader\LoaderResolver();

$c = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]))) && false ?: '_'};
$d = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
$e = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};
$f = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($e);

$b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c));
$b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c));
$b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c));
$b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c));
$b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c));
$b->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($c, $d));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $c, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($e, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->load('getFosRest_Request_ParamFetcher_ReaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.inflector']) ? $this->services['fos_rest.inflector'] : ($this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector())) && false ?: '_'}, false, ['json' => false, 'xml' => false, 'html' => true], true), $e), NULL));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($c, $d, false, ['json' => false, 'xml' => false, 'html' => true], NULL));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($c, $d, false, ['json' => false, 'xml' => false, 'html' => true], NULL));
$b->addLoader($f);
$b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $f));
$b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $f));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $b);
