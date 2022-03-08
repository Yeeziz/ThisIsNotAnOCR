
<script src="https://cdn.jsdelivr.net/npm/optiic@latest/dist/index.min.js"></script>
<script type="text/javascript">
  let optiic = new Optiic({
    apiKey: 'your-api-key' // Not required, but having one removes limits (get your key at https://optiic.dev).
  });
</script>

<?php
	$imagick = new Imagick();
   	$imagick->readImage('test.pdf');
    $imagick->writeImages('test.png', false);
?>

<script>
	for(let i = 0; i < 4; i++){
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
