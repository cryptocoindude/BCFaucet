<?php
require_once'../private_html/configuration.php';

/*     Nanotoken Faucet Script     */
/*      Provided by: [zelles]      */
/*  Do not remove these comments.  */
?>


<html>

<head>

            <title>BlackCoin Faucet</title>

            <style type="text/css">.backing {

         background: #cc0000;

         background: -moz-linear-gradient(top,  #cc0000 0%, #000000 100%);

         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cc0000), color-stop(100%,#000000));

         background: -webkit-linear-gradient(top,  #cc0000 0%,#000000 100%);

         background: -o-linear-gradient(top,  #cc0000 0%,#000000 100%);

         background: -ms-linear-gradient(top,  #cc0000 0%,#000000 100%);

         background: linear-gradient(to bottom,  #cc0000 0%,#000000 100%);

         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#000000',GradientType=0 );

      }

      .roundit {

         background: #654321;

         background: -moz-linear-gradient(top,  #654321 0%, #dfe5d7 40%, #b3bead 100%);

         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#654321), color-stop(40%,#dfe5d7), color-stop(100%,#b3bead));

         background: -webkit-linear-gradient(top,  #654321 0%,#dfe5d7 40%,#b3bead 100%);

         background: -o-linear-gradient(top,  #654321 0%,#dfe5d7 40%,#b3bead 100%);

         background: -ms-linear-gradient(top,  #654321 0%,#dfe5d7 40%,#b3bead 100%);

         background: linear-gradient(to bottom,  #654321 0%,#dfe5d7 40%,#b3bead 100%);

         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#654321', endColorstr='#b3bead',GradientType=0 );

         color: #0F0F0F;

         -moz-border-radius: 7px 7px 7px 7px;

         -webkit-border-radius: 7px 7px 7px 7px;

         -khtml-border-radius: 7px 7px 7px 7px;

         border-radius: 7px 7px 7px 7px;

         -moz-box-shadow: 0px 0px 4px #CECECE;

         -webkit-box-shadow: 0px 0px 4px #CECECE;

         -khtml-box-shadow: 0px 0px 4px #CECECE;

         box-shadow: 0px 0px 4px #CECECE;

         padding: 10px;

      }

      .button {

         height: 24px;

         width: 110px;

         background: #b5bdc8;

         background: -moz-linear-gradient(top,  #b5bdc8 0%, #828c95 36%, #28343b 100%);

         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b5bdc8), color-stop(36%,#828c95), color-stop(100%,#28343b));

         background: -webkit-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%);

         background: -o-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%);

         background: -ms-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%);

         background: linear-gradient(to bottom,  #b5bdc8 0%,#828c95 36%,#28343b 100%);

         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 );

         border: 0px none #000000;

         -moz-border-radius: 7px 7px 7px 7px;

         -webkit-border-radius: 7px 7px 7px 7px;

         -khtml-border-radius: 7px 7px 7px 7px;

         border-radius: 7px 7px 7px 7px;

         -moz-box-shadow: 0px 0px 4px #CECECE;

         -webkit-box-shadow: 0px 0px 4px #CECECE;

         -khtml-box-shadow: 0px 0px 4px #CECECE;

         box-shadow: 0px 0px 4px #CECECE;

         color:#000000;

         font-size: 12px;

         font-weight: bold;

         padding: 0px;

         padding-bottom: 2px;

         margin: 0px;

      }

      .fancypants {

         height: 26px;

         width: 100%;

         background: #e2e2e2;

         background: -moz-linear-gradient(top,  #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%);

         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e2e2e2), color-stop(50%,#dbdbdb), color-stop(51%,#d1d1d1), color-stop(100%,#fefefe));

         background: -webkit-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);

         background: -o-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);

         background: -ms-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);

         background: linear-gradient(to bottom,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);

         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 );

         -moz-border-radius: 7px 7px 7px 7px;

         -webkit-border-radius: 7px 7px 7px 7px;

         -khtml-border-radius: 7px 7px 7px 7px;

         border-radius: 7px 7px 7px 7px;

         -moz-box-shadow: 0px 0px 4px #CECECE;

         -webkit-box-shadow: 0px 0px 4px #CECECE;

         -khtml-box-shadow: 0px 0px 4px #CECECE;

         box-shadow: 0px 0px 4px #CECECE;

         color: #888888;

      }

            </style>
</head>
<body style="color: #000000; padding: 0px; margin: 0px;">
   <table align="center" class="backing" style="height: 100%; width: 100%;">
      
         <td align="center" valign="middle">
            <?php
            if(isset($body)) { echo $body; }
            $time_now = strtotime('now');
            $time_tomorrow = strtotime('today midnight');
            $time_between = $time_tomorrow - $time_now;
            $time_between_h = date("G",$time_between);
            $time_between_m = date("i",$time_between);
            
            #echo '<div style="font-size: 12px; margin-top: 6px; margin-bottom: 6px;">'.$time_between_h.' hours and '.$time_between_m.' minutes until midnight.</div>';
            ?>
            <br>
<form method="POST" action="index.php" style="padding: 0px; margin: 0px;">
            <input type="hidden" name="nanoaction" value="faucet">
            <table class="roundit" align="top" style="height: 160px; width: 440px;">

</head>

<body style="color: #000000; padding-bottom: 0px; padding-top: 0px; padding-left: 0px; margin: 0px; padding-right: 0px">

<table align="center" class="backing" style="height: 100%; width: 100%">

            <tbody>
  

                        <tr>

                                    <td align="center" valign="middle">

                                    <p><iframe scrolling="no" style="border: 0; width: 160px; height: 600px;" src="//coinurl.com/get.php?id=25377"></iframe></p>

 
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                    </td>

                                    <td align="center" valign="middle">&nbsp;

                                    <form action="index.php" method="post" style="padding-bottom: 0px; padding-top: 0px; padding-left: 0px; margin: 0px; padding-right: 0px"><input name="nanoaction" type="hidden" value="faucet" /></form>

 

                                    <table>

                                                <tbody>

                                                </tbody>

                                    </table>
<iframe scrolling="no" style="border: 0; width: 728px; height: 90px;" src="//coinurl.com/get.php?id=25376"></iframe>


 

                                    <table align="top" class="roundit" style="height: 160px; width: 440px"><br />

                                                <br />

                                                <tbody>

                                                            <tr>

                                                                        <td align="left" style="height: 30px; font-weight: bold"><a href="index.php" style="text-decoration: none; color: #0f0f0f">Request Free BlackCoins</a></td>

                                                                        <td align="right" style="height: 30px"><b>Balance: </b><?php echo $nanotokend->getbalance(""); ?></td>

                                                            </tr>

                                                            <tr>

                                                                        <td align="right" colspan="2"><input autofocus="" class="fancypants" name="nanoaddr" placeholder="8FXXtCPrv39QrstZjiZJ5rEHJdMEjJEJyP" required="" type="text" /></td>

                                                            </tr>

                                                            <tr>

                                                            <td>
<td align="right" colspan="2" style="height: 30px;"><input type="submit" name="submit" value="Send <?php echo $payout_amount; ?> BC" class="button"></td>

                                                            </tr>

                                                            <tr>

                                                                        <td align="left" colspan="2" style="height: 20px; font-weight: bold">BlackCoin services:</td>

                                                            </tr>

                                                            <tr>

                                                            </tr>

                                                            <tr>

                                                                        <td align="left" colspan="2" style="height: 20px">Mining Pool: <a href="http://5.45.108.127:3384" style="color: #0f0f0f" target="_blank">http://5.45.108.127:3384</a></td>

                                                            </tr>

                                                            <tr>

                                                                        <td align="left" colspan="2" style="height: 20px; font-weight: bold">Want more coins?</td>

                                                            </tr>

                                                            <tr>

                                                                        <td align="left" colspan="2" style="height: 0px"><a href="http://cryptofury.com/forums/forum/giveaways/" style="color: #0f0f0f" target="_blank">Click here for more!</a></td>

                                                            </tr>

                                                </tbody>

                                    </table>

                                    &nbsp;

 

                                    <table>

                                                <tbody>

                                                            <tr>

                                                                        <td></td>

                                                            </tr>

                                                </tbody>

                                    </table>

 

                                    <p>&nbsp;</p>

 

                                    <p><br />

                                    Get your BlackCoin wallet at the official BlackCoin website!</p>

                                    </td>

                                    <td align="center" valign="middle">

                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <iframe scrolling="no" style="border: 0; width: 160px; height: 600px;" src="//coinurl.com/get.php?id=25375"></iframe></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                    </td>

                        </tr>

            </tbody>

</table>

 

<div align="left" style="font-size: 16px; height: 20px; width: 440px; position: fixed; left: 220px; bottom: 150px"><br />

<br />

<br />

<br />
<br>
<br>
<br>

Donate BlackCoins to keep the faucet alive: 8FEAiotXB8ic35vsBTf1tD7KJnucaRCAwo</div>

 

<div align="right" style="font-size: 16px; height: 20px; width: 440px; right: 200px; position: fixed; bottom: 150px"><br />

<br />

<br />

<br />
<br>
<br>
<br>

Donate BlackCoins the faucet developer: 8QHnihW7uzPuvzmzDvpSGQfRtt2XCFbVoj</div>

</body>

</html>

</html>
