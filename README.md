# Redis PHP Example with Predis by Aditya Fouzder

This repository demonstrates how to use the **Predis** library to interact with a Redis server using PHP. The project includes examples for basic Redis operations like setting/getting values, lists, hashes, and counters.

## Features
- Basic Redis commands (`SET`, `GET`, `DEL`, etc.)
- Working with Lists, Hashes, and Counters
- Publishing messages using Redis Pub/Sub
- Redis connection testing

## Requirements
- PHP 7.4 or higher
- Composer
- Redis server (localhost or remote)

## Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/bfouzder/redis-php-example.git
   cd redis-php-example
   ```

2. Install dependencies with Composer:
   ```bash
   composer install
   ```

3. Run the Redis server locally:
   ```bash
   redis-server
   ```

4. Run the PHP script:
   ```bash
   php src/redis_example.php
   ```

## License
This project is open-source and available under the MIT License.
