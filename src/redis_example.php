<?php
/**
*Author: Bodhaditya Fouzder
*Email: bfouzder@gmail.com, bfouzder@yahoo.com
*
**/
require __DIR__ . '/../vendor/autoload.php';

use Predis\Client;

$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

try {
    $redis->ping();
    echo "Connected to Redis!\n";
} catch (Exception $e) {
    echo "Could not connect to Redis: " . $e->getMessage() . "\n";
    exit(1);
}

$redis->set('name', 'John Doe');
echo "Stored name: " . $redis->get('name') . "\n";

$redis->rpush('tasks', 'Task 1', 'Task 2', 'Task 3');
$tasks = $redis->lrange('tasks', 0, -1);
echo "Tasks List:\n";
print_r($tasks);

$redis->hmset('user:1001', [
    'id'    => 1001,
    'name'  => 'Alice',
    'email' => 'alice@example.com',
]);
$user = $redis->hgetall('user:1001');
echo "User Details:\n";
print_r($user);

$redis->set('counter', 0);
$redis->incr('counter');
$redis->incrby('counter', 5);
echo "Counter Value: " . $redis->get('counter') . "\n";

$redis->publish('channel', 'Hello, Redis!');

$redis->del(['name', 'tasks', 'user:1001', 'counter']);
echo "Keys cleared.\n";
