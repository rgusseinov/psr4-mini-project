<?php
namespace App\Controllers;

use App\Models\User;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class UserController {
  public function show(): void
  {
    $user = new User('Ruslan');

    $log = new Logger('user_log');
    $log->pushHandler(new StreamHandler(__DIR__ . '/../../logs/app.log', Logger::INFO));

    $log->info('UserController called', ['user' => $user->greet()]);
    
    echo $user->greet();
  }
}