@extends('dashboard.main', [
    'headClas' => 'mainTools',
    'title' => 'SEO On-Page Tools',
    'classBody' => 'WayOnPage',
])
@section('asset')
<link rel="stylesheet" href="/css/keywordy.css">
@endsection
@section('content')
<div class="container-fluid">
    <section class="winbar col-md-12">
        <span class="caution base d-none">
            <span class="keyresx">&times;</span>
        </span>
    </section>
    <main id="on_page_seo" class="base">
        <div class="row">
            <form id="contenttemplate" autocomplete="off" class="col-md-7">
                <fieldset class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">
                            <i class="fa fa-fire pr-2" aria-hidden="true"></i>
                            SEO On-Page
                        </h4>
                    </div>
                    <div class="card-body">
                        <section class="superior row mt-3">
                            <div class="par col-md-6">
                                <input id="keyword1" class="key form-control"
                                    type="text" name="keyword1" placeholder="Keyword Utama"
                                    required="required" tabindex="1">
                            </div>
                            <div class="par col-md-6">
                                <input id="keyword2" class="key form-control"
                                    type="text" name="keyword2" placeholder="Keyword Turunan"
                                    required="required" tabindex="2"><br>
                            </div>
                        </section>
                        <section class="superior row">
                            <section class="subsection col-md-12">
                                <label class="listed text-dark" for="title">
                                    Judul<span class="text-danger pr-2 pl-1">*</span>
                                </label>
                                <span id="titlecount" class="counter" title="Character count, including spaces"></span><br>
                                <input id="title" class="basic form-control"
                                    type="text" name="title" minlength="55" maxlength="70"
                                    placeholder="Judul Artikel | SITE" required="required"
                                    oninput="previewSnippet()" tabindex="3">
                            </section>
                            <section class="subsection col-md-12 mt-4">
                                <label class="listed text-dark" for="uri" title="Uniform Resource Identifier">URI<span
                                        class="asterix pr-2 pl-1">*</span>
                                </label>
                                <span id="uricount" class="counter" title="Character count"></span><br>
                                <input id="uri" class="basic form-control" type="text" name="uri" maxlength="70"
                                    placeholder="format contoh termasuk kata kunci target" required="required"
                                    oninput="urlOptimize()" tabindex="4">
                            </section>
                            <section class="subsection col-md-12 mt-4">
                                <label class="listed text-dark" for="metadesc">Meta description
                                    <span class="asterix pr-2 pl-1">*</span>
                                </label>
                                <span id="metacount" class="counter" title="Jumlah karakter, termasuk spasi"></span><br>
                                <textarea id="metadesc" class="txtformat basic form-control" type="text" name="metadesc" data-stripe="number"
                                    rows="3" minlength="120" maxlength="190" placeholder="Deskripsi Artikel Disini..."
                                    required="required" oninput="previewSnippet()" tabindex="5"></textarea>
                            </section>
                            <section id="mobile" class="basic mt-3 mb-1 col-12">
                                <label class="prechange">
                                    <input id="switch" type="checkbox" name="switch">
                                    <span class="move bit"></span>
                                </label>
                            </section>
                            <div id="snippet" class="basic" style="display: block;">
                                <h6>Desktop</h6>
                                <div class="r_col">
                                    <div id="r_title">
                                        <h3><a id="snippettitle">Judul halaman ditampilkan di sini</a></h3>
                                    </div>
                                    <div class="_g">
                                        <div id="r_url">
                                            <cite id="snippeturi">https://sinet.id</cite>
                                        </div>
                                        <div id="r_metadesc">
                                            <p><span id="snippetdesc">Meta description ditampilkan di sini.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="mobile_snippet" class="basic" style="display: none;">
                                <h6>Mobile</h6>
                                <div class="mobile_frame">
                                    <div id="mobile-friendly">
                                        <div class="m_col">
                                            <a class="separator">
                                                <div id="m_url">
                                                    <img class="pr-2" width="30" src="/img/laravel.svg" alt="">
                                                    <cite id="mobileuri"> sinet.id</cite>
                                                </div>
                                                <div id="m_title">
                                                    <h3><span id="mobiletitle">Judul halaman ditampilkan di sini.</span></h3>
                                                </div>
                                            </a>
                                            <div id="m_metadesc" class="mt-1">
                                                <p><span id="mobiledesc">
                                                    Meta description ditampilkan di sini.</span>
                                                    <img src="/img/login.jpg" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="superior mt-3">
                            <section class="subsection">
                                <label class="listed text-dark" for="heading1">Main heading
                                <span class="asterix pr-2 pl-1">*</span>
                                </label>
                                <span id="headingcount" class="counter" title="Word count"></span><br>
                                <input id="heading1" class="basic form-control" type="text" name="heading1" placeholder="Judul halaman: <h1>"
                                    required="required" tabindex="6">
                            </section>
                            <section class="subsection mt-4">
                                <label class="listed text-dark" for="textbody text-dark">Body Artikel
                                    <span class="asterix pr-2 pl-1">*</span>
                                </label>
                                <span id="contentcount" class="counter" title="Word count"></span><br>
                                <textarea id="textbody" class="txtformat basic form-control"
                                    type="text" name="textbody" data-stripe="number"
                                    rows="3" minlength="300" placeholder="Paste Artikel text anda disini..." required
                                    tabindex="7"></textarea>
                            </section>
                        </section>
                        <section class="superior mt-3">
                            <div id="_seo" class="d-flex justify-content-between">
                                <button id="checkseo" class="btn btn-sm btn-success"
                                    onclick="gtag('event', 'check_seo', 'engagement', 'method', '1');" type="button"
                                    tabindex="8">Check SEO</button>
                                <a id="download-content" class="btn btn-sm btn-warning"
                                href="" onclick="download_on_page_csv()"
                                    download="on-page-seo_superkeywordy.csv">Download content</a>
                            </div>
                        </section>
                    </div>
                </fieldset>
            </form>
            <aside id="kw_analytics" class="col-md-5">
                <table id="_seoresults" class="card">
                    <caption class="card-header card-header-success">Analisis Keyword</caption>
                    <tbody class="card-body">
                        <tr>
                            <th class="stats bg-warning" colspan="3">Keyword Utama
                                <span class="info_icon tool1 tooltip">&#9432;
                                    <span class="tooltipinfo">Kata kunci utama adalah
                                        kata kunci atau subjek halaman yang luas.
                                    </span>
                                </span>
                                <span id="note-prime" class="note-it"></span>
                            </th>
                        </tr>
                        <tr>
                            <th class="statistics">Jumlah Keyword
                                <span class="info_icon tool1 tooltip">
                                    &#9432;<span class="tooltipinfo">Berapa kali kata kunci muncul sebagai berikut: judul, URI, deskripsi meta, judul utama, dan isi teks.
                                    </span>
                            </span>
                            </th>
                            <th class="statistics">Jumlah total kata<span class="info_icon tool1 tooltip">&#9432;<span
                                        class="tooltipinfo">Jumlah total kata berikut ini: judul, URI, deskripsi meta, judul
                                        utama dan isi teks.</span></span>
                            </th>
                            <th class="statistics">Kepadatan kata kunci <span class="info_icon tool1 tooltip">&#9432;<span
                                        class="tooltipinfo">% rate: berapa kali kata kunci utama muncul di semua 6
                                        bagian.</span></span>
                            </th>
                        </tr>
                        <tr>
                            <td id="tkcount" class="metrics"></td>
                            <td id="totalcount" class="metrics"></td>
                            <td id="tkdensity" class="metrics">%</td>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="3">Analisis bagian Head <span
                                    class="info_icon tool1 tooltip">&#9432;<span class="tooltipinfo">Menganalisis keberadaan
                                        kata kunci di tag bagian head.</span></span>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result1" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result2" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result3" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result4" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result5" class="resh"></span></td>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="3">Analisis Body-text<span
                                    class="info_icon tool1 tooltip">&#9432;<span class="tooltipinfo">Menganalisis keberadaan
                                        kata kunci dalam isi teks.</span></span>
                            </th>
                        </tr>
                        <tr>
                            <td id="pkfirst" colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="stats statistics bg-primary" colspan="3">Keyword Turnan
                                <span
                                    class="info_icon tool1 tooltip">&#9432;<span class="tooltipinfo">Kata kunci sekunder
                                        memodifikasi kata kunci utama, memperluas atau terkait dengannya.</span></span><span
                                    id="note-nonprime" class="note-it"></span>
                            </th>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="2">Jumlah Keyword</th>
                            <th class="statistics">Kepadatan Keyword <span class="info_icon tool1 tooltip">&#9432;<span
                                        class="tooltipinfo">% rate: berapa kali kata kunci sekunder muncul di semua 6
                                        bagian.</span></span></th>
                        </tr>
                        <tr>
                            <td id="tkcount2" class="metrics"></td>
                            <td id="totalcount2" class="metrics"></td>
                            <td id="tkdensity2" class="metrics">%</td>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="3">Analisis bagian Head</th>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result6" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result7" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result8" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result9" class="resh"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span id="result10" class="resh"></span></td>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="3">Analisis Body-text</th>
                        </tr>
                        <tr>
                            <td id="skfirst" colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="stats statistics bg-danger" colspan="3">Pencocokan<span
                                    id="exact-match" class="note-it"></span><br><small class="fact">Ketika kata kunci primer
                                    dan sekunder muncul bersamaan</small></th>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="2">Jumlah keyword</th>
                            <!-- <th>Total word count</th> -->
                            <th class="statistics">Kepadatan Keyword</th>
                        </tr>
                        <tr>
                            <td id="tkcount3" class="metrics"></td>
                            <td id="totalcount3" class="metrics"></td>
                            <td id="tkdensity3" class="metrics">%</td>
                        </tr>
                        <tr>
                            <th class="statistics" colspan="3">Analisis Body text</th>
                        </tr>
                        <tr>
                            <td id="trgfirst" colspan="3"></td>
                        </tr>
                        <tr>
                            <td id="bodywordcount" colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="stats statistics bg-success" colspan="3">20 kata teratas<br><small class="fact">20 kata yang
                                    paling sering muncul di judul utama dan isi teks</small></th>
                        </tr>
                        <tr>
                            <th class="statistics">Jumlah</th>
                            <th class="statistics">Kata</th>
                            <th class="statistics">Kepadatan</th>
                        </tr>
                        <tr>
                            <td id="freqCount" class="fact"></td>
                            <td id="topwords" class="fact"></td>
                            <td id="topwordDensity" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount1" class="fact"></td>
                            <td id="topwords1" class="fact"></td>
                            <td id="topwordDensity1" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount2" class="fact"></td>
                            <td id="topwords2" class="fact"></td>
                            <td id="topwordDensity2" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount3" class="fact"></td>
                            <td id="topwords3" class="fact"></td>
                            <td id="topwordDensity3" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount4" class="fact"></td>
                            <td id="topwords4" class="fact"></td>
                            <td id="topwordDensity4" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount5" class="fact"></td>
                            <td id="topwords5" class="fact"></td>
                            <td id="topwordDensity5" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount6" class="fact"></td>
                            <td id="topwords6" class="fact"></td>
                            <td id="topwordDensity6" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount7" class="fact"></td>
                            <td id="topwords7" class="fact"></td>
                            <td id="topwordDensity7" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount8" class="fact"></td>
                            <td id="topwords8" class="fact"></td>
                            <td id="topwordDensity8" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount9" class="fact"></td>
                            <td id="topwords9" class="fact"></td>
                            <td id="topwordDensity9" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount10" class="fact"></td>
                            <td id="topwords10" class="fact"></td>
                            <td id="topwordDensity10" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount11" class="fact"></td>
                            <td id="topwords11" class="fact"></td>
                            <td id="topwordDensity11" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount12" class="fact"></td>
                            <td id="topwords12" class="fact"></td>
                            <td id="topwordDensity12" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount13" class="fact"></td>
                            <td id="topwords13" class="fact"></td>
                            <td id="topwordDensity13" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount14" class="fact"></td>
                            <td id="topwords14" class="fact"></td>
                            <td id="topwordDensity14" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount15" class="fact"></td>
                            <td id="topwords15" class="fact"></td>
                            <td id="topwordDensity15" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount16" class="fact"></td>
                            <td id="topwords16" class="fact"></td>
                            <td id="topwordDensity16" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount17" class="fact"></td>
                            <td id="topwords17" class="fact"></td>
                            <td id="topwordDensity17" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount18" class="fact"></td>
                            <td id="topwords18" class="fact"></td>
                            <td id="topwordDensity18" class="fact"></td>
                        </tr>
                        <tr>
                            <td id="freqCount19" class="fact"></td>
                            <td id="topwords19" class="fact"></td>
                            <td id="topwordDensity19" class="fact"></td>
                        </tr>
                    </tbody>
                </table>
                <table id="table">
                </table>
            </aside>
            <div class="rules col-md-12 card">
                    <button class="drop">
                        Tips <span class="plus">&times;</span>
                    </button>
                <div class="guidelines">
                    <p><span class="asterix">*</span>&nbsp;Bidang yang harus diisi</p>
                    <ol>
                        <li><span class="subject">Target keyword</span><br>Kata kunci target adalah subjek utama
                            halaman. Ini adalah frasa pencocokan luas yang harus cocok dengan istilah penelusuran
                            populer/relevan.
                            <ul>
                                <li><strong>Harus unik</strong>, relatif terhadap situs web Anda.</li>
                                <li>Lakukan riset kata kunci untuk menentukan kata kunci target Anda.</li>
                            </ul>
                        </li>
                        <li><span class="subject">Title</span><br>Sertakan kata kunci target dalam judul; gunakan antara
                            55 dan 70 karakter (termasuk spasi).</li>
                        <li><span class="subject">URI</span><br>Sertakan kata kunci target di URI. URI peka huruf
                            besar/kecil; gunakan huruf kecil saja.
                            <ul>
                                <li>Bidang ini secara otomatis mengubah huruf besar menjadi huruf kecil dan spasi
                                    diganti dengan tanda hubung.</li>
                            </ul>
                        </li>
                        <li><span class="subject">Meta description</span><br>Sertakan kata kunci target dalam deskripsi
                            meta; gunakan antara 120 dan 190 karakter (termasuk spasi).</li>
                        <li><span class="subject">Main heading</span><br>Ini adalah
                            <pre>&lt;h1&gt;</pre> menandai. Sertakan kata kunci target di judul utama halaman, hanya
                            sekali. Jaga agar judul tetap pendek dan ringkas.</li>
                        <li><span class="subject">Body text</span><br>Sertakan kata kunci target dalam teks isi, yaitu
                            konten utama halaman.
                            <ul>
                                <li>Tidak ada panjang konten yang optimal. Bandingkan jumlah kata dengan konten pesaing
                                    Anda. Kualitas adalah <em>kunci</em>, bukan kuantitas!</li>
                                <li>Jika Anda <strong>kepadatan kata kunci</strong> lebih dari 2.5%, pertimbangkan untuk
                                    menguranginya; hindari <strong>penjejalan kata kunci</strong>!
                                    <ul>
                                        <li>Kepadatan kata kunci adalah tingkat kemunculan kata kunci di halaman<br><br>
                                            <pre>% Rate = jumlah kata kunci / panjang konten</pre>
                                        </li>
                                    </ul>
                                </li>
                                <li><strong>Segmen pertama</strong>: 200 pertama <em>posisi karakter</em> dalam satu
                                    baris, mulai dari nol.
                                    <ul>
                                        <li>Segmen pertama biasanya kalimat pertama dari teks isi.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/seo/keywordy.js"></script>
    <div id="warning" class="modal">
        <section class="mode">
            <div class="titlebar">
                <span class="close cross">&times;</span>
                <h3 class="modalhead">Penting!</h3>
            </div>
            <p>Masukkan judul untuk memulai analisis SEO di halaman.</p>
        </section>
    </div>
    <div id="progbar" class="modal">
        <div id="spinloader">
        </div>
    </div>
</div>
@endsection