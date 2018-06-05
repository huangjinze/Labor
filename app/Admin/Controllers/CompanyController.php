<?php

namespace App\Admin\Controllers;

use App\Models\Company;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CompanyController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('公司简介');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('公司简介');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('公司简介');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Company::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('公司名称');
            $grid->en_name('公司别名');
            $grid->address('地址');
            $grid->telephone('联系电话');
            $grid->phone('座机电话');
            $grid->charger('公司法人');
            $grid->mail('邮箱');
            $grid->disableExport();

            $grid->disableCreateButton();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->disableDelete();
                });
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Company::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '公司名称');
            $form->text('en_name', '公司别名');
            $form->text('address', '地址');
            $form->text('telephone', '联系电话')->rules('required|regex:/^\d+$/|min:10', [
                'regex' => '电话必须全部为数字',
                'min'   => '电话不能少于10个字符',
            ]);
            $form->text('phone', '座机电话')->rules('required|regex:/^\d+$/|min:10', [
                'regex' => '电话必须全部为数字',
                'min'   => '电话不能少于10个字符',
            ]);
            $form->text('charger', '公司法人');
            $form->email('mail', '邮箱');
            $form->image('logo', '公司logo');
            $form->image('image', '二维码')->rules('nullable');
            $form->editor('content', '公司简介');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
