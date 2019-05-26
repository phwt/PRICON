<?php /* Template Name: CustomPageT1 */ ?>
<head>
<?php get_header();?>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="jquery.appear.js"></script> -->
    <!-- <link href="scroll.css" rel="stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Prompt:300,400,500,600&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree:400,500,600&display=swap&subset=thai" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,600&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nova+Mono&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700,800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Nunito Sans", "Prompt" !important;
        }

        h1.title {
            font-family: 'Comfortaa';
            font-weight: 600;
            font-size: 85px;
        }

        h1.subtitle {
            font-family: 'Comfortaa';
            font-weight: 400;
            font-size: 25px;
        }

        html,
        body {
            font-family: "Prompt";
        }

        .center-me {
            /* position: absolute; */
            /* top: 50%; */
            /* left: 50%; */
            /* transform: translatey(-50%); */
            margin-top: auto;
            margin-bottom: auto;
        }

        .year-digit {
            font-family: 'Nova Mono', monospace;
            font-size: 4vh;
        }

        .first-twin {
            background-image: url("/~it61070239/pricon/wp-content/themes/seed/custom_a/main-grad.svg");
            background-repeat: no-repeat;
        }

        .gb-box {
            border: 12vh solid;
            border-image-source: linear-gradient(90deg, rgba(116, 105, 246, 1) 0%, rgba(116, 105, 246, 1) 50%, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 1) 100%);
            border-image-slice: 1;
            padding: 7vh;
        }

        .pd-7 {
            padding: 7vh;
        }

        .pd-19 {
            padding: 19vh;
        }

        .center-flex {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3%;
        }

        .center-flex.bdr {
            border-right: 1px solid #DDD;
        }

        .center-flex.bdrb {
            border-bottom: 1px solid #DDD;
        }

        .hideme {
            display: none;
        }

        .typ {
            display: none;
        }
        .prod-sel:hover{
            cursor: pointer;
        }
        @keyframes onblink{
            0%   {color:white;}
            50%  {color:#28A857;}
            100% {color:white;}
        }
        .dotss {
            animation-name: onblink;
            animation-duration: 1.5s;
            animation-iteration-count: infinite;
        }
    </style>
</head>
<div class="well" id="well">

    <div class="first-twin">
        <section class="section panel" width="100%">
            <div class="container-fluid text-white">
                <div class="row" style="padding: 15vh;">
                    <div class="col-1"></div>
                    <div class="col-5 center-me">
                            <h4 class="hideme" style="background: white;color: #F84764;padding: 5 10 5 10">
                                <span class="text-success dotss">●</span> Online <!--- <span id="ip_ip"></span>-->
                            </h4>
                        <h1 style="font-weight: 800;line-height: 1.5em;font-size: 35pt">
                            <img id="ip_flag" class="" src="https://ipgeolocation.io/static/flags/th_64.png" style="display: inline-block"/>
                            <span id="ip_loc" class="hideme">Bangkok, Thailand</span></br>
                            <span id="ip_isp" class="hideme">&nbsp;</span>
                        </h1><br><br>
                        <button onclick="scrollToAnchor('section-2')" class="btn btn-lg text-white hideme"
                            style="background: #6E61FA; font-weight: 300">นี่ใช่ข้อมูลของคุณหรือไม่?</button>
                    </div>
                    <div class="col-6 center-me text-center">
                        <img height="80%" src="/~it61070239/pricon/wp-content/themes/HumanRight%20Clean/custom_a/cloud-computing.svg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>

        <section class="section" width="100%" sname="section-2">
            <div class="container-fluid">
                <div class="row bg-pk-wt" style="padding: 5% 5% 15% 5%">
                    <div class="col-8 shadow-lg bg-white gb-box">
                        <h1 style="font-weight: 900; color:#DB3472; font-size: 35pt">ONLINE PRIVACY</h1><br>
                        <p style="font-family: Prompt;font-weight: 300; font-size: 14pt">
                            คุณไม่ได้ไร้ตัวตนบนโลกอินเทอร์เน็ต
                            จากข้อมูลที่แสดงในหน้าที่แล้วแสดงให้เห็นว่าคุณสามารถูกล่วงรู้ข้อมูลและสามารถตามตัวได้อยู่เสมอ
                        </p>
                    </div>
                    <div class="col-4 shadow-lg"
                        style="background-color: #FE6C4E; display:flex;align-items: center;justify-content: center;">
                        <!-- <img src="https://via.placeholder.com/300" class="img-fluid" alt="Responsive image"> -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section" width="100%">
        <div class="container-fluid center-me">
            <div class="row">
                <div class="col-3" style="padding:0;">
                    <img src="/~it61070239/pricon/wp-content/themes/seed/custom_a/s1.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-3 shadow-lg text-center" style="padding:0;">
                    <img src="/~it61070239/pricon/wp-content/themes/seed/custom_a/s2.jpg" class="img-fluid" alt="Responsive image">
                    <div style="padding: 1.4em">
                        <h2 class="year-digit">1948 - 2019</h2>
                        Post-WWII - Information Age
                    </div>
                </div>

                <div class="col-3" style="padding:0;">
                    <img src="/~it61070239/pricon/wp-content/themes/seed/custom_a/s3.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-3" style="padding:0;">
                    <img src="/~it61070239/pricon/wp-content/themes/seed/custom_a/s4.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div><br><br><br>
        </div>
    </section>

    <section class="section" width="100%">
        <div class="container">
            <div class="row">
                <div class="col-6" style="padding:0;line-height: 2em;">
                    <h1 style="font-weight: 900; color:#DB3472; font-size: 35pt;padding: 0;margin:0">Universal
                        Declaration of Human Rights</h1>
                    <span class="text-muted">1948 - Post-WWII</span><br><br>
                    <p> <span style="background: black;color: white; font-weight: 700; padding: 3px;">ข้อที่ 12</span>
                        บุคคลใด ๆ จะถูกแทรกสอดโดยพลการในความเป็นอยู่ส่วนตัวในครอบครัว ในเคหสถานหรือในการสื่อสาร
                        หรือจะถูกลบหลู่ในเกียรติยศและชื่อเสียงไม่ได้
                        ทุกคนมีสิทธิที่จะได้รับความคุ้มครองของกฎหมายต่อการแทรกสอด หรือการลบหลู่ดังกล่าวนั้น</p>
                    <a class="text-muted" href="https://th.wikisource.org/wiki/ปฏิญญาสากลว่าด้วยสิทธิมนุษยชน"
                        target="_blank">[Source]</a>
                </div>
                <div class="col-1"></div>
                <div class="col-5" style="padding:0;line-height: 2em;">
                    <h1 style="font-weight: 900; color:#DB3472; font-size: 35pt;padding: 0;margin:0">Information Age
                    </h1>
                    <span class="text-muted">2019 - Present Day</span><br><br>
                    <p>
                        ว่าด้วยหลักปฎิญญาสากลข้อ 12
                        ข้างต้นที่เราได้ยกขึ้นมาคุณรู้หรือไม่ว่าทุกวันนี้ในโลกอินเทอร์เน็ตที่เราใช้อยู่ในทุกวันนี้แทบจะไม่มีความเป็นส่วนตัวเลย
                        ไม่ว่าจะเป็นการที่เราค้นข้อมูลผ่าน Google
                        หรือทำอะไรก็ตามบนอินเทอร์เน็ตต่างก็ถูกเก็บข้อมูลเอาไว้ทั้งนั้น
                        ดังนั้นโครงงานของเราจึงจะนำเสนอให้ทุกท่านได้ทราบว่าในทุกๆวันเราโดนเอาข้อมูลอะไรที่เป็นของส่วนตัวไปบ้างและจะมีวิธีใดบ้างที่จะป้องกันตัวเองจากการโดนล้วงข้อมูลจากอินเทอร์เน็ตได้บ้าง
                    </p>
                </div>
            </div><br><br><br>
        </div>
    </section>

    <section class="section" width="100%"
        style="background: linear-gradient(90deg, rgba(247,64,113,1) 0%, rgba(223,53,252,1) 100%);padding: 16% 0 16% 0;">
        <div class="container text-center text-white">
            <h1>แล้วข้อมูลส่วนตัวสามารถถูกขโมยไปได้ด้วยวิธีใดบ้าง?</h1>
            <div class="text-white" style="font-weight: 300">
                บนอินเทอร์เน็ตเราถูกละเมิดความเป็นส่วนตัวข้อมูลได้ทุกเมื่ออย่างไม่รู้ตัว</div>
        </div>
    </section>

    <section class="section" width="100%">
        <div class="container-fluid">
            <div class="row" style="padding: 15% 5% 15% 5%">
                <div class="col-6 shadow-lg pd-19"
                    style="background-color: #FE6C4E; display:flex;align-items: center;justify-content: center;">
                    <table>
                        <tr>
                            <td style="padding-bottom: 8px;">
                                <button onclick="openfk('fb')"
                                    class="btn btn-lg btn-block btn-primary"><i class="fab fa-facebook-square"></i>
                                    Login with Facebook</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="openfk('google')"
                                    class="btn btn-lg btn-block btn-danger"><i class="fab fa-google"></i> Login with
                                    Google</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-6 shadow-lg pd-7">
                    <h1 style="font-weight: 900; color:#DB3472; font-size: 35pt">PHISHING</h1><br>
                    <p style="font-family: Prompt;font-weight: 300; font-size: 14pt" id="ph_txt">
                        การฟิชชิ่งนั้นอันตรายอย่างไร ให้ลองเลือกช่องทางการเข้าสู่ระบบสักช่องทางในกล่องด้านซ้ายดูสิ
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" width="100%">
        <div class="container-fluid panel text-center">
            <h1>เลือกประเภทสินค้าที่สนใจมา 1 ชนิด</h1>
            <div class="row table-hover" style="padding: 0 10% 0% 10%">
                <div class="col-4 prod-sel bg-white center-flex bdr bdrb">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/washing-machine.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" id="choose">
                                เครื่องใช้ไฟฟ้า
                                <span class="typ">elec</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 prod-sel bg-white center-flex bdr bdrb">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/hanger.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                เครื่องแต่งกาย
                                <span class="typ">appr</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 prod-sel bg-white center-flex bdrb">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/smartphone-call.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                โทรศัพท์มือถือ
                                <span class="typ">phone</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 prod-sel bg-white center-flex bdr">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/football.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                กีฬาและการเดินทาง
                                <span class="typ">sport</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 prod-sel bg-white center-flex bdr">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/stars.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                สุขภาพความงาม
                                <span class="typ">health</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 prod-sel bg-white center-flex">
                    <table>
                        <tr>
                            <td class="text-center" style="padding-bottom: 8px;">
                                <img width="100" style="padding:20" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/sico/roller.svg" class="img-fluid" alt="Responsive image">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                บ้านและไลฟ์สไตล์
                                <span class="typ">lifes</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <a onclick="selNone()" class="text-center text-muted"><u>ข้าม</u></a><br><br><br><br><br><br>
        </div>
        <a sname="acc"></a>
    </section>
    <section class="section h-100" width="100%">
        <div class="container">
            <div class="row">
                <div class="col-7 text-center center-me">
                    <h1 style="font-weight: 900; color:#DB3472; font-size: 35pt">ADS TARGETING</h1><br>
                    <p>
                        โฆษณาบนอินเทอร์เน็ตในทุกวันนี้ต่างก็เป็นโฆษณาแบบเจาะกลุ่มผู้ใช้งาน
                        โดยจะดึงเอาข้อมูลของผู้ใช้อินเทอร์เน็ตว่าสนใจในสิ่งใดขึ้นมาเป็นตัววัด ยกตัวอย่างเช่น
                        สมมติว่าเราได้ค้นหานาฬิกาเรือนหนึ่งเมื่อวานนี้
                        ในเวลาต่อมาเมื่อเราเปิดไปหน้าเว็บไหนต่างก็ต้องเจอกับหน้าต่างโฆษณานาฬิกาอยู่เรื่อยไป
                    </p>
                </div>
                <div class="col-5">
                    <img id="a-1" width="100%" src="https://via.placeholder.com/500x400" />
                </div>


                <div class="col-5">
                    <img id="a-2" width="100%" src="https://via.placeholder.com/500x400" />
                </div>
                <div class="col-7 text-center center-me">
                    <p>
                        ทั้งนี้ข้อมูลความสนใจของเขาได้ถูกเอาไปอย่างไม่ถูกต้องดีนัก
                        จากการที่ไม่แสดงรายละเอียดการขออนุญาตว่าจะนำข้อมูลของเราออกไปใช้งานที่ชัดเจนนักหรือในบางทีก็ไม่มีการขออนุญาตเลยแม้แต่นิดเดียว
                        ซึ่งประเด็นนี้ได้เป็นที่ถกเถียงกันมาอยู่เป็นระยะเวลานานแล้วถึงความถูกต้องของสิทธิส่วนบุคคล
                    </p>
                </div>
            </div>
        </div><br><br><br>
    </section>

    <section class="section panel" width="100%"
        style="background: linear-gradient(90deg, rgba(133,84,222,1) 0%, rgba(193,95,250,1) 100%);padding: 4% 0 4% 0;">
        <div class="container text-center text-white">
            <h1>กรณีตัวอย่างของการโดนละเมิดความเป็นส่วนตัวของข้อมูล</h1>
            <div class="text-white" style="font-weight: 300">
                การละเมิดนั้นมีทั้งในระดับรายบุคคลไปจนถึงการละเมิดในระดับประเทศ</div><br>
        </div>
        <div class="container center-me">
            <div class="row center-me">
                <div class="col-lg">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">หัวข้อ</h4>
                            <p class="card-text">เรื่องย่อ</p>
                            <a href="#" class="btn btn-primary">เพิ่มเติม ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">หัวข้อ</h4>
                            <p class="card-text">เรื่องย่อ</p>
                            <a href="#" class="btn btn-primary">เพิ่มเติม ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">หัวข้อ</h4>
                            <p class="card-text">เรื่องย่อ</p>
                            <a href="#" class="btn btn-primary">เพิ่มเติม ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<script type="text/javascript" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/ip_scripts.js"></script>
<script type="text/javascript" src="/~it61070239/pricon/wp-content/themes/seed/custom_a/scripts.js"></script>
<?php get_footer(); ?>