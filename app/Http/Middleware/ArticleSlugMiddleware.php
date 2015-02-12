<?php
/*
 * 3dmsky
 * ArticleSlugMiddleware.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-12
 * Time: 下午2:35
 */

namespace App\Http\Middleware;

use App\Article;
use Closure;

class ArticleSlugMiddleware {

    public function handle($request, Closure $next)
    {

        $slug = $request->input('slug');

        if($slug)
        {
            $article = Article::where('slug', '=', $slug)->first();

            if($article)
            {
                $time_slug  = date("Y-m-d-H-i-s");

                $new_slug = $slug . '-' . $time_slug;

                $request->merge(array('slug' => $new_slug ));

                return $next($request);
            }
            else
            {
                return $next($request);
            }
        }
        else
        {
            if($request->input('title'))
            {

                //todo: add chinese slugify to php later
                return $next($request);
            }
            else
            {
                return $next($request);
            }
        }

    }

}