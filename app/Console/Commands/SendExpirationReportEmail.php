<?php

namespace App\Console\Commands;

use App\Mail\SendExpirationDays;
use App\Models\CandidateDueDate;
use App\Models\Curriculum;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendExpirationReportEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:report-expiration-days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando de envio para expiração do email';

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
        $dataCalc = strtotime($date2);
        $dueDate = CandidateDueDate::where('due_date', '>', $date2)->get();
        $ids = [];
        foreach ($dueDate as $item) {
            $calc = ($dataCalc - strtotime($item->due_date)) / 86400;
            if ($calc < 0) {
                $calc *= -1;
            }
            if ($calc == 7) {
                $ids[] = $item->user_id;
            }
        }
        $users = Curriculum::whereIn('user_id', $ids)->get();
        foreach ($users as $value) {
            Mail::to($value->email)->send(new SendExpirationDays);
        }
        return;
    }
}
