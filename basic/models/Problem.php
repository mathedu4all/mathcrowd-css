<?php

namespace app\models;

use Pelago\Emogrifier\CssInliner;
use Yii;

/**
 * Class Problem
 * @package app\models
 * @property $question
 * @property $answer
 * @property $wechat
 * @property $json
 */
class Problem extends \yii\base\BaseObject{

    public $id;
    public $question;
    public $answer;
    public $wechat;
    public $json;

    private static $problems = array (
        168562 =>
            array (
                'id' => 168562,
                'question' => '<div><p>设等差数列$\\{a _{n} \\}$的前$n$项和为$S _{n}$,若$a _{2} =-3$,$S _{5} =-10$,则$a _{5} =$_________．_________</p></div>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>解：设等差数列$\\{a _{n} \\}$的前$n$项和为$S _{n}$,$a _{2} =-3$,$S _{5} =-10$,</p>
<p>$ \\therefore  \\begin{cases} a_{1}+d=-3 \\\\ 5a_{1}+ \\dfrac {5 \\times 4}{2}d=-10\\end{cases}$,</p>
<p>解得$a _{1} =-4$,$d=1$,</p>
<p>$ \\therefore a _{5} =a _{1} +4d=-4+4 \\times 1=0$,</p>
<p>$S _{n} = na_{1}+ \\dfrac {n(n-1)}{2}d =-4n+ \\dfrac {n(n-1)}{2} = \\dfrac {1}{2} (n- \\dfrac {9}{2} ) ^{2} - \\dfrac {81}{8}$,</p>
<p>$ \\therefore n=4$或$n=5$时,$S _{n}$取最小值为$S _{4} =S _{5} =-10$．</p>
<p>故答案为：$0$,$-10$．</p>
<p>利用等差数列$\\{a _{n} \\}$的前$n$项和公式、通项公式列出方程组,能求出$a _{1} =-4$,$d=1$,由此能求出$a _{5}$的$S _{n}$的最小值．</p>
<p>本题考查等差数列的第$5$项的求法,考查等差数列的前$n$项和的最小值的求法,考查等差数列的性质等基础知识,考查推理能力与计算能力,属于基础题．</p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #DY43l</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2019年北京高考数学理科试卷 第 10 题 </span></section><p>设等差数列$\\{a _{n} \\}$的前$n$项和为$S _{n}$,若$a _{2} =-3$,$S _{5} =-10$,则$a _{5} =$_________．_________</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=DY43l\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>解：设等差数列$\\{a _{n} \\}$的前$n$项和为$S _{n}$,$a _{2} =-3$,$S _{5} =-10$,</p>
<p>$ \\therefore  \\begin{cases} a_{1}+d=-3 \\\\ 5a_{1}+ \\dfrac {5 \\times 4}{2}d=-10\\end{cases}$,</p>
<p>解得$a _{1} =-4$,$d=1$,</p>
<p>$ \\therefore a _{5} =a _{1} +4d=-4+4 \\times 1=0$,</p>
<p>$S _{n} = na_{1}+ \\dfrac {n(n-1)}{2}d =-4n+ \\dfrac {n(n-1)}{2} = \\dfrac {1}{2} (n- \\dfrac {9}{2} ) ^{2} - \\dfrac {81}{8}$,</p>
<p>$ \\therefore n=4$或$n=5$时,$S _{n}$取最小值为$S _{4} =S _{5} =-10$．</p>
<p>故答案为：$0$,$-10$．</p>
<p>利用等差数列$\\{a _{n} \\}$的前$n$项和公式、通项公式列出方程组,能求出$a _{1} =-4$,$d=1$,由此能求出$a _{5}$的$S _{n}$的最小值．</p>
<p>本题考查等差数列的第$5$项的求法,考查等差数列的前$n$项和的最小值的求法,考查等差数列的性质等基础知识,考查推理能力与计算能力,属于基础题．</p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u8bbe\\u7b49\\u5dee\\u6570\\u5217$\\\\{a _{n} \\\\}$\\u7684\\u524d$n$\\u9879\\u548c\\u4e3a$S _{n}$,\\u82e5$a _{2} =-3$,$S _{5} =-10$,\\u5219$a _{5} =$_________\\uff0e_________","answer":",$S _{n}$\\u7684\\u6700\\u5c0f\\u503c\\u4e3a$0$   $-10$  ","options":[],"sub_questions":[],"hint":"","solution":[[{"text":"\\u89e3\\uff1a\\u8bbe\\u7b49\\u5dee\\u6570\\u5217$\\\\{a _{n} \\\\}$\\u7684\\u524d$n$\\u9879\\u548c\\u4e3a$S _{n}$,$a _{2} =-3$,$S _{5} =-10$,\\r\\n\\r\\n$ \\\\therefore  \\\\begin{cases} a_{1}+d=-3 \\\\\\\\ 5a_{1}+ \\\\dfrac {5 \\\\times 4}{2}d=-10\\\\end{cases}$,\\r\\n\\r\\n\\u89e3\\u5f97$a _{1} =-4$,$d=1$,\\r\\n\\r\\n$ \\\\therefore a _{5} =a _{1} +4d=-4+4 \\\\times 1=0$,\\r\\n\\r\\n$S _{n} = na_{1}+ \\\\dfrac {n(n-1)}{2}d =-4n+ \\\\dfrac {n(n-1)}{2} = \\\\dfrac {1}{2} (n- \\\\dfrac {9}{2} ) ^{2} - \\\\dfrac {81}{8}$,\\r\\n\\r\\n$ \\\\therefore n=4$\\u6216$n=5$\\u65f6,$S _{n}$\\u53d6\\u6700\\u5c0f\\u503c\\u4e3a$S _{4} =S _{5} =-10$\\uff0e\\r\\n\\r\\n\\u6545\\u7b54\\u6848\\u4e3a\\uff1a$0$,$-10$\\uff0e\\r\\n\\r\\n\\u5229\\u7528\\u7b49\\u5dee\\u6570\\u5217$\\\\{a _{n} \\\\}$\\u7684\\u524d$n$\\u9879\\u548c\\u516c\\u5f0f\\u3001\\u901a\\u9879\\u516c\\u5f0f\\u5217\\u51fa\\u65b9\\u7a0b\\u7ec4,\\u80fd\\u6c42\\u51fa$a _{1} =-4$,$d=1$,\\u7531\\u6b64\\u80fd\\u6c42\\u51fa$a _{5}$\\u7684$S _{n}$\\u7684\\u6700\\u5c0f\\u503c\\uff0e\\r\\n\\r\\n\\u672c\\u9898\\u8003\\u67e5\\u7b49\\u5dee\\u6570\\u5217\\u7684\\u7b2c$5$\\u9879\\u7684\\u6c42\\u6cd5,\\u8003\\u67e5\\u7b49\\u5dee\\u6570\\u5217\\u7684\\u524d$n$\\u9879\\u548c\\u7684\\u6700\\u5c0f\\u503c\\u7684\\u6c42\\u6cd5,\\u8003\\u67e5\\u7b49\\u5dee\\u6570\\u5217\\u7684\\u6027\\u8d28\\u7b49\\u57fa\\u7840\\u77e5\\u8bc6,\\u8003\\u67e5\\u63a8\\u7406\\u80fd\\u529b\\u4e0e\\u8ba1\\u7b97\\u80fd\\u529b,\\u5c5e\\u4e8e\\u57fa\\u7840\\u9898\\uff0e","score":"100"}]],"score":0,"type":0}',
            ),
        10394 =>
            array (
                'id' => 10394,
                'question' => '<div><p>已知定义域为 $ \\mathbf {R} $ 的函数 $ y=f\\left(x\\right) $ 满足 $ f\\left(x+2\\right)=f\\left(x\\right) $，且 $ -1\\leqslant x＜1 $ 时，$ f\\left(x\\right)=1 - x^{2} $；函数 $ g\\left(x\\right)= \\begin{cases} \\lg {\\left|{x}\\right|} , &amp; x \\neq 0 \\\\ 1 , &amp; x = 0 \\end{cases} $，若 $ F\\left(x\\right)= f\\left(x\\right) - g\\left(x\\right) $，则 $ x\\in \\left[-5,10\\right] $ 时，函数 $ F\\left(x\\right) $ 零点的个数是_________．</p></div>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>定义域为 $ \\mathbf {R} $ 的函数 $ y=f\\left(x\\right) $ 满足 $ f\\left(x+2\\right)=f\\left(x\\right) $，可得 $ f\\left(x\\right) $ 的周期为 $ 2 $，又因为 $ F\\left(x\\right)=f\\left(x\\right) - g\\left(x\\right) $，则令 $ F\\left(x\\right)=0 $，即 $ f\\left(x\\right)=g\\left(x\\right) $，分别作出 $ y=f\\left(x\\right) $ 和 $ y=g\\left(x\\right) $ 的图象，
观察图象在 $ \\left[-5,10\\right] $ 的交点个数为 $ 15 $．则函数 $ F\\left(x\\right) $ 零点的个数是 $ 15 $．</p>
<p>注意：在[9,10]区间内有两个交点，即在$(10,1)$点左侧还有一个交点.</p><div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/s6JzDvvQZaVQNyM-_F2ouO-A2_oi6RBz.png" id="preview-sol-0--0--fig-"></div></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #n91Y</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2017届上海市普陀区高三一模考试数学试卷 第 12 题 </span></section><p>已知定义域为 $ \\mathbf {R} $ 的函数 $ y=f\\left(x\\right) $ 满足 $ f\\left(x+2\\right)=f\\left(x\\right) $，且 $ -1\\leqslant x＜1 $ 时，$ f\\left(x\\right)=1 - x^{2} $；函数 $ g\\left(x\\right)= \\begin{cases} \\lg {\\left|{x}\\right|} , &amp; x \\neq 0 \\\\ 1 , &amp; x = 0 \\end{cases} $，若 $ F\\left(x\\right)= f\\left(x\\right) - g\\left(x\\right) $，则 $ x\\in \\left[-5,10\\right] $ 时，函数 $ F\\left(x\\right) $ 零点的个数是_________．</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=n91Y\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>定义域为 $ \\mathbf {R} $ 的函数 $ y=f\\left(x\\right) $ 满足 $ f\\left(x+2\\right)=f\\left(x\\right) $，可得 $ f\\left(x\\right) $ 的周期为 $ 2 $，又因为 $ F\\left(x\\right)=f\\left(x\\right) - g\\left(x\\right) $，则令 $ F\\left(x\\right)=0 $，即 $ f\\left(x\\right)=g\\left(x\\right) $，分别作出 $ y=f\\left(x\\right) $ 和 $ y=g\\left(x\\right) $ 的图象，
观察图象在 $ \\left[-5,10\\right] $ 的交点个数为 $ 15 $．则函数 $ F\\left(x\\right) $ 零点的个数是 $ 15 $．</p>
<p>注意：在[9,10]区间内有两个交点，即在$(10,1)$点左侧还有一个交点.</p><div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/s6JzDvvQZaVQNyM-_F2ouO-A2_oi6RBz.png" id="preview-sol-0--0--fig-"></div></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u5df2\\u77e5\\u5b9a\\u4e49\\u57df\\u4e3a $ \\\\mathbf {R} $ \\u7684\\u51fd\\u6570 $ y=f\\\\left(x\\\\right) $ \\u6ee1\\u8db3 $ f\\\\left(x+2\\\\right)=f\\\\left(x\\\\right) $\\uff0c\\u4e14 $ -1\\\\leqslant x\\uff1c1 $ \\u65f6\\uff0c$ f\\\\left(x\\\\right)=1 - x^{2} $\\uff1b\\u51fd\\u6570 $ g\\\\left(x\\\\right)= \\\\begin{cases} \\\\lg {\\\\left|{x}\\\\right|} , & x \\\\neq 0 \\\\\\\\ 1 , & x = 0 \\\\end{cases} $\\uff0c\\u82e5 $ F\\\\left(x\\\\right)= f\\\\left(x\\\\right) - g\\\\left(x\\\\right) $\\uff0c\\u5219 $ x\\\\in \\\\left[-5,10\\\\right] $ \\u65f6\\uff0c\\u51fd\\u6570 $ F\\\\left(x\\\\right) $ \\u96f6\\u70b9\\u7684\\u4e2a\\u6570\\u662f_________\\uff0e","answer":"$ 15 $","options":[],"sub_questions":[],"hint":"","solution":[[{"text":"\\n![\\u6a58\\u5b50\\u6570\\u5b66 www.mathcrowd.cn](http:\\/\\/cdn2.mathcrowd.cn\\/uploads\\/fig\\/s6JzDvvQZaVQNyM-_F2ouO-A2_oi6RBz.png)","score":"100"}]],"score":0,"type":0}',
            ),
        11195 =>
            array (
                'id' => 11195,
                'question' => '<div><p>某工厂的某种产品成箱包装，每箱 $200$ 件，每一箱产品在交付用户之前要对产品作检验，如检验出不合格品，则更换为合格品．检验时，先从这箱产品中任取 $20$ 件作检验，再根据检验结果决定是否对余下的所有产品作检验，设每件产品为不合格品的概率都为 $p\\left(0 \\lt p \\lt 1\\right)$，且各件产品是否为不合格品相互独立．</p></div>
<ol class="subqs">
<li><p>记 $20$ 件产品中恰有 $2$ 件不合格品的概率为 $f\\left(p\\right)$，求 $f\\left(p\\right)$ 的最大值点 $p_0$．</p></li>
<li><p>现对一箱产品检验了 $20$ 件，结果恰有 $2$ 件不合格品，以（$1$）中确定的 $p_0$ 作为 $p$ 的值．已知每件产品的检验费用为 $2$ 元，若有不合格品进入用户手中，则工厂要对每件不合格品支付 $25$ 元的赔偿费用．</p>
<p>（i）若不对该箱余下的产品作检验，这一箱产品的检验费用与赔偿费用的和记为 $X$，求 $EX$；</p>
<p>（ii）以检验费用与赔偿费用和的期望值为决策依据，是否该对这箱余下的所有产品作检验？</p></li>
</ol>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p class="step-header">步骤1:</p><p>（1）$20$ 件产品中恰有 $2$ 件不合格品的概率为 $f \\left( p \\right) =\\mathrm C _ { 20 } ^ { 2 } p ^ { 2 } \\left( 1 - p \\right) ^ { 18 }$．</p>
<p>因此  
$$\\begin{split}f &#039;\\left( p \\right) &amp;=\\mathrm C _ { 20 } ^ { 2 } \\left[ 2 p \\left( 1 - p \\right) ^ { 18 } - 18 p ^ { 2 } \\left( 1 - p \\right) ^ { 17 } \\right] \\\\&amp;= 2\\mathrm C _ { 20 } ^ { 2 } p \\left( 1 - p \\right) ^ { 17 } \\left( 1 - 10 p \\right).\\end{split}$$</p>
<p>令 $f&#039;\\left(p\\right)=0$，得 $p=0.1$．</p>
<p>当 $p\\in\\left(0,0.1\\right)$ 时，$f&#039;\\left(p\\right) \\gt 0$；当 $p\\in\\left(0.1,1\\right)$ 时，$f&#039;\\left(p\\right) \\lt 0$．所以 $f\\left(p\\right)$ 的最大值点为 $p_0=0.1$．</p><p class="step-score" id="step1-1">…………本步骤分值:50% 累计分值:50% </p></li><li class="list-group-item"><p class="step-header">步骤2:</p><p>（2）由（$1$）知，$p=0.1$．</p>
<p>（i）令 $Y$ 表示余下的 $180$ 件产品中的不合格品件数，依题意知 $Y \\sim B \\left( 180,0.1 \\right) $，$ X = 20 \\times 2 + 25 Y$，即 $X=40+25Y$．所以 $E X = E \\left( 40 + 25 Y \\right) = 40 + 25 E Y = 490$．</p>
<p>（ii）如果对余下的产品作检验，则这一箱产品所需要的检验费为 $400$ 元．由于 $EX \\gt 400$，故应该对余下的产品作检验．</p><p class="step-score" id="step1-2">…………本步骤分值:50% 累计分值:100% </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #4KgG</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2018年全国1高考数学理科试卷 第 20 题 </span></section><p>某工厂的某种产品成箱包装，每箱 $200$ 件，每一箱产品在交付用户之前要对产品作检验，如检验出不合格品，则更换为合格品．检验时，先从这箱产品中任取 $20$ 件作检验，再根据检验结果决定是否对余下的所有产品作检验，设每件产品为不合格品的概率都为 $p\\left(0 \\lt p \\lt 1\\right)$，且各件产品是否为不合格品相互独立．</p><p><span class="question-label">(1) </span>记 $20$ 件产品中恰有 $2$ 件不合格品的概率为 $f\\left(p\\right)$，求 $f\\left(p\\right)$ 的最大值点 $p_0$．</p><p><span class="question-label">(2) </span>现对一箱产品检验了 $20$ 件，结果恰有 $2$ 件不合格品，以（$1$）中确定的 $p_0$ 作为 $p$ 的值．已知每件产品的检验费用为 $2$ 元，若有不合格品进入用户手中，则工厂要对每件不合格品支付 $25$ 元的赔偿费用．</p>
<p>（i）若不对该箱余下的产品作检验，这一箱产品的检验费用与赔偿费用的和记为 $X$，求 $EX$；</p>
<p>（ii）以检验费用与赔偿费用和的期望值为决策依据，是否该对这箱余下的所有产品作检验？</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=4KgG\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p class="step-header">步骤1:</p><p>（1）$20$ 件产品中恰有 $2$ 件不合格品的概率为 $f \\left( p \\right) =\\mathrm C _ { 20 } ^ { 2 } p ^ { 2 } \\left( 1 - p \\right) ^ { 18 }$．</p>
<p>因此  
$$\\begin{split}f &#039;\\left( p \\right) &amp;=\\mathrm C _ { 20 } ^ { 2 } \\left[ 2 p \\left( 1 - p \\right) ^ { 18 } - 18 p ^ { 2 } \\left( 1 - p \\right) ^ { 17 } \\right] \\\\&amp;= 2\\mathrm C _ { 20 } ^ { 2 } p \\left( 1 - p \\right) ^ { 17 } \\left( 1 - 10 p \\right).\\end{split}$$</p>
<p>令 $f&#039;\\left(p\\right)=0$，得 $p=0.1$．</p>
<p>当 $p\\in\\left(0,0.1\\right)$ 时，$f&#039;\\left(p\\right) \\gt 0$；当 $p\\in\\left(0.1,1\\right)$ 时，$f&#039;\\left(p\\right) \\lt 0$．所以 $f\\left(p\\right)$ 的最大值点为 $p_0=0.1$．</p><p class="step-score" id="step1-1">…………本步骤分值:50% 累计分值:50% </p></section><section class="solution-step"><p class="step-header">步骤2:</p><p>（2）由（$1$）知，$p=0.1$．</p>
<p>（i）令 $Y$ 表示余下的 $180$ 件产品中的不合格品件数，依题意知 $Y \\sim B \\left( 180,0.1 \\right) $，$ X = 20 \\times 2 + 25 Y$，即 $X=40+25Y$．所以 $E X = E \\left( 40 + 25 Y \\right) = 40 + 25 E Y = 490$．</p>
<p>（ii）如果对余下的产品作检验，则这一箱产品所需要的检验费为 $400$ 元．由于 $EX \\gt 400$，故应该对余下的产品作检验．</p><p class="step-score" id="step1-2">…………本步骤分值:50% 累计分值:100% </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u67d0\\u5de5\\u5382\\u7684\\u67d0\\u79cd\\u4ea7\\u54c1\\u6210\\u7bb1\\u5305\\u88c5\\uff0c\\u6bcf\\u7bb1 $200$ \\u4ef6\\uff0c\\u6bcf\\u4e00\\u7bb1\\u4ea7\\u54c1\\u5728\\u4ea4\\u4ed8\\u7528\\u6237\\u4e4b\\u524d\\u8981\\u5bf9\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff0c\\u5982\\u68c0\\u9a8c\\u51fa\\u4e0d\\u5408\\u683c\\u54c1\\uff0c\\u5219\\u66f4\\u6362\\u4e3a\\u5408\\u683c\\u54c1\\uff0e\\u68c0\\u9a8c\\u65f6\\uff0c\\u5148\\u4ece\\u8fd9\\u7bb1\\u4ea7\\u54c1\\u4e2d\\u4efb\\u53d6 $20$ \\u4ef6\\u4f5c\\u68c0\\u9a8c\\uff0c\\u518d\\u6839\\u636e\\u68c0\\u9a8c\\u7ed3\\u679c\\u51b3\\u5b9a\\u662f\\u5426\\u5bf9\\u4f59\\u4e0b\\u7684\\u6240\\u6709\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff0c\\u8bbe\\u6bcf\\u4ef6\\u4ea7\\u54c1\\u4e3a\\u4e0d\\u5408\\u683c\\u54c1\\u7684\\u6982\\u7387\\u90fd\\u4e3a $p\\\\left(0 \\\\lt p \\\\lt 1\\\\right)$\\uff0c\\u4e14\\u5404\\u4ef6\\u4ea7\\u54c1\\u662f\\u5426\\u4e3a\\u4e0d\\u5408\\u683c\\u54c1\\u76f8\\u4e92\\u72ec\\u7acb\\uff0e","answer":"","options":[],"sub_questions":["\\u8bb0 $20$ \\u4ef6\\u4ea7\\u54c1\\u4e2d\\u6070\\u6709 $2$ \\u4ef6\\u4e0d\\u5408\\u683c\\u54c1\\u7684\\u6982\\u7387\\u4e3a $f\\\\left(p\\\\right)$\\uff0c\\u6c42 $f\\\\left(p\\\\right)$ \\u7684\\u6700\\u5927\\u503c\\u70b9 $p_0$\\uff0e","\\u73b0\\u5bf9\\u4e00\\u7bb1\\u4ea7\\u54c1\\u68c0\\u9a8c\\u4e86 $20$ \\u4ef6\\uff0c\\u7ed3\\u679c\\u6070\\u6709 $2$ \\u4ef6\\u4e0d\\u5408\\u683c\\u54c1\\uff0c\\u4ee5\\uff08$1$\\uff09\\u4e2d\\u786e\\u5b9a\\u7684 $p_0$ \\u4f5c\\u4e3a $p$ \\u7684\\u503c\\uff0e\\u5df2\\u77e5\\u6bcf\\u4ef6\\u4ea7\\u54c1\\u7684\\u68c0\\u9a8c\\u8d39\\u7528\\u4e3a $2$ \\u5143\\uff0c\\u82e5\\u6709\\u4e0d\\u5408\\u683c\\u54c1\\u8fdb\\u5165\\u7528\\u6237\\u624b\\u4e2d\\uff0c\\u5219\\u5de5\\u5382\\u8981\\u5bf9\\u6bcf\\u4ef6\\u4e0d\\u5408\\u683c\\u54c1\\u652f\\u4ed8 $25$ \\u5143\\u7684\\u8d54\\u507f\\u8d39\\u7528\\uff0e\\r\\n\\r\\n\\uff08i\\uff09\\u82e5\\u4e0d\\u5bf9\\u8be5\\u7bb1\\u4f59\\u4e0b\\u7684\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff0c\\u8fd9\\u4e00\\u7bb1\\u4ea7\\u54c1\\u7684\\u68c0\\u9a8c\\u8d39\\u7528\\u4e0e\\u8d54\\u507f\\u8d39\\u7528\\u7684\\u548c\\u8bb0\\u4e3a $X$\\uff0c\\u6c42 $EX$\\uff1b\\r\\n\\r\\n\\uff08ii\\uff09\\u4ee5\\u68c0\\u9a8c\\u8d39\\u7528\\u4e0e\\u8d54\\u507f\\u8d39\\u7528\\u548c\\u7684\\u671f\\u671b\\u503c\\u4e3a\\u51b3\\u7b56\\u4f9d\\u636e\\uff0c\\u662f\\u5426\\u8be5\\u5bf9\\u8fd9\\u7bb1\\u4f59\\u4e0b\\u7684\\u6240\\u6709\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff1f"],"hint":"","solution":[[{"text":"\\uff081\\uff09$20$ \\u4ef6\\u4ea7\\u54c1\\u4e2d\\u6070\\u6709 $2$ \\u4ef6\\u4e0d\\u5408\\u683c\\u54c1\\u7684\\u6982\\u7387\\u4e3a $f \\\\left( p \\\\right) =\\\\mathrm C _ { 20 } ^ { 2 } p ^ { 2 } \\\\left( 1 - p \\\\right) ^ { 18 }$\\uff0e\\r\\n\\r\\n\\u56e0\\u6b64  \\r\\n$$\\\\begin{split}f \'\\\\left( p \\\\right) &=\\\\mathrm C _ { 20 } ^ { 2 } \\\\left[ 2 p \\\\left( 1 - p \\\\right) ^ { 18 } - 18 p ^ { 2 } \\\\left( 1 - p \\\\right) ^ { 17 } \\\\right] \\\\\\\\&= 2\\\\mathrm C _ { 20 } ^ { 2 } p \\\\left( 1 - p \\\\right) ^ { 17 } \\\\left( 1 - 10 p \\\\right).\\\\end{split}$$\\r\\n\\r\\n\\u4ee4 $f\'\\\\left(p\\\\right)=0$\\uff0c\\u5f97 $p=0.1$\\uff0e\\r\\n\\r\\n\\u5f53 $p\\\\in\\\\left(0,0.1\\\\right)$ \\u65f6\\uff0c$f\'\\\\left(p\\\\right) \\\\gt 0$\\uff1b\\u5f53 $p\\\\in\\\\left(0.1,1\\\\right)$ \\u65f6\\uff0c$f\'\\\\left(p\\\\right) \\\\lt 0$\\uff0e\\u6240\\u4ee5 $f\\\\left(p\\\\right)$ \\u7684\\u6700\\u5927\\u503c\\u70b9\\u4e3a $p_0=0.1$\\uff0e","score":"50"},{"text":"\\uff082\\uff09\\u7531\\uff08$1$\\uff09\\u77e5\\uff0c$p=0.1$\\uff0e\\r\\n\\r\\n\\uff08i\\uff09\\u4ee4 $Y$ \\u8868\\u793a\\u4f59\\u4e0b\\u7684 $180$ \\u4ef6\\u4ea7\\u54c1\\u4e2d\\u7684\\u4e0d\\u5408\\u683c\\u54c1\\u4ef6\\u6570\\uff0c\\u4f9d\\u9898\\u610f\\u77e5 $Y \\\\sim B \\\\left( 180,0.1 \\\\right) $\\uff0c$ X = 20 \\\\times 2 + 25 Y$\\uff0c\\u5373 $X=40+25Y$\\uff0e\\u6240\\u4ee5 $E X = E \\\\left( 40 + 25 Y \\\\right) = 40 + 25 E Y = 490$\\uff0e\\r\\n\\r\\n\\uff08ii\\uff09\\u5982\\u679c\\u5bf9\\u4f59\\u4e0b\\u7684\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff0c\\u5219\\u8fd9\\u4e00\\u7bb1\\u4ea7\\u54c1\\u6240\\u9700\\u8981\\u7684\\u68c0\\u9a8c\\u8d39\\u4e3a $400$ \\u5143\\uff0e\\u7531\\u4e8e $EX \\\\gt 400$\\uff0c\\u6545\\u5e94\\u8be5\\u5bf9\\u4f59\\u4e0b\\u7684\\u4ea7\\u54c1\\u4f5c\\u68c0\\u9a8c\\uff0e","score":"50"}]],"score":0,"type":2}',
            ),
        9493 =>
            array (
                'id' => 9493,
                'question' => '<div><p>已知集合$U=\\{1,2,3,4\\}$,集合$A=\\{1,2\\}$,$B=\\{2,3\\}$,则$(A\\cap\\complement_UB) \\cup (\\complement_UA\\cap B)=$_________.</p></div>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>$A\\cap\\complement_UB=\\{1\\}$, $B\\cap\\complement_UA=\\{3\\}$.</p>
<p>$(A\\cap\\complement_UB) \\cup (\\complement_UA\\cap B)=\\{1,3\\}$.</p>
</li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #B5Jq</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>试题来源</span></section><p>已知集合$U=\\{1,2,3,4\\}$,集合$A=\\{1,2\\}$,$B=\\{2,3\\}$,则$(A\\cap\\complement_UB) \\cup (\\complement_UA\\cap B)=$_________.</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=B5Jq\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>$A\\cap\\complement_UB=\\{1\\}$, $B\\cap\\complement_UA=\\{3\\}$.</p>
<p>$(A\\cap\\complement_UB) \\cup (\\complement_UA\\cap B)=\\{1,3\\}$.</p>
</section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u5df2\\u77e5\\u96c6\\u5408$U=\\\\{1,2,3,4\\\\}$,\\u96c6\\u5408$A=\\\\{1,2\\\\}$,$B=\\\\{2,3\\\\}$,\\u5219$(A\\\\cap\\\\complement_UB) \\\\cup (\\\\complement_UA\\\\cap B)=$_________.","answer":"$\\\\{1,3\\\\}$","options":[],"sub_questions":[],"hint":"","solution":[[{"text":"$A\\\\cap\\\\complement_UB=\\\\{1\\\\}$, $B\\\\cap\\\\complement_UA=\\\\{3\\\\}$.\\r\\n\\r\\n$(A\\\\cap\\\\complement_UB) \\\\cup (\\\\complement_UA\\\\cap B)=\\\\{1,3\\\\}$.\\r\\n\\r\\n\\r\\n","score":"100"}]],"score":0,"type":0}',
            ),
        170384 =>
            array (
                'id' => 170384,
                'question' => '<div><p>已知$U=R$，$A=\\{x|x ^{2} -2x-3  \\lt  0\\}$，则$ \\complement  _{U} A= $_________.</p></div>
<ol class="options">
<li><p>$\\{x|x\\leqslant -1$或$x\\geqslant 3\\}$</p></li>
<li><p>$\\{x|x\\leqslant -3$或$x\\geqslant 1\\}$</p></li>
<li><p>$\\{x|x  \\lt  -1$或$x  \\gt  3\\}$</p></li>
<li><p>$\\{x|x  \\lt  -3$或$x  \\gt  1\\}$</p></li>
</ol>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>解：$A=\\{x|-1  \\lt  x  \\lt  3\\}$；</p>
<p>$ \\therefore  \\complement  _{U} A=\\{x|x\\leqslant -1$，或$x\\geqslant 3\\}$．</p>
<p>故选：$A$．</p>
<p>可求出集合$A$，然后进行补集的运算即可．</p>
<p>考查描述法表示集合的概念，以及补集的概念及运算．</p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #0744y</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2018年北京市丰台区高考数学二模试卷（文科） 第 1 题 </span></section><p>已知$U=R$，$A=\\{x|x ^{2} -2x-3  \\lt  0\\}$，则$ \\complement  _{U} A= $_________.</p><p><span class="question-label">(A) </span>$\\{x|x\\leqslant -1$或$x\\geqslant 3\\}$</p><p><span class="question-label">(B) </span>$\\{x|x\\leqslant -3$或$x\\geqslant 1\\}$</p><p><span class="question-label">(C) </span>$\\{x|x  \\lt  -1$或$x  \\gt  3\\}$</p><p><span class="question-label">(D) </span>$\\{x|x  \\lt  -3$或$x  \\gt  1\\}$</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=0744y\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>解：$A=\\{x|-1  \\lt  x  \\lt  3\\}$；</p>
<p>$ \\therefore  \\complement  _{U} A=\\{x|x\\leqslant -1$，或$x\\geqslant 3\\}$．</p>
<p>故选：$A$．</p>
<p>可求出集合$A$，然后进行补集的运算即可．</p>
<p>考查描述法表示集合的概念，以及补集的概念及运算．</p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u5df2\\u77e5$U=R$\\uff0c$A=\\\\{x|x ^{2} -2x-3  \\\\lt  0\\\\}$\\uff0c\\u5219$ \\\\complement  _{U} A= $_________.","answer":"$A$","options":["$\\\\{x|x\\\\leqslant -1$\\u6216$x\\\\geqslant 3\\\\}$","$\\\\{x|x\\\\leqslant -3$\\u6216$x\\\\geqslant 1\\\\}$","$\\\\{x|x  \\\\lt  -1$\\u6216$x  \\\\gt  3\\\\}$","$\\\\{x|x  \\\\lt  -3$\\u6216$x  \\\\gt  1\\\\}$"],"sub_questions":[],"hint":"","solution":[[{"text":"\\u89e3\\uff1a$A=\\\\{x|-1  \\\\lt  x  \\\\lt  3\\\\}$\\uff1b\\r\\n\\r\\n$ \\\\therefore  \\\\complement  _{U} A=\\\\{x|x\\\\leqslant -1$\\uff0c\\u6216$x\\\\geqslant 3\\\\}$\\uff0e\\r\\n\\r\\n\\u6545\\u9009\\uff1a$A$\\uff0e\\r\\n\\r\\n\\u53ef\\u6c42\\u51fa\\u96c6\\u5408$A$\\uff0c\\u7136\\u540e\\u8fdb\\u884c\\u8865\\u96c6\\u7684\\u8fd0\\u7b97\\u5373\\u53ef\\uff0e\\r\\n\\r\\n\\u8003\\u67e5\\u63cf\\u8ff0\\u6cd5\\u8868\\u793a\\u96c6\\u5408\\u7684\\u6982\\u5ff5\\uff0c\\u4ee5\\u53ca\\u8865\\u96c6\\u7684\\u6982\\u5ff5\\u53ca\\u8fd0\\u7b97\\uff0e","score":"100"}]],"score":0,"type":1}',
            ),
        10066 =>
            array (
                'id' => 10066,
                'question' => '<div><p>已知数列$\\{a_n\\}$满足：$a_1=2$，$a_{n+1}=\\dfrac{1}{2}a_{n+2}$．</p></div>
<ol class="subqs">
<li><p> 证明：数列$\\{a_n-4\\}$是等比数列；</p></li>
<li><p>求使不等式$\\dfrac{a_n-m}{a_{n+1}-m} \\lt \\dfrac23$成立的所有正整数$m$、$n$的值；</p></li>
<li><p> 如果常数$0 \\lt  t \\lt 3$，对于任意的正整数$k$，都有$\\dfrac{{{a}_{k+1}}-t}{{{a}_{k}}-t} \\lt 2$成立，求$t$的取值范围．</p></li>
</ol>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p class="step-header">步骤1:</p><p>(1)</p>
<p>由$a_{n+1}=\\dfrac{1}{2}a_n+2$，</p>
<p>所以$a_{n+1} - 4 =\\dfrac{1}{2}(a_n - 4)$.</p><p class="step-score" id="step1-1">…………本步骤分值:12.5% 累计分值:12.5% </p></li><li class="list-group-item"><p class="step-header">步骤2:</p><p>且$a_1 - 4= - 2$，故数列$\\{a_n - 4\\}$是以$ - 2$为首项、$\\dfrac{1}{2}$为公比的等比数列；
</p><p class="step-score" id="step1-2">…………本步骤分值:12.5% 累计分值:25% </p></li><li class="list-group-item"><p class="step-header">步骤3:</p><p>(2)</p>
<p>由(1)题，得$a_n - 4= - 2{{(\\dfrac{1}{2})}^{n-1}}$，</p>
<p>得${{a}_{n}}=4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}$，
</p><p class="step-score" id="step1-3">…………本步骤分值:12.5% 累计分值:37.5% </p></li><li class="list-group-item"><p class="step-header">步骤4:</p><p>于是$\\dfrac{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}-m}{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-1}}-m} \\lt \\dfrac{2}{3}$，</p>
<p>当$m\\ge4$时，有$\\dfrac{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}-m}{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-1}}-m} \\gt 1$，不等式无解.</p><p class="step-score" id="step1-4">…………本步骤分值:6.25% 累计分值:43.75% </p></li><li class="list-group-item"><p class="step-header">步骤5:</p><p>因此，满足题意的解为$\\begin{cases}
m=1 \\\\ 
n=1 \\\\ 
\\end{cases}$或$\\begin{cases}
m=2 \\\\ 
n=1 \\\\ 
\\end{cases}$或$\\begin{cases}
m=3 \\\\ 
n=2 \\\\ 
\\end{cases}$；
</p><p class="step-score" id="step1-5">…………本步骤分值:12.5% 累计分值:56.25% </p></li><li class="list-group-item"><p class="step-header">步骤6:</p><p>(3) </p>
<p>(a) 当$k=1$时，由$\\dfrac{3-t}{2-t} \\lt 2$，解得$0 \\lt t \\lt 1$或$2 \\lt t \\lt 3$，</p><p class="step-score" id="step1-6">…………本步骤分值:6.25% 累计分值:62.5% </p></li><li class="list-group-item"><p class="step-header">步骤7:</p><p>(b) 当$k \\ge 2$时，${{a}_{n}}=4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}\\ge 3$，故分母$a_n-t \\gt 0$恒成立，</p>
<p>从而，只需$a_{k+1} - t \\lt 2(a_k - t)$对$k\\ge2, k\\in \\mathbf{N^*}$恒成立，</p>
<p>即$t \\lt 2a_k - a_{k+1}$对$k\\ge2, k\\in \\mathbf{N^*}$恒成立，</p>
<p>故$t \\lt (2a_k - a_{k+1})_{\\min}$，</p><p class="step-score" id="step1-7">…………本步骤分值:18.75% 累计分值:81.25% </p></li><li class="list-group-item"><p class="step-header">步骤8:</p><p>又$2{{a}_{k}}-{{a}_{k+1}}=4-3{{\\left( \\dfrac{1}{2} \\right)}^{k-1}}$，</p>
<p>故当$k=2$时，${{(2{{a}_{k}}-{{a}_{k+1}})}_{\\min }}=\\dfrac{5}{2}$，</p>
<p>所以$t \\lt \\dfrac{5}{2}$，</p>
<p>综上所述，$t$的取值范围是$(0,1)\\cup(2,\\dfrac{5}{2})$．
</p><p class="step-score" id="step1-8">…………本步骤分值:18.75% 累计分值:100% </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #YPje</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2018届上海市金山区高三二模考试数学试卷 第 20 题 </span></section><p>已知数列$\\{a_n\\}$满足：$a_1=2$，$a_{n+1}=\\dfrac{1}{2}a_{n+2}$．</p><p><span class="question-label">(1) </span> 证明：数列$\\{a_n-4\\}$是等比数列；</p><p><span class="question-label">(2) </span>求使不等式$\\dfrac{a_n-m}{a_{n+1}-m} \\lt \\dfrac23$成立的所有正整数$m$、$n$的值；</p><p><span class="question-label">(3) </span> 如果常数$0 \\lt  t \\lt 3$，对于任意的正整数$k$，都有$\\dfrac{{{a}_{k+1}}-t}{{{a}_{k}}-t} \\lt 2$成立，求$t$的取值范围．</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=YPje\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p class="step-header">步骤1:</p><p>(1)</p>
<p>由$a_{n+1}=\\dfrac{1}{2}a_n+2$，</p>
<p>所以$a_{n+1} - 4 =\\dfrac{1}{2}(a_n - 4)$.</p><p class="step-score" id="step1-1">…………本步骤分值:12.5% 累计分值:12.5% </p></section><section class="solution-step"><p class="step-header">步骤2:</p><p>且$a_1 - 4= - 2$，故数列$\\{a_n - 4\\}$是以$ - 2$为首项、$\\dfrac{1}{2}$为公比的等比数列；
</p><p class="step-score" id="step1-2">…………本步骤分值:12.5% 累计分值:25% </p></section><section class="solution-step"><p class="step-header">步骤3:</p><p>(2)</p>
<p>由(1)题，得$a_n - 4= - 2{{(\\dfrac{1}{2})}^{n-1}}$，</p>
<p>得${{a}_{n}}=4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}$，
</p><p class="step-score" id="step1-3">…………本步骤分值:12.5% 累计分值:37.5% </p></section><section class="solution-step"><p class="step-header">步骤4:</p><p>于是$\\dfrac{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}-m}{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-1}}-m} \\lt \\dfrac{2}{3}$，</p>
<p>当$m\\ge4$时，有$\\dfrac{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}-m}{4-{{\\left( \\dfrac{1}{2} \\right)}^{n-1}}-m} \\gt 1$，不等式无解.</p><p class="step-score" id="step1-4">…………本步骤分值:6.25% 累计分值:43.75% </p></section><section class="solution-step"><p class="step-header">步骤5:</p><p>因此，满足题意的解为$\\begin{cases}
m=1 \\\\ 
n=1 \\\\ 
\\end{cases}$或$\\begin{cases}
m=2 \\\\ 
n=1 \\\\ 
\\end{cases}$或$\\begin{cases}
m=3 \\\\ 
n=2 \\\\ 
\\end{cases}$；
</p><p class="step-score" id="step1-5">…………本步骤分值:12.5% 累计分值:56.25% </p></section><section class="solution-step"><p class="step-header">步骤6:</p><p>(3) </p>
<p>(a) 当$k=1$时，由$\\dfrac{3-t}{2-t} \\lt 2$，解得$0 \\lt t \\lt 1$或$2 \\lt t \\lt 3$，</p><p class="step-score" id="step1-6">…………本步骤分值:6.25% 累计分值:62.5% </p></section><section class="solution-step"><p class="step-header">步骤7:</p><p>(b) 当$k \\ge 2$时，${{a}_{n}}=4-{{\\left( \\dfrac{1}{2} \\right)}^{n-2}}\\ge 3$，故分母$a_n-t \\gt 0$恒成立，</p>
<p>从而，只需$a_{k+1} - t \\lt 2(a_k - t)$对$k\\ge2, k\\in \\mathbf{N^*}$恒成立，</p>
<p>即$t \\lt 2a_k - a_{k+1}$对$k\\ge2, k\\in \\mathbf{N^*}$恒成立，</p>
<p>故$t \\lt (2a_k - a_{k+1})_{\\min}$，</p><p class="step-score" id="step1-7">…………本步骤分值:18.75% 累计分值:81.25% </p></section><section class="solution-step"><p class="step-header">步骤8:</p><p>又$2{{a}_{k}}-{{a}_{k+1}}=4-3{{\\left( \\dfrac{1}{2} \\right)}^{k-1}}$，</p>
<p>故当$k=2$时，${{(2{{a}_{k}}-{{a}_{k+1}})}_{\\min }}=\\dfrac{5}{2}$，</p>
<p>所以$t \\lt \\dfrac{5}{2}$，</p>
<p>综上所述，$t$的取值范围是$(0,1)\\cup(2,\\dfrac{5}{2})$．
</p><p class="step-score" id="step1-8">…………本步骤分值:18.75% 累计分值:100% </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u5df2\\u77e5\\u6570\\u5217$\\\\{a_n\\\\}$\\u6ee1\\u8db3\\uff1a$a_1=2$\\uff0c$a_{n+1}=\\\\dfrac{1}{2}a_{n+2}$\\uff0e","answer":"","options":[],"sub_questions":[" \\u8bc1\\u660e\\uff1a\\u6570\\u5217$\\\\{a_n-4\\\\}$\\u662f\\u7b49\\u6bd4\\u6570\\u5217\\uff1b","\\u6c42\\u4f7f\\u4e0d\\u7b49\\u5f0f$\\\\dfrac{a_n-m}{a_{n+1}-m} \\\\lt \\\\dfrac23$\\u6210\\u7acb\\u7684\\u6240\\u6709\\u6b63\\u6574\\u6570$m$\\u3001$n$\\u7684\\u503c\\uff1b"," \\u5982\\u679c\\u5e38\\u6570$0 \\\\lt  t \\\\lt 3$\\uff0c\\u5bf9\\u4e8e\\u4efb\\u610f\\u7684\\u6b63\\u6574\\u6570$k$\\uff0c\\u90fd\\u6709$\\\\dfrac{{{a}_{k+1}}-t}{{{a}_{k}}-t} \\\\lt 2$\\u6210\\u7acb\\uff0c\\u6c42$t$\\u7684\\u53d6\\u503c\\u8303\\u56f4\\uff0e"],"hint":"","solution":[[{"text":"(1)\\r\\n\\r\\n\\u7531$a_{n+1}=\\\\dfrac{1}{2}a_n+2$\\uff0c\\r\\n\\r\\n\\u6240\\u4ee5$a_{n+1} - 4 =\\\\dfrac{1}{2}(a_n - 4)$.","score":"12.5"},{"text":"\\u4e14$a_1 - 4= - 2$\\uff0c\\u6545\\u6570\\u5217$\\\\{a_n - 4\\\\}$\\u662f\\u4ee5$ - 2$\\u4e3a\\u9996\\u9879\\u3001$\\\\dfrac{1}{2}$\\u4e3a\\u516c\\u6bd4\\u7684\\u7b49\\u6bd4\\u6570\\u5217\\uff1b\\r\\n","score":"12.5"},{"text":"(2)\\r\\n\\r\\n\\u7531(1)\\u9898\\uff0c\\u5f97$a_n - 4= - 2{{(\\\\dfrac{1}{2})}^{n-1}}$\\uff0c\\r\\n\\r\\n\\u5f97${{a}_{n}}=4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-2}}$\\uff0c\\r\\n","score":"12.5"},{"text":"\\u4e8e\\u662f$\\\\dfrac{4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-2}}-m}{4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-1}}-m} \\\\lt \\\\dfrac{2}{3}$\\uff0c\\r\\n\\r\\n\\u5f53$m\\\\ge4$\\u65f6\\uff0c\\u6709$\\\\dfrac{4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-2}}-m}{4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-1}}-m} \\\\gt 1$\\uff0c\\u4e0d\\u7b49\\u5f0f\\u65e0\\u89e3.","score":"6.25"},{"text":"\\u56e0\\u6b64\\uff0c\\u6ee1\\u8db3\\u9898\\u610f\\u7684\\u89e3\\u4e3a$\\\\begin{cases}\\r\\nm=1 \\\\\\\\ \\r\\nn=1 \\\\\\\\ \\r\\n\\\\end{cases}$\\u6216$\\\\begin{cases}\\r\\nm=2 \\\\\\\\ \\r\\nn=1 \\\\\\\\ \\r\\n\\\\end{cases}$\\u6216$\\\\begin{cases}\\r\\nm=3 \\\\\\\\ \\r\\nn=2 \\\\\\\\ \\r\\n\\\\end{cases}$\\uff1b\\r\\n","score":"12.5"},{"text":"(3) \\r\\n\\r\\n(a) \\u5f53$k=1$\\u65f6\\uff0c\\u7531$\\\\dfrac{3-t}{2-t} \\\\lt 2$\\uff0c\\u89e3\\u5f97$0 \\\\lt t \\\\lt 1$\\u6216$2 \\\\lt t \\\\lt 3$\\uff0c","score":"6.25"},{"text":"(b) \\u5f53$k \\\\ge 2$\\u65f6\\uff0c${{a}_{n}}=4-{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{n-2}}\\\\ge 3$\\uff0c\\u6545\\u5206\\u6bcd$a_n-t \\\\gt 0$\\u6052\\u6210\\u7acb\\uff0c\\r\\n\\r\\n\\u4ece\\u800c\\uff0c\\u53ea\\u9700$a_{k+1} - t \\\\lt 2(a_k - t)$\\u5bf9$k\\\\ge2, k\\\\in \\\\mathbf{N^*}$\\u6052\\u6210\\u7acb\\uff0c\\r\\n\\r\\n\\u5373$t \\\\lt 2a_k - a_{k+1}$\\u5bf9$k\\\\ge2, k\\\\in \\\\mathbf{N^*}$\\u6052\\u6210\\u7acb\\uff0c\\r\\n\\r\\n\\u6545$t \\\\lt (2a_k - a_{k+1})_{\\\\min}$\\uff0c","score":"18.75"},{"text":"\\u53c8$2{{a}_{k}}-{{a}_{k+1}}=4-3{{\\\\left( \\\\dfrac{1}{2} \\\\right)}^{k-1}}$\\uff0c\\r\\n\\r\\n\\u6545\\u5f53$k=2$\\u65f6\\uff0c${{(2{{a}_{k}}-{{a}_{k+1}})}_{\\\\min }}=\\\\dfrac{5}{2}$\\uff0c\\r\\n\\r\\n\\u6240\\u4ee5$t \\\\lt \\\\dfrac{5}{2}$\\uff0c\\r\\n\\r\\n\\u7efc\\u4e0a\\u6240\\u8ff0\\uff0c$t$\\u7684\\u53d6\\u503c\\u8303\\u56f4\\u662f$(0,1)\\\\cup(2,\\\\dfrac{5}{2})$\\uff0e\\r\\n","score":"18.75"}]],"score":0,"type":2}',
            ),
        9359 =>
            array (
                'id' => 9359,
                'question' => '<div><p>某险种的基本保费为 $ a $（单位：元），继续购买该险种的投保人称为续保人，续保人本年度的保费与其上年度出险次数的关联如下：
\\[
\\begin{array}{|c|c|c|c|c|c|c|} 
\\hline
\\text{上年度出险次数} &amp; 0 &amp; 1 &amp;2 &amp;3 &amp;4 &amp; \\geqslant 5 \\\\ 
\\hline
\\text{保费} &amp;0.85a &amp;a &amp;1.25a &amp;1.5a &amp;1.75a &amp;2a \\\\ 
\\hline
\\end{array}
\\]
随机调查了该险种的 $ 200 $ 名续保人在一年内的出险情况，得到如下统计表：\\[\\begin{array}{|c|c|c|c|c|c|c|} \\hline \\text{上年度出险次数}&amp;0&amp;1&amp;2&amp;3&amp;4&amp;\\geqslant 5\\\\ \\hline \\text{频数} &amp;60&amp;50&amp;30&amp;30&amp;20&amp;10\\\\ \\hline\\end{array}\\]</p></div>
<ol class="subqs">
<li><p>记 $ A $ 为事件： &quot; 一续保人本年度的保费不高于基本保费 &quot; ．求 $ P\\left(A\\right) $ 的估计值；</p></li>
<li><p>记 $ B $ 为事件： &quot; 一续保人本年度的保费高于基本保费但不高于基本保费的 $ 160\\% $ &quot; ．求 $ P\\left(B\\right) $ 的估计值；</p></li>
<li><p>求续保人本年度的平均保费估计值．</p></li>
</ol>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p class="step-header">步骤1:</p><p>由题意知：一续保人本年度的保费不高于基本保费共有 $ 60+50=110 $ 次，
所以 $ P\\left(A\\right)=\\dfrac{110}{200}=\\dfrac{11}{20} $．</p><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></li><li class="list-group-item"><p class="step-header">步骤2:</p><p>由题意知：一续保人本年度的保费高于基本保费但不高于基本保费的 $ 160\\% $ 共有 $ 30+30=60 $ 次，
所以 $ P\\left(B\\right)=\\dfrac{30}{200}=\\dfrac{3}{20} $．</p><p class="step-score" id="step1-2">…………本步骤分值:0% 累计分值:100% </p></li><li class="list-group-item"><p class="step-header">步骤3:</p><p>设续保人本年度的平均保费估计值为 $ \\overline x $，
所以 $ \\overline x=\\dfrac{1}{200}(0.85a\\times60+a\\times50+1.25a\\times30+1.5a\\times30+1.75a\\times20+2a\\times10)=1.1925a $．</p><p class="step-score" id="step1-3">…………本步骤分值:0% 累计分值:100% </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #mYQk</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2016年全国2高考数学文科试卷 第 18 题 </span></section><p>某险种的基本保费为 $ a $（单位：元），继续购买该险种的投保人称为续保人，续保人本年度的保费与其上年度出险次数的关联如下：
\\[
\\begin{array}{|c|c|c|c|c|c|c|} 
\\hline
\\text{上年度出险次数} &amp; 0 &amp; 1 &amp;2 &amp;3 &amp;4 &amp; \\geqslant 5 \\\\ 
\\hline
\\text{保费} &amp;0.85a &amp;a &amp;1.25a &amp;1.5a &amp;1.75a &amp;2a \\\\ 
\\hline
\\end{array}
\\]
随机调查了该险种的 $ 200 $ 名续保人在一年内的出险情况，得到如下统计表：\\[\\begin{array}{|c|c|c|c|c|c|c|} \\hline \\text{上年度出险次数}&amp;0&amp;1&amp;2&amp;3&amp;4&amp;\\geqslant 5\\\\ \\hline \\text{频数} &amp;60&amp;50&amp;30&amp;30&amp;20&amp;10\\\\ \\hline\\end{array}\\]</p><p><span class="question-label">(1) </span>记 $ A $ 为事件： &quot; 一续保人本年度的保费不高于基本保费 &quot; ．求 $ P\\left(A\\right) $ 的估计值；</p><p><span class="question-label">(2) </span>记 $ B $ 为事件： &quot; 一续保人本年度的保费高于基本保费但不高于基本保费的 $ 160\\% $ &quot; ．求 $ P\\left(B\\right) $ 的估计值；</p><p><span class="question-label">(3) </span>求续保人本年度的平均保费估计值．</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=mYQk\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p class="step-header">步骤1:</p><p>由题意知：一续保人本年度的保费不高于基本保费共有 $ 60+50=110 $ 次，
所以 $ P\\left(A\\right)=\\dfrac{110}{200}=\\dfrac{11}{20} $．</p><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></section><section class="solution-step"><p class="step-header">步骤2:</p><p>由题意知：一续保人本年度的保费高于基本保费但不高于基本保费的 $ 160\\% $ 共有 $ 30+30=60 $ 次，
所以 $ P\\left(B\\right)=\\dfrac{30}{200}=\\dfrac{3}{20} $．</p><p class="step-score" id="step1-2">…………本步骤分值:0% 累计分值:100% </p></section><section class="solution-step"><p class="step-header">步骤3:</p><p>设续保人本年度的平均保费估计值为 $ \\overline x $，
所以 $ \\overline x=\\dfrac{1}{200}(0.85a\\times60+a\\times50+1.25a\\times30+1.5a\\times30+1.75a\\times20+2a\\times10)=1.1925a $．</p><p class="step-score" id="step1-3">…………本步骤分值:0% 累计分值:100% </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u67d0\\u9669\\u79cd\\u7684\\u57fa\\u672c\\u4fdd\\u8d39\\u4e3a\\u00a0$ a $\\uff08\\u5355\\u4f4d\\uff1a\\u5143\\uff09\\uff0c\\u7ee7\\u7eed\\u8d2d\\u4e70\\u8be5\\u9669\\u79cd\\u7684\\u6295\\u4fdd\\u4eba\\u79f0\\u4e3a\\u7eed\\u4fdd\\u4eba\\uff0c\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u4fdd\\u8d39\\u4e0e\\u5176\\u4e0a\\u5e74\\u5ea6\\u51fa\\u9669\\u6b21\\u6570\\u7684\\u5173\\u8054\\u5982\\u4e0b\\uff1a\\r\\n\\\\[\\r\\n\\\\begin{array}{|c|c|c|c|c|c|c|} \\r\\n\\\\hline\\r\\n\\\\text{\\u4e0a\\u5e74\\u5ea6\\u51fa\\u9669\\u6b21\\u6570} & 0 & 1 &2 &3 &4 & \\\\geqslant 5 \\\\\\\\ \\r\\n\\\\hline\\r\\n\\\\text{\\u4fdd\\u8d39} &0.85a &a &1.25a &1.5a &1.75a &2a \\\\\\\\ \\r\\n\\\\hline\\r\\n\\\\end{array}\\r\\n\\\\]\\r\\n\\u968f\\u673a\\u8c03\\u67e5\\u4e86\\u8be5\\u9669\\u79cd\\u7684\\u00a0$ 200 $\\u00a0\\u540d\\u7eed\\u4fdd\\u4eba\\u5728\\u4e00\\u5e74\\u5185\\u7684\\u51fa\\u9669\\u60c5\\u51b5\\uff0c\\u5f97\\u5230\\u5982\\u4e0b\\u7edf\\u8ba1\\u8868\\uff1a\\\\[\\\\begin{array}{|c|c|c|c|c|c|c|} \\\\hline \\\\text{\\u4e0a\\u5e74\\u5ea6\\u51fa\\u9669\\u6b21\\u6570}&0&1&2&3&4&\\\\geqslant 5\\\\\\\\ \\\\hline \\\\text{\\u9891\\u6570} &60&50&30&30&20&10\\\\\\\\ \\\\hline\\\\end{array}\\\\]","answer":"","options":[],"sub_questions":["\\u8bb0\\u00a0$ A $\\u00a0\\u4e3a\\u4e8b\\u4ef6\\uff1a \\" \\u4e00\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u4fdd\\u8d39\\u4e0d\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39 \\" \\uff0e\\u6c42\\u00a0$ P\\\\left(A\\\\right) $\\u00a0\\u7684\\u4f30\\u8ba1\\u503c\\uff1b","\\u8bb0\\u00a0$ B $\\u00a0\\u4e3a\\u4e8b\\u4ef6\\uff1a \\" \\u4e00\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u4fdd\\u8d39\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39\\u4f46\\u4e0d\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39\\u7684\\u00a0$ 160\\\\% $ \\" \\uff0e\\u6c42\\u00a0$ P\\\\left(B\\\\right) $\\u00a0\\u7684\\u4f30\\u8ba1\\u503c\\uff1b","\\u6c42\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u5e73\\u5747\\u4fdd\\u8d39\\u4f30\\u8ba1\\u503c\\uff0e"],"hint":"","solution":[[{"text":"\\u7531\\u9898\\u610f\\u77e5\\uff1a\\u4e00\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u4fdd\\u8d39\\u4e0d\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39\\u5171\\u6709\\u00a0$ 60+50=110 $\\u00a0\\u6b21\\uff0c\\r\\n\\u6240\\u4ee5\\u00a0$ P\\\\left(A\\\\right)=\\\\dfrac{110}{200}=\\\\dfrac{11}{20} $\\uff0e","score":"100"},{"text":"\\u7531\\u9898\\u610f\\u77e5\\uff1a\\u4e00\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u4fdd\\u8d39\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39\\u4f46\\u4e0d\\u9ad8\\u4e8e\\u57fa\\u672c\\u4fdd\\u8d39\\u7684\\u00a0$ 160\\\\% $\\u00a0\\u5171\\u6709\\u00a0$ 30+30=60 $\\u00a0\\u6b21\\uff0c\\r\\n\\u6240\\u4ee5\\u00a0$ P\\\\left(B\\\\right)=\\\\dfrac{30}{200}=\\\\dfrac{3}{20} $\\uff0e","score":"0"},{"text":"\\u8bbe\\u7eed\\u4fdd\\u4eba\\u672c\\u5e74\\u5ea6\\u7684\\u5e73\\u5747\\u4fdd\\u8d39\\u4f30\\u8ba1\\u503c\\u4e3a\\u00a0$ \\\\overline x $\\uff0c\\r\\n\\u6240\\u4ee5\\u00a0$ \\\\overline x=\\\\dfrac{1}{200}(0.85a\\\\times60+a\\\\times50+1.25a\\\\times30+1.5a\\\\times30+1.75a\\\\times20+2a\\\\times10)=1.1925a $\\uff0e","score":"0"}]],"score":0,"type":2}',
            ),
        7961 =>
            array (
                'id' => 7961,
                'question' => '<div><p>斜率为$\\frac{{\\sqrt 2 }}{2}$的直线与焦点在$x$轴上的椭圆${x^2} + \\frac{{{y^2}}}{{{b^2}}} = 1(b  \\gt 0)$交于不同的两点$P$、$Q$.若点$P$、$Q$在$x$轴上的投影恰好为椭圆的两焦点，则该椭圆的焦距为_________.</p></div>
',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>设焦点坐标$(c,0)$，$(-c,0)$，</p>
<p>所以$P(c,\\frac {\\sqrt 2} 2c)$，$Q(-c,-\\frac {\\sqrt 2} 2c)$               </p>
<p>P、Q在椭圆上，所以${c^2} + \\frac{{{c^2}}}{{{2b^2}}} = 1$</p>
<p>又因为$1-b^2=c^2$，解得$c=\\frac {\\sqrt 2}2$</p>
<p>所以焦距$2c=\\sqrt 2$                            </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #KPPW</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2015届上海市闵行区高三二模考试文科数学试卷 第 11 题 </span></section><p>斜率为$\\frac{{\\sqrt 2 }}{2}$的直线与焦点在$x$轴上的椭圆${x^2} + \\frac{{{y^2}}}{{{b^2}}} = 1(b  \\gt 0)$交于不同的两点$P$、$Q$.若点$P$、$Q$在$x$轴上的投影恰好为椭圆的两焦点，则该椭圆的焦距为_________.</p><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=KPPW\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>设焦点坐标$(c,0)$，$(-c,0)$，</p>
<p>所以$P(c,\\frac {\\sqrt 2} 2c)$，$Q(-c,-\\frac {\\sqrt 2} 2c)$               </p>
<p>P、Q在椭圆上，所以${c^2} + \\frac{{{c^2}}}{{{2b^2}}} = 1$</p>
<p>又因为$1-b^2=c^2$，解得$c=\\frac {\\sqrt 2}2$</p>
<p>所以焦距$2c=\\sqrt 2$                            </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u659c\\u7387\\u4e3a$\\\\frac{{\\\\sqrt 2 }}{2}$\\u7684\\u76f4\\u7ebf\\u4e0e\\u7126\\u70b9\\u5728$x$\\u8f74\\u4e0a\\u7684\\u692d\\u5706${x^2} + \\\\frac{{{y^2}}}{{{b^2}}} = 1(b  \\\\gt 0)$\\u4ea4\\u4e8e\\u4e0d\\u540c\\u7684\\u4e24\\u70b9$P$\\u3001$Q$.\\u82e5\\u70b9$P$\\u3001$Q$\\u5728$x$\\u8f74\\u4e0a\\u7684\\u6295\\u5f71\\u6070\\u597d\\u4e3a\\u692d\\u5706\\u7684\\u4e24\\u7126\\u70b9\\uff0c\\u5219\\u8be5\\u692d\\u5706\\u7684\\u7126\\u8ddd\\u4e3a_________.","answer":"$\\\\sqrt 2$","options":[],"sub_questions":[],"hint":"","solution":[[{"text":"\\u8bbe\\u7126\\u70b9\\u5750\\u6807$(c,0)$\\uff0c$(-c,0)$\\uff0c\\r\\n\\r\\n\\u6240\\u4ee5$P(c,\\\\frac {\\\\sqrt 2} 2c)$\\uff0c$Q(-c,-\\\\frac {\\\\sqrt 2} 2c)$               \\r\\n\\r\\nP\\u3001Q\\u5728\\u692d\\u5706\\u4e0a\\uff0c\\u6240\\u4ee5${c^2} + \\\\frac{{{c^2}}}{{{2b^2}}} = 1$\\r\\n\\r\\n\\u53c8\\u56e0\\u4e3a$1-b^2=c^2$\\uff0c\\u89e3\\u5f97$c=\\\\frac {\\\\sqrt 2}2$\\r\\n\\r\\n\\u6240\\u4ee5\\u7126\\u8ddd$2c=\\\\sqrt 2$                            ","score":"100"}]],"score":0,"type":0}',
            ),
        168634 =>
            array (
                'id' => 168634,
                'question' => '<div><p>图$1$是由矩形$ADEB$,$Rt\\triangle ABC$和菱形$BFGC$组成的一个平面图形,其中$AB=1$,$BE=BF=2$,$ \\angle FBC=60^{\\small \\circ}.$将其沿$AB$,$BC$折起使得$BE$与$BF$重合,连接$DG$,如图$2$．</p></div>
<ol class="subqs">
<li><p>证明：图$2$中的$A$,$C$,$G$,$D$四点共面,且平面$ABC \\perp $平面$BCGE$；</p></li>
<li><p>求图$2$中的四边形$ACGD$的面积．</p></li>
</ol>
<div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/tMqTDXwedLU5REX0sKojItZ0PaAK36QI.png" ></div>',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p>$(1)$证明：由已知可得$AD \\parallel BE$,$CG \\parallel BE$,即有$AD \\parallel CG$,</p>
<p>则$AD$,$CG$确定一个平面,从而$A$,$C$,$G$,$D$四点共面；</p>
<p>由四边形$ABED$为矩形,可得$AB \\perp BE$,</p>
<p>由$\\triangle ABC$为直角三角形,可得$AB \\perp BC$,</p>
<p>又$BC \\cap BE=E$,$BC \\subset $平面$BCGE$,$BE \\subset $平面$BCGE$,</p>
<p>可得$AB \\perp $平面$BCGE$,</p>
<p>$AB \\subset $平面$ABC$,可得平面$ABC \\perp $平面$BCGE$；</p>
<p>$(2)$解：连接$BG$,$AG$,</p>
<p>由$AB \\perp $平面$BCGE$,$BG \\subset $平面$BCGE$,可得$AB \\perp BG$,</p>
<p>在$\\triangle BCG$中,$BC=CG=2$,$ \\angle BCG=120^{\\small \\circ}$,可得$BG=2BCsin60^{\\small \\circ}=2 \\sqrt{3}$,</p>
<p>可得$AG= \\sqrt{A{B}^{2}+B{G}^{2}} = \\sqrt{13}$,</p>
<p>在$\\triangle ACG$中,$AC= \\sqrt {5}$,$CG=2$,$AG= \\sqrt{13}$,</p>
<p>可得$\\cos \\angle ACG= \\dfrac{4+5 - 13}{2 \\times 2 \\times  \\sqrt{5}} =- \\dfrac{1}{ \\sqrt{5}}$,即有$\\sin \\angle ACG= \\dfrac{2}{ \\sqrt{5}}$,</p>
<p>由$(1)$可得：$AD \\parallel CG$且$AD=CG=2$,</p>
<p>所以四边形$ACGD$为平行四边形,</p>
<p>则平行四边形$ACGD$的面积为$2 \\times  \\sqrt{5}  \\times  \\dfrac{2}{ \\sqrt{5}} =4$．</p><div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/pzVgFjF0wIbI15cHxo18gYqbJsreGaxg.png" id="preview-sol-0--0--fig-"></div><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #75evd</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2019年全国3高考数学文科试卷 第 19 题 </span></section><p>图$1$是由矩形$ADEB$,$Rt\\triangle ABC$和菱形$BFGC$组成的一个平面图形,其中$AB=1$,$BE=BF=2$,$ \\angle FBC=60^{\\small \\circ}.$将其沿$AB$,$BC$折起使得$BE$与$BF$重合,连接$DG$,如图$2$．</p><p><span class="question-label">(1) </span>证明：图$2$中的$A$,$C$,$G$,$D$四点共面,且平面$ABC \\perp $平面$BCGE$；</p><p><span class="question-label">(2) </span>求图$2$中的四边形$ACGD$的面积．</p><section class="problem-img"><img src="https://www.mathcrowd.cn/uploads/fig/tMqTDXwedLU5REX0sKojItZ0PaAK36QI.png" ></section><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=75evd\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p>$(1)$证明：由已知可得$AD \\parallel BE$,$CG \\parallel BE$,即有$AD \\parallel CG$,</p>
<p>则$AD$,$CG$确定一个平面,从而$A$,$C$,$G$,$D$四点共面；</p>
<p>由四边形$ABED$为矩形,可得$AB \\perp BE$,</p>
<p>由$\\triangle ABC$为直角三角形,可得$AB \\perp BC$,</p>
<p>又$BC \\cap BE=E$,$BC \\subset $平面$BCGE$,$BE \\subset $平面$BCGE$,</p>
<p>可得$AB \\perp $平面$BCGE$,</p>
<p>$AB \\subset $平面$ABC$,可得平面$ABC \\perp $平面$BCGE$；</p>
<p>$(2)$解：连接$BG$,$AG$,</p>
<p>由$AB \\perp $平面$BCGE$,$BG \\subset $平面$BCGE$,可得$AB \\perp BG$,</p>
<p>在$\\triangle BCG$中,$BC=CG=2$,$ \\angle BCG=120^{\\small \\circ}$,可得$BG=2BCsin60^{\\small \\circ}=2 \\sqrt{3}$,</p>
<p>可得$AG= \\sqrt{A{B}^{2}+B{G}^{2}} = \\sqrt{13}$,</p>
<p>在$\\triangle ACG$中,$AC= \\sqrt {5}$,$CG=2$,$AG= \\sqrt{13}$,</p>
<p>可得$\\cos \\angle ACG= \\dfrac{4+5 - 13}{2 \\times 2 \\times  \\sqrt{5}} =- \\dfrac{1}{ \\sqrt{5}}$,即有$\\sin \\angle ACG= \\dfrac{2}{ \\sqrt{5}}$,</p>
<p>由$(1)$可得：$AD \\parallel CG$且$AD=CG=2$,</p>
<p>所以四边形$ACGD$为平行四边形,</p>
<p>则平行四边形$ACGD$的面积为$2 \\times  \\sqrt{5}  \\times  \\dfrac{2}{ \\sqrt{5}} =4$．</p><div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/pzVgFjF0wIbI15cHxo18gYqbJsreGaxg.png" id="preview-sol-0--0--fig-"></div><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u56fe$1$\\u662f\\u7531\\u77e9\\u5f62$ADEB$,$Rt\\\\triangle ABC$\\u548c\\u83f1\\u5f62$BFGC$\\u7ec4\\u6210\\u7684\\u4e00\\u4e2a\\u5e73\\u9762\\u56fe\\u5f62,\\u5176\\u4e2d$AB=1$,$BE=BF=2$,$ \\\\angle FBC=60^{\\\\small \\\\circ}.$\\u5c06\\u5176\\u6cbf$AB$,$BC$\\u6298\\u8d77\\u4f7f\\u5f97$BE$\\u4e0e$BF$\\u91cd\\u5408,\\u8fde\\u63a5$DG$,\\u5982\\u56fe$2$\\uff0e\\n![\\u6a58\\u5b50\\u6570\\u5b66 www.mathcrowd.cn](http:\\/\\/cdn2.mathcrowd.cn\\/uploads\\/fig\\/tMqTDXwedLU5REX0sKojItZ0PaAK36QI.png)","answer":"","options":[],"sub_questions":["\\u8bc1\\u660e\\uff1a\\u56fe$2$\\u4e2d\\u7684$A$,$C$,$G$,$D$\\u56db\\u70b9\\u5171\\u9762,\\u4e14\\u5e73\\u9762$ABC \\\\perp $\\u5e73\\u9762$BCGE$\\uff1b","\\u6c42\\u56fe$2$\\u4e2d\\u7684\\u56db\\u8fb9\\u5f62$ACGD$\\u7684\\u9762\\u79ef\\uff0e"],"hint":"<p>\\u672c\\u9898\\u8003\\u67e5\\u7a7a\\u95f4\\u7ebf\\u7ebf\\u3001\\u7ebf\\u9762\\u548c\\u9762\\u9762\\u7684\\u4f4d\\u7f6e\\u5173\\u7cfb,\\u8003\\u67e5\\u5e73\\u884c\\u548c\\u5782\\u76f4\\u7684\\u5224\\u65ad\\u548c\\u6027\\u8d28,\\u6ce8\\u610f\\u8fd0\\u7528\\u5e73\\u9762\\u51e0\\u4f55\\u7684\\u6027\\u8d28,\\u8003\\u67e5\\u63a8\\u7406\\u80fd\\u529b,\\u5c5e\\u4e8e\\u4e2d\\u6863\\u9898\\uff0e<\\/p>\\n<p>$(1)$\\u8fd0\\u7528\\u7a7a\\u95f4\\u7ebf\\u7ebf\\u5e73\\u884c\\u7684\\u516c\\u7406\\u548c\\u786e\\u5b9a\\u5e73\\u9762\\u7684\\u6761\\u4ef6,\\u4ee5\\u53ca\\u7ebf\\u9762\\u5782\\u76f4\\u7684\\u5224\\u65ad\\u548c\\u9762\\u9762\\u5782\\u76f4\\u7684\\u5224\\u5b9a\\u5b9a\\u7406,\\u5373\\u53ef\\u5f97\\u8bc1\\uff1b<\\/p>\\n<p>$(2)$\\u8fde\\u63a5$BG$,$AG$,\\u7531\\u7ebf\\u9762\\u5782\\u76f4\\u7684\\u6027\\u8d28\\u548c\\u4e09\\u89d2\\u5f62\\u7684\\u4f59\\u5f26\\u5b9a\\u7406\\u548c\\u52fe\\u80a1\\u5b9a\\u7406,\\u7ed3\\u5408\\u4e09\\u89d2\\u5f62\\u7684\\u9762\\u79ef\\u516c\\u5f0f,\\u53ef\\u5f97\\u6240\\u6c42\\u503c\\uff0e<\\/p>\\n","solution":[[{"text":"\\n![\\u6a58\\u5b50\\u6570\\u5b66 www.mathcrowd.cn](http:\\/\\/cdn2.mathcrowd.cn\\/uploads\\/fig\\/pzVgFjF0wIbI15cHxo18gYqbJsreGaxg.png)","score":"100"}]],"score":0,"type":2}',
            ),
        169561 =>
            array (
                'id' => 169561,
                'question' => '<div><p>如图，在四棱锥$P-ABCD$中，四边形$ABCD$是平行四边形，$AD \\perp BD$且$AD=BD$，$AC \\cap BD=O$，$PO \\perp $平面$ABCD$．
</p></div>
<ol class="subqs">
<li><p>$E$为棱$PC$的中点，求证：$OE/\\!/$平面$PAB$；</p>
</li>
<li><p>求证：平面$PAD \\perp $平面$PBD$；</p>
</li>
<li><p>若$PD \\perp PB$，$AD=2$求四棱锥$P-ABCD$体积．</p></li>
</ol>
<div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/hX3EmNzPT0NedCearEmiuThutfHLYuqM.png" ></div>',
                'answer' => '<div class="panel panel-default"><div class="panel-heading"><span>解答</span></div><ul class="list-group"><li class="list-group-item"><p class="step-header">步骤1:</p><p>(1)证明：$ \\because $四边形$ABCD$是平行四边形，
$ \\therefore O$为$AC$中点，又$E$为$PC$中点，$ \\therefore OE$是$\\triangle PAC$的中位线．</p>
<p>$ \\therefore OE/\\!/PA$，而$OE \\not\\subset $平面$PAB$，$PA \\subset $平面$PAB$，</p>
<p>$ \\therefore OE/\\!/$平面$PAB$；</p>
<div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/Wodk4ApGlLEDMdKWxHhZBgsipH4f8LBl.png" id="preview-sol-0--0--fig-"></div><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></li><li class="list-group-item"><p class="step-header">步骤2:</p><p>(2)证明：$ \\because PO \\perp $平面$ABCD$，$ \\therefore PO \\perp AD$，</p>
<p>又$AD \\perp BD$，且$BD \\cap PO=O$，</p>
<p>$ \\therefore AD \\perp $平面$PBD$，而$AD \\subset $平面$PBD$，</p>
<p>$ \\therefore $平面$PAD \\perp $平面$PBD$；</p>
<p class="step-score" id="step1-2">…………本步骤分值:0% 累计分值:100% </p></li><li class="list-group-item"><p class="step-header">步骤3:</p><p>(3) 由$AD \\perp BD$，且$AD=BD$，$AD=2$，$ \\therefore S _{四边形ABCD} =2 \\times 2=4$，</p>
<p>又$PD \\perp PB$，$PO \\perp BD$，可得$PO= \\dfrac {1}{2}BD=1$，</p>
<p>$ \\therefore  V_{P-ABCD}= \\dfrac {1}{3} \\times 4 \\times 1= \\dfrac {4}{3}$．</p><p class="step-score" id="step1-3">…………本步骤分值:0% 累计分值:100% </p></li></ul>
</div>
',
                'wechat' => '<html><body><section class="wechat-output"><section class="panel"><h2 class="question"><span>试题 #K6g7q</span><span> </span></h2><section class="problem-question panel-body"><section class=\'problem-source\' ><span>2017年北京市东城区高考数学一模试卷（文科） 第 17 题 </span></section><p>如图，在四棱锥$P-ABCD$中，四边形$ABCD$是平行四边形，$AD \\perp BD$且$AD=BD$，$AC \\cap BD=O$，$PO \\perp $平面$ABCD$．
</p><p><span class="question-label">(1) </span>$E$为棱$PC$的中点，求证：$OE/\\!/$平面$PAB$；</p>
<p><span class="question-label">(2) </span>求证：平面$PAD \\perp $平面$PBD$；</p>
<p><span class="question-label">(3) </span>若$PD \\perp PB$，$AD=2$求四棱锥$P-ABCD$体积．</p><section class="problem-img"><img src="https://www.mathcrowd.cn/uploads/fig/hX3EmNzPT0NedCearEmiuThutfHLYuqM.png" ></section><section class=\'problem-info\' ><p> >> <a href=\'https://www.mathcrowd.cn/mobile/index.php?r=problem/view&id=K6g7q\'> 查看解析 </a> </p></section></section></section><section class=\'panel\' ><h2 class="solution"><span>解答</span><span> </span></h2><section class="problem-solution panel-body"><section class="solution-step"><p class="step-header">步骤1:</p><p>(1)证明：$ \\because $四边形$ABCD$是平行四边形，
$ \\therefore O$为$AC$中点，又$E$为$PC$中点，$ \\therefore OE$是$\\triangle PAC$的中位线．</p>
<p>$ \\therefore OE/\\!/PA$，而$OE \\not\\subset $平面$PAB$，$PA \\subset $平面$PAB$，</p>
<p>$ \\therefore OE/\\!/$平面$PAB$；</p>
<div class="problem-img"><img src="https://cdn2.mathcrowd.cn/uploads/fig/Wodk4ApGlLEDMdKWxHhZBgsipH4f8LBl.png" id="preview-sol-0--0--fig-"></div><p class="step-score" id="step1-1">…………本步骤分值:100% 累计分值:100% </p></section><section class="solution-step"><p class="step-header">步骤2:</p><p>(2)证明：$ \\because PO \\perp $平面$ABCD$，$ \\therefore PO \\perp AD$，</p>
<p>又$AD \\perp BD$，且$BD \\cap PO=O$，</p>
<p>$ \\therefore AD \\perp $平面$PBD$，而$AD \\subset $平面$PBD$，</p>
<p>$ \\therefore $平面$PAD \\perp $平面$PBD$；</p>
<p class="step-score" id="step1-2">…………本步骤分值:0% 累计分值:100% </p></section><section class="solution-step"><p class="step-header">步骤3:</p><p>(3) 由$AD \\perp BD$，且$AD=BD$，$AD=2$，$ \\therefore S _{四边形ABCD} =2 \\times 2=4$，</p>
<p>又$PD \\perp PB$，$PO \\perp BD$，可得$PO= \\dfrac {1}{2}BD=1$，</p>
<p>$ \\therefore  V_{P-ABCD}= \\dfrac {1}{3} \\times 4 \\times 1= \\dfrac {4}{3}$．</p><p class="step-score" id="step1-3">…………本步骤分值:0% 累计分值:100% </p></section></section></section><section class=\'mathcrowd-logo\'><p><img src=\'https://www.mathcrowd.cn/img/28.png\' alt=\'logo\' style=\'vertical-align: middle; height: 28px; margin: 0 1px 0 1px\'></img><span>橘子数学开源题库社区(mathcrowd.cn)</span></p></section></section></body></html>',
                'json' => '{"question":"\\u5982\\u56fe\\uff0c\\u5728\\u56db\\u68f1\\u9525$P-ABCD$\\u4e2d\\uff0c\\u56db\\u8fb9\\u5f62$ABCD$\\u662f\\u5e73\\u884c\\u56db\\u8fb9\\u5f62\\uff0c$AD \\\\perp BD$\\u4e14$AD=BD$\\uff0c$AC \\\\cap BD=O$\\uff0c$PO \\\\perp $\\u5e73\\u9762$ABCD$\\uff0e\\r\\n\\n![\\u6a58\\u5b50\\u6570\\u5b66 www.mathcrowd.cn](http:\\/\\/cdn2.mathcrowd.cn\\/uploads\\/fig\\/hX3EmNzPT0NedCearEmiuThutfHLYuqM.png)","answer":"","options":[],"sub_questions":["$E$\\u4e3a\\u68f1$PC$\\u7684\\u4e2d\\u70b9\\uff0c\\u6c42\\u8bc1\\uff1a$OE\\/\\\\!\\/$\\u5e73\\u9762$PAB$\\uff1b\\r\\n\\r\\n","\\u6c42\\u8bc1\\uff1a\\u5e73\\u9762$PAD \\\\perp $\\u5e73\\u9762$PBD$\\uff1b\\r\\n\\r\\n","\\u82e5$PD \\\\perp PB$\\uff0c$AD=2$\\u6c42\\u56db\\u68f1\\u9525$P-ABCD$\\u4f53\\u79ef\\uff0e"],"hint":"<p>\\r\\n$($\\u2160$)$\\u7531\\u56db\\u8fb9\\u5f62$ABCD$\\u662f\\u5e73\\u884c\\u56db\\u8fb9\\u5f62\\uff0c\\u53ef\\u5f97$O$\\u4e3a$AC$\\u4e2d\\u70b9\\uff0c\\u53c8$E$\\u4e3a$PC$\\u4e2d\\u70b9\\uff0c\\u7531\\u4e09\\u89d2\\u5f62\\u4e2d\\u4f4d\\u7ebf\\u5b9a\\u7406\\u53ef\\u5f97$OE\\/\\\\!\\/PA$\\uff0c\\u518d\\u7531\\u7ebf\\u9762\\u5e73\\u884c\\u7684\\u5224\\u5b9a\\u53ef\\u5f97$OE\\/\\\\!\\/$\\u5e73\\u9762$PAB$\\uff1b <\\/p>\\n<p>$($\\u2161$)$\\u7531$PO \\\\perp $\\u5e73\\u9762$ABCD$\\uff0c\\u5f97$PO \\\\perp AD$\\uff0c\\u518d\\u7531$AD \\\\perp BD$\\uff0c\\u53ef\\u5f97$AD \\\\perp $\\u5e73\\u9762$PBD$\\uff0c\\u8fdb\\u4e00\\u6b65\\u5f97\\u5230\\u5e73\\u9762$PAD \\\\perp $\\u5e73\\u9762$PBD$\\uff1b <\\/p>\\n<p>$($\\u2162$)$\\u7531\\u5df2\\u77e5\\u6c42\\u51fa\\u5e73\\u884c\\u56db\\u8fb9\\u5f62$ABCD$\\u7684\\u9762\\u79ef\\uff0c\\u8fdb\\u4e00\\u6b65\\u6c42\\u51fa\\u9ad8$PO$\\uff0c\\u518d\\u7531\\u4f53\\u79ef\\u516c\\u5f0f\\u5f97\\u7b54\\u6848\\uff0e<\\/p>\\n<p>\\u672c\\u9898\\u8003\\u67e5\\u5e73\\u9762\\u4e0e\\u5e73\\u9762\\u5782\\u76f4\\u7684\\u5224\\u5b9a\\uff0c\\u8003\\u67e5\\u7a7a\\u95f4\\u60f3\\u8c61\\u80fd\\u529b\\u548c\\u601d\\u7ef4\\u80fd\\u529b\\uff0c\\u8003\\u67e5\\u68f1\\u9525\\u4f53\\u79ef\\u7684\\u6c42\\u6cd5\\uff0c\\u662f\\u4e2d\\u6863\\u9898\\uff0e<\\/p>","solution":[[{"text":"\\n![\\u6a58\\u5b50\\u6570\\u5b66 www.mathcrowd.cn](http:\\/\\/cdn2.mathcrowd.cn\\/uploads\\/fig\\/Wodk4ApGlLEDMdKWxHhZBgsipH4f8LBl.png)","score":"100"},{"text":"(2)\\u8bc1\\u660e\\uff1a$ \\\\because PO \\\\perp $\\u5e73\\u9762$ABCD$\\uff0c$ \\\\therefore PO \\\\perp AD$\\uff0c\\r\\n\\r\\n\\u53c8$AD \\\\perp BD$\\uff0c\\u4e14$BD \\\\cap PO=O$\\uff0c\\r\\n\\r\\n$ \\\\therefore AD \\\\perp $\\u5e73\\u9762$PBD$\\uff0c\\u800c$AD \\\\subset $\\u5e73\\u9762$PBD$\\uff0c\\r\\n\\r\\n$ \\\\therefore $\\u5e73\\u9762$PAD \\\\perp $\\u5e73\\u9762$PBD$\\uff1b\\r\\n\\r\\n","score":"0"},{"text":"(3) \\u7531$AD \\\\perp BD$\\uff0c\\u4e14$AD=BD$\\uff0c$AD=2$\\uff0c$ \\\\therefore S _{\\u56db\\u8fb9\\u5f62ABCD} =2 \\\\times 2=4$\\uff0c\\r\\n\\r\\n\\u53c8$PD \\\\perp PB$\\uff0c$PO \\\\perp BD$\\uff0c\\u53ef\\u5f97$PO= \\\\dfrac {1}{2}BD=1$\\uff0c\\r\\n\\r\\n$ \\\\therefore  V_{P-ABCD}= \\\\dfrac {1}{3} \\\\times 4 \\\\times 1= \\\\dfrac {4}{3}$\\uff0e","score":"0"}]],"score":0,"type":2}',
            ),
    );


    public static function findOne($id=null){
        if(is_null($id)){
            $id = array_rand(self::$problems);
        }

        foreach (self::$problems as $problem) {
            if ($problem['id'] === (int)$id) {
                return new static($problem);
            }
        }
    }

    public function getQuestion(){
        return $this->question;
    }

    public function getAnswer(){
        return $this->answer;
    }

    public function getWechat(){
        return $this->wechat;
    }

    public function getJson(){
        return $this->json;
    }

    public function getMerged($style){
        $css_file=Yii::getAlias('@app/'.'../css/output'.$style.'.css');
        $css = file_get_contents($css_file);
        $html = '<html><body>'.$this->wechat.'</body></html>';
        $bodyContent = $visualHtml = CssInliner::fromHtml($html)->inlineCss($css)
            ->renderBodyContent();
        return $bodyContent;
    }
}