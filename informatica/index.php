
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Informatica</title>
        <link rel="icon" href="/common/image/icon.ico" type="image/x-icon">

        <!--Frameworks-->
        <!--Pace-->
        <link rel="stylesheet" type="text/css" href="/common/framework/pace/pace.min.css"/>
        <script src="/common/framework/pace/pace.min.js" type="text/javascript"></script>
        <!--Jquery-->
        <script src="/common/framework/jquery.min.js" type="text/javascript"></script>
        <!--Semantic-UI-->
        <link rel="stylesheet" type="text/css" href="/common/framework/semantic-UI/semantic.min.css"/>
        <script src="/common/framework/semantic-UI/semantic.min.js" type="text/javascript"></script>

        <!--Plyr-->
        <link rel="stylesheet" type="text/css" href="https://cdn.plyr.io/2.0.7/plyr.css"/>
        <script src="https://cdn.plyr.io/2.0.7/plyr.js" type="text/javascript"></script>
        <!--END Framweworks-->


        <meta name="google-signin-client_id" content="1093951573337-n44tvp7mtb48d5ehei7e0sfak31mrh68.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


        <style>
            /*Active*/
            #header .nav-container ul li:nth-child(1) a,
            #header .nav-container ul li:nth-child(1) a:before {
                background: #2185d0;
                background: linear-gradient(to bottom right, #2185d0, #59b0f2);
                background: -webkit-linear-gradient(left top, #2185d0, #59b0f2);
                background: -moz-linear-gradient(bottom right, #2185d0, #59b0f2);
                background: -o-linear-gradient(bottom right, #2185d0, #59b0f2);
                color: #ffffff!important;
                border-color: #ffffff;
            }

            /*Materia Colore*/
            .font.informatica { color: #2185d0!important;}
            .font.meccanica { color: #21ba45!important;}
            .font.chimica { color: #db2828!important;}
            .font.elettrotecnica { color: #f2711c!important;}
            .font.costruzioni { color: #a5673f!important;}
            /*Scrollbar*/
            .scrollbar::-webkit-scrollbar-track {
                background-color: #F5F5F5;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                -moz-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            }
            .scrollbar::-webkit-scrollbar {
                width: 6px;
                height: 6px;
                background-color: #F5F5F5;
            }
            .scrollbar.informatica::-webkit-scrollbar-thumb { background-color: #2185d0;}
            .scrollbar.meccanica::-webkit-scrollbar-thumb { background-color: #21ba45;}
            .scrollbar.chimica::-webkit-scrollbar-thumb { background-color: #db2828;}
            .scrollbar.elettrotecnica::-webkit-scrollbar-thumb { background-color: #f2711c;}
            .scrollbar.costruzioni::-webkit-scrollbar-thumb { background-color: #a5673f;}

            /*General*/
            #video-navigation,
            #video-content {
                position: relative;
                padding: 1em;
                min-height: 1px;
                float: left;
                transition: padding 0.5s;
                -webkit-transition: padding 0.5s;
                -moz-transition: padding 0.5s;
            }
            
            /*Video Container*/
            #video-content {
                width: 80%;
                left: 20%;
                padding-left: 0.5em;
            }
            
            #video {
                padding: 0 7.5%;
                background-color: rgba(0,0,0,0.9);
                transition: padding 0.5s linear;
                -webkit-transition: padding 0.5s linear;
                -moz-transition: padding 0.5s linear;
            }
            .card {
                position: relative;
                width: 100%;
                min-height: 100px;
                margin-top: 1em;
                padding: 1em;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            }
            #feedback { margin: 0 0 0.5em 0;}
            #video-views { float: right;}
            .card .ui.image.label { margin-top: 0.2em;}
            #msgNoFound {
                display: none;
                font-weight: bold;
                font-style: italic;
                font-size: 1.1em;
            }

            /*Video Navigation*/
            #video-navigation {
                width: 20%;
                right: 80%;
                height: 100vh;
                visibility: visible;
                display: block!important;
                padding-right: 0.5em;
            }
            #video-navigation .ui.vertical.menu {
                position: relative;
                width: 100%;
                height: 100%;
                overflow-y: auto;
                overflow-x: hidden;
                margin-bottom: 0;
            }
            /*XS Responsive*/
            #btnShowVideoNavigation,
            #video-navigation .close { display: none;}
            #btnShowVideoNavigation {
                width: 99%;
                margin: 0.25em auto 0 auto;
                background: -webkit-linear-gradient(124deg, #f2711c, #db2828, #eaae00, #e3e81d, #b5cc18, #00b5ad, #2185d0, #e61a8d, #e61a8d);
                background: -moz-linear-gradient(124deg, #f2711c, #db2828, #eaae00, #e3e81d, #b5cc18, #00b5ad, #2185d0, #e61a8d, #e61a8d);
                background: -o-linear-gradient(124deg, #f2711c, #db2828, #eaae00, #e3e81d, #b5cc18, #00b5ad, #2185d0, #e61a8d, #e61a8d);
                background: linear-gradient(124deg, #f2711c, #db2828, #eaae00, #e3e81d, #b5cc18, #00b5ad, #2185d0, #e61a8d, #e61a8d);
                -webkit-background-size: 1800% 1800%;
                -moz-background-size: 1800% 1800%;
                -o-background-size: 1800% 1800%;
                background-size: 1800% 1800%;
                -webkit-animation: rainbow 18s ease infinite;
                -moz-animation: rainbow 18s ease infinite;
                -o-animation: rainbow 18s ease infinite;
                animation: rainbow 18s ease infinite;
            }
            @-webkit-keyframes rainbow {
                0%{background-position:0% 82%}
                50%{background-position:100% 19%}
                100%{background-position:0% 82%}
            }
            @-moz-keyframes rainbow {
                0%{background-position:0% 82%}
                50%{background-position:100% 19%}
                100%{background-position:0% 82%}
            }
            @-o-keyframes rainbow {
                0%{background-position:0% 82%}
                50%{background-position:100% 19%}
                100%{background-position:0% 82%}
            }
            @keyframes rainbow {
                0%{background-position:0% 82%}
                50%{background-position:100% 19%}
                100%{background-position:0% 82%}
            }

            #video-navigation .close {
                position: fixed;
                bottom: 3px;
                right: 8px;
                width: 50px;
                height: 50px;
                vertical-align: middle;
                background-color: #ffffff;
                border: 1px solid #db2828;
                outline: 0;
                border-radius: 50px;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
            }
            #video-navigation .close span {
                position: relative;
                width: 32px;
                height: 32px;
                right: 16px;
                bottom: 16px;
            }
            @-moz-document url-prefix() {
                #video-navigation .close { right: 20px;}
                #video-navigation .close span { bottom: 3px;}
            }
            #video-navigation .close span:before,
            #video-navigation .close span:after {
                position: absolute;
                left: 15px;
                content: '';
                height: 33px;
                width: 2px;
                background-color: #db2828;
            }
            #video-navigation .close span:before { transform: rotate(45deg);}
            #video-navigation .close span:after { transform: rotate(-45deg);}
            /*Hover effect*/
            #video-navigation .close,
            #video-navigation .close span:before,
            #video-navigation .close span:after {
                transition: background-color ease-in-out 0.2s;
                -webkit-transition: background-color ease-in-out 0.2s;
                -moz-transition: background-color ease-in-out 0.2s;
                -o-transition: background-color ease-in-out 0.2s;
            }

            #video-navigation .close:hover {background-color: #db2828;}
            #video-navigation .close:hover span:before,
            #video-navigation .close:hover span:after { background-color: #ffffff;}

            /*Attachment*/
            .attachment {
                position: relative;
                display: inline-block;
                max-width: 138px;
                height: auto;
                background: none;
                border: 0;
                text-decoration: initial;
                vertical-align: text-top;
                padding: 10px 5px 5px 5px;
                -webkit-box-shadow: inset 0 0 0 2px #00b5ad;
                -moz-box-shadow: inset 0 0 0 2px #00b5ad;
                box-shadow: inset 0 0 0 2px #00b5ad;
            }
            .attachment:not(:last-child) { margin-right: 5px;}

            .attachment::before,
            .attachment::after {
                position: absolute;
                display: block;
                content: '';
                width: 80%;
                height: 2px;
                top: 0;
                background: #f9f9f9;
                -webkit-transition: width 0.2s ease-in-out;
                -moz-transition: width 0.2s ease-in-out;
                -o-transition: width 0.2s ease-in-out;
                -ms-transition: width 0.2s ease-in-out;
                transition: width 0.2s ease-in-out;
            }
            .attachment::before { right: 2px;}
            .attachment::after {
                top: calc(100% - 2px);
                left: 2px;
            }
            .attachment:hover::before,
            .attachment:hover::after,
            .attachment:active::before,
            .attachment:active::after { width: 0;}

            /*Attachment Image*/
            .attachment .image {
                width: 128px;
                height: 128px;
                background-image: url("/common/image/file_extension/file.png");
                -webkit-background-size: 128px auto;
                -moz-background-size: 128px auto;
                -o-background-size: 128px auto;
                background-size: 128px auto;
                -webkit-transition: background-image 0.5s ease-in-out;
                -moz-transition: background-image 0.5s ease-in-out;
                -o-transition: background-image 0.5s ease-in-out;
                -ms-transition: background-image 0.5s ease-in-out;
                transition: background-image 0.5s ease-in-out;
            }
            .attachment:hover .image { background-image: url("/common/image/download.png")!important;}

            /*Attachment Divider*/
            .attachment .divider {
                height: 0;
                border: none;
                border-top: 1px solid #8c8b8b;
                text-align: center;
                margin: 9px 0;
            }
            .attachment .divider:after {
                position: relative;
                content: '§';
                display: inline-block;
                top: -11px;
                background: transparent;
                color: #8c8b8b;
                font-size: 15px;
            }

            /*Attachment Description*/
            .attachment .desc {
                text-align: center;
                color: #000000;
                font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                font-weight: bold;
            }
            .attachment:hover .desc { color: #2185d0;}

            /*Attachment File Type*/
            /*AI*/
            .attachment.ai {
                -webkit-box-shadow: inset 0 0 0 2px #ffc14f;
                -moz-box-shadow: inset 0 0 0 2px #ffc14f;
                box-shadow: inset 0 0 0 2px #ffc14f;
            }
            .attachment.ai .image { background-image: url("/common/image/file_extension/ai.png");}
            /*AVI*/
            .attachment.avi {
                -webkit-box-shadow: inset 0 0 0 2px #d75e72;
                -moz-box-shadow: inset 0 0 0 2px #d75e72;
                box-shadow: inset 0 0 0 2px #d75e72;
            }
            .attachment.avi .image { background-image: url("/common/image/file_extension/avi.png");}
            /*C*/
            .attachment.c {
                -webkit-box-shadow: inset 0 0 0 2px #aabacc;
                -moz-box-shadow: inset 0 0 0 2px #aabacc;
                box-shadow: inset 0 0 0 2px #aabacc;
            }
            .attachment.c .image { background-image: url("/common/image/file_extension/c.png");}
            /*CPP*/
            .attachment.cpp {
                -webkit-box-shadow: inset 0 0 0 2px #004383;
                -moz-box-shadow: inset 0 0 0 2px #004383;
                box-shadow: inset 0 0 0 2px #004383;
            }
            .attachment.cpp .image { background-image: url("/common/image/file_extension/cpp.png");}
            /*CS*/
            .attachment.cs {
                -webkit-box-shadow: inset 0 0 0 2px #681b7b;
                -moz-box-shadow: inset 0 0 0 2px #681b7b;
                box-shadow: inset 0 0 0 2px #681b7b;
            }
            .attachment.cs .image { background-image: url("/common/image/file_extension/cs.png");}
            /*CSS*/
            .attachment.css {
                -webkit-box-shadow: inset 0 0 0 2px #0096e6;
                -moz-box-shadow: inset 0 0 0 2px #0096e6;
                box-shadow: inset 0 0 0 2px #0096e6;
            }
            .attachment.css .image { background-image: url("/common/image/file_extension/css.png");}
            /*CSV*/
            .attachment.csv {
                -webkit-box-shadow: inset 0 0 0 2px #f36fa0;
                -moz-box-shadow: inset 0 0 0 2px #f36fa0;
                box-shadow: inset 0 0 0 2px #f36fa0;
            }
            .attachment.csv .image { background-image: url("/common/image/file_extension/csv.png");}
            /*CSV*/
            .attachment.dbf {
                -webkit-box-shadow: inset 0 0 0 2px #e96360;
                -moz-box-shadow: inset 0 0 0 2px #e96360;
                box-shadow: inset 0 0 0 2px #e96360;
            }
            .attachment.dbf .image { background-image: url("/common/image/file_extension/dbf.png");}
            /*DOC*/
            .attachment.doc {
                -webkit-box-shadow: inset 0 0 0 2px #0096e6;
                -moz-box-shadow: inset 0 0 0 2px #0096e6;
                box-shadow: inset 0 0 0 2px #0096e6;
            }
            .attachment.doc .image { background-image: url("/common/image/file_extension/doc.png");}
            /*DWG*/
            .attachment.dwg {
                -webkit-box-shadow: inset 0 0 0 2px #8697cb;
                -moz-box-shadow: inset 0 0 0 2px #8697cb;
                box-shadow: inset 0 0 0 2px #8697cb;
            }
            .attachment.dwg .image { background-image: url("/common/image/file_extension/dwg.png");}
            /*EXE*/
            .attachment.exe {
                -webkit-box-shadow: inset 0 0 0 2px #9777a8;
                -moz-box-shadow: inset 0 0 0 2px #9777a8;
                box-shadow: inset 0 0 0 2px #9777a8;
            }
            .attachment.exe .image { background-image: url("/common/image/file_extension/exe.png");}
            /*FILE*/
            .attachment.file {
                -webkit-box-shadow: inset 0 0 0 2px #556080;
                -moz-box-shadow: inset 0 0 0 2px #556080;
                box-shadow: inset 0 0 0 2px #556080;
            }
            .attachment.file .image { background-image: url("/common/image/file_extension/file.png");}
            /*FLA*/
            .attachment.fla {
                -webkit-box-shadow: inset 0 0 0 2px #ce3c3b;
                -moz-box-shadow: inset 0 0 0 2px #ce3c3b;
                box-shadow: inset 0 0 0 2px #ce3c3b;
            }
            .attachment.fla .image { background-image: url("/common/image/file_extension/fla.png");}
            /*HTML*/
            .attachment.html {
                -webkit-box-shadow: inset 0 0 0 2px #ec6630;
                -moz-box-shadow: inset 0 0 0 2px #ec6630;
                box-shadow: inset 0 0 0 2px #ec6630;
            }
            .attachment.html .image { background-image: url("/common/image/file_extension/html.png");}
            /*ISO*/
            .attachment.iso {
                -webkit-box-shadow: inset 0 0 0 2px #71c285;
                -moz-box-shadow: inset 0 0 0 2px #71c285;
                box-shadow: inset 0 0 0 2px #71c285;
            }
            .attachment.iso .image { background-image: url("/common/image/file_extension/iso.png");}
            /*JAVA*/
            .attachment.java {
                -webkit-box-shadow: inset 0 0 0 2px #f89820;
                -moz-box-shadow: inset 0 0 0 2px #f89820;
                box-shadow: inset 0 0 0 2px #f89820;
            }
            .attachment.java .image { background-image: url("/common/image/file_extension/java.png");}
            /*JAVASCRIPT*/
            .attachment.javascript {
                -webkit-box-shadow: inset 0 0 0 2px #eeaf4b;
                -moz-box-shadow: inset 0 0 0 2px #eeaf4b;
                box-shadow: inset 0 0 0 2px #eeaf4b;
            }
            .attachment.javascript .image { background-image: url("/common/image/file_extension/javascript.png");}
            /*JPG*/
            .attachment.jpg {
                -webkit-box-shadow: inset 0 0 0 2px #14a085;
                -moz-box-shadow: inset 0 0 0 2px #14a085;
                box-shadow: inset 0 0 0 2px #14a085;
            }
            .attachment.jpg .image { background-image: url("/common/image/file_extension/jpg.png");}
            /*JSON*/
            .attachment.json {
                -webkit-box-shadow: inset 0 0 0 2px #9777a8;
                -moz-box-shadow: inset 0 0 0 2px #9777a8;
                box-shadow: inset 0 0 0 2px #9777a8;
            }
            .attachment.json .image { background-image: url("/common/image/file_extension/json.png");}
            /*MP3*/
            .attachment.mp3 {
                -webkit-box-shadow: inset 0 0 0 2px #7d6599;
                -moz-box-shadow: inset 0 0 0 2px #7d6599;
                box-shadow: inset 0 0 0 2px #7d6599;
            }
            .attachment.mp3 .image { background-image: url("/common/image/file_extension/mp3.png");}
            /*MP4*/
            .attachment.mp4 {
                -webkit-box-shadow: inset 0 0 0 2px #ff5364;
                -moz-box-shadow: inset 0 0 0 2px #ff5364;
                box-shadow: inset 0 0 0 2px #ff5364;
            }
            .attachment.mp4 .image { background-image: url("/common/image/file_extension/mp4.png");}
            /*PDF*/
            .attachment.pdf {
                -webkit-box-shadow: inset 0 0 0 2px #cc4b4c;
                -moz-box-shadow: inset 0 0 0 2px #cc4b4c;
                box-shadow: inset 0 0 0 2px #cc4b4c;
            }
            .attachment.pdf .image { background-image: url("/common/image/file_extension/pdf.png");}
            /*PHP*/
            .attachment.php {
                -webkit-box-shadow: inset 0 0 0 2px #5d65b5;
                -moz-box-shadow: inset 0 0 0 2px #5d65b5;
                box-shadow: inset 0 0 0 2px #5d65b5;
            }
            .attachment.php .image { background-image: url("/common/image/file_extension/php.png");}
            /*PNG*/
            .attachment.png {
                -webkit-box-shadow: inset 0 0 0 2px #659c35;
                -moz-box-shadow: inset 0 0 0 2px #659c35;
                box-shadow: inset 0 0 0 2px #659c35;
            }
            .attachment.png .image { background-image: url("/common/image/file_extension/png.png");}
            /*PPT*/
            .attachment.ppt {
                -webkit-box-shadow: inset 0 0 0 2px #f6712e;
                -moz-box-shadow: inset 0 0 0 2px #f6712e;
                box-shadow: inset 0 0 0 2px #f6712e;
            }
            .attachment.ppt .image { background-image: url("/common/image/file_extension/ppt.png");}
            /*PSD*/
            .attachment.psd {
                -webkit-box-shadow: inset 0 0 0 2px #5889c4;
                -moz-box-shadow: inset 0 0 0 2px #5889c4;
                box-shadow: inset 0 0 0 2px #5889c4;
            }
            .attachment.psd .image { background-image: url("/common/image/file_extension/psd.png");}
            /*RB*/
            .attachment.rb {
                -webkit-box-shadow: inset 0 0 0 2px #ee4444;
                -moz-box-shadow: inset 0 0 0 2px #ee4444;
                box-shadow: inset 0 0 0 2px #ee4444;
            }
            .attachment.rb .image { background-image: url("/common/image/file_extension/rb.png");}
            /*RTF*/
            .attachment.rtf {
                -webkit-box-shadow: inset 0 0 0 2px #90bae1;
                -moz-box-shadow: inset 0 0 0 2px #90bae1;
                box-shadow: inset 0 0 0 2px #90bae1;
            }
            .attachment.rtf .image { background-image: url("/common/image/file_extension/rtf.png");}
            /*SVG*/
            .attachment.svg {
                -webkit-box-shadow: inset 0 0 0 2px #e57e25;
                -moz-box-shadow: inset 0 0 0 2px #e57e25;
                box-shadow: inset 0 0 0 2px #e57e25;
            }
            .attachment.svg .image { background-image: url("/common/image/file_extension/svg.png");}
            /*TXT*/
            .attachment.txt {
                -webkit-box-shadow: inset 0 0 0 2px #95a5a5;
                -moz-box-shadow: inset 0 0 0 2px #95a5a5;
                box-shadow: inset 0 0 0 2px #95a5a5;
            }
            .attachment.txt .image { background-image: url("/common/image/file_extension/txt.png");}
            /*XLS*/
            .attachment.xls {
                -webkit-box-shadow: inset 0 0 0 2px #91cda0;
                -moz-box-shadow: inset 0 0 0 2px #91cda0;
                box-shadow: inset 0 0 0 2px #91cda0;
            }
            .attachment.xls .image { background-image: url("/common/image/file_extension/xls.png");}
            /*XML*/
            .attachment.xml {
                -webkit-box-shadow: inset 0 0 0 2px #f29c1f;
                -moz-box-shadow: inset 0 0 0 2px #f29c1f;
                box-shadow: inset 0 0 0 2px #f29c1f;
            }
            .attachment.xml .image { background-image: url("/common/image/file_extension/xml.png");}
            /*ZIP*/
            .attachment.zip {
                -webkit-box-shadow: inset 0 0 0 2px #556080;
                -moz-box-shadow: inset 0 0 0 2px #556080;
                box-shadow: inset 0 0 0 2px #556080;
            }
            .attachment.zip .image { background-image: url("/common/image/file_extension/zip.png");}
            /*XAMPP*/
            .attachment.xampp {
                -webkit-box-shadow: inset 0 0 0 2px #fb7a24;
                -moz-box-shadow: inset 0 0 0 2px #fb7a24;
                box-shadow: inset 0 0 0 2px #fb7a24;
            }
            .attachment.xampp .image { background-image: url("/common/image/file_extension/xampp.png");}

            /*---Media Query---*/
            @media screen and (max-width: 1000px) {
                #video-navigation,
                #video-content { padding: 0.5em;}
                #video-navigation { 
                    padding-right: 0.25em;
                    padding-bottom: 0.5em;
                }
                #video-content { padding-left: 0.25em;}
                #video { padding: 0;}
            }
            @media screen and (max-width: 700px) {
                /*Parent Container*/
                #video-navigation,
                #video-content { padding: 0.25em;}
                #video-navigation {
                    width: 40%;
                    height: 415px;
                    right: 0;
                    bottom: auto;
                }
                #video-content {
                    width: 100%;
                    left: 0;
                }

                /*Video Description & Card*/
                #video-descrition {
                    position: absolute;
                    width: 60%;
                    left: 40%;
                    padding-right: 0.25em;
                }
                .card {
                    margin-top: 0.5em;
                    padding: 0.5em;
                }

                /*Feedback*/
                /*Feedback*/
                #feedback .button,
                #feedback #video-views { font-size: .78571429rem;}
                #video-views span:first-child,
                #feedback #like span,
                #feedback #dislike span { display: none;}
                #feedback #like .ui.button .icon,
                #feedback #dislike .ui.button .icon {
                    opacity: 0.9;
                    margin: 0;
                    vertical-align: top;
                    height: .85714286em;
                }
                #feedback #like .ui.button,
                #feedback #dislike .ui.button {
                    padding: .78571429em .78571429em .78571429em;
                    -webkit-border-top-right-radius: 0;
                    -moz-border-top-right-radius: 0;
                    border-top-right-radius: 0;
                    -webkit-border-bottom-right-radius: 0;
                    -moz-border-bottom-right-radius: 0;
                    border-bottom-right-radius: 0;
                }
                /*Creators*/
                #creators a.ui.image.label { font-size: .85714286rem}
                #creators a.ui.image.label .detail { display: none;}
                /*Attachment*/
                .attachment { max-width: 106px;}
                .attachment .image {
                    width: 96px;
                    height: 96px;
                    -webkit-background-size: 96px auto;
                    -moz-background-size: 96px auto;
                    -o-background-size: 96px auto;
                    background-size: 96px auto;
                }
            }
            /*XS Devices*/
            @media screen and (max-width: 500px) {
                .scrollbar-hidden { overflow: hidden; display: block!important;}
                #video-navigation {
                    position: fixed;
                    display: none!important;
                    width: 100%;
                    height: 100%;
                    padding: 0;
                    top: 0;
                    z-index: 100;
                }
                #video-descrition {
                    position: relative;
                    width: 100%;
                    left: 0;
                    padding: 0;
                }
                #btnShowVideoNavigation,
                #video-navigation.transition.visible .close { display: block;}
            }
        </style>
    </head>
    <body>
        
        <script>
            $(document).ready(function () {
                //Handle Search
                $("#video-navigation input:first-of-type").on("keyup", function () {
                    search($(this).val().toUpperCase());
                });
                //Handle Video Navigation on XS Devices
                //Open & Close
                $("#btnShowVideoNavigation, #video-navigation .close").on("click", function () {
                    $("body").toggleClass("scrollbar-hidden");
                    $("#video-navigation").transition("drop");
                });
                videoNavigationHeight();
            });
            
            function videoNavigationHeight() {
                //!!! Remember Css Media Query
                var  height = "100%";
                if(viewport().width > 700)
                    height = $("#video-content").height();
                else if (viewport().width > 500)
                    height = $("#video-descrition").height()-7;
                $("#video-navigation").height(height);
                setTimeout(function() {
                    videoNavigationHeight();
                }, 500);
            }
            function viewport() {
                var e = window, a = 'inner';
                if (!('innerWidth' in window)) {
                    a = 'client';
                    e = document.documentElement || document.body;
                }
                return {width : e[ a+'Width' ], height : e[ a+'Height' ]};
            }
            function search(query) {
                var items = $("#video-navigation").find(".item:not(.item:first)");
                var showNoFound = true;
                $(items).each(function (index, item) {
                    var iVal = $(item).text().toUpperCase();
                    if (!$(this).is("#msgNoFound")) {
                        if (iVal.indexOf(query) > -1) {
                            showNoFound = false;
                            $(item).fadeIn("fast");
                        } else
                            $(item).fadeOut("fast");
                    }
                });
                if (showNoFound)
                    $("#msgNoFound").delay(100).fadeIn("fast");
                else
                    $("#msgNoFound").hide();
            }
            
            var GoogleAuth;
            var user;
            var SCOPE = 'https://www.googleapis.com/auth/youtube.force-ssl';
            function handleClientLoad() {
                gapi.load('client:auth2', initClient);
            }

            function initClient() {
                var discoveryUrl = 'https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest';
                gapi.client.init({
                    'apiKey': 'AIzaSyD0BBciTgJ2cBLphgjwIVYtxZ6Ey9UDpTA',
                    'discoveryDocs': ['https://people.googleapis.com/$discovery/rest'],
                    'clientId': '1093951573337-n44tvp7mtb48d5ehei7e0sfak31mrh68.apps.googleusercontent.com',
                    'scope': SCOPE
                }).then(function () {
                    
                GoogleAuth = gapi.auth2.getAuthInstance();
                GoogleAuth.isSignedIn.listen(updateSigninStatus);

                user = GoogleAuth.currentUser.get();
                //setSigninStatus();
                $('#like').on("click", function() {
                  handleAuthClick("like");
                }); 
                
                 $('#dislike').on("click", function() {
                  handleAuthClick("dislike");
                });
                
                
                $('#revoke-access-button').click(function() {
                  revokeAccess();
                }); 
                });
            }
            
            
            
        function handleAuthClick(rating) {
            if (GoogleAuth.isSignedIn.get()) {
              // User is authorized and has clicked 'Sign out' button.
              alert("Qui fai la query");
              //https://developers.google.com/apis-explorer/#search/rate/m/youtube/v3/youtube.videos.rate?id=RjUlmco7v2M&rating=like&_h=1&            
              //POST https://www.googleapis.com/youtube/v3/videos/rate?id=RjUlmco7v2M&rating=like&key=AIzaSyD0BBciTgJ2cBLphgjwIVYtxZ6Ey9UDpTA

              var request = gapi.client.request({
                'method': 'POST',
                'path': 'https://www.googleapis.com/youtube/v3/videos/rate',
                'params': {
                    'id':"<?php echo  filter_input(INPUT_GET, "v");?>",
                    'rating':rating,
                    'key':"AIzaSyD0BBciTgJ2cBLphgjwIVYtxZ6Ey9UDpTA"}
              });
              
              request.execute(function(response){
                  console.log(response);        
              });
              alert("Fatta");
            } else {
              // User is not signed in. Start Google auth flow.
              GoogleAuth.signIn();
            }
          }

          function revokeAccess() {
            GoogleAuth.disconnect();
          }
         
          function setSigninStatus(isSignedIn) {
            var user = GoogleAuth.currentUser.get();
            var isAuthorized = user.hasGrantedScopes(SCOPE);/*
            if (isAuthorized) {
              $('#sign-in-or-out-button').html('Sign out');
              $('#revoke-access-button').css('display', 'inline-block');
              $('#auth-status').html('You are currently signed in and have granted ' +
                  'access to this app.');
            } else {
              $('#sign-in-or-out-button').html('Sign In/Authorize');
              $('#revoke-access-button').css('display', 'none');
              $('#auth-status').html('You have not authorized this app or you are ' +
                  'signed out.');
            }*/
          }

          function updateSigninStatus(isSignedIn) {
            setSigninStatus();
          }
        </script>
        <script async defer src="https://apis.google.com/js/api.js" 
                onload="this.onload=function(){};handleClientLoad()">
        </script>
        <noscript>
            <style>
                body { overflow: hidden;}
                /*Structure*/
                #no-script-alert {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    z-index: 1000;
                    margin: 0 auto;
                    padding: 25px 100px;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    background-color: #ebe8d7;
                    background-image: url("/common/image/noscript.png");
                    overflow: auto;
                }
                #no-script-alert .document {
                    background-color: rgba(235,232,215,0.5);
                    padding: 40px 20px;
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                    border-radius: 5px;
                }
                /*Typography*/
                #no-script-alert h1 {
                    text-align: center;
                    font-size: 5em;
                    margin-bottom: 10px;
                    text-transform: uppercase;
                    font-weight: bold;
                    color: #ffffff;
                    text-shadow: 0 1px 2px rgba(0,0,0,0.15);
                }
                #no-script-alert p {
                    text-align: center;
                    margin: 0 20px 20px;
                    font-size: 2em;
                    line-height: 1.5em;
                    color: #333333;
                }
                #no-script-alert p a:hover { text-decoration: underline;}
                #no-script-alert .brace {
                    position: relative;
                    width: auto;
                    min-width: 35px;
                    padding-bottom: 20px;
                    font-size: 2em;
                    line-height: 2em;
                    text-align: center;
                    vertical-align: middle;
                    margin: 0 15px 15px;
                    border: none;
                    background-color: transparent;
                    background-image: -webkit-radial-gradient(circle at 0 0, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px), -webkit-radial-gradient(circle at 35px 0, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px);
                    background-image: -webkit-radial-gradient(0 0 circle, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px), -webkit-radial-gradient(35px 0 circle, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px);
                    background-image: radial-gradient(circle at 0 0, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px), radial-gradient(circle at 35px 0, rgba(255,255,255,0) 14.5px, #fff 15.5px, #fff 19.5px, rgba(255,255,255,0) 20.5px);
                    background-size: 35px 20px;
                    background-position: center bottom;
                    background-repeat: no-repeat;
                    text-transform: lowercase;
                    font-style: italic;
                    color: #ffffff;
                    -webkit-filter: drop-shadow(0 1px 1px rgba(0,0,0,0.15));
                    filter: drop-shadow(0 1px 1px rgba(0,0,0,0.15));
                }
                #no-script-alert .brace:before {
                    width: 50%;
                    border-top: 5px solid #fff;
                    border-left: 1px solid transparent;
                    border-top-left-radius: 20% 30px;
                    height: 100%;
                    content: "";
                    position: absolute;
                    top: 100%;
                    left: -15px;
                    box-sizing: border-box;
                    margin-top: -5px;
                }
                #no-script-alert .brace:after {
                    width: 50%;
                    border-top: 5px solid #fff;
                    border-right: 1px solid transparent;
                    border-top-right-radius: 20% 30px;
                    height: 100%;
                    content: "";
                    position: absolute;
                    top: 100%;
                    right: -15px;
                    box-sizing: border-box;
                    margin-top: -5px;
                }
                /*---Media Query---*/
                @media screen and (max-width: 650px) {
                    #no-script-alert { padding: 25px;}
                    #no-script-alert p { margin: 0 10px;}
                }
                @media screen and (max-width: 500px) {
                    #no-script-alert .document { padding: 40px 0;}
                    #no-script-alert h1 { font-size: 3em;}
                    #no-script-alert p { font-size: 1.5em;}
                }
            </style>
            <div id="no-script-alert">
                <div class="document">
                    <h1> <i class="rocket icon"></i><br/>ATTIVARE JAVASCRIPT</h1>
                    <hr class="brace">
                    <p>
                        Ci scusiamo per l'inconveniente ma <i>wikITT</i> funziona solamente con <strong>Javascript abilitato</strong>.
                        <br/>
                        Per <strong>aiuto</strong> all' <strong>attivazione</strong>
                        <a href="http://www.enable-javascript.com/it/" target="_blank">clicca qui</a>
                    </p>
                </div>
            </div>
        </noscript>

        <div class="wrapper">
            <div id="authentication"></div>
            <script>
                function onSuccess(googleUser) {
                    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                }
                function onFailure(error) {
                    console.log(error);
                }
                function renderButton() {
                    gapi.signin2.render('authentication', {
                        'scope': 'profile email',
                        'longtitle': true,
                        'theme': 'dark',
                        'onsuccess': onSuccess,
                        'onfailure': onFailure
                    });
                }
            </script>

            <!--#include virtual="/common/component/header.html" -->

            <button class="ui blue labeled icon button" id="btnShowVideoNavigation">
                <i class="video icon"></i>
                Visualizza elenco video
            </button>

            <div id="video-content">
                <?php

                    //Require engine PHP page
                    require '../common/php/engine.php';
                    //Vide ID
                    $vID = filter_input(INPUT_GET, "v");
                    
                    //Query
                    $videoInfo = query("SELECT Titolo,Descrizione,DataPub FROM video WHERE VideoID='$vID' LIMIT 1;");
                    
                    
                    //Function StampaVisual
                    function stampaStat($VideoID){
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/videos?part=statistics&id='.$VideoID.'&key=AIzaSyD0BBciTgJ2cBLphgjwIVYtxZ6Ey9UDpTA');
                        $result = curl_exec($ch);
                        curl_close($ch);

                        $obj = json_decode($result);
                        return $obj;
                    }
                    
                    $stat = stampaStat($vID);
                    
                    function stampaPercentuale($num1, $num2) {
                        
                        $sum = $num1+$num2;
                        echo ($num1*100)/$sum;
                    }
                    
                    if(!isset($vID) || $vID === "" || mysqli_num_rows($videoInfo) == 0) {?>
                        <style>
                            .video-content { padding: 1em;}
                            @media screen and (max-width: 1000px) {
                                .video-content { padding-top: 0.5em;}
                            }
                            @media screen and (max-width: 700px) {
                                .video-content .ui.raised.segment { margin: 1em;}
                                #video-navigation { width: 100%;}
                            }
                            @media screen and (max-width: 700px) {
                                .video-content .ui.raised.segment { margin: 0.25em;}
                            }
                        </style>
                        <div class="ui small breadcrumb" id="breadcrumInfo">
                            <a class="section" href="/index.html">Home</a>
                            <div class="divider"> / </div>
                            <div class="active section">Informatica</div>
                        </div>

                //Query
                $videoInfo = query("SELECT Titolo,Descrizione,DataPub FROM video WHERE VideoID='$vID' LIMIT 1;");

                if (!isset($vID) || $vID === "" || mysqli_num_rows($videoInfo) == 0) {
                    ?>
                    <style>
                        #video-content { padding: 1em;}
                        @media screen and (max-width: 1000px) {
                            #video-content { padding-top: 0.5em;}
                        }
                        @media screen and (max-width: 700px) {
                            #video-content .ui.raised.segment { margin: 1em;}
                            #video-navigation { width: 100%;}
                        }
                        @media screen and (max-width: 700px) {
                            #video-content .ui.raised.segment { margin: 0.25em;}
                        }
                    </style>
                    <div class="ui small breadcrumb" id="breadcrumInfo">
                        <a class="section" href="/index.html">Home</a>
                        <div class="divider"> / </div>
                        <div class="active section">Informatica</div>
                    </div>

                    <div class="ui horizontal divider">
                        <h1>Informatica</h1>
                    </div>

                    <div class="ui raised segment">
                        <a class="ui red ribbon label">Presentazione</a>
                        <p><br>
                            « L’informatica non riguarda i computer più di quanto l’astronomia riguardi i telescopi. »
                            (Edsger Wybe Dijkstra)
                            <br><br>
                            La parola informatica deriva dal verbo tedesco “Informatik” ossia informarsi da se stessi. L’informatica si occupa proprio di questo, ottenere informazioni dal trattamento automatico di dati.
                            Contrariamente a ciò che si pensa non si tratta però di una cosa solo per “smanettoni” ma bensì è una vera e propria scienza aperta a tutti coloro appassionati di logica e di tecnologia.
                            Con questi video avrai la possibilità di approfondire alcuni degli infiniti argomenti che compongono questa materia risolvendo i tuoi dubbi o semplicemente incuriosendoti verso questo vasto ed interessante mondo.
                        </p>
                    </div>

                    <div class="ui horizontal divider">
                        <i class="code icon"></i>
                    </div>

                    <div class="ui three column stackable grid">
                        <div class="column">
                            <div class="ui raised segment">
                                <a class="ui green ribbon label">Database</a>
                                <div class="ui ordered list">                               
                                    <a class="item">Progettazione</a>
                                    <a class="item">MySql</a>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="ui raised segment">
                                <a class="ui green ribbon label">Argomenti</a>
                                <div class="ui ordered list">
                                    <div class="item">
                                        <a>Database</a>
                                        <div class="list">
                                            <a class="item">Progettazione</a>
                                            <a class="item">MySql</a>
                                        </div>
                                    </div>
                                    <a class="item">Php</a>
                                    <a class="item">Html</a>
                                    <a class="item">CSS</a>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="ui raised segment">
                                <a class="ui green ribbon label">Argomenti</a>
                                <div class="ui ordered list">
                                    <div class="item">
                                        <a>Database</a>
                                        <div class="list">
                                            <a class="item">Progettazione</a>
                                            <a class="item">MySql</a>
                                        </div>
                                    </div>
                                    <a class="item">Php</a>
                                    <a class="item">Html</a>
                                    <a class="item">CSS</a>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div class="ui horizontal divider">
                            <i class="code icon"></i>
                        </div>
                    <?php } else {
                        //Execute queries
                        $creatorInfo = query("SELECT A.* FROM video V,realizza R,autore A WHERE V.Cod=R.CodVideo AND R.IDAutore=A.ID AND V.VideoID='$vID';");?>
                        
                        <div id="video">
                            <div data-type="youtube" data-video-id="<?php echo $vID;?>"></div>
                        </div>
                        <div id="video-descrition">
                            <div class="card">
                                <!--Video Info-->
                                <?php $vInfo = mysqli_fetch_array($videoInfo)?>
                                <div class="ui label" style="float: right;">
                                    <i class="calendar icon"></i>
                                    <?php echo $vInfo["DataPub"]?>
                                </div>
                                <h1 style="margin: 0;"><?php echo $vInfo["Titolo"];?></h1>
                                <p style="margin: 0 0 0.5em 0;"><?php echo $vInfo["Descrizione"];?></p>
                                
                                <!--Like & Dislike-->
                                <div id="feedback">
                                    <div class="ui labeled button" id="like" tabindex="0">
                                        <div class="ui basic green button small">
                                            <i class="thumbs up icon"></i>
                                            <span>Like</span>
                                        </div>
                                        <a class="ui green left pointing label">
                                            <?php echo $stat->items[0]->statistics->likeCount; ?>
                                        </a>
                                    </div>
                                    <div class="ui labeled button" id="dislike" tabindex="0">
                                        <div class="ui basic red button small">
                                            <i class="thumbs down icon"></i>
                                            <span>Dislike</span>
                                        </div>
                                        <a class="ui red left pointing label">
                                            <?php echo $stat->items[0]->statistics->dislikeCount; ?>
                                        </a>
                                    </div>
                                    <div class="ui teal tag label large" id="video-views">
                                        <span><?php echo number_format(stampaStat($vID)->items[0]->statistics->viewCount, 0, ',', '.'); ?></span> Visualizzazioni
                                    </div>
                                    <div class="ui tiny green active progress" id="feedback-progress" style="margin-top: 0.5em; background-color: #db2828;">
                                        <div class="bar" style="min-width: 0%; width:<?php echo stampaPercentuale($stat->items[0]->statistics->likeCount, stampaStat($vID)->items[0]->statistics->dislikeCount);?>%;"></div>

                                    </div>
                                    <a class="ui red left pointing label">
                                        0
                                    </a>
                                </div>
                                <div class="ui teal tag label large" id="video-views">
                                    0 Visual<span>izzazioni</span>
                                </div>
                                <div class="ui tiny green active progress" id="feedback-progress" style="margin-top: 0.5em;">
                                    <div class="bar" style="min-width: 0%;"></div>
                                </div>
                            </div>

                            <!--Creator Info-->
                            <div id="creators">
                                <?php
                                if (mysqli_num_rows($creatorInfo) > 0) {
                                    while ($row = mysqli_fetch_array($creatorInfo)) {
                                        ?>
                                        <a href="/author/index.php?a=<?php echo $row["ID"]; ?>" class="ui medium image label <?php echo $row["Colore"]; ?>">
                                            <img src="/common/image/profile/<?php echo $row["Miniatura"]; ?>.png" alt="autore"/>
                                            <?php echo $row["Nome"] . "&nbsp;" . $row["Cognome"]; ?>
                                            <div class="detail"><?php echo $row["Classe"]; ?></div>
                                        </a>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="ui label red"><i class="warning sign icon"></i>Autore sconosciuto</div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card">
                            <h1>Materiale</h1>
                            <?php
                            $attachments = query("SELECT M.Tipo,M.PathMateriale,M.Descrizione FROM video V,materiale M WHERE V.Cod=M.Fk_Video AND V.VideoID='$vID';");
                            if (mysqli_num_rows($attachments) > 0) {
                                while ($row = mysqli_fetch_array($attachments)) {
                                    ?>
                                    <a class="attachment <?php echo $row["Tipo"]; ?>"
                                       href="<?php echo $row["PathMateriale"]; ?>"
                                       target="_blank" download>
                                        <div class="image"></div>
                                        <hr class="divider">
                                        <div class="desc"><?php echo $row["Descrizione"]; ?></div>
                                    </a>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="ui icon message">
                                    <i class="info icon"></i>
                                    <div class="content">
                                        <p>Nessun materiale disponibile</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div id="video-navigation">
                <div class="scrollbar informatica ui vertical menu">
                    <div class="item">
                        <div class="ui transparent icon input">
                            <input type="text" placeholder="Cerca...">
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="item" id="msgNoFound">
                        <i class="rocket icon"></i>Nessun video trovato
                    </div>
                    <?php
                    $videos = query("SELECT Titolo,VideoID FROM video ORDER BY Titolo;");
                    if (mysqli_num_rows($videos) > 0) {
                        while ($row = mysqli_fetch_array($videos)) {
                            if ($row["VideoID"] === $vID) {
                                ?>
                                <a class="font informatica active item" href="index.php?v=<?php echo $row["VideoID"]; ?>" style="font-weight: bold;">
                                    <i class="fire icon"></i>
                                <?php echo $row["Titolo"]; ?>
                                </a>
                                <?php } else { ?>
                                <a class="item" href="index.php?v=<?php echo $row["VideoID"]; ?>">
                                <?php echo $row["Titolo"]; ?>
                                </a>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
                <button class="close">
                    <span></span>
                </button>
            </div>
        </div>
        <script>plyr.setup();</script>
    </body>
</html>
