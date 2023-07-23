<?php

namespace Arr2504\Vuez\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use RuntimeException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vuez:install {stack : The development stack that should be installed (bs,tw)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Vuez controllers and resources';

    /**
     * The available stacks.
     *
     * @var array<int, string>
     */
    protected $stacks = ['bs', 'tw'];

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        switch ($this->argument("stack")) {
            case 'bs':
                return (new InstallVueBootStrapStack())->install($this);
                break;

            case 'tw':
                return (new InstallVueTailWindStack())->install($this);
                break;

                // case 'react-bs':
                //     return $this->warn("Coming soon");
                //     break;

                // case 'react-tw':
                //     return (new InstallReactTailWindStack())->install($this);
                //     break;

            default:
                # code...
                break;
        }

        $this->components->error('Invalid stack. Supported stacks are bs or tw');
        return 1;
    }

    /**
     * Interact with the user to prompt them when the stack argument is missing.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return void
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        if ($this->argument('stack')) {
            return;
        }

        $input->setArgument('stack', $this->components->choice('Which stack would you like to install?', $this->stacks));
    }
}
