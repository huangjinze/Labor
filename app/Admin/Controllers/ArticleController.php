<?php

namespace App\Admin\Controllers;

use App\Models\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->author('作者');
            $grid->title('标题');
            $grid->type('类型')->options([
                '劳务派遣' => '劳务派遣',
                '人力资源服务' => '人力资源服务',
                '劳务外包' => '劳务外包',
                '政策法规' => '政策法规',
                '党群工作建设' => '党群工作建设',
                '招聘信息' => '招聘信息',
                '服务动态' => '服务动态'
            ]);
            $grid->cover('封面')->image();
            $grid->content('内容');
            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('title', '标题');
            $form->text('author', '作者')->default('admin');
            $form->select('type', '类型')->options([
                '劳务派遣' => '劳务派遣',
                '人力资源服务' => '人力资源服务',
                '劳务外包' => '劳务外包',
                '政策法规' => '政策法规',
                '党群工作建设' => '党群工作建设',
                '招聘信息' => '招聘信息',
                '服务动态' => '服务动态'
            ]);
            $form->image('cover', '封面');
            $form->editor('content', '内容');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
        });
    }
}
