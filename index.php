<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Progreso">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Progreso</title>
        
    </head>
    <body>
        <style type="text/css">
        	
.progress {
	position: relative;
	z-index: 5;

	background:#484848;
	border:10px solid #282828;
	border-radius: 20px;
	display: inline-block;
	box-shadow: 0 5px 17px rgba(40, 40, 40, 0.5),0 0 3px 1px rgba(40, 40, 40, 0.5) inset;

}
.progress-text {
	position: absolute;
	font: bold 14px/20px Arial;
	text-align: center;
	top: 0;
	left: 0;
}
.progress, .progress-bar, .progress-text {
	width: 200px;
	max-width: 200px;
	height: 20px;
}
.progress .progress-text:first-child {
	z-index: 5;
	color: white;
}
.progress .progress-text:last-child {
	z-index: 10;
	color: black;
}
.progress-bar {
	overflow: hidden;
	position: relative;
	z-index: 10;
 	border-radius: 12px;
	width: 0;
	-moz-transition: width .2s linear;
	-webkit-transition: width .2s linear;
	-o-transition: width .2s linear;
	transition: width .2s linear;
}



/* Test Style */
.progress.test .progress-bar {
	background-color: #00baba;
	background-image: -moz-linear-gradient(left, #d1fffb 0%, #00baba 100%);
	background-image: -webkit-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: -o-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: -ms-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: linear-gradient(to right, #d1fffb 0%,#00baba 100%);
    background-size: 200px 20px;

	overflow: visible;
}
.progress.test .progress-text:first-child {
	display:none;
}
.progress.test .progress-text:last-child {
	left: auto;
	top:auto;
	bottom: -26px;
	right: -12px;
	display: block;
	background-color: #00baba;
	width: 40px;
	height: 20px;
	border-radius: 3px;
}

.test[data-width='0%'] .progress-text:last-child {
	display: none;
}

.progress.test .progress-text:last-child:before {
	position: absolute;
	left: 12px;
	top: -6px;
	content: '';
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 6px 6px 6px;
	border-color: transparent transparent #00baba transparent;
}

/* Copper style */
.progress.copper .progress-bar {
	background-color: #b68d4c;
	background-image: -moz-linear-gradient(top, #f3e2c7 0%, #b68d4c 51%, #e9d4b3 100%);
	background-image: -webkit-linear-gradient(top, #f3e2c7 0%,#b68d4c 51%,#e9d4b3 100%);
	background-image: -ms-linear-gradient(top, #f3e2c7 0%,#b68d4c 51%,#e9d4b3 100%);
	background-image: linear-gradient(to bottom, #f3e2c7 0%,#b68d4c 51%,#e9d4b3 100%);
	box-shadow: inset 2px 2px 3px 0 rgba(255, 255, 255, 0.75), inset -3px 0 3px 0 rgba(255, 255, 255, 0.75);
}

/* Aqua Style */
.progress.aqua .progress-bar {
	background-color: #00baba;
	background-image: -moz-linear-gradient(left, #d1fffb 0%, #00baba 100%);
	background-image: -webkit-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: -o-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: -ms-linear-gradient(left, #d1fffb 0%,#00baba 100%);
	background-image: linear-gradient(to right, #d1fffb 0%,#00baba 100%);
    background-size: 200px 20px;
}


/* Shine style */
.progress.shine .progress-bar {
	background-color: #00BA0C;
	background-image: -moz-linear-gradient(left, #00BA0C 0%, #00BA0C 75%, #D7FFD1 80%, #00BA0C 85%, #00BA0C 100%);
	background-image: -webkit-linear-gradient(left, #00BA0C 0%,#00BA0C 75%,#D7FFD1 80%,#00BA0C 85%,#00BA0C 100%);
	background-image: -o-linear-gradient(left, #00BA0C 0%,#00BA0C 75%,#D7FFD1 80%,#00BA0C 85%,#00BA0C 100%);
	background-image: -ms-linear-gradient(left, #00BA0C 0%,#00BA0C 75%,#D7FFD1 80%,#00BA0C 85%,#00BA0C 100%);
	background-image: linear-gradient(to right, #00BA0C 0%,#00BA0C 75%,#D7FFD1 80%,#00BA0C 85%,#00BA0C 100%);
    background-size: 800px 20px;
	box-shadow: inset 0 -2px 2px rgba(0,0,0,0.5), inset 0 2px 2px rgba(255,255,255,0.8);
	-webkit-animation: shine 2s linear infinite;
	-moz-animation: shine 2s linear infinite;
	animation: shine 2s linear infinite;
}

@-webkit-keyframes shine {
to {background-position: 800px 0;}
}
@-moz-keyframes shine {
to {background-position: 800px 0;}
}
@keyframes shine {
to {background-position: 800px 0;}
}


h2 {
  text-align: center;
  font-size: 18px;
  font-family: Arial;
}
a {
  color: #89310F;
}


        </style>

<div class="progress aqua" data-width="0%">
	<div class="progress-text">0%</div>
	<div class="progress-bar">
		<div class="progress-text">0%</div>
	</div>
</div>
<br><br>

<div class="progress copper" data-width="0%">
	<div class="progress-text">0%</div>
	<div class="progress-bar">
		<div class="progress-text">0%</div>
	</div>
</div>
<br><br>

<div class="progress shine" data-width="0%">
	<div class="progress-text">0%</div>
	<div class="progress-bar">
		<div class="progress-text">0%</div>
	</div>
</div>
<br><br>

<div class="progress test" data-width="0%">
	<div class="progress-text">0%</div>
	<div class="progress-bar">
		<div class="progress-text">0%</div>
	</div>
</div>
<br><br>

<?php 
	echo date('Y-m-d H:i:s');
?>
<style type="text/css">
	.borralo{
		width: 500px;
		height: 500px;
		margin: 0 auto;
		background-color: black;
	}
</style>
<div class="borralo">
	
</div>

<br><br>
<input id="slider" type="range" name="slider" min="0" max="100" value="0">
<button class="test" data-val="0%">0%</button>
<button class="test" data-val="10%">10%</button>
<button class="test" data-val="40%">40%</button>
<button class="test" data-val="50%">50%</button>
<button class="test" data-val="60%">60%</button>
<button class="test" data-val="100%">100%</button>

	<h2>Like it? - Check out my other <a href="https://codepen.io/pmk/popular/"><?php echo date("Y-m-d H:i:s"); ?></a></h2>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
        	
jQuery( document ).ready(function( $ ) {

	$('.test').on('click',function(e) {
		$('.progress-bar').css('width',$(this).data('val'));
		//$('.progress-text').text($(this).data('val'));
	});
	$('#slider').on('input',function(e) {
		$('.progress-bar').css('width',e.target.value+'%');
	});

	// create an observer instance
	var observer = new MutationObserver(function(mutations) {
	  mutations.forEach(function(mutation) {
	  	if (mutation.type == 'attributes' && mutation.attributeName == 'style') {
	    	var el = mutation.target;
	        var width = el.style.width; // Can't use jQuery here, as we need the value back in percent
			var $parentEl =$(el).parent('.progress');
			$parentEl.attr('data-width',width); // Why doesn't this work?? $parentEl.data('width',width)
			$parentEl.find('.progress-text').text(width);
	  	}
	  });
	});

	// configuration of the observer
	var config = {
		attributes: true,
		attributeFilter: ['style'],
		childList: false,
		characterData: false
	};

	$('.progress-bar').each(function(e) {
		// pass in the target node, as well as the observer options
		observer.observe(this, config);
	})

  $('.test').eq(4).trigger('click');
});


        </script>
    </body>
</html>