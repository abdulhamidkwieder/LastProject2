<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcher.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\ExpressionLanguage\\Expression.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\ExpressionLanguage\\ParsedExpression.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\ExpressionLanguage\\SerializedParsedExpression.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMap.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$a = new \Symfony\Component\ExpressionLanguage\SerializedParsedExpression('is_authenticated() == false', 'O:52:"Symfony\\Component\\ExpressionLanguage\\Node\\BinaryNode":2:{s:5:"nodes";a:2:{s:4:"left";O:54:"Symfony\\Component\\ExpressionLanguage\\Node\\FunctionNode":2:{s:5:"nodes";a:1:{s:9:"arguments";O:46:"Symfony\\Component\\ExpressionLanguage\\Node\\Node":2:{s:5:"nodes";a:0:{}s:10:"attributes";a:0:{}}}s:10:"attributes";a:1:{s:4:"name";s:16:"is_authenticated";}}s:5:"right";O:54:"Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode":3:{s:68:"' . "\0" . 'Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode' . "\0" . 'isIdentifier";b:0;s:5:"nodes";a:0:{}s:10:"attributes";a:1:{s:5:"value";b:0;}}}s:10:"attributes";a:1:{s:8:"operator";s:2:"==";}}');

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), array(0 => $a), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => $a), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), array(0 => 'ROLE_USER'), NULL);

return $instance;