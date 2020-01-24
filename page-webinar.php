<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/webinar.css?v=1" rel="stylesheet">
    <script>
    require(["require.config"], function() {
        require(["jquery"])
    });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name=”Description” content="Nextcloud is the most secure private cloud solution - learn how it keeps your data safe!">


</head>

<div class=" background webinar-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Webinars');?></h1>
            <h2><?php echo $l->t('Learn more about Nextcloud');?></h2>
        </div>
    </div>
</div>


<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <!--<p class="section--paragraph text-center"><?php echo $l->t('TBD');?></p>-->
		</div>
	</div>
</div>
</section>

<section class="section--webinar">
<div class="container">
	<div class="row">
        <div class="col-md-6">
            <img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/onlyoffice_roadmap_nextcloud.jpg" alt="partner logo" >
        </div>
		<div class="col-md-6">
            <p class="section--paragraph__tittle"><small><?php echo $l->t('November 20, 2019');?></small><br /> <?php echo $l->t('ONLYOFFICE webinar');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud and ONLYOFFICE joined forces to show you the power of integrating real-time collaborative editing into Nextcloud. In this webinar, we cover the most important features of ONLYOFFICE Integration Edition, and the capabilities it brings to your Nextcloud. Bring productivity to your team while keeping your data under control.');?></p>
            <a class="button button--blue" href="tbd">Watch the webinar</a>
        </div>
	</div>
</div>
</section>
