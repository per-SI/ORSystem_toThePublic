<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ステッカーラック</title>
    <link rel="stylesheet" href="{{asset("css/orderandreplace/ORwall.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/newStickers.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/calendar.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/orderModal.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/sheetModal.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/orderSheetInfoModal.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/rankModal.css")}}">
    <link rel="stylesheet" href="{{asset("css/loading.css")}}">
    <link rel="stylesheet" href="{{asset("css/imgLoading.css")}}">
    <link rel="stylesheet" href="{{asset("css/orderandreplace/order/orderLoading.css")}}">

</head>
<body>
    <div id="loadingCover" class="loadingCover">
        <div id="spinner" class="spinner"></div>
        <div id="loadingMessage" class="loadingMessage">Loading...</div>
    </div>

    <header id="{{$shop}}" name="{{asset('storage/img/')}}">

        <h1> <span id="span1"> Order </span><span id="span2">&</span> <span id="span3"> Replace </span></h1>
        <input id="addnewBTN" class="addnewBTN" type="button" onclick="registerMode(event)" value="newステッカー追加">

        <div id="SelectWall">
            <span id="span4">SHOP:{{ $shop }}</span>
            <select name="wall" id="wall">

                @for( $i=0; $i<count($wallList); $i++ )
                    <option value="{{ $wallList[$i] }}">{{ $wallList[$i] }}面</option>
                @endfor
            </select>
            <span><input type="button" value="移動" onclick="moveWall(event)"><span>
        </div>

        <div id="option">

            <div class="tab-container">
                <button id="order" class="tab active" >発注</button>
                <button id="changeDisplay" class="tab" >入替</button>
            </div>

        </div>

    </header>

    <div class="RorFcontents">

        <div id="replaceFormContainer" class="RFC">
            <input id="save" type="button" value="保存" onclick="replace()">
            <div id="temporaryContainer">
                <button id='saveTemporary' onclick="saveTemporary()">一時保存</button>
                <button id='readTemporary' onclick="readTemporary()">一時保存を復元</button>
            </div>
        </div>

        <div id="orderSheetContainer" class="OSC RorOactive">
            <div>発注書No.<span id="sheetNum">------</span></div>
            <div class="tab-container">
                <button id="newSheetOpenBTN" class="newSheetOpenBTN" onclick="openModal2(event)">発注書作成</button>
                <button id="selectSheetOpenBTN" class="selectSheetOpenBTN" onclick="openModal2(event)">発注書選択</button>
            </div>
            <button id="openRankModal" onclick="openRankModal()">ランキング</button>
        </div>

    </div>

    @include('rankModal')

    <div id="display">

        <div id="mainzone">

        </div>

    </div>

    <div class="aContainer">
        <a id="goToChangeLayout">レイアウト変更</a>
        <a id="backToTop" href="/orderandreplace">shop選択に戻る</a>
    </div>


    <div id="newStickers" class="newStickers">
        <div id="registerTitle" class="registerTitle newContents hiddenContents">
            <h2 >アイテム登録</h2>
        </div>
        <button id="finishBTN" class="finishBTN  newContents hiddenContents" onclick="closeRegisterModal()">配置替えに戻る</button>
        <button id="openCheckbox" class="openCheckbox newContents hiddenContents" >アイテム削除</button>

        <div id="newzone" class="newzone">
            @for( $i=0; $i<count($new); $i++ )
                <div class="new column imgParent" x="1000" y="{{ $i }}" id="row{{ $i }}column1000" draggable="false">
                    <img class="stickerImg touchable newImg" id="1000,{{ $i }}"

                        code="{{ $new[$i]['code'] }}"

                        number="{{ $new[$i]['number'] }}"

                        name="{{ $new[$i]['number'] }}"

                        src="{{asset('storage/img/'.$new[$i]['gazou'])}}"

                        x="1000" y="{{ $i }}"

                        onclick="openModal(event)"

                        draggable="false" onclick="openModal(event)" ondragstart="dragStarted(event)" ondragover="dragOver(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"

                    >
                </div>
            @endfor
        </div>
        <div id="searchContainer" class="newContents hiddenContents">
            <input id="word" type="text" placeholder="品番またはデザイン名を入力">
            <button id="searchBTN" value="検索">検索</button>
        </div>

        <div id="datalist" class="newContents hiddenContents">
        </div>

        <div id="deleteContainer" class="deleteContainer hidden" >
                <input id="delete" type="submit" value="削除" disabled="true">
        </div>

        <div id="coverNewModal" class="nocover">
        </div>

    </div>

    <div id="forReplace" class="forReplace">
        <div id="subzone" class="touchable" draggable="false" ondragstart="dragStarted(event)" ondragover="dragOver(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)">
        </div>
    </div>

    <div id="orderModal" class="orderModal">

    </div>

    @include('sheetModal')
    @include('calendar')

    <div id="coverPage" class="coverPage" onclick="closeModal(event)"></div>


    <script type="text/javascript" src="{{asset("js/loading.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/onload.js")}}" ></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/DnD/makeXYdata.js")}}" ></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/DnD/DnD.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/tab.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/DnD/touch.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/order/order.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/DnD/temporary.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/DnD/replace.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/newstickers/addNewStickers.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/newstickers/deleteNewStickers.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/order/calendar.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/order/ordersheet.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/closeModal.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/orderandreplace/order/rankModal.js")}}"></script>
</body>
</html>
