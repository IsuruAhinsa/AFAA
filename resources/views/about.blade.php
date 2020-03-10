@extends('layouts.app')

@section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="section-row">
                        <div class="section-title">
                            <h2 class="title">Our story</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
                        <blockquote class="blockquote">
                            <p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-row">
                        <div class="section-title">
                            <h2 class="title">Our Vision</h2>
                        </div>
                        <p>Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p>
                        <p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
                    </div>
                </div>
            </div>

            <div class="row" >

                <div class="col-md-12">

                    <div class="text-center">
                        <h1 style="margin-bottom: 0;">{{ strtoupper('Director') }}</h1>
                        <h4>Mr. W.A.I.Neranjan <br>(Consultant Fashion & Textile Designer / Lecture)</h4>
                        <hr>
                    </div>

                    <div class="col-md-3">
                        <img src="{{ asset('img/media-1.jpg') }}" alt="" class="img-responsive">
                    </div>

                    <div class="col-md-9" style="margin-bottom: 50px;">
                        <p class="text-justify">
                            Mr. W.A.I.Neranjan is one of the veteran and talented fashion and textile designer in Sri Lanka .Starting his professional career in 2011.He has contributed to fashion and Modeling Industry in Sri Lanka in many events, including various television programmers. He is also the founder and owner of "universal fashion studio" which is established as an academy for the talented and young individuals in Sri Lanka to study and specialize fashion designing, Textile designing & Development costume designing, Fashion Marketing,Fashion Modeling and Fashion Photography.
                        </p>
                        <p class="text-justify">
                            His Education Qualification BA (Hons) in Fashion designing,Higher Diploma in Textile designing and developments. Higher Diploma in fashion Marketing & product development. He also invited lecture, japan bunka fashion university and Chennai national University.
                        </p>

                    </div>

                    <div class="text-center">
                        <h1 style="margin-bottom: 0;">{{ strtoupper('Official Event Producer') }}</h1>
                        <h4>Mediaalent</h4>
                        <hr>
                    </div>

                    <div class="col-md-3">
                        <img src="{{ asset('img/parties/mediaalent.png') }}" alt="" class="img-responsive">
                    </div>

                    <div class="col-md-9">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, alias aperiam at atque beatae blanditiis doloremque doloribus earum eligendi explicabo facilis fugiat harum inventore ipsa iure laborum magni maiores maxime molestiae nesciunt, nisi nobis nulla odio officia quaerat quam quibusdam quidem quis rem reprehenderit rerum saepe soluta sunt ullam veniam vero voluptatum. Assumenda, culpa maiores molestias odio quae quidem repudiandae suscipit totam voluptas. Ab beatae blanditiis commodi deserunt dolor eius est ex fugiat hic ipsa laborum magni neque optio perferendis placeat quibusdam saepe, vitae voluptatem. Atque aut, culpa? Architecto aspernatur doloribus ipsam, labore obcaecati provident quam rem sapiente sunt vero?
                        </p>

                    </div>

                </div>

            </div>

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection
