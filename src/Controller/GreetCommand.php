<?php


namespace Dojo\Controller;


use Dojo\Greeter;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends ContainerAwareCommand
{
    /**
     * @var Greeter
     */
    private $greeter;

    /**
     * GreetCommand constructor.
     * @param Greeter $greet
     */
    public function __construct( Greeter $greeter)
    {
        parent::__construct();
        $this->greeter = $greeter;
    }

    protected function configure()
    {
        $this
            ->setName('dojo:greet')
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $yell = $input->getOption('yell');

        $text = $this->greeter->greet($name, $yell);
        $output->writeln($text);
    }
}
