<?php


    namespace Ling5821\Lconsul\Commands;


    use Illuminate\Console\Command;
    use Illuminate\Container\Container;
    use Ling5821\Lconsul\ServiceNode;

    class ConsulRegister extends Command
    {
        /**
         * The name and signature of the console command.
         * @var string
         */
        protected $signature = 'consul:register';
        /**
         * The console command description.
         * @var string
         */
        protected $description = 'consul register';

        public function __construct()
        {
            parent::__construct();
        }

        public function handle()
        {
            app(ServiceNode::class)->register();
        }



    }