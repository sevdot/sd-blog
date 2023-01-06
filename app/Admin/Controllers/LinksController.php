<?php

namespace App\Admin\Controllers;

use App\Models\Link;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LinksController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Link(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('logo')->image('',64,64);
            $grid->column('url')->link();
            $grid->column('describe')->substr(0,30);
            $grid->column('status')->display(function ($status) {
                if ($status == 1) {
                    return "<span class=''>通过</span>";
                } else if ($status == 2) {
                    return "<span class=''>失败</span>";
                } else {
                    return "<span class=''>待审核</span>";
                }
            });
            $grid->column('created_at','申请时间')->sortDesc();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->in('status', '状态')->checkbox([
                    0=> "待审核",
                    1 => "成功",
                    2 => "失败",
                ]);

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Link(), function (Show $show) {
            $show->field('name');
            $show->field('logo')->image();
            $show->field('url')->link();
            $show->field('describe');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Link(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->image('logo');
            $form->url('url');
            $form->text('describe');
            $form->radio('status')->options([
                0=>"待审核",
                1=>"通过",
                2=>"失败",
            ]);
        });
    }
}
