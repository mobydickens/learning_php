<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command 
{
  protected function configure()
  {
    $this->setName('speak')
         ->setDescription('Speak a message')
         ->addArgument('message', InputArgument::OPTIONAL, 'what message should I speak?', 'Hello, Dave');  
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    exec('say ' . $input->getArgument('message'));
    $output->writeln('<info>I am watching you!!</info>');
  }
}