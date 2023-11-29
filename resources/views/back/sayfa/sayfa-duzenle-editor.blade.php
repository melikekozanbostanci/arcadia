<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>

    <link href="{{asset("grapes-js/grapes.min.css")}}" rel="stylesheet">
    <script src="{{asset("grapes-js/grapes.min.js")}}"></script>
    <style>
        body,
        html {
            height: calc(100% - 25px);
            margin: 0;
        }
    </style>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    * {
        font-family: 'Roboto', sans-serif!important;
    }
</style>
<body>

<div class="panel__top">
    <div style="display: flex; width: 100%!important;">
        <div style="width:33%; display: flex; justify-content: start!important; align-items: center!important; padding: 0 5px!important;">
            <a href="{{ route("admin.sayfalar") }}" class="btnSave" style="text-decoration: none; background-color: #0a7ea4!important;">Vazgeç</a>
            <button onclick="saveDB()" class="btnSave px-5">Kaydet</button>
            <button onclick="saveAndPreview()" class="btnSave px-5">Kaydet ve Önizle</button>
        </div>
        <div style="width:33%; display: flex; justify-content: center!important; align-items: center!important; padding: 0 5px!important;">
            <h5 style="color: #fff"></h5>
        </div>
        <div style="width:33%; display: flex; justify-content: end!important; align-items: center!important; padding: 0 5px!important;">
            <h5 style="color: #fff">Sayfa Düzenle - {{$sayfa->baslik}}</h5>
        </div>
    </div>
</div>

<div id="gjs">{!! $sayfa->editor_icerik !!}</div>

<script type="text/javascript">
    function getTemplateContent(filePath) {
        return fetch(filePath)
            .then(response => response.text())
            .then(data => data);
    }

    async function grapesjsFooter1(editor) {
        const filePath = '{{asset("grapes-js/templates/footers/index.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('footer1', {
            label: 'Footer 1',
            category: 'Footer',
            media: `<img src="{{asset("grapes-js/templates/icons/footer.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsFooter2(editor) {
        const filePath = '{{asset("grapes-js/templates/footers/index2.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('footer2', {
            label: 'Footer 2',
            category: 'Footer',
            media: `<img src="{{asset("grapes-js/templates/icons/footer.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsFooter3(editor) {
        const filePath = '{{asset("grapes-js/templates/footers/index3.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('footer3', {
            label: 'Footer 3',
            category: 'Footer',
            media: `<img src="{{asset("grapes-js/templates/icons/footer.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsFooter4(editor) {
        const filePath = '{{asset("grapes-js/templates/footers/index4.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('footer4', {
            label: 'Footer 4',
            category: 'Footer',
            media: `<img src="{{asset("grapes-js/templates/icons/footer.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsCarousel(editor) {
        const filePath = '{{asset("grapes-js/templates/carousel/index.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('carousel', {
            label: 'Featurette',
            category: 'Diğer',
            media: `<img src="{{asset("grapes-js/templates/icons/grids.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsFeaturette(editor) {
        const filePath = '{{asset("grapes-js/templates/carousel/index2.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('featurette', {
            label: 'Slayt',
            category: 'Diğer',
            media: `<img src="{{asset("grapes-js/templates/icons/slider.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }

    async function grapesjsNavbar1(editor) {
        const filePath = '{{asset("grapes-js/templates/navbars/index.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('navbar1', {
            label: 'Navbar',
            category: 'Diğer',
            media: `<img src="{{asset("grapes-js/templates/icons/navbar.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }


    async function grapesjsBlog3(editor) {
        const filePath = '{{asset("grapes-js/templates/blog/blog-3.html")}}'; // Dosya yolunu belirleyin
        const templateContent = await getTemplateContent(filePath);
        editor.Blocks.add('blog3', {
            label: 'Blog',
            category: 'Hazır Bloklar',
            media: `<img src="{{asset("grapes-js/templates/icons/navbar.svg")}}" style="height:48px" />`,
            content: templateContent,
        });
    }


    function saveDB() {
        var icerik = editor.getHtml();
        var css = editor.getCss();
        var id = {{$sayfa->id}};
        var data = {
            icerik: icerik,
            css: css,
            id: id,
            _token: "{{csrf_token()}}"
        };
        $.ajax({
            type: "PUT",
            url: "{{route("admin.sayfa-guncelle",$sayfa->uuid)}}",
            data: data,
            success: function (response) {
                console.log(response);
                toastr.success('Sayfa güncellendi.');
            }
        });
    }


    function saveAndPreview() {
        var icerik = editor.getHtml();
        var css = editor.getCss();
        var id = 1;
        var data = {
            icerik: icerik,
            css: css,
            id: id,
            _token: "{{csrf_token()}}"
        };
        $.ajax({
            type: "PUT",
            url: "{{route("admin.sayfa-guncelle",$sayfa->uuid)}}",
            data: data,
            success: function (response) {
                toastr.success('Sayfa güncellendi.');
                window.open("{{route("sayfa",$sayfa->slug)}}", "_blank");
            }
        });
    }


</script>
<style>
    #gjs {
        border: none;
    }

    .panel__top {
        padding: 0;
        width: 100%;
        display: flex;
        position: initial;
        justify-content: space-between;
        height: 50px;
        background-color: #d0d0d0;
    }

    .panel__basic-actions {
        position: initial;
    }

    /* Theming */

    /* Primary color for the background */
    .panel__top {
        background-color: #2c3e50;
    }

    .gjs-one-bg {
        background-color: #2c3e50 !important;
    }

    .btnSave {
        background-color: #4c6985 !important;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        margin: 5px;
        cursor: pointer;
    }

    /* Secondary color for the text color */
    .gjs-two-color {
        color: rgba(255, 255, 255, 0.7);
    }

    /* Tertiary color for the background */
    .gjs-three-bg {
        background-color: #ec5896;
        color: white;
    }

    /* Quaternary color for the text color */
    .gjs-four-color,
    .gjs-four-color-h:hover {
        color: #fff;
    }

    .gjs-pn-views-container {
        height: 100%;
        padding: 42px 0 0;
        left: 0;
        width: 15%;
        overflow: auto;
        box-shadow: 0 0 5px rgba(0, 0, 0, .2);
    }

    .gjs-pn-views {
        left: 0 !important;
    }

    .gjs-pn-commands {
        left: 0 !important;
        right: 0 !important;
        top: 0 !important;
    }

    .gjs-pn-options {
        right: 0;
        top: 0;
    }

    .gjs-cv-canvas {
        box-sizing: border-box;
        width: 85%;
        height: calc(100% - 40px);
        bottom: 0;
        overflow: hidden;
        z-index: 1;
        position: absolute;
        right: 0 !important;
        top: 40px;
    }


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset("grapes-js/grapesjs-preset-webpage.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-blocks-basic.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-plugin-forms.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-component-countdown.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-plugin-export.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-tabs.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-custom-code.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-touch.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-parser-postcss.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-tui-image-editor.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-typed.js")}}"></script>
<script src="{{asset("grapes-js/grapesjs-style-bg.js")}}"></script>

<script>
    $(document).ready(function () {
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': false,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }
    });
    window.onload = () => {
        window.editor = grapesjs.init({
            height: '100%',
            showOffsets: true,
            noticeOnUnload: false,
            storageManager: false,
            container: '#gjs',
            fromElement: true,

            plugins: [
                'gjs-blocks-basic',
                // 'grapesjs-plugin-forms',
                'grapesjs-component-countdown',
                'grapesjs-plugin-export',
                'grapesjs-tabs',
                'grapesjs-custom-code',
                'grapesjs-touch',
                'grapesjs-parser-postcss',
                'grapesjs-tui-image-editor',
                'grapesjs-typed',
                'grapesjs-style-bg',
                'grapesjs-preset-webpage',
                'grapesjsContainer',
                'grapesjsFooter1',
                'grapesjsFooter2',
                'grapesjsFooter3',
                'grapesjsFooter4',
                'grapesjsCarousel',
                'grapesjsFeaturette',
                'grapesjsNavbar1',
                'grapesjsBlog3',
            ],
            pluginsOpts: {
                'gjs-blocks-basic': {flexGrid: true},
                'grapesjs-tui-image-editor': {
                    script: [
                        // 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
                        'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
                        'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
                        'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
                    ],
                    style: [
                        'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
                        'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
                    ],
                },
                'grapesjs-tabs': {
                    tabsBlock: {category: 'Extra'}
                },
                'grapesjs-typed': {
                    block: {
                        category: 'Extra',
                        content: {
                            type: 'typed',
                            'type-speed': 40,
                            strings: [
                                'Text row one',
                                'Text row two',
                                'Text row three',
                            ],
                        }
                    }
                },
            },

        });

        editor.I18n.addMessages({
            en: { // indicate the locale to update
                assetManager: {
                    addButton: 'Görsel Ekle',
                    modalTitle: 'Görsel Seçin',
                    uploadTitle: 'Dosya yüklemek için buraya sürükleyin veya tıklayın',
                },
                deviceManager: {
                    device: 'Cihaz',
                    devices: {
                        desktop: 'Masaüstü',
                        tablet: 'Tablet',
                        mobileLandscape: 'Mobil Yatay',
                        mobilePortrait: 'Mobil Dikey',
                    },
                },
                panels: {
                    buttons: {
                        titles: {
                            preview: 'Önizleme',
                            fullscreen: 'Tam Ekran',
                            'sw-visibility': 'Bileşenleri Göster',
                            'export-template': 'Kodu Göster',
                            'open-sm': 'Stil Düzenleyiciyi Aç',
                            'open-tm': 'Ayarlar',
                            'open-layers': 'Katmanlar',
                            'open-blocks': 'Bloklar',
                        },
                    },
                },
                selectorManager: {
                    selected: 'Seçili',
                    emptyState: '- DURUM -',
                    label: 'Sınıflar',
                },
                styleManager: {
                    empty: 'Stilini düzenlemek istediğiniz öğeyi seçiniz',
                    layer: 'Katman',
                    sectors: {
                        general: 'Genel',
                        layout: 'Düzen',
                        typography: 'Tipografi',
                        decorations: 'Dekorasyon',
                        extra: 'Ekstra',
                        flex: 'Flex',
                        dimension: 'Boyut',
                    },
                    properties: {
                        float: 'Kaydır',
                        display: 'Görünüm',
                        position: 'Pozisyon',
                        top: 'Üst',
                        right: 'Sağ',
                        left: 'Sol',
                        bottom: 'Alt',
                        width: 'Genişlik',
                        height: 'Yükseklik',
                        'max-width': 'Maks. Genişlik',
                        'max-height': 'Maks. Yükseklik',
                        margin: 'Margin',
                        'margin-top': 'Margin Üst',
                        'margin-right': 'Margin Sağ',
                        'margin-left': 'Margin Sol',
                        'margin-bottom': 'Margin Alt',
                        padding: 'Padding',
                        'padding-top': 'Padding Üst',
                        'padding-left': 'Padding Sol',
                        'padding-right': 'Padding Sağ',
                        'padding-bottom': 'Padding Alt',
                        'font-family': 'Font Tipi',
                        'font-size': 'Font Boyutu',
                        'font-weight': 'Font Kalınlığı',
                        'letter-spacing': 'Harf Boşluğu',
                        color: 'Renk',
                        'line-height': 'Satır Boşluğu',
                        'text-align': 'Yazı Hizalaması',
                        'text-shadow': 'Yazı Gölgesi',
                        'text-shadow-h': 'Yazı Gölgesi - Yatay',
                        'text-shadow-v': 'Yazı Gölgesi - Dikey',
                        'text-shadow-blur': 'Yazı Gölgesi Bulanıklığı',
                        'text-shadow-color': 'Yazı Gölgesi Rengi',
                        'border-top-left': 'Kenar Üst Sol',
                        'border-top-right': 'Kenar Üst Sağ',
                        'border-bottom-left': 'Kenar Alt Sol',
                        'border-bottom-right': 'Kenar Alt Sağ',
                        'border-radius-top-left': 'Köşe Yumuşuması Üst Sol',
                        'border-radius-top-right': 'Köşe Yumuşuması Üst Sağ',
                        'border-radius-bottom-left': 'Köşe Yumuşuması Alt Sol',
                        'border-radius-bottom-right': 'Köşe Yumuşuması Alt Sağ',
                        'border-radius': 'Köşe Yumuşaması',
                        border: 'Kenar',
                        'border-width': 'Kenar Kalınlığı',
                        'border-style': 'Kenar Stili',
                        'border-color': 'Kenar Rengi',
                        'box-shadow': 'Kutu Gölgesi',
                        'box-shadow-h': 'Kutu Gölgesi - Yatay',
                        'box-shadow-v': 'Kutu Gölgesi - Dikey',
                        'box-shadow-blur': 'Kutu Gölgesi Bulanıklığı',
                        'box-shadow-spread': 'Kutu Gölgesi Dağılımı',
                        'box-shadow-color': 'Kutu Gölgesi Rengi',
                        'box-shadow-type': 'Kutu Gölgesi Tipi',
                        background: 'Arkaplan',
                        'background-image': 'Arkaplan Resmi',
                        'background-repeat': 'Arkaplan Tekrarı',
                        'background-position': 'Arkaplan Pozisyonu',
                        'background-attachment': 'Arkaplan Eklentisi',
                        'background-size': 'Arkaplan Boyutu',
                        transition: 'Geçiş',
                        'transition-property': 'Geçiş Özelliği',
                        'transition-duration': 'Geçiş Süresi',
                        'transition-timing-function': 'Geçiş Zamanlaması Metodu',
                        perspective: 'Perspektif',
                        transform: 'Boyutlama',
                        'transform-rotate-x': 'Yatay Yönlendirme',
                        'transform-rotate-y': 'Dikey Yönlendirme',
                        'transform-rotate-z': 'Hacimsel Yönlendirme',
                        'transform-scale-x': 'Dikey Oran',
                        'transform-scale-y': 'Yatay Oran',
                        'transform-scale-z': 'Hacimsel Oran',
                        'flex-direction': 'Flex Yönü',
                        'flex-wrap': 'Flex Kesme',
                        'justify-content': 'İçeriği Sığdır',
                        'align-items': 'Öğeleri Hizala',
                        'align-content': 'İçeriği Hizala',
                        order: 'Sıra',
                        'flex-basis': 'Flex Bazı',
                        'flex-grow': 'Flex Büyüme',
                        'flex-shrink': 'Flex Küçülme',
                        'align-self': 'Kendini Hizala',
                        'background-color': 'Arkaplan Rengi',
                    },
                },
                traitManager: {
                    empty: 'Özelliklerini düzenlemek istediğiniz öğeyi seçiniz',
                    label: 'Bileşen Özellikleri',
                    traits: {
                        labels: {},
                        attributes: {},
                        options: {},
                    },
                },
            }
        });


    }
</script>
</body>
</html>
