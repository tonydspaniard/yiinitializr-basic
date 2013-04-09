<?php
/**
 *
 * Yiic.php bootstrap file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
require_once('./app/lib/vendor/yiisoft/yii/framework/yii.php');

Yii::setPathOfAlias('Yiinitializr', './app/lib/Yiinitializr');

use Yiinitializr\Helpers\Initializer;

Initializer::create('./app', 'console', array('common', 'env', 'local'))->run();
