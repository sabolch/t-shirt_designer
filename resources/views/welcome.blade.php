<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Футболки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/casual-t-shirt-.png" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]>
    <script type="text/javascript" src="{{ asset('js/excanvas.js')}}"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/fabric.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/tshirtEditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.miniColors.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/html5.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/loading.js')}}"></script>
    <script type="text/javascript"
            src="https://cdn.rawgit.com/eligrey/FileSaver.js/5733e40e5af936eb3f48554cf6a8a7075d71d18a/FileSaver.js"></script>
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.miniColors.css')}}"/>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href=" {{ asset('css/loader.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <script type="text/javascript">
    </script>
    <style type="text/css">
        .footer {
            padding: 70px 0;
            margin-top: 70px;
            border-top: 1px solid #E5E5E5;
            background-color: whiteSmoke;
        }

        body {
            padding-top: 60px;
        }

        .color-preview {
            border: 1px solid #CCC;
            margin: 2px;
            zoom: 1;
            vertical-align: top;
            display: inline-block;
            cursor: pointer;
            overflow: hidden;
            width: 20px;
            height: 20px;
        }

        .rotate {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
            -ms-transform: rotate(90deg);
        }

        .Arial {
            font-family: "Arial";
        }

        .Helvetica {
            font-family: "Helvetica";
        }

        .MyriadPro {
            font-family: "Myriad Pro";
        }

        .Delicious {
            font-family: "Delicious";
        }

        .Verdana {
            font-family: "Verdana";
        }

        .Georgia {
            font-family: "Georgia";
        }

        .Courier {
            font-family: "Courier";
        }

        .ComicSansMS {
            font-family: "Comic Sans MS";
        }

        .Impact {
            font-family: "Impact";
        }

        .Monaco {
            font-family: "Monaco";
        }

        .Optima {
            font-family: "Optima";
        }

        .HoeflerText {
            font-family: "Hoefler Text";
        }

        .Plaster {
            font-family: "Plaster";
        }

        .Engagement {
            font-family: "Engagement";
        }

        .img-polaroid {
            padding: 0;
            margin: 0;
            border: 2px solid transparent;
            max-height: 92px;
            max-width: 92px;
            min-height: 92px;
            min-width: 92px;

        }

        .img-polaroid:hover {
            cursor: pointer;
            border-color: #00a5f7;
        }

        .tt {
            margin-right: 4px;
        }
    </style>
</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">

<!-- Navbar
  ================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ route('home') }}">Спеціальна футболка</a>

        </div>
    </div>
</div>

<div class="container">
    <section id="typography">
        <div class="page-header">
            <h1>Налаштуйте футболку</h1>
        </div>

        <!-- Headings & Paragraph Copy -->
        <div class="row">
            <div class="span3">

                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Параметри футболки</a></li>
                        <li><a href="#tab2" data-toggle="tab">Граватар</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="well">
                                <p style="font-family: 'Telex',sans-serif;font-weight: bold;line-height: 1;color: #317eac;text-rendering: optimizelegibility;">
                                    Стиль футболки</p>
                                <select id="shirtstyle" class="form-control">
                                    <option value="crew" selected="selected">Короткі рукавички</option>
                                    <option value="womens_crew">Жіноча футболка</option>
                                    <option value="mens_longsleeve">З довгим рукавички</option>
                                    <option value="mens_hoodie">Худі</option>
                                    <option value="mens_tank">Майки</option>
                                </select>
                                <!--						      </p>-->
                            </div>
                            <div class="well">
                                <p style="font-family: 'Telex',sans-serif;font-weight: bold;line-height: 1;color: #317eac;text-rendering: optimizelegibility;">
                                    Дія</p>
                                <button  id="imgsavejpg" class="btn btn-primary" title="Зберегти як зображення"><i style="font-size: 25px;"
                                                                                        class="fa fa-camera"
                                                                                        aria-hidden="true"></i></button>
                                <button  id="imgsavepdf" class="btn btn-primary" title="Зберегти як PDF"><i style="font-size: 25px;"
                                                                                                                   class="fa fa-file-pdf-o"
                                                                                                                   aria-hidden="true"></i></button>
                                <button id="rotate" title="Повернути" class="btn btn-primary"><i style="font-size: 25px;"
                                                                               class="fa fa-repeat"
                                                                               aria-hidden="true"></i></button>                                <button  class="btn btn-primary" onclick="location.reload();" title="Видалити все"><i style="font-size: 25px;"
                                                                               class="fa fa-trash"
                                                                               aria-hidden="true"></i></button>

                            </div>

                            <div class="well">
                                <ul class="nav">
                                    <h3>Виберіть колір</h3>
                                    @foreach($colors as $color)
                                    <li class="color-preview" title="{{$color->name}}" style="background-color:{{$color->color}};"></li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="well">
                                <h4>Текст</h4>
                                <div class="input-append">
                                    <input class="span2" id="text-string" type="text"
                                           placeholder="Додати текст тут ...">
                                    <button id="add-text" class="btn" title="Додати"><i class="icon-share-alt"></i>
                                    </button>
                                    <hr>
                                </div>
                                <h4>Додати зображення
                                    <form hidden id="form1" runat="server">
                                        <input hidden type='file' id="imgInp" />
                                    </form>
                                    <button id="addimg" class="btn btn-primary"><i style="font-size: 15px;"
                                                                                   class="fa fa-plus"
                                                                                   aria-hidden="true"></i></button>
                                </h4>

                                <div id="avatarlist" style="max-height: 500px; overflow: scroll;">
                                    @foreach($images as $image)
                                        <img class="img-polaroid tt" src="img/templates/{{$image}}">
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div align="center" style="min-height: 32px;">
                    <div class="clearfix">
                        <div class="btn-group inline pull-left" id="texteditor" style="display:none">
                            <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown"
                                    title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                                <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad
                                        Pro</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic
                                        Sans MS</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler
                                        Text</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a>
                                </li>
                            </ul>
                            <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png"
                                                                                               height="" width="">
                            </button>
                            <button id="text-italic" class="btn" data-original-title="Italic"><img
                                        src="img/font_italic.png" height="" width=""></button>
                            <button id="text-strike" class="btn" title="Strike" style=""><img
                                        src="img/font_strikethrough.png" height="" width=""></button>
                            <button id="text-underline" class="btn" title="Underline" style=""><img
                                        src="img/font_underline.png"></button>
                            <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input
                                        type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                            <a class="btn" href="#" rel="tooltip" data-placement="top"
                               data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor"
                                                                              class="color-picker" size="7"
                                                                              value="#000000"></a>
                            <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                        </div>
                        <div class="pull-right" align="" id="imageeditor" style="display:none">
                            <div class="btn-group">
                                <button class="btn" id="bring-to-front" title="Bring to Front"><i
                                            class="icon-fast-backward rotate" style="height:19px;"></i></button>
                                <button class="btn" id="send-to-back" title="Send to Back"><i
                                            class="icon-fast-forward rotate" style="height:19px;"></i></button>
                                <button id="flip" type="button" class="btn" title="Show Back View"><i
                                            class="icon-retweet" style="height:19px;"></i></button>
                                <button id="remove-selected" class="btn" title="Delete selected item"><i
                                            class="icon-trash" style="height:19px;"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--	EDITOR      -->
                <div id="shirtDiv" class="page"
                     style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
                    <!--img id="tshirtFacing" src="img/crew_front.png"></img-->
                    <img id="tshirtFacing" src="img/t-shirts/crew_front.png"></img>

                    <div id="drawingArea"
                         style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">
                        <canvas id="tcanvas" width=200 height="400" class="hover"
                                style="-webkit-user-select: none;"></canvas>
                    </div>
                </div>

            </div>

            <div class="span3">
                <div class="well">
                    <h3>Загальна ціна</h3>
                    <p>
                    <table class="table">
                        <tr>
                            <td>Футболка</td>
                            <td align="right">$300</td>
                        </tr>
                        <tr>
                            <td>Дизайн</td>
                            <td align="right">$100</td>
                        </tr>

                        <tr>
                            <td><strong>Всього</strong></td>
                            <td align="right"><strong>$400</strong></td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
        <div id="editor"></div>
    </section>
</div><!-- /container -->


<!-- Footer ================================================== -->
<footer class="footer">
    <div id="test" style="width: 100%; text-align: center; margin-top: 10px;"></div>
    <div class="container">
        <p class="pull-right"><a href="#">Догори</a></p>
    </div>

</footer>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35639689-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    $(document).ready(function () {

/*******************************************************************************/
function getContentImage() {
    html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
        // document.body.appendChild(canvas)
        $(canvas).get(0).toBlob(function (blob) {
        var urlCreator = window.URL || window.webkitURL;
        var imageUrl = urlCreator.createObjectURL(blob);
        $('#test').append('<img src="' + imageUrl + '"><br>');

    });
});
}

function LoadeShirts() {
    $('.loading-blink').loading();
    $('.loading-blink').show();
    getContentImage();

    setTimeout(function () {
        rotate();
    }, 500);
    setTimeout(function () {
        getContentImage();
    }, 1200);
}
        /*******************************************************************************/


        $('#loading-custom-overlay').loading({
            overlay: $('#custom-overlay')
        });
        $('.loading-blink').hide();

        $('#imgsavejpg').on('click',function () {
            function save() {
                html2canvas(document.querySelector("#test")).then(canvas => {
                    // document.body.appendChild(canvas)
                    $(canvas).get(0).toBlob(function (blob) {
                    var filesaver = saveAs(blob, "TShirt.png");
                    filesaver.onwriteend = function () {
                        $('.loading-blink').hide();
                        $('#test').empty();
                    }


                });
            });
            }
            LoadeShirts();
            setTimeout(function () {
                save();
            }, 1700);

        });

        $('#rotate').click(function (e) {
            e.preventDefault();
            rotate();
        });

        function rotate() {
            $('#flip').click();
        }

        $("#addimg").on('click', function () {
            $('#imgInp').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatarlist').append('<img class="img-polaroid tt" src="'+e.target.result+'">');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });

        $('#shirtstyle').on('change',function () {
            $('#tshirtFacing').attr("src","img/t-shirts/" + $(this).val() + "_front.png");
            IMAGE_NAME = $(this).val();
        });

        $('#imgsavepdf').on('click',function () {
            $('.loading-blink').loading();
            $('.loading-blink').show();
            var doc = new jsPDF();
            doc.setFontSize(20);

            setTimeout(function () {
                html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                    function convertCanvasToImage(c) {
                    var image = new Image();
                    image.src = c.toDataURL("image/jpeg");
                    doc.addImage(image.src, 'JPEG', 30, 5, 145, 145);
                    return image;
                }
                convertCanvasToImage(canvas);

            });
            }, 100);
            setTimeout(function () {
                rotate();

            }, 700);
            setTimeout(function () {
                html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                    function convertCanvasToImage(c) {
                    var image = new Image();
                    image.src = c.toDataURL("image/jpeg");
                    doc.addImage(image.src, 'JPEG', 30, 150, 145, 145);
                    return image;
                }
                convertCanvasToImage(canvas);
            });
            }, 1100);
            setTimeout(function () {
                doc.save("T-Shirt.pdf");
                $('.loading-blink').hide();
                $('#test').empty();
            }, 1700);

        });

    });

</script>
<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index:999999;" id="loading-custom-overlay"
     class="loading-div loading-blink">
    <div id="custom-overlay">
        <div class="loading-spinner">
            Loading (custom)...
        </div>
    </div>
</div>
</body>
</html>