<?php
/* @var $this SiteController */
$themePath = Yii::app()->theme->baseUrl;
$this->pageTitle = Yii::app()->name;

echo BSHtml::jumbotron('JibberJabber Jibber', 'My House!<p class="text-muted">i guess there are a few things that need to be discussed...</p>')
?>

</div>
</div>
<style>
</style>
<div class="container-fluid " id="welcome">
    <div class="content">
        <div class="slider"><!-- your slider container -->
            <div class="fs_loader"><!-- shows a loading .gif while the slider is getting ready --></div>
            <div class="slide" data-out="left" data-in="fade"><!-- all elements for the first slide -->
                <h1 data-in="fade" data-out="fade" class="text-primary" data-position="30,650" data-delay="100" data-time="1200">User friendly transitions</h1>
                <h1 data-in="right" data-out="right" class="text-success" data-step="1" data-position="80,400" data-delay="200"  data-time="1250">Slide transitions</h1>
                <h1 data-in="top" data-out="fade" data-position="105,440" data-step="1" data-delay="500" data-time="2250"><small>set individual animation per slide</small></h1>
                <h1 data-in="left" class="" data-position="140,480" data-step="1" data-delay="1000" data-time="2000">or just set it global</h1>
                <h1 data-in="fade" data-out="bottm" class="text-info" data-step="2" data-position="80,950" data-delay="200"  data-time="1250">scroll 'em</h1>
                <h1 data-in="top"  data-out="fade" class="text-info" data-step="2" data-position="110,950"  data-delay="500" data-time="2250">blend 'em</h1>
                <h1 data-in="fade"  class="text-info" data-step="2" data-position="140,950"  data-delay="100" data-time="3250">fade 'em</h1>
            </div>
            <div class="slide" data-out="fade" data-in="fade"><!-- all elements for the second slide -->
                <h1 data-in="fade" data-out="fade" style="font-size:6.5em;" class="text-muted" data-step="1" data-position="100,550" data-delay="0" data-time="2200">Clear Movement Options</h1>
                <h1 data-in="fade" data-out="bottom-right" style="font-size:4.5em;" class="text-info" data-step="2" data-position="60,900" data-delay="500"  data-time="1250">scroll 'em</h1>
                <h1 data-in="top" data-out="right" style="font-size:3.5em;" class="text-primary" data-step="2" data-position="20,600"  data-delay="1500" data-time="2250">blend 'em</h1>
                <h1 data-in="fade"  class="text-info" style="font-size:4.5em;"data-position="120,200"  data-step="2" data-delay="2500" data-time="3250">fade 'em</h1>
            </div>
        </div>
        <!-- and so on -->
    </div>
</div>

<div class="container" >
    <div class="col-lg-4">
        <div class="bubble-icon fade-bg "><i class="fa fa-camera-retro fa-lg fade-bg fade-red fade-white-font"></i> </div>
        <h3>We did well this time</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque.
        </p>
    </div>

    <div class="col-lg-4">
        <div class="bubble-icon fade-bg "><i class="fade-white-font fa fa-android fa-lg "></i> </div>
        <h3>Testing</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. 
        </p>
    </div>

    <div class="col-lg-4">
        <div class="bubble-icon fade-bg"><i class="fade-white-font fa fa-edit fa-lg"></i> </div>
        <h3>Web Development</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis.
        </p>
    </div>
</div>
<p id="forest"></p>
<div class="clearfix"></div>
<div class ='parallax_wrap'>
    <div class='forest' data-stellar-ratio=".7" data-stellar-vertical-offset="0"></div>
    <div class='birds'  data-stellar-vertical-offset="280" data-stellar-ratio="2.7"></div>
</div>
<div class="container">
    <div class="content">
        <div class="col-lg-12">
            
            <h3>We did well this time</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>
        <div class="col-lg-4">
            <h3>Testing</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>
        <div class="col-lg-4">

            <div class="bubble-icon white fade-bg no-padding"><i class="fade-white-font fa fa-flask fa-lg" style='color:#527D2E;'></i> </div>
            <h3>Testing</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>

        <div class="col-lg-4">
            <h3>Web Development</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>
    </div>
</div>
<p id="space"></p>
<div class ='parallax_wrap' >
    <div class='space' data-stellar-ratio=".7" data-stellar-vertical-offset="0"></div>
</div>
<div class="container">
    <div class="content">
        <div class="col-lg-6">
            <h3><i class=" fa fa-edit fa-lg"> We did well this time</i></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>

        <div class="col-lg-6">
            <h3><i class=" fa fa-lg fa-bell"> Testing</i></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>

        <div class="col-lg-3">
            <h3>Web Development</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>
        <div class="col-lg-3">
            <h3>We did well this time</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. emper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>

        <div class="col-lg-3">
            <h3>Testing</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. 
            </p>
        </div>

        <div class="col-lg-3">
            <h3>Web Development</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis ac nulla aliquet accumsan vitae et neque. Donec sodales sem vulputate sodales pretium. Nulla porta sem eget faucibus lacinia. Praesent scelerisque gravida risus eget mollis. Nulla feugiat auctor euismod. Donec rhoncus urna ut elit molestie, nec dictum lacus tempus. Phasellus semper elit dui. In eget fringilla dolor, ac accumsan enim. In id enim lorem. Mauris justo ligula, viverra non aliquet in, dictum a ante. Duis quis sapien sit amet tellus fringilla pharetra ac vel neque. Donec ultricies libero ut imperdiet laoreet. Praesent porttitor dolor et velit semper, et mattis arcu gravida. Fusce vel elementum magna. Nulla felis ligula, consequat et sodales nec, fermentum ac erat.
            </p>
        </div>
        <?php
        /*
          $items = array(
          array('image' => 'http://placehold.it/300x300&text=First+thumbnail', 'label' => 'First Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
          array('image' => 'http://placehold.it/300x300&text=Second+thumbnail', 'label' => 'Second Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
          array('image' => 'http://placehold.it/300x300&text=Third+thumbnail', 'label' => 'Third Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
          );
          echo BSHtml::carousel(
          $items
          ); */
        ?>
       
