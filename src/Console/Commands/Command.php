<?php
namespace Luminee\Label\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
class LabelMigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'luminee:label:migrate';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate label database';
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate', ['--path' => 'vendor/luminee/label/src/Database/migrations']);
        $this->info('Label Migrate Has Done! ^_^');
    }
    
}