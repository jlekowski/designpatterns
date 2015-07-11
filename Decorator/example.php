<?php

/**
 * Decorators allow to alter behaviour of classes of the same "type" (same abstract class or interface).
 * They may replace and wrap the initial class and each other.
 *
 * In this example decorators change HTML/Bash formatting of the user's name. They add formatting, or clear HTML tags.
 * There could be other decorators with functionality like: remove/leave specific tags, set/increase font size etc.
 *
 * It is important that User Printer is unaware of the exact code implementation (object type) - it works with the
 * User object as well as with each of the decorators.
 */


use DesignPatterns\Decorator\User;
use DesignPatterns\Decorator\UserBoldHtmlDecorator;
use DesignPatterns\Decorator\UserGreenBashDecorator;
use DesignPatterns\Decorator\UserItalicHtmlDecorator;
use DesignPatterns\Decorator\UserNoHtmlDecorator;
use DesignPatterns\Decorator\UserPrinter;
use DesignPatterns\Decorator\UserUnderlineHtmlDecorator;

require_once __DIR__ . '/../vendor/autoload.php';

$userPrinter = new UserPrinter();

$user = new User('Test Name');
printf("- Initial User object\n");
$userPrinter->printName($user);

$user = new UserBoldHtmlDecorator($user);
printf("- User Bold HTML Decorator applied\n");
$userPrinter->printName($user);

$user = new UserItalicHtmlDecorator($user);
printf("- User Italic HTML Decorator applied\n");
$userPrinter->printName($user);

$user = new UserUnderlineHtmlDecorator($user);
printf("- User Underline HTML Decorator applied\n");
$userPrinter->printName($user);

$user = new UserGreenBashDecorator($user);
printf("- User Green Bash Decorator applied\n");
$userPrinter->printName($user);

$user = new UserNoHtmlDecorator($user);
printf("- User No HTML Decorator applied\n");
$userPrinter->printName($user);
