<?php
/**
 * Created by PhpStorm.
 * User: yuliang
 * Date: 2017/10/28
 * Time: 19:29
 */

namespace App\Model;

use \DB;

class Welcome extends Base
{
    public function getArticleTitleList()
    {
        $article_title_list = DB::table('article')
            ->select('article_title')
            ->get();
        return $article_title_list;
    }

}