<div class="row">
    <div class="hidden-xs hidden-sm col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form method="post" action="{{ route('dailies.store') }}">
                            {{ csrf_field() }}
                            <div class="row daily-lg-form daily-form">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control day" name="date" value="{{ old('date') ?? $date }}"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="project_id" data-width="100%" data-live-search="true" title="プロジェクト名">
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}" data-tokens="fourmix-system" @if((int)old('project_id') === $project->id) selected @endif>{{ '#'.$project->id.' '.$project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="work_type_id" data-width="100%" data-live-search="true" title="作業分類">
                                        @foreach($workTypes as $workType)
                                            <option value="{{ $workType->id }}" data-tokens="fourmix-system" @if((int)old('work_type_id') === $workType->id) selected @endif>{{ '#'.$workType->id.' '.$workType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control time" name="start" value="{{ old('start') ??  \Illuminate\Support\Carbon::now('Japan')->format('H:i') }}" placeholder="開始"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control time" name="end" placeholder="終了" value="{{ old('end') }}" >
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control" name="rest" placeholder="休憩(分)" value=@if(old('rest'))"{{ old('rest') }}"@else "0" @endif>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="job_type_id" data-width="100%" data-live-search="true" title="勤務分類">
                                        @foreach($jobTypes as $jobType)
                                            <option value="{{ $jobType->id }}" data-tokens="fourmix-system" @if((int)old('job_type_id') === $jobType->id) selected @endif>{{ '#'.$jobType->id.' '.$jobType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄">{{ old('note') }}</textarea>
                                </div>
                            </div>

                            <br>

                            <div align="middle">
                                <button type="submit" class="btn registration-daily">登録</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>