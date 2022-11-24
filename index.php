<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MyLinkz</title>
    <style>
        /* inter-regular - latin */
        @font-face {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        src: url('../fonts/inter-v12-latin-regular.eot'); /* IE9 Compat Modes */
        src: local(''),
            url('../fonts/inter-v12-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('../fonts/inter-v12-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('../fonts/inter-v12-latin-regular.woff') format('woff'), /* Modern Browsers */
            url('../fonts/inter-v12-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
            url('../fonts/inter-v12-latin-regular.svg#Inter') format('svg'); /* Legacy iOS */
        }

        html,body{font-family: Inter, sans-serif ;font-size:15px;line-height:1.5}

        .container {
            width: 100%;
            height: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            max-width: 560px;
        }
        .button {
            border: none;
            display: inline-block;
            padding: 8px 16px;
            vertical-align: middle;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            background-color: inherit;
            text-align: center;
            white-space: nowrap;
            background-color: rgb(38, 101, 214);;
            color: white;
            border-radius: 16px;
        }
        .button:hover {
            background-color: rgb(38, 101, 214);
            color: black;
        }
        .links-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: center">
            <img src="https://d1fdloi71mui9q.cloudfront.net/YftSsGFRoynd5ayaswd5_LGSs25I8c499Lips" class="w3-margin" alt="image" width="150px" height="150px" style="border-radius: 50%;">
            <p><span class="name w3-padding w3-pink w3-round" style="font-weight: bolder;">Robert Michel</span></p>
            <p style="font-weight: bolder;">SoMe Manager. Freelancer. Social Media für #Kaufland, #Schlefaz & #GefragtGejagt</p>
        </div>
        <div class="links-container">
            <p><a href="#" class="button" target="_blank">Curriculum Vitae</a></p>
            <p><a href="#" class="button" target="_blank">Curriculum Vitae</a></p>
            <p><a href="#" class="button" target="_blank">Curriculum Vitae</a></p>
            <p><a href="#" class="button" target="_blank">Curriculum Vitae</a></p>
        </div>
   

        <div class="bottom margin-top-2 w3-padding w3-round">
            <span style="vertical-align: 7px;"> 2021 - Jane Doe</span>
      </div>
        
    </div>

</body>
</html>