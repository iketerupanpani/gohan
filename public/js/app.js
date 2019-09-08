$(function () {

    // データからhtmlを出力する関数
    function make_dom(data) {

        var str = '';
        for (var i = 0; i < data.length; i++) {
            str += `<div>
                        <p>
                           ${data[i].menu}
                        </p>
                        </p>
                           ${data[i].time}
                        </p>
                        <p>
                           ${data[i].people}
                        </p><hr>
                   </div>`;
        }
        return str;
    }


    function make_dom(data) {

        var str = '';
        for (var i = 0; i < data.length; i++) {
            str += `    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                        <svg class = "bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder:image">
                        <rect width="100%" height="100%" fill="#55595c"/></svg> 
                        <div class="card-body">
                        <p class= "card-text"> ${data[i].menu} </p> 
                        <div class = "d-flex justify-content-between align-items-center" >
                        <small class = "text-muted" > ${data[i].time} mins </small> 
                        </div></div> 
                        </div></div>
                        `;
        }
        return str;
    }




    // 登録する関数
    function storeData() {
        // 送信先の指定
        var url = '/api/menu';
        // 入力情報の取得
        var data = {
            menu: $('#menu').val(),
            time: $('#time').val(),
            people: $('#people').val()
        };
        // データ送信
        $.ajax({
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                dataType: 'json',
                url: url,
                type: 'POST',
                data: JSON.stringify(data),
                processData: false,
                contentType: false
            })
            .done(function (data) {
                console.log(data);
                console.log('done');
                $('#echo').html(make_dom(data));
            })
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus);
                console.log('fail');
            })
            .always(function () {
                console.log('post:complete');
            });

    }

    // 表示する関数
    function indexData() {
        const url = '/api';
        $.getJSON(url)
            .done(function (data, textStatus, jqXHR) {
                console.log(data);
                $('#echo').html(make_dom(data));
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.status + textStatus + errorThrown);
            })
            .always(function () {
                console.log('get:complete');
            });

    }

    // 削除する関数
    function deleteData(id) {
        // 送信先の指定

        var url = `/api/menu/${id}`;
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

                },
                url: url,
                type: 'POST',
                processData: false,
                contentType: false
            })
            .done(function (data) {
                +console.log(data);
                console.log('done');
                $('#echo').html(make_dom(data));
            })
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus);
                console.log('fail');
            })
            .always(function () {
                console.log('post:complete');
            });


    }
    // 読み込み時に実行
    indexData();

    // 送信ボタンクリック時に登録
    $('#submit').on('click', function () {

        if (
            $('#menu').val() == ''

        ) {
            alert('taskは入力必須です！')
        } else {
            storeData();
            $('#menu').val(''),
                $('#time').val(''),
                $('#people').val('')
        }
    });


    // 削除ボタンクリック時に削除
    $('#echo').on('click', '.destroy', function () {
        // 削除するタスクのidを取得
        var id = $(this).attr('id');
        deleteData(id);
    });
});



// $(function () {
//     alert('ok');
// });
