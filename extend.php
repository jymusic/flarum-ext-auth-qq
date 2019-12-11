<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <zhangcb1984@163.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use JYmusic\Auth\QQ\QQAuthController;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),

    (new Extend\Routes('forum'))
        ->get('/auth/qq', 'auth.qq', QQAuthController::class),
];
