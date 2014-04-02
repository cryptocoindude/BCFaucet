<?php
error_reporting(0);
require_once'../private_html/jsonRPCClient.php';
require_once'../private_html/config.php';

/*     Nanotoken Faucet Script     */
/*      Provided by: [zelles]      */
/*  Do not remove these comments.  */

$date = date("n/j/Y");;
$ip = $_SERVER['REMOTE_ADDR'];

$db_handle = mysql_connect($database_host, $database_user, $database_pass)or die("Server error.");
$db_found = mysql_select_db($database_table)or die("Server error.");

if(isset($_POST['nanoaction'])) { $Take_Action = addslashes(strip_tags($_POST['nanoaction'])); } else { $Take_Action = "none"; }
if(isset($_POST['nanoaddr'])) { $User_Address = addslashes(strip_tags($_POST['nanoaddr'])); }

if($Take_Action=="faucet") {
   if(isset($_POST['nanoaddr'])) {
      if($User_Address!="") {
         $result = mysql_query("SELECT * FROM faucetbox WHERE faucetip='$ip' and faucetaddress='$User_Address'");
         $num_rows = mysql_num_rows($result);
         if($num_rows==0) {
            $result = mysql_query("SELECT * FROM faucetbox WHERE faucetdate='$date' and faucetaddress='$User_Address'");
            $num_rows = mysql_num_rows($result);
            if($num_rows==0) {
               $result = mysql_query("SELECT * FROM faucetbox WHERE faucetip='$ip' and faucetdate='$date'");
               $num_rows = mysql_num_rows($result);
               if($num_rows==0) {
                  $send_amount = floatval($payout_amount);
                  $txid = $nanotokend->sendfrom("",$User_Address,$send_amount);
                  if($txid) { $send_message = $txid; } else { $send_message = "Your send failed?"; }
                  $sql = mysql_query("INSERT INTO faucetbox (id,faucetdate,faucetip,faucetaddress,faucetamount,faucetpaid) VALUES ('','$date','$ip','$User_Address','$payout_amount','1')");
                  $body = '<table class="roundit" style="height: 100px; width: 440px">
                              <tr>
                                 <td align="center" valign="middle">
                                    Success, KaChingCoins sent!<br>
                                    Come back for more tomorrow.<br>
                                    View your Transaction ID below:
                                 </td>
                              </tr>
                           </table>'.
                           $send_message;
               } else {
                  $body = '<table class="roundit" style="height: 100px; width: 440px">
                             <tr>
                                 <td align="center" valign="middle">
                                    You already requested Nanotokens today.<br>
                                    Come back for more tomorrow.
                                 </td>
                              </tr>
                           </table>';
               }
            } else {
               $body = '<table class="roundit" style="height: 100px; width: 440px">
                          <tr>
                              <td align="center" valign="middle">
                                 You already requested Nanotokens today.<br>
                                 Come back for more tomorrow.
                              </td>
                           </tr>
                        </table>';
            }
         } else {
            $body = '<table class="roundit" style="height: 100px; width: 440px">
                        <tr>
                           <td align="center" valign="middle">
                              You already requested Nanotokens today.<br>
                              Come back for more tomorrow.
                           </td>
                        </tr>
                     </table>';
         }
      } else {
         $body = '<table class="roundit" style="height: 100px; width: 440px;">
                     <tr>
                        <td align="center" valign="middle">
                           You did not enter an address. Try again!
                        </td>
                     </tr>
                  </table>';
      }
   } else {
      $body = '<table class="roundit" style="height: 100px; width: 440px;">
                  <tr>
                     <td align="center" valign="middle">
                        You did not enter an address. Try again!
                     </td>
                  </tr>
               </table>';
   }
}
?>
