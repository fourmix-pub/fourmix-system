<!DOCTYPE html>
<html lang="ja">
<head>
    @include('layouts.common.link')
    <title>ランチマッチング</title>
</head>
    <body id="lunch">
        @include('layouts.pageloader')
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="arrow">
                        <button type="button" class="btn btn-success back"
                                onClick="location.href='http://fourmix-system.app/dailies'">
                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-header">
                        <div>
                            <h2>
                                本日のランチマッチング
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="lunch-content">
                        <p>
                            参加者の中から、ランチタイムの相手がランダムに選ばれます
                        </p>
                        <p>
                            参加しますか？
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    <button type="button" class="btn btn-primary btn-lg lunch-btn">
                        参加
                    </button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    <h3 class="lunch-end">
                        締め切り：12:00
                    </h3>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>