<?php

/**
 * The main idea is that UserMapper is mapping `user` table row data into User object data.
 *
 * In this simple example UserMapper either fetches data from DB and populates User object with them, or saves
 * User object data in DB (creates a new row and populates User object with the new `id`, or updates existing row).
 *
 * User and UserMapper classes satisfy Single Responsibility Principle.
 */

require_once __DIR__ . '/../vendor/autoload.php';

// use SQLITE for testing
$sqliteFile = __DIR__ . '/example.sqlite';
$db = new \PDO(sprintf('sqlite:%s', $sqliteFile));
// create test `user` table with test data
$db->query('DROP TABLE IF EXISTS user');
$db->query('CREATE TABLE IF NOT EXISTS user (id INTEGER PRIMARY KEY, name TEXT)');
$db->query('INSERT INTO user (id, name) VALUES (1, "test user")');

// instantiate UserMapper
$userMapper = new \DesignPatterns\DataMapper\UserMapper($db);


// get existing user
$user = $userMapper->getById(1);
if ($user->getId() === 1 && $user->getName() === 'test user') {
    printf("- Fetched user row\n");
} else {
    printf("ERROR: Could not fetch user row\n");
}
$user->setName('test user updated');
$userMapper->save($user);


// get existing user again to check if name update was stored in the database
$user = $userMapper->getById(1);
if ($user->getId() === 1 && $user->getName() === 'test user updated') {
    printf("- Updated user row\n");
} else {
    printf("ERROR: Could not update user row\n");
}


// create a new user
$user = new \DesignPatterns\DataMapper\User();
$user->setName('new user name');
// insert new user row
$userMapper->save($user);

if ($user->getId() === 2) {
    printf("- Inserted a new user row\n");
} else {
    printf("ERROR: Could not insert a new user row\n");
}


// delete sqlite file
unlink($sqliteFile);
