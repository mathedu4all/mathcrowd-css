<?php

use app\assets\MathJaxAsset;
use app\models\Problem;

MathJaxAsset::register($this);
$problem = Problem::findOne();
$this->title = '一键导出';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="problem-detail" data-id=<?= $problem->id ?>>
    <p class="text-center"><button class="btn btn-primary problem-share">分享到微信公众号</button></p>
    <div class="problem-question"><?= $problem->question ?></div>
    <div class="problem-solution"><?= $problem->answer ?></div>
</div>

<div class="modal fade" id="modalShare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="msg-modal-title">导出到微信公众号</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <div class="style-buttons">
                    <p>
                        <button class="btn btn-default style-button" data-id="1">样式1</button>
                        <button class="btn btn-default style-button" data-id="2">样式2</button>
                        <button class="btn btn-default style-button" data-id="3">样式3</button>
                        <button class="btn btn-default style-button" data-id="4">样式4</button>
                        <button class="btn btn-default style-button" data-id="5">样式5</button>
                        <button class="btn btn-default style-button" data-id="6">样式6</button>
                    </p>
                </div>
                <button id="btnCopyWechat" class="btn btn-primary">复制到微信公众号</button>
                <button class="btn btn-default" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        let promise = Promise.resolve();  // Used to hold chain of typesetting calls

        function typeset(code) {
            promise = promise.then(() => {
                code();
                window.MathJax.texReset();
                window.MathJax.typesetClear();
                return MathJax.typesetPromise()
            }).catch((err) => console.log('Typeset failed: ' + err.message));
            return promise;
        }

        function copyWechat(id, style = 4) {
            $.ajax({
                type: 'GET',
                data: {
                    style: style,
                    id: id
                },
                url: 'index.php?r=site/ajax-merge',
                dataType: 'json'
            }).then(function (json) {
                typeset(function () {
                    body.html(json['source']);
                }).then(function () {
                    modal.find("#btnCopyWechat").off('click').on('click', function () {
                        let backup_html = body.html();
                        body.find("mjx-container").each(function () {
                            const container = this;
                            const svg = this.firstChild;
                            const width = svg.getAttribute("width");
                            const height = svg.getAttribute("height");
                            svg.removeAttribute("width");
                            svg.removeAttribute("height");
                            svg.style.width = width;
                            svg.style.height = height;
                        });
                        let output_html = body.html();
                        output_html = output_html.replace(/<mjx-container class="MathJax" jax="SVG" display="true">(.*?)<\/mjx-container>/g, " <section class='display-math' style='text-align: center'>$1</section> ");
                        output_html = output_html.replace(/<mjx-container class="MathJax" jax="SVG">(.*?)<\/mjx-container>/g, " <span class='inline-math'>$1</span> ");
                        body.html(backup_html);
                        document.addEventListener("copy", function copyCall(e) {
                            e.preventDefault();
                            e.clipboardData.setData("text/html", output_html);
                            e.clipboardData.setData("text/plain", output_html);
                            document.removeEventListener("copy", copyCall);
                        });
                        document.execCommand("copy");
                    });
                })

            });

            modal.find(".style-button").off('click').on('click', function () {
                style = $(this).data('id');
                copyWechat(id, style);
            });

            modal.find('.style-button').removeClass('selected');
            modal.find('.style-button').eq(style - 1).addClass('selected');

            modal.modal('show');
        }

        let modal = $("#modalShare"),
            body = modal.find(".modal-body");

        $('.problem-share').off('click').on('click', function () {
            let id = $('.problem-detail').data('id');
            copyWechat(id);
        });
    });


</script>

<style>
    #modalShare .style-button.selected{
        background: #5cb85c;
        border-color: #5cb85c;
        color: white;
    }

    #modalShare .modal-body{
        max-height: 800px;
        overflow-y: scroll;
    }


</style>
