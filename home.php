<?php get_header(); ?>
<div class="large">
        <div id="myCarousel3" class="carousel slide ">
            <!-- Индикаторы карусели -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel3" data-slide-to="1"></li>
                <li data-target="#myCarousel3" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <!-- 1 слайд -->
                <div class="item active firstslide"> 
                    <div class="text">
                        <h1>IN THE DEPTH</h1>
                        <h3>Cвіт всередині кожного з нас, і навіть в піщинці можна побачити - Всесвіт. <br>
Відчуйте поєднання класичних форм, джазової імпровізації, народних та етнічних мотивів світу</h3>
                        <div class="video"> <a href="https://www.youtube.com/watch?v=k4YM09mzdfA&feature=youtu.be" data-toggle='modal' data-target="#modal-video-1">Переглянути відео</a>  
                        </div>
                    </div>
                </div>
                <!-- 2 слайд -->
                <div class="item secondslide"> 
                  <div class="text">
                        <h1>EVERY STEP</h1>
                        <h3>Кожен крок - це танець.Кожне слово - це пісня.Кожне відчуття - це кохання.</h3>
                        <div class="video"> <a href="#" data-toggle='modal' data-target="#modal-video-2">Переглянути відео</a>  
                        </div>
                    </div>
                  </div>
                <!-- 3 слайд -->
                <div class="item thirdslide">
                  <div class="text col-lg-8 col-lg-offset-2">
                        <h1>LIVE PERFORMANCE AT HI5 STUDIO</h1>
                        <h3>We care about the consciousness of others, therefore we incorporate mantras within our music</h3>
                        <div class="video"> <a href="#" data-toggle='modal' data-target="#modal-video-3">Переглянути відео</a>  
                        </div>
                    </div>
                  </div>
            </div>
            <!-- Система навигации для карусели, с помощью которой осуществляется переход на предыдущий и следующий слайд --><a class="carousel-control left" href="#myCarousel3" data-slide="prev">‹</a> <a class="carousel-control right" href="#myCarousel3" data-slide="next">›</a> </div>
     
     <?

       query_posts(array('category_name' => 'schedule', 'posts_per_page' => 5, 'orderby' => 'id', 'order' => 'DESC' ));
       if (have_posts()):
    ?>
        <section class="concert">
            <div class="conc">
                <div class="rozklad">
                    <h2>Розклад концертів</h2>
                    <a href="#">Весь розклад</a>
                </div>
                <?php 
                while (have_posts()): the_post();
                    $location = get_field( "location" );
                    $data = explode('.', get_field( "data" ));
                        ?>
                <div class="linea col-sm-12 col-xs-12"></div>
                <div class="conc-item col-sm-12  container">
                    <div class="month col-lg-2 col-sm-3 ">
                        <div class="number">
                            <p><?=$data[0]?></p>
                        </div>
                        <div class="yearmonth">
                            <p>
                            <?=$_LMM[$data[1]-1]?>, <?=$data[2]?>
                            </p>
                        </div>
                    </div>
                    <div class="geo col-lg-3 col-sm-3">
                        <div class="country"><img src="<?php bloginfo('url')?>/wp-content/themes/atmasfera/images/geo.png" alt="geo"> <?=$location?></div>
                    </div>
                    <div class="event col-lg-3 col-sm-3">
                        <p><? the_title() ?></p>
                    </div>
                    <div class="details-conc col-lg-2 col-lg-offset-2 col-sm-3">
                        <div class="details"><a href="<?php the_permalink(); ?>"><p>переглянути</p></a></div>
                    </div>
                </div>
            <?php endwhile;?>
        </section>
    <? endif;?>
        <section class="new large" style="position: relative; background: #000;">
           <div class="bg"></div>
            <div class="news">
            <div class="headn"><p>події та новини</p></div>
            <div class="area "><input id="area" type="text" placeholder="Ваш e-mail "></div>
            <button type="button" class="btn btn-succes" data-toggle='modal' data-target="#modal-2">ПІДПИСАТИСЬ</button>
            </div>
            <div class="help">
              <div class="headn"><p>допомога проекту</p>
              <p id="sos">Наш проект не є комерційним, тому будемо вдячні за будь-яку допомогу.Кожна гривня може змінити ситуацію=)</p>
              </div>  
              <button type="button" class="btn btn-succes" data-toggle='modal' data-target="#modal-1">ПІДТРИМАТИ ПРОЕКТ</button>
            </div>
        </section>

<div class="music"> 
<div class="header-player"> 
<div class="first"><h1>АУДІО МАТЕРІАЛИ</h1></div>












<div> 

<ul class="nav nav-tabs alboms" role="tablist"> 

<li role="presentation" class="menu-sm-item active"> 
<script> 
tracksE2[3] = [ 
["На глибині (In the Depth)", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/На глибині (In the Depth)"] 
]; 
</script> 
<a class='navitem' href="#inthedepth" onclick = "albumSwitch(3, tracksE2); return false;" aria-controls="inthedepth" role="tab" data-toggle="tab">In the Depth</a> 
</li> 

<li role="presentation" class="menu-sm-item active"> 
<script> 
tracksE2[0] = [ 
["Intro", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Intro"], 
["Where Should I Go", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Where Should I Go"], 
["Bala", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Bala"], 
["Lonely Night", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Lonely Night"], 
["War - Part - I", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/War - Part - I"], 
["Inside - Part - II", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Inside - Part - II"], 
["Inspiration - Part - III", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Inspiration - Part - III"], 
["Life - Part - IV", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Life - Part - IV"], 
["Voice of the Wind", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Voice of the Wind"], 
["Fly Away", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Fly Away"], 
["Viva", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Viva"] 
]; 

</script> 
<a class='navitem ' href="#internal" onclick = "albumSwitch(0, tracksE2); return false;" aria-controls="internal" role="tab" data-toggle="tab">Internal</a></li> 
<li role="presentation" class="menu-sm-item"> 
<script> 
tracksE2[1] = [ 
["In...", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/In..."], 
["Нескінченна історія", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Neskinchenna_istorija"], 
["Інший світ", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Inshij_svit"], 
["Шепіт", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Shepit"], 
["Квітка і вітер", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Kvitka_i_viter"], 
["Козак", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Kozak"], 
["Гуцул", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Guzul"], 
["Кожен крок...", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Kozhen_krok"], 
["Namaste", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Namaste"] 
]; 

</script> 
<a class='navitem' href="#integro" onclick = "albumSwitch(1, tracksE2); return false;" aria-controls="integro" role="tab" data-toggle="tab">Integro</a></li> 
<li role="presentation" class="menu-sm-item"> 
<script> 
tracksE2[2] = [ 
["Nama Om", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Nama Om"], 
["Syamakunda Radhakunda", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Syamakunda Radhakunda"], 
["Radharani Syamasundar", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Radharani Syamasundar"], 
["Samsara", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Samsara"], 
["Sri-Guru", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Sri-Guru"], 
["...forgotten love (ukrainian version)", "<?php bloginfo('url')?>/wp-content/themes/...forgotten love (ukrainian version)"], 
["Gopala", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Gopala"], 
["...forgotten love", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/...forgotten love"], 
["Gouranga", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Gouranga"], 
["Brahma-Samhita", "<?php bloginfo('url')?>/wp-content/themes/atmasfera/audio/Brahma-Samhita"] 
]; 
</script> 
<a class='navitem' href="#forgotten" onclick = "albumSwitch(2, tracksE2);
return false;" aria-controls="forgotten" role="tab" data-toggle="tab">Forgotten Love</a></li> 
</ul> 


<div class="tab-content large"> 

<div role="tabpanel" class="tab-pane " id="inthedepth"><div class="album-img"></div><div class="album-desc"></div></div> 

    <div role="tabpanel" class="tab-pane active" id="internal"><div class="album-img"> 
<img src="<?php bloginfo('url')?>/wp-content/themes/atmasfera/images/album2.png"> 
</div> 
<div class="album-desc col-lg-4 col-lg-offset-4"><p>Феномен української музики гурт AtmAsfera випустили третій студійний альбом, який отримав назву «Internal» у 2о12 році. Як і раніше, перед нами якісний world music, адже альбом об'єднав музичну культуру різних народів світу, а музика включає деталі фолку різних країн.</p><a href="https://www.amazon.com/Internal-Atmasfera/dp/B013LUOBSM/ref=s.."><button type="button" class="btn btn-succes hochu" data-toggle='modal' data-target="#modal-1">ХОЧУ ПРИДБАТИ</button></a> 
<div class="all det col-md-8 col-lg-5 col-lg-offset-4"><a href="#">Детальніше</a></div></div> 
<!-- <div role="tabpanel" class="tab-pane" id="integro"><div class="album-img"> 
<img src="<?php bloginfo('url')?>/wp-content/themes/atmasfera/images/album3.png"> 
</div>  -->
<!-- <div class="album-desc col-lg-4 col-lg-offset-4"><p>Другий альбом був записаний в Києві, на White Studio і виданий у 2011 році. Зведення та мастеринг знову робив Юрій Лич. У ньому переважають драйвові пісні, і сама музика стала більш динамічною - це його головна відмінність.. Але навіть зі зміною форми суть залишилася колишньою.</p><a href="https://www.amazon.com/Integro-Atmasfera/dp/B013W763XU/ref=sr.."><button type="button" class="btn btn-succes hochu" data-toggle='modal' data-target="#modal-1">ХОЧУ ПРИДБАТИ</button></a> 
<div class="all det col-md-8 col-lg-5 col-lg-offset-4"><a href="#">Детальніше</a></div></div>  -->
<div role="tabpanel" class="tab-pane" id="forgotten"><div class="album-img"></div><div class="album-desc"></div></div> 
</div> 

</div> 












<section class="play">
    <div class="music">
        <div class="large">
<div class="audio-player clearfix">
<div id ="trackbox" class="col-md-4"></div>
<div  class=""></div>
<div class = "pl col-md-6" style="padding: 0">
<div class="col-md-12">
<h5>Ви слухаєте трек:</h5>
<h3 id="playlist_status"></h3>
</div>
<div id="audio_player col-md-12">

<div id="timebox" class=" col-md-4">
<input id="seekslider" type="range" min="0" max="100" value="0" step="1">
<span id="curtimetext">00:00</span> / <span id="durtimetext">00:00</span>
</div>


<div class="audio_controls col-md-12"> 
<button id="playpausebtn"></button>
<button id="playbackbtn"></button>
<button id="playnextbtn"></button> 
<button id="mutebtn"></button> 
<button id="playreversebtn"></button> 
</div>
<div id="vol" class="col-md-12">
<input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
<div class="col-md-8" style ="padding:0">
<h5 style="color:black">Поділіться з друзями:</h5>
<div class="item-conts">
    <div class="items-shares">                           
    <a href = "https://www.facebook.com/sharer/sharer.php?u=http://new.atmasfera.com" target="_blank"><div class="item1 facebook"><?php echo get_option('omr_facebook_url');?></div></a>
    <a href="http://vk.com/share.php?url=http://new.atmasfera.com" target="_blank"><div class="item1 vk"><?php echo get_option('omr_vk_url');?></div></a>                         
    <a href = "https://twitter.com/home?status=http%3A//new.atmasfera.com" target="_blank"><div class="item1 twitter"><?php echo get_option('omr_twitter_url');?></div></a>
    <a href = "https://www.instagram.com/atmasfera/" target="_blank"><div class="item1 insta"><?php echo get_option('omr_insta_url');?></div></a>
    <a href = "https://plus.google.com/share?url=http%3A//new.atmasfera.com" target="_blank"><div class="item1 google"><?php echo get_option('omr_google_url');?></div></a>
    </div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>
    </div>
      </section>
        <div class="live container">
            <header>
                <div class="control-car col-lg-1"></div>
                <div id="head" class="col-lg-4 col-lg-offset-3"><p>життя группи</p></div>
                <div class="all col-lg-2 col-lg-offset-2"><a href="#">Всі новини</a></div>
                <div class="content-live"><div class="photo"></div><div class="desc">
                <div class="date "><div class="number">
                        <p>25</p>
                        </div>
                        <div class="yearmonth">
                            <p>грудня,2016</p>
                        </div></div>
                        <div class="content-name"><h4>Atmasfera Live Performance на Hi5 Studio у Дніпрі</h4></div>
                        <div class="content-desc"><p>Представляємо Вам нашу спільну роботу зі студією HI5 Production у Дніпрі. "Це був прекрасний день, в якій нам вдалося зафіксувати 3 наші нові композиції, які зараз визначають напрямок нашої творчості ...</p></div>
                        <div class="hash">
                        <div class="hashteg"><p>#Студія</p></div>
                        <div class="hashteg"><p>#Гастролі</p></div>
                        <div class="hashteg"><p>#Поїздка</p></div>
                        </div>
                    </div></div>
                </header>
            </div>
      
<?php get_footer(); ?>