<?php

/**
 * The main idea is that User, when updated, notifies its observers about this fact.
 *
 * In this simple example when User data is updated an email needs to be sent and cache updated.
 * Using SplSubject and SplObserver classes is not mandatory and in this case requires type check.
 *
 * Important that the User class does not require modification when the "post-save" code changes. Moreover, it
 * allows to change the number of observers in run-time.
 *
 * User class satisfies Open/Closed Principle.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use DesignPatterns\Observer\Cache;
use DesignPatterns\Observer\CacheObserver;
use DesignPatterns\Observer\Mailer;
use DesignPatterns\Observer\MailerObserver;
use DesignPatterns\Observer\User;

$cache = new Cache();
$cacheObserver = new CacheObserver($cache);
$mailer = new Mailer();
$mailerObserver = new MailerObserver($mailer);

$user = new User(new \SplObjectStorage(), 'Test');

// save User details changes, but nothing more happens, no callbacks etc.
$user->setStatus('No Observers');
printf("- Update User with no further actions\n");
$user->save();

// attach multiple observers to the User object
$user->attach($cacheObserver);
$user->attach($mailerObserver);
// all observers are notified: user details are cached, and an email is sent
$user->setStatus('Cache and Mail');
printf("- Update User and update cache, and send email afterwards\n");
$user->save();

// stop sending emails on User update
$user->detach($mailerObserver);
// now only cache is updated, no email sent
$user->setStatus('Do not Mail');
printf("- Update User and update cache, but send no email\n");
$user->save();
