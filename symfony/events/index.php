<?php

// composer require symfony/event-dispatcher

require 'vendor/autoload.php';
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

//first create a dispatcher
$dispatcher = new EventDispatcher;

// listener can be registered with the dispatcher
$dispatcher->addListener('UserSignedUp', function(Event $event) {
  var_dump($event->user->name);
});

// $dispatcher->dispatch('UserSignedUp');

class UserSignedUp extends Event
{
  public $user;

  public function __construct($user)
  {
    $this->user = $user;
  }
}

$event = new UserSignedUp( (object) ['name'=>'Joe', 'email'=>'exampe.com']);

// can resolve out of container, dispatch by giving the name of the event. 
$dispatcher->dispatch('UserSignedUp', $event);

// $listener = new SendThankYouEmail;
// $dispatcher->dispatch('UserSignedUp', [$listener, 'handle']);

// class SendThankYouEmail
// {
//   public function handle()
//   {
//     var_dump('send email');
//   }
// }
