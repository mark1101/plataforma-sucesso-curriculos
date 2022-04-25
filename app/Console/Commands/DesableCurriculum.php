<?php

namespace App\Console\Commands;

use App\Models\CandidateDueDate;
use App\Models\Curriculum;
use Illuminate\Console\Command;

class DesableCurriculum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'disable:curriculum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para desabilitar um curriculo em caso de expiracao';

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
        $date2 = date('Y/m/d');
        $dueDate = CandidateDueDate::where('due_date', '<', $date2)->get();
        $ids = [];
        foreach ($dueDate as $item) {
            $ids[] = $item->user_id;
        }
        $users = Curriculum::whereIn('user_id', $ids)->get();
        foreach ($users as $value) {
            Curriculum::where('user_id' , $value->user_id)->update([
                'active' => 0
            ]);
        }
        return;
    }
}
