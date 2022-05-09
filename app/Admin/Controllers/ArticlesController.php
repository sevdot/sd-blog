<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Grid\ImportArticleAction;
use App\Models\Article;
use App\Models\Column;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ArticlesController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Article::with(['column']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('column.name', '专栏');
            $grid->column('title');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('name');
            });
            $grid->tools(function ($tools) {
                $tools->append(new ImportArticleAction());
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('column_id');
            $show->field('title');
            $show->field('excerpt');
            $show->field('content');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $columns = Column::pluck('name', 'id')->toArray();

        return Form::make(new Article(), function (Form $form) use ($columns) {
            $form->display('id');
            $form->select('column_id')->options($columns);
            $form->text('title');
            $form->text('slug','翻译标题');
            $form->markdown('content');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
