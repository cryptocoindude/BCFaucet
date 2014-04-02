<?php
/*     Nanotoken Faucet Script     */
/*      Provided by: [zelles]      */
/*  Do not remove these comments.  */

$database_host = 'localhost';
$database_user = 'root';
$database_pass = 'root';
$database_table = 'Faucet2';

$nanotokend_rpc_server = "localhost";
$nanotokend_rpc_user = "1";
$nanotokend_rpc_password = "x";
$nanotokend_rpc_port = "3333";

$payout_amount = "20";

$nanotokend_RPC = "http://".$nanotokend_rpc_user.":".$nanotokend_rpc_password."@".$nanotokend_rpc_server.":".$nanotokend_rpc_port."/";
$nanotokend = new jsonRPCClient($nanotokend_RPC);
?>
