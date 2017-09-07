<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SystemUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the Fourmix log system when pulled from git';

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
        $this->comment(PHP_EOL.'フォーミックス社内ログシステム');
        if ($this->confirm('システムアップデートしますか？')) {
            try {
                $this->comment(PHP_EOL.'<info>Step 1/3: 設定ファイル、キャッシュ中...</info>');
                Artisan::call('config:cache');
                $this->comment(PHP_EOL.'<info>Step 2/3: ルート、キャッシュ中...</info>');
                Artisan::call('route:cache');
                $this->comment(PHP_EOL.'<info>Step 3/3: 最適化中...</info>');
                Artisan::call('optimize');
                $this->comment(PHP_EOL.'アップデート完了！ <info>✔</info>');
            } catch (\Exception $e) {
                $this->line($e);
                $this->line(PHP_EOL.'<error>✘</error> システムエラー。アップデート失敗！');
                exit;
            }
        } else {
            $this->comment(PHP_EOL.'ありがとうございます');
            exit;
        }
    }
}
