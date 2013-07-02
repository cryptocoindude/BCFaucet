<?php
/*     Nanotoken Faucet Script     */
/*      Provided by: [zelles]      */
/*  Do not remove these comments.  */

$database_host = 'DBServerIP';
$database_user = 'DBUsername';
$database_pass = 'DBPassword';
$database_table = 'DBName';

$nanotokend_rpc_server = "BitcoinRPCServerAddress";
$nanotokend_rpc_user = "BitcoinRPCUsername";
$nanotokend_rpc_password = "BitcoinRPCUsername";
$nanotokend_rpc_port = "9999";

$payout_amount = "0.01";

$nanotokend_RPC = "http://".$nanotokend_rpc_user.":".$nanotokend_rpc_password."@".$nanotokend_rpc_server.":".$nanotokend_rpc_port."/";
$nanotokend = new jsonRPCClient($nanotokend_RPC);
?>