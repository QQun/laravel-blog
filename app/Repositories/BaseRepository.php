<?php namespace App\Repositories;

use App\Interfaces\IRepository;

abstract class BaseRepository implements IRepository
{

    /**
     * The Model instance.
     */
    protected $model;

    /**
     * Get Model by id.
     *
     * @param  int $id
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * IRepository接口store方法
     * 请在子类中重写或重载具体的实现方法
     *
     * @param  array $inputs
     * @param  string|array $extra
     * @return void
     */
    public function store($inputs = [], $extra = '')
    {
        return;
    }

    /**
     * IRepository接口destory方法
     * 请在子类中重写或重载具体的实现方法
     *
     * @param  int $id
     * @param  string|array $extra
     * @return void
     */
    public function destroy($id = 0, $extra = '')
    {
        $model = $this->getById($id);
        return $model->delete();
    }


}
