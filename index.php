
<script src="https://cdn.jsdelivr.net/npm/optiic@latest/dist/index.min.js"></script>
<script type="text/javascript">
  let optiic = new Optiic({
    apiKey: 'your-api-key' // Not required, but having one removes limits (get your key at https://optiic.dev).
  });
</script>

<?php
	//you need to converte pdf pages into images to use the APIs
	$imagick = new Imagick();
   	$imagick->readImage('test.pdf');
    	$imagick->writeImages('test.png', false);
?>

<script>
    for(let i = 0; i <= 4; i++){
      //this code is just for testing, since everytime the cicle is executed we lose one API call, and the cicle is here in order to execute the OCR on every page
      let options = {
        image: 'url-of-image',
        mode: 'ocr', // ocr
      };

      optiic.process(options)
      .then(result => {
        console.log(result);
      })
    }
</script>
