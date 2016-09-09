<?php
namespace Mycmd;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 */
class TestCmd extends Command
{
    public function __construct($msg)
    {
        $this->msg = $msg;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('test');
        $this->setDescription('test for uu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment>".$this->msg."</comment>");
    }
}
