# 橘子数学试题导出样式集

橘子数学作为一个互联网数学试题资源共享社区，目前社区开源题库共收录了17w+中高考数学试题，100% LaTeX 公式，支持在线编辑，提供**免费的组卷功能**，还支持以 Markdown/LaTeX/HTML **一键导出**试题. 

本开源项目收录了社区网站正在使用的所有试题导出(HTML+CSS)样式，支持包括微信公众号在内的富文本编辑器.



## 作者

* Bao Hongchang  ( @mathedu4all, charles@mathcrowd.cn ) --  样式1, 样式2, 样式3, 样式4
* Jiajun Wang ( @JiajunW, account.github@me.jiajunw.com) -- 样式5, 样式6



## 样式一览

| 样式１      | 　样式２　 |
| ----------- | ----------- |
| <img src="http://docs.mathcrowd.cn/_images/style-01.png" width="400">　|  <img src="http://docs.mathcrowd.cn/_images/style-02.png" width="400">　|

| 样式3      | 　样式4　 |
| ----------- | ----------- |
| <img src="http://docs.mathcrowd.cn/_images/style-03.png" width="400">　|  <img src="http://docs.mathcrowd.cn/_images/style-04.png" width="400">　|


| 样式5      | 　样式6　 |
| ----------- | ----------- |
| <img src="http://docs.mathcrowd.cn/_images/style-05.png" width="400">　|  <img src="http://docs.mathcrowd.cn/_images/style-06.png" width="400">　|

## 开始之前

* 你需要会一点点 `CSS`

* 你需要能够学会在本地部署测试环境



## 测试环境的部署(Ubuntu)

1. 安装 PHP 及 composer
   ```bash
   sudo apt-get install php php-intl php-mbstring php-dom php-mysql php-memcache php-gd php-imagick php-xml php-bcmath php-curl composer
   ```

2. 克隆项目代码到本地
   ```bash
   git clone git@github.com:mathedu4all/mathcrowd-css.git
   ```

3. 安装依赖
	```bash
	cd mathcrowd-css/basic
	composer update -vvv
	```
	
4. 运行测试环境并访问 http://localhost:8080
	```bash
	./yii serve
	```
	
	![1](http://docs.mathcrowd.cn/_images/css-dev-01.png)
	
5. 打开Chrome开放模式，开始调试你的设计吧
	
	![2](http://docs.mathcrowd.cn/_images/css-dev-02.png)

## 如何创建新样式

* 在 `mathcrowd-css/css` 文件夹下新建 `outputX.css` (X为样式编号)

* 在 `mathcrowd-css/basic/views/share.php` 文件的第32行起的按钮列表中，新增一个按钮

  ```php
  <p>
  <button class="btn btn-default style-button" data-id="1">样式1</button>
  <button class="btn btn-default style-button" data-id="2">样式2</button>
  ...
  <!-- 新增一行 -->
  <button class="btn btn-default style-button" data-id="X">样式X</button> 
  </p>
  ```




## 相关链接

* [橘子数学官方网站](https://www.mathcrowd.cn)
* [橘子数学官方文档](https://docs.mathcrowd.cn)



## License

This project is license under Apache License, Version 2.0.

> Copyright (c) 2009-2019 The Mathcrowd Inc.
>
> Licensed under the Apache License, Version 2.0 (the "License");
> you may not use this file except in compliance with the License.
> You may obtain a copy of the License at
>
>  http://www.apache.org/licenses/LICENSE-2.0
>
> Unless required by applicable law or agreed to in writing, software
> distributed under the License is distributed on an "AS IS" BASIS,
> WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
> See the License for the specific language governing permissions and
> limitations under the License.
