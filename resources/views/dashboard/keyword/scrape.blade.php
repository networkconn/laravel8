@extends('dashboard.main', [
    'title' => 'Tools Scraping Keyword',
    'classBody' => 'BacokDallas',
    'headClas' => 'wp-toolbar',
])
@section('asset')
<script src='/js/scrape/load-scripts.js'></script>
<script src='/js/scrape/jquery.gcomplete.0.1.2.js'></script>
<script src='/js/scrape/rbkeyword_main.js'></script>
<link rel="stylesheet" href="/css/custom.css">
@endsection

@section('content')
<div id="wpwrap" class="container-fluid">
    <div id="wpcontent">
        <div id="wpbody" role="main">
            <div id="wpbody-content">
                <div class="wrap row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">
                                    <i class="fa fa-ravelry pr-2" aria-hidden="true"></i>
                                    Keyword Scraper
                                </h4>
                            </div>
                            <div class="card-body">
                                <h5 class="text-monospace mt-5 pl-3">
                                    <i class="fa fa-lightbulb-o text-warning" aria-hidden="true"></i>
                                    <strong>Tips:</strong>
                                    Silahkan pilih Negara target keyword terlebih dahulu, lalu kemuadia masukkan kwyword pada kolom kedua, dan Klick Search!
                                </h5>
                                <form class="mt-5">
                                    <select name="google" class="form-control pl-3">
                                        <option value="google.co.id" selected>Pilih Negara Target</option>
                                        <option value="google.com">United States</option>
                                        <option value="google.com.af">Afghanistan</option>
                                        <option value="google.com.ag">Antigua</option>
                                        <option value="google.com.au">Australia</option>
                                        <option value="google.at">Austria</option>
                                        <option value="google.bs">Bahamas</option>
                                        <option value="google.be">Belgium</option>
                                        <option value="google.bt">Bhutan</option>
                                        <option value="google.com.bo">Bolivia</option>
                                        <option value="google.com.br">Brazil</option>
                                        <option value="google.com.kh">Cambodia</option>
                                        <option value="google.ca">Canada</option>
                                        <option value="google.cl">Chile</option>
                                        <option value="google.cn">China</option>
                                        <option value="google.com.co">Colombia</option>
                                        <option value="google.co.cr">Costa Rica</option>
                                        <option value="google.cz">Czech Republic</option>
                                        <option value="google.dk">Denmark</option>
                                        <option value="google.com.eg">Egypt</option>
                                        <option value="google.fi">Finland</option>
                                        <option value="google.fr">France</option>
                                        <option value="google.de">Germany</option>
                                        <option value="google.com.gh">Ghana</option>
                                        <option value="google.com.hk">Hong Kong</option>
                                        <option value="google.co.in">India</option>
                                        <option value="google.co.id">Indonesia</option>
                                        <option value="google.it">Italy</option>
                                        <option value="google.co.jp">Japan</option>
                                        <option value="google.co.ke">Kenya</option>
                                        <option value="google.com.my">Malaysia</option>
                                        <option value="google.com.mx">Mexico</option>
                                        <option value="google.nl">Netherlands</option>
                                        <option value="google.co.nz">New Zealand</option>
                                        <option value="google.com.pe">Peru</option>
                                        <option value="google.com.ph">Philippines</option>
                                        <option value="google.pl">Poland</option>
                                        <option value="google.ru">Russia</option>
                                        <option value="google.com.sg">Singapore</option>
                                        <option value="google.co.za">South Africa</option>
                                        <option value="google.es">Spain</option>
                                        <option value="google.ch">Switzerland</option>
                                        <option value="google.se">Sweden</option>
                                        <option value="google.co.th">Thailand</option>
                                        <option value="google.com.tr">Turkey</option>
                                        <option value="google.co.uk">United Kingdom</option>
                                        <option value="google.co.uy">Uruguay</option>
                                        <option value="google.co.ve">Venezuela</option>
                                    </select>
                                </form>
                                <div class="rbkeytable mt-4">
                                    <input type="text" value="" autocomplete="off"
                                        placeholder="Keyword..." size="14"
                                        class="form-control pl-3 newtag form-input-tip"
                                        id="rbkeyword_search_txt">
                                    <div class="d-flex justify-content-between mt-4 mb-3">
                                        <button type="button" tabindex="3"
                                            class="button btn btn-sm btn-success" id="rbkeyword_more">
                                            <i class="fa fa-search pr-2" aria-hidden="true"></i>
                                            Search
                                        </button>
                                        <button type="button" tabindex="3"
                                            class="button tagadd btn btn-sm btn-danger" id="rbkeyword_clean">
                                            <i class="fa fa-trash pr-2" aria-hidden="true"></i>
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <p class="card-title">
                                    <i class="fa fa-coffee pr-2" aria-hidden="true"></i>
                                    Result: <span class="rbkeyword_count"></span>
                                </p>
                            </div>
                            <div class="rbkeytable card-body">
                                <div id="rbkeyword_body">
                                    <div id="rbkeyword_keywords" class="wp-tab-panel"></div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div class="rbkeywordcheckbox">
                                            <label>
                                                <input type="checkbox" id="rbkeyword_check" value="s">
                                                <small class="text-warning">Select All</small>
                                            </label>
                                        </div>
                                        <button type="button"
                                            class="button btn btn-sm btn-success" id="rbkeyword_list_btn">
                                            List All
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .wp-tab-panel{
                                    max-height: 270px;
                                    height: 270px;
                                    overflow-y: scroll;
                                }
                            </style>
                        </div>
                        <div id="rbkeyword-list-wrap">
                            <textarea style="width:100%;height: 100%;" id="rbkeyword-list"></textarea>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var rbkeyword_google = '';
                    var rbkeyword_letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n",
                        "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
                    ];
                </script>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scr')
<script src='/js/scrape/common.min.js'></script>
<script src='/js/scrape/core.min.js'></script>
<script src='/js/scrape/checkboxradio.min.js'></script>
<script src='/js/scrape/dialog.min.js'></script>
@endsection