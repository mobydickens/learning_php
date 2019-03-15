<?php namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\ClientInterface;
use ZipArchive;

class newCommand extends Command {

  private $client;
  public function __construct(ClientInterface $client)
  {
    $this->client = $client;

    parent::__construct();
  }
  public function configure()
  {
    $this->setName('new')
         ->setDescription('Create a new Laravel application')
         ->addArgument('name', InputArgument::REQUIRED);
  }

  public function execute(InputInterface $input, OutputInterface $output)
  {
    //assert that folder that we request doesn't exist
    $directory = getcwd() . '/' . $input->getArgument('name');

    $output->writeln('<info>Crafting Application...</info>');

    $this->assertApplicationDoesNotExist($directory, $output);
    //download nightly version of Laravel
    $this->download($zipFile = $this->makeFileName())
         ->extract($zipFile, $directory) 
         ->cleanUp($zipFile);

    //alert the user that they are ready to go
    $output->writeln('<comment>Application Ready!</comment>');
  }
  private function assertApplicationDoesNotExist($directory, OutputInterface $output)
  {
    if(is_dir($directory))
    {
      $output->writeln('<error>Application already exists!!!</error>');
      exit(1);
    }
  }
  private function download($zipFile)
  {
    $response = $this->client->get('http://cabinet.laravel.com/latest.zip')->getBody();
    file_put_contents($zipFile, $response);
    return $this;
  }

  private function extract($zipFile, $directory)
  {
    $archive = new ZipArchive;
    $archive->open($zipFile);
    $archive->extractTo($directory);
    $archive->close();
    return $this;
  }

  private function makeFileName()
  {
    return getcwd() . '/laravel_' . md5(time().uniqid()) . '.zip';
  }

  private function cleanUp($zipFile)
  {
    @chmod($zipFile, 0777);
    @unlink($zipFile);
    return $this;
  }
} 