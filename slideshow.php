<!DOCTYPE html>
<html>
<head>
  <title>Slides</title>
  
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,900' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>var ml = { timelines: {}};</script>
  <style>

  html {
    width: 100%;
    height: 100%;
  }
  body {
    width: 100%;
    height: 100%;
    font: 13px "Source Sans Pro", Arial, Helvetica, sans-serif;
    background-color: #1a1a1a;
    color: #fff;
    text-align: center;
    overflow-x: hidden;
    overflow-y: hidden;

  }

  .moving-letters {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    text-align: center;
    margin: auto;
    width: 100%;
    height: 200px;

  }
  
  

  </style>
</head>
<body onclick='window.location.href="https://offbeatccu2019.herokuapp.com/"'>
  <div class="moving-letters">
    <h1 class="ml4">
      <span class="letters letters-1">Welcome</span>
      <span class="letters letters-2">To</span>
      <span class="letters letters-3">OFFBEAT CCU</span>
      <span class="letters letters-4">The Future of Education</span>
      <span class="letters letters-5">In the City of Joy.</span>
    </h1>

<!--more-->

<script>
  var ml4 = {};
  ml4.opacityIn = [0,1];
  ml4.scaleIn = [0.2, 1];
  ml4.scaleOut = 3;
  ml4.durationIn = 800;
  ml4.durationOut = 600;
  ml4.delay = 500;
  ml.timelines["ml4"] = anime.timeline({loop: true})
    
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-4',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-4',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-5',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-5',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  });
</script>

<style>
  .ml4 {
    position: relative;
    font-weight: 900;
    font-size: 4.5em;
  }
  .ml4 .letters {
    position: absolute;
    margin: auto;
    left: 0;
    top: 0.3em;
    right: 0;
    opacity: 0; 
  }
</style>


  </div>
</body>
</html>
