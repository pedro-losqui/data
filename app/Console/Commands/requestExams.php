<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RequestController;

class requestExams extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request:exams';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa a requisição dos registros no sistema Sênior.';

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
     * @return int
     */
    public function handle(RequestController $request)
    {
        $request->storeExams();
    }
}
