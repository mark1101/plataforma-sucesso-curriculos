<?php

namespace App\Console\Commands;

use App\Mail\CurriculumNotActive;
use App\Models\Curriculum;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendNotActiveReportEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:report-not-active-curriculo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disparo de emails para curriculo que não estão ativos dentro da plataforma';

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
    public function handle()
    {
        $curriculum = Curriculum::where('active', 0)->get();
        foreach ($curriculum as $item) {
            Mail::to($item->email)->send(new CurriculumNotActive);
        }
    }
}
