<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Report an Incident</h1>
        <p style="color:white">Upload evidence of bullying, report an incident or view your previous uploads</p>
      </div>
	  

<form target="_blank" action="imageupload.php" method="POST" enctype="multipart/form-data">
 <label>Image File:</label>
	<input class="file"  type="file" name="Image" accept="Image/*" capture>
	<br>
	<input  type= "submit" value="Upload Image" >
</form>
<br>
<br>

<script>

var input = document.querySelector('input[type=file]');
	input.onchange = function () {
	 var file = input.files[0];

  	upload(file);
  	drawOnCanvas(file);   
  	displayAsImage(file); 
				     };

	function upload(file) {
  	 var form = new FormData(),
      	  xhr = new XMLHttpRequest();

        form.append('image', file);
  	xhr.open('post', 'imageupload.php', true);
  	xhr.send(form);
			       }

	function drawOnCanvas(file) {
  	  var reader = new FileReader();

  	 reader.onload = function (e) {
          var dataURL = e.target.result,
           c = document.querySelector('canvas'), 
           ctx = c.getContext('2d'),
           img = new Image();

          img.onload = function() {
           c.width = img.width;
           c.height = img.height;
           ctx.drawImage(img, 0, 0);
    				  };

          img.src = dataURL;
  	};

        reader.readAsDataURL(file);
       }
        function displayAsImage(file) {
  	 var imgURL = URL.createObjectURL(file),
      	     img = document.createElement('img');

        img.onload = function() {
         URL.revokeObjectURL(imgURL);
  	};

  	img.src = imgURL;
  	
}
</script>

<form target="_blank" method="post" action="audioupload.php" enctype="multipart/form-data">

  <label>Audio File:</label>
  <input class="file"  type="file" name="user_audio" accept="audio/*;capture=microphone">
  <br>
  <input  value="Upload Audio" type="submit">
</form>
<br><br>
<script>

function uploadForm() {
    var form = new FormData(document.getElementById("my_form"));
    form.append("user_audio_blob", audioBlob);
    var request = new XMLHttpRequest();
    var async = true;
    request.open("POST", "/my_form_handler", async);
    if (async) {
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var response = null;
                try {
                    response = JSON.parse(request.responseText);
                } catch (e) {
                    response = request.responseText;
                }
                uploadFormCallback(response);
            }
        }
    }
    request.send(form);
}
       }
</script>

<form target="_blank" method="post" action="videoupload.php" enctype="multipart/form-data">
   <label>Video File:</label>	  
  <input type="file" class="file-loading" name="video" accept="video/*" capture>
  <br>	
  <input value="Upload Video" type="submit">
</form>

<script>

navigator.getUserMedia(
	constraints,
	successCallback,
	errorCallback
);
var constraints = {
	video: true,
	audio: true
}s

var successCallback = function(mediaStream) {
	var button = document.querySelector('button');
	button.addEventListener('click', function() {
		mediaStream.stop();
	}, false);
};

var errorCallback = function() {
	console.log('failure to get media');
};

navigator.getUserMedia(
	constraints,
	successCallback,
	errorCallback
);

</script>