@extends('dashboard.main', [
    'title' => 'Tools Menulis Ulang Artikel English'
])
@section('asset')
<script src="/js/trans.js"></script>
<script>
    async function getInputValue() {
        let languageList = ["sq", "am", "ar", "zh", "da", "gu", "hy", "id", "it", "ja", "ko", "la", "ms", "ne", "pa", "sq", "ta", "te", "zh", "ur",]
        let inputString = document.getElementById("input-string").value;

        for (let i = languageList.length - 1; i > 0; i--) {
            const randomNum = Math.floor(Math.random() * i)
            const temp = languageList[i]
            languageList[i] = languageList[randomNum]
            languageList[randomNum] = temp
        }

        languageList[0] = `en`
        languageList[5] = `en`
        languageList[10] = `en`
        languageList[15] = `en`
        paraphraseControler(inputString, languageList)
    }
    async function paraphraseControler(string, lang) {
        let paraphrase = string
        showParaphrase(0, 5, 1)
        showParaphrase(5, 10, 2)
        showParaphrase(10, 15, 3)
        async function showParaphrase(start, end, option) {
            for (let i = start; i < end; i++) {
                const api_url = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=${lang[i]}&tl=${lang[i + 1]}&dt=t&q=${paraphrase}`;
                const response = await fetch(api_url);
                let data = await response.json();
                let strOutput = [];
                if (data) {
                    data && data[0].map((item) => {
                        item[0].length > 0 && strOutput.push(item[0]);
                    })
                }
                strOutput = strOutput.toString();
                paraphrase = strOutput.replace(/['",]+/g, '')
                if (i == end - 1) {
                    let inputWords = document.getElementById("input-string").value.toLowerCase().replace(/ \s*/g, " ").split(" ")
                    document.getElementById(`total-input-words-${option}`).innerText = inputWords.length;
                    let differentWordCount = 0;
                    paraphrase.split(" ").forEach(word => {
                        if (inputWords.indexOf(word.toLowerCase()) < 0) {
                            differentWordCount++
                        }
                    })
                    document.getElementById(`total-different-${option}`).innerText = differentWordCount;
                    document.getElementById(`paraphrase-output-${option}`).innerText = paraphrase;
                    document.getElementById(`tooltip-${option}`).title = `${differentWordCount} out of ${inputWords.length} words are different from input words`;

                }
            }
        }
    }
    function clipboardHandler(id) {
        let copyTextarea = document.getElementById(id);
        copyTextarea.focus();
        copyTextarea.select();
        try {
            document.execCommand('copy');
        } catch (err) {
            console.log('Oops, unable to copy');
        }
    };
</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h4 class="card-title ">Write EN</h4>
                </div>
                <div class="card-body">
                    <textarea
                    placeholder="Paste artikel disini!!!" id="input-string"
                    class="form-control input-string" rows="18" autofocus></textarea>
                    <button onclick="getInputValue();" type="button" class="btn btn-warning mt-3">
                        <i class="fa fa-fire" aria-hidden="true"></i> Magic!
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            {{-- output 1 --}}
            <div class="card">
                <div class="card-body">
                    <textarea
                    placeholder="Output 1" id="paraphrase-output-1"
                    class="form-control paraphrase-output" rows="3"></textarea>
                    <div class="d-flex justify-content-between">
                        <button onclick="clipboardHandler('paraphrase-output-1')" type="button"
                        class="btn btn-sm btn-success">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <p class="float-right m-0 p-0 pr-3" id="tooltip-1" data-toggle="tooltip"
                            data-placement="top" title="x out of y words are different from input">
                            <small id="total-different-1">0</small> / <small id="total-input-words-1">0</small>
                        </p>
                    </div>
                </div>
            </div>

            {{-- output 2 --}}
            <div class="card">
                <div class="card-body">
                    <textarea
                    placeholder="Output 2" id="paraphrase-output-2"
                    class="form-control paraphrase-output" rows="3"></textarea>
                    <div class="d-flex justify-content-between">
                        <button onclick="clipboardHandler('paraphrase-output-2')" type="button"
                        class="btn btn-sm btn-success">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <p class="float-right m-0 p-0 pr-3" id="tooltip-2" data-toggle="tooltip"
                            data-placement="top" title="x out of y words are different from input">
                            <small id="total-different-2">0</small> / <small id="total-input-words-2">0</small>
                        </p>
                    </div>
                </div>
            </div>

            {{-- output 3 --}}
            <div class="card">
                <div class="card-body">
                    <textarea
                    placeholder="Output 3" id="paraphrase-output-3"
                    class="form-control paraphrase-output" rows="3"></textarea>
                    <div class="d-flex justify-content-between">
                        <button onclick="clipboardHandler('paraphrase-output-3')" type="button"
                        class="btn btn-sm btn-success">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <p class="float-right m-0 p-0 pr-3" id="tooltip-3" data-toggle="tooltip"
                            data-placement="top" title="x out of y words are different from input">
                            <small id="total-different-3">0</small> / <small id="total-input-words-3">0</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scr')
<script src="/js/jquery.min.js"></script>
@endsection