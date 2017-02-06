{template:header}
</head>
<body>

<!-- Main Navigation 
================================================== -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{$host}">{$name}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="scroll">首页</a></li>
            {$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pagec);}
            <li><a href="#whatIdo" class="scroll">{$aboutme.Title}</a></li>
            {$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->paged);}
            <li><a href="#about" class="scroll">{$aboutme.Title}</a></li>
            <li><a href="#works" class="scroll">{$categorys[$zbp->Config('YT_Ideus')->casea].Name}</a></li>
            <li><a href="#experience" class="scroll">{$categorys[$zbp->Config('YT_Ideus')->caseb].Name}</a></li> 
            {$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pagee);}
            <li><a href="#contact" class="scroll">{$aboutme.Title}</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Home Section
================================================== -->
{$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pagea);}
<section id="home" style="background: url({$aboutme.Metas.pic});">
    <div class="overlay"> <!-- Overlay Color -->
        <div class="container"> <!-- container -->
            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                <h1>{$aboutme.Title}</h1>
                {$aboutme.Content}
            </div><!-- End Input Your Home Content Here -->
        </div> <!-- end container -->
    </div><!-- End Overlay Color -->
</section>

{$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pageb);}
<!-- Intro Section
================================================== -->
<section id="intro">
    <div class="container"> <!-- container -->
        <div class="row"> <!-- row -->
            <div class="col-md-8 col-md-offset-2"> 
                 <h1>{$aboutme.Title}</h1>
                {$aboutme.Content}
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>


{$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pagec);}
<!-- Service Section
================================================== -->
<section id="whatIdo">
    <div class="container"> <!-- container -->

        <div class="section-header">
            <h2>{$aboutme.Title}</h2>
            <div class="fancy"><span></span></div>
        </div>

        <div class="row"> <!-- row -->
            
            <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                <img src="{$aboutme.Metas.pic}" class="intro-logo img-responsive" alt="free-template">
            </div> <!-- End Left Content Col 6 -->

            <div class="col-md-6"> <!-- Right Content Col 6 -->
                <div class="media service"> <!-- Service #5 -->
                    {$aboutme.Content}
                </div> <!-- end Service #5 -->
            </div><!-- end Right Content Col 6 -->
            
        </div><!-- end row -->

    </div><!-- end container -->
</section>

<!-- About Us Section
================================================== -->
{$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->paged);}
<section id="about">
<div class="container"> <!-- container -->
        <div class="section-header">
            <h2>{$aboutme.Title}</h2>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->    
<div class="container">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-1 scrollimation fade-right in">
            <img class="img-responsive img-circle img-center" src="{$aboutme.Metas.pic}" alt="">
        </div>
        <div class="col-sm-6 col-sm-offset-1 scrollimation fade-left in">
            {$aboutme.Content}
        </div>
    </div><!--End row -->
    
</div><!--End container -->

</section>
 
<!-- Works Section
================================================== -->
<section id="works">
    <div class="container">
        <div class="section-header">
            <h2>{$categorys[$zbp->Config('YT_Ideus')->casea].Name}</h2>
            <h5>{$categorys[$zbp->Config('YT_Ideus')->casea].Intro}</h5>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- End Container -->

    <div class="container-fluid"> <!-- fluid container -->
         <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->
      {foreach Getlist(8,$zbp->Config('YT_Ideus')->casea) as $related}
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding"> <!-- Works #1 col 3 -->
                <div class="box"> 
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <a title="{$related.Title}" href="{$related.Metas.pic}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$related.Metas.pic}">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div> 
                        <img src="{$related.Metas.pic}" class="img-caseresponsive" alt="Image"> <!-- Portfolio Image -->
                    </div>
                </div>
            </div><!-- end Works #1 col 3 -->
      {/foreach}
        </div> <!-- End Row -->

    </div> <!-- End Container-Fluid -->
</section>

<!-- experience Section
================================================== -->
<section id="experience">
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>{$categorys[$zbp->Config('YT_Ideus')->caseb].Name}</h2>
            <h5>{$categorys[$zbp->Config('YT_Ideus')->caseb].Intro}</h5>
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->

    <div class="gray-bg"> <!-- fullwidth gray background -->
        <div class="container"><!-- container --> 
            <div id="experience" class="row"> <!-- row -->

                <div class="col-md-10 col-md-offset-1">
      {foreach Getlist(5,$zbp->Config('YT_Ideus')->caseb) as $related}
                    <div class="media experience"> <!-- experience #1 -->
                        <div class="media-body">
                            <h4 class="media-heading">{$related.Title}</h4>
                            <h5>{$related.Time('Y年m月d日')}</h5>
                            <p>{$related.Intro}</p>
                        </div>
                    </div><!-- experience #1 -->
      {/foreach}
                </div>

            </div> <!-- end row -->
        </div><!-- end container -->
    </div>  <!-- end fullwidth gray background -->
</section>


<!-- Contact Section
================================================== -->
<section id="contact">
{$aboutme=GetPost((int)$zbp->Config('YT_johndoe')->pagee);}
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>{$aboutme.Title}</h2>
            {$aboutme.Content}
            <div class="fancy"><span></span></div>
        </div>
    </div><!-- end container -->

    <div class="container"><!-- container -->
        <div class="row"> <!-- outer row -->
            <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                <div class="row"> <!-- nested row -->

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">  
                        <div class="contact-detail">
                            <i class="fa fa-map-marker"></i>
                            <h4>{$zbp->Config('YT_johndoe')->tcadd}</h4> <!-- address -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-envelope-o"></i>
                            <h4>{$zbp->Config('YT_johndoe')->tcmail}</h4><!-- email add -->
                        </div>
                    </div>

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-phone"></i>
                            <h4>{$zbp->Config('YT_johndoe')->tctel}</h4> <!-- phone no. -->
                        </div>
                    </div>

                </div> <!-- end nested row -->
            </div> <!-- end col 10 with offset 1 to centered -->
        </div><!-- end outer row -->

{template:commentpost}

    </div><!-- end container -->

</section>
{template:footer}