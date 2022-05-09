<?php

namespace App\Admin\Forms;

use App\Models\Article;
use App\Models\Column;
use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class ImportArticleForm extends Form
{
    public function handle(array $input)
    {
        $file=Arr::last(explode(',',$input['zip']));
        $filePath=storage_path('app/public/').$file;
        // 解压
        $blogPath=$this->extract($filePath);
        // 批量创建文章
        $this->batchAddArticle($blogPath);
        return $this->response()->success('导入成功')->refresh();
    }

    public function form()
    {
        $this->file('zip','压缩包')->required();
    }

    public function extract($file){
        $zipper= new \ZipArchive();
        $zipper->open($file);
        $targetPath=storage_path('app/public/blog');
        $zipper->extractTo($targetPath);
        $zipper->close();
        return $targetPath;
    }

    public function batchAddArticle($path){
        $files = File::files($path);
        foreach ($files as $key=>$file){
            $content = $file->getContents();
            preg_match_all('/---\n(.*?)---\n/s',$content,$yamlArr);
            $yaml = $yamlArr[1][0];
            $meta=Yaml::parse($yaml);
            $datetime=date('Y-m-d H:i:s',$meta['date']);
            $category=Arr::last($meta['categories']);
            $column = Column::firstOrCreate(['name'=>$category]);
            $articleContent=str_replace($yamlArr[0],'',$content);
            Article::create([
                'column_id'=>$column->id,
                'title'=>$meta['title'],
                'content'=>$articleContent,
                'created_at'=>$datetime,
                'updated_at'=>$datetime,
            ]);
        }
    }

}
