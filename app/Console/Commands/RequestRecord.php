<?php

namespace App\Console\Commands;

use App\Http\Controllers\RequestController;
use Illuminate\Console\Command;

class RequestRecord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request:record';

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
        $request->storeResults();
    }
}
