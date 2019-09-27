<?php

namespace Datomon\LaravelMailserveTest\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Datomon\LaravelMailserveTest\Mail\SendTestMail;
use Exception;

class SendEmail extends Command
{
    protected $signature = 'mailserve:send 
                            {mail : 收件人E-mail} 
                            {obj : 標題} 
                            {con : 內容文字}';

    protected $description = '寄出測試 Mail';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        $data = [
            'subject' => $this->argument('obj'),
            'content' => $this->argument('con'),
        ];

        try {
            Mail::to($this->argument('mail'))->send(new SendTestMail($data));
            $this->info('測試 Mail 已成功寄出!');
        } catch (Exception $e) {
            $this->error('*** Error Msg ***' . PHP_EOL . $e->getMessage());
        } 
    }
}
