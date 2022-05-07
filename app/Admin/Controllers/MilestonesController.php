<?php

namespace App\Admin\Controllers;

use App\Models\Milestone;
use App\Models\Project;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class MilestonesController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Milestone::with(['project']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('project.name','项目');
            $grid->column('created_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('title');

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
        return Show::make($id, new Milestone(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('content');
            $show->field('project_id');
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
        $projects = Project::pluck('name','id');
        return Form::make(new Milestone(), function (Form $form) use($projects) {
            $form->display('id');
            $form->select('project_id')->options($projects);
            $form->text('title');
            $form->text('content');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
