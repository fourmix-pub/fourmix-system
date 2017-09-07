<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Hash;
use Illuminate\Support\Facades\Artisan;

class SystemInstall extends Command
{
    const INSTALL_PASS = '$2y$10$ZPJSgx.di.axdmUbvy803OPresvNTobwjSC8OEDX0HHzuUzFQSjFS';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Fourmix log system';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL.'フォーミックス社内ログシステム');
        if ($this->confirm('システムをインストールしますか？')) {
            $install_pass = $this->secret('インストールパスワードを入力してください。（パスワード ：fourmix）');
            if (Hash::check($install_pass, self::INSTALL_PASS)) {
                $this->line(PHP_EOL.'<info>✔</info> 確認しました。');
                if ($this->confirm('もう一度環境設定を確認して、本当にインストールでよろしいですか？')) {
                    try {
                        $this->comment(PHP_EOL.'<info>インストールしています...</info>');
                        $this->comment(PHP_EOL.'<info>Step 1/6: マイグレーションしています。</info>');
                        Artisan::call('migrate');
                        $this->comment(PHP_EOL.'<info>Step 2/6: 初期ユーザを登録してください</info>');
                        $name = $this->ask('お名前');
                        $email = $this->ask('E-mail');
                        $password = $this->secret('パスワード');
                        $this->CreateUser($name, $email, $password);
                        $this->line(PHP_EOL.'<info>✔</info> 登録しました。');
                        $this->comment(PHP_EOL.'<info>Step 3/6: ストレージリンクしています。</info>');
                        Artisan::call('storage:link');
                        $this->comment(PHP_EOL.'<info>Step 4/6: アプリケーションKeyを生成しています。</info>');
                        Artisan::call('key:generate');
                        $this->comment(PHP_EOL.'<info>Step 5/6: キャッシュファイルを生成しています。</info>');
                        Artisan::call('config:cache');
                        Artisan::call('route:cache');
                        $this->comment(PHP_EOL.'<info>Step 6/6: ソースコンパイルしています。</info>');
                        Artisan::call('optimize');
                        $this->comment(PHP_EOL.'インストール完了しました。ありがとうございました。 <info>✔</info>');
                    } catch (\Exception $e) {
                        $this->line($e);
                        $this->line(PHP_EOL.'<error>✘</error> システムエラー。インストールできませんでした');
                        exit;
                    }
                }
            } else {
                $this->line(PHP_EOL.'<error>✘</error> パスワードが間違っています。インストールできませんでした');
                exit;
            }
        } else {
            $this->comment(PHP_EOL.'ありがとうございました。');
            exit;
        }
    }
    private function CreateUser($name, $email, $password)
    {
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'department_id' => 1,
            'cost' => 20,
            'start' => '09:30:00',
            'end' => '18:30:00',
            'is_resignation' => 0,
        ]);
    }
}
