<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    /**
     * JSON 非表示カラム
     * @var array
     */
    protected $hidden = ['id'];

    /**
     * カラム配列で取得
     * @return array
     */
    public function attributes()
    {
        return $this->attributesToArray();
    }

    /**
     * モデルデータをリフレッシュする
     * @param array $with
     * @return mixed
     */
    public function reload($with = [])
    {
        return static::whereId($this->id)->with($with)->first();
    }
}
