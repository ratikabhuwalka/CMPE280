var video = $('video')[0];
var canvas = $('canvas')[0];
var context = canvas.getContext('2d');
var localstream;

$('#vid-div').hide();
$('#canvas-div').hide();

$('#vid-cap').click(function () {
  $('#vid-div').show();
  navigator.getUserMedia = navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.oGetUserMedia ||
                            navigator.msGetUserMedia;

  if(navigator.getUserMedia){
    navigator.getUserMedia({video:true}, streamWebCam, throwError);
  }
});

$('#cancel-vid').click(function () {
  stopStream(localstream);
});

function stopStream(stream) {
  video.pause();
  video.src="";
  stream.getTracks()[0].stop();
  $('#vid-div').hide();
  console.log("Video stopped");
};

function streamWebCam (stream) {
  video.src = window.URL.createObjectURL(stream);
  localstream = stream;
  video.play();
};

function throwError (e) {
  alert(e.name);
};

$('#snap').click(function () {
  canvas.width = 200;
  canvas.height = 150;
  context.drawImage(video, 0, 0, canvas.width, canvas.height );

  var data = canvas.toDataURL('image/png');
  console.log('Image src: ', data);
  $('#photo').attr('src', data);
  $('#canvas-div').show();
});

$('#reset').click(function () {
  $('#photo').attr('src','');
  $('#canvas-div').hide();
  stopStream(localstream);
});