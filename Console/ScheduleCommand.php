<?php
declare(strict_types=1);

namespace Vendor\Example\Console;

use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Vendor\Example\Model\Scheduler;

class ScheduleCommand extends Command
{
    /**
     * @var Scheduler
     */
    private $scheduler;

    /**
     * @param Scheduler $scheduler
     */
    public function __construct(
        Scheduler $scheduler
    ) {
        $this->scheduler = $scheduler;
        parent::__construct();
    }

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName('example:sync:schedule');
        $this->setDescription('Schedule example module operation');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->scheduler->execute();

        $output->writeln('<info>Scheduled example module operation</info>');

        return Cli::RETURN_SUCCESS;
    }
}
