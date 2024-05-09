<html>
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <style>
      body {
        margin: 0;
        padding: 0;
      }

      #div2 {
      width: 92.05%;
      padding: 0px 0px 0px 334px;
      }

      #mainForm {
        width: 100%;
        margin: 40px auto;
        background: #F0F0F0;
        padding: 30px 0 20px 0;
        border-top: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
      }
      #mainForm label {
        width: 30%;
        display: inline-block;
        text-align: right;
        padding-right: 10px;
      }
      #mainForm input[type=text] {
        width: 55%;
        margin: 5px 0;
        padding: 8px 10px;
      }

      input[type=button], input[type=submit] {
        color: #fff !important;
        background: #60a3bc;
        padding: 10px 20px;
        border-radius: 4px;
        display: inline-block;
        border: none;
        margin: 10px 10px 14px 10px;
        font-size: 1.2em;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
<?php if(empty($_POST)): ?>
    <form id="mainForm" method="POST" action="bodconff.php">


      <label for="VALUE_01">Subject:</label>
      <input type="text" name="VALUE_01" /><br />

            <div class="row" id="div2">
      <div class="col-sm-6">
       <label for="VALUE_05"></label>
       <input type="text" name="VALUE_05" placeholder="Background-color" /></div>

            <div class="col-sm-6"> 
      <label for="VALUE_06"></label>
      <input type="text" name="VALUE_06" placeholder="Color" /></div>
            </div>

      <label for="VALUE_02">Domain:</label>
      <input type="text" name="VALUE_02" /><br />

      <label for="VALUE_03">Offer Image:</label>
      <input type="text" name="VALUE_03" /><br />

      <label for="VALUE_04">Unsubscribe Image:</label>
      <input type="text" name="VALUE_04" /><br />

      <label for="submit"></label>
      <input type="submit" value="SUBMIT" name="submit">
    </form>

<?php else: ?>

    <div style="background: #EEE; border-bottom: 1px solid #CCC; width:100%; position: relative; height: 60px;">
      <input id="backButton" type="button" value="? BACK" style="position: absolute; left: 0;" />
      <input id="copyButton" type="button" value="COPY HTML" style="position: absolute; right: 0;" />
      <div style="text-align: center; font-size: 1.3em;padding-top: 19px; color:#595959; font-family: Arial;">PREVIEW</div>
    </div>

    <iframe src="about:blank" id="preview" style="border: none;width:100%;"></iframe>

    <script type="text/javascript">
      var value3Image = new Image();
      var value4Image = new Image();
      var imagesLoaded = 0;

      function onload() {
        imagesLoaded += 1;
        if (imagesLoaded < 2) {
          return;
        }

        var html = `<!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        #content-desk-mobile { display: block; }
        #content-mozilla { display: none; }
  
        @supports not ( -moz-appearance:none ){
        #content-desk-mobile { display: none; }
        #content-mozilla { display: block; }
          }
        </style>
        </head>
        <body>  
        <center>
        <div><h2 style="background:<?php echo $_POST['VALUE_05']; ?>; color:<?php echo $_POST['VALUE_06']; ?>"><?php echo $_POST['VALUE_01']; ?></h2></div> </center>     
                </center>
           <div id="content-mozilla"><center>
            <img src="<?php echo $_POST['VALUE_03']; ?>" style="width:`+ value3Image.width + `px; height:`+ value3Image.height + `px;border: 3px solid #fffff;" usemap="#eAPz" />
             <map name="eAPz">
              <area href="http://<?php echo $_POST['VALUE_02']; ?>/[click]" shape="rect" coords="0,`+ value3Image.height + `,`+ value3Image.width + `,0" />
             </map><br>

            <img src="<?php echo $_POST['VALUE_04']; ?>" style="width:`+ value4Image.width + `px; height:`+ value4Image.height + `px;border: 3px solid #fffff;" usemap="#l0Lb" />
            <map name="l0Lb">
             <area href="http://<?php echo $_POST['VALUE_02']; ?>/[unsb]" shape="rect" coords="0,`+ value4Image.height + `,`+ value4Image.width + `,0" />
             </map></div><br>
    <img style="width:0px;height:0px;display:none;" src="http://[placeholder1]/[open]"/>  
             </center>
    
  
  <div id="content-desk-mobile">
  <center>
      <div style="background-image: url('<?php echo $_POST['VALUE_03']; ?>'); width:`+ value3Image.width + `px; height:`+ value3Image.height + `px; text-align: center; background-repeat: no-repeat; background-color: white;" usemap="#0GKF" >
    <map name="0GKF">
          <area href="http://<?php echo $_POST['VALUE_02']; ?>/[url]" shape="rect" coords="0,`+ value3Image.width + `,`+ value3Image.height + `,0" target="_blank" style="padding: 0  `+ value3Image.width + `px `+ value3Image.height + `px 0;"/>
    </map><br>
    </div>

    <div style="background-image: url('<?php echo $_POST['VALUE_04']; ?>'); width:`+ value4Image.width + `px; height:`+ value4Image.height + `px; text-align: center; background-repeat: no-repeat; background-color: white;" usemap="#Mdg7" >
    <map name="Mdg7">
      <area href="http://<?php echo $_POST['VALUE_02']; ?>/[unsub]" shape="rect" coords="0,`+ value4Image.width + `,`+ value4Image.height + `,0" target="_blank" style="padding: 0 `+ value4Image.width + `px `+ value4Image.height + `px 0;"/>
    </map>
    </div>
    <img style="width:0px;height:0px;display:none;" src="http://[placeholder1]/track/[open]"/>  
</body>
</html>
`;

         var preview = document.getElementById('preview');
         var doc = preview.contentWindow.document;
         doc.open();
         doc.write(html);
         doc.close();

         // fit to height
         var iframeWin = preview.contentWindow || preview.contentDocument.parentWindow;
         if (iframeWin.document.body) {
            preview.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
         }

         document.getElementById('backButton').addEventListener('click', function(event) {
           window.history.back();
         });

         document.getElementById('copyButton').addEventListener('click', function(event) {
           var textarea = document.createElement("textarea");
           textarea.style.display = 'none;';
           document.body.appendChild(textarea);
           textarea.value = html;
           textarea.select();
           document.execCommand("copy");
           document.body.removeChild(textarea);

           // var prevValue = this.value;
           // var t = this;
           // this.value = 'HTML COPIED!';
           // //this.setAttribute('disabled', 'disabled');
           // setTimeout(function() {
           //   t.value = prevValue;
           //   //t.removeAttribute('disabled');
           // }, 2000);
         });
      }

      value3Image.src = "<?php echo $_POST['VALUE_03']; ?>";
      value3Image.onload = onload;

      value4Image.src = "<?php echo $_POST['VALUE_04']; ?>";
      value4Image.onload =  onload;
    </script>
<?php endif; ?>
  </body>
</html>
