<?php

namespace App\Admin\Actions\Grid;

use App\Admin\Forms\ImportArticleForm;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Widgets\Modal;

class ImportArticleAction extends RowAction
{
    /**
     * @return string
     */
    protected $title = '导入文章';

    public function render()
    {
        $form = ImportArticleForm::make();

        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body($form)
            ->button('<button class="btn btn-primary">导入文章</button>');
    }
}
