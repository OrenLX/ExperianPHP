<?php
/**
 *	Based on CIS Technical Documents File: Appendix 03-21-2016.pdf
 *	Section: N. Account Condition and Payment Status Code Cross-Reference
 *	Page No: 107 -- Discarded
 */
/*$accountConditions=[
	'A1'=>'OPEN',
	'A2'=>'PAID',
	'A3'=>'CLOSED',
	'05'=>'TRANSFER',
	'10'=>'REFINANC',
	'66'=>'PDBYDLER',
	'68'=>'SETTLED',
	'87'=>'FOREPROC',
	'88'=>'GOVCLAIM',
	'89'=>'DEEDLIEU',
	'91'=>'TRMDFALT',
	'92'=>'INSCLAIM',
	'93'=>'COLLACT',
	'94'=>'FORECLOS',
	'95'=>'VOLUSURR',
	'96'=>'REPOSSES',
	'97'=>'CHARGOFF',
	'CODE1'=>'-',
];*/

/**
 *	Based on CIS Technical Documents File: Appendix 03-21-2016.pdf
 *	Section: L. Account Condition and Payment Status Codes
 *	Page No: 99
 */
/** Descriptions */
$accountConditions=[
	"00" => "No condition/status",
	"03" => "Credit card lost or stolen",
	"05" => "Account transferred to another office",
	"07" => "Current account/was delinquent 60 days past due date two times",
	"08" => "Current account/was delinquent 60 days past due date three times",
	"09" => "Current account/was delinquent 60 days past due date four or more times",
	"10" => "Account renewed or refinanced",
	"11" => "This is an account in good standing",
	"12" => "Account/paid satisfactorily",
	"13" => "Paid account/zero balance",
	"14" => "Current account/was 90 days past due date two times",
	"15" => "Current account/was 90 days past due date 3 or more times",
	"16" => "Current account/was 120 days past due date 2 or more times",
	"17" => "Current account/was 150 days past due date 2 or more times",
	"20" => "Credit line closed/reason unknown or by consumer request/there may be balance due",
	"21" => "Consumer reported as deceased",
	"22" => "Account 60 days past due date 2 times",
	"23" => "Account 60 days past due date 3 times",
	"24" => "Account 60 days past due date 4 or more times",
	"25" => "Account 90 days past due date 2 times",
	"26" => "Account 90 days past due date 3 or more times",
	"27" => "Account 120 days past due date 2 or more times",
	"28" => "Account 150 days past due date 2 or more times",
	"29" => "Account 90 days past due date/ was  120 days or more past due date",
	"31" => "Current account/was 30 days past due date",
	"32" => "Current account/was 30 days past due date two times",
	"33" => "Current account/was 30 days past due date three times",
	"34" => "Current account/was 30 days past due date four times",
	"35" => "Current account/was 30 days past due date five times",
	"36" => "Current account/was 30 days past due date six times or more",
	"37" => "Current account/was delinquent 60 days past due date",
	"38" => "Current account/was delinquent 90 days past due date",
	"39" => "Current account/was delinquent 120 days past due date",
	"40" => "Current account/was delinquent 150 days past due date",
	"41" => "Current account/was delinquent 180 days or more past due date",
	"42" => "Account now redeemed/was a repossession",
	"43" => "Current account/was a collection account, insurance claim or government claim or terminated for default",
	"45" => "Current account/foreclosure was started",
	"50" => "Paid account/was 30 days past due date",
	"51" => "Paid account/was 30 days past due date two or three times",
	"52" => "Paid account/was 30 days past due date four times",
	"53" => "Paid account/was 30 days past due date five times",
	"54" => "Paid account/was 30 days past due date six times or more",
	"55" => "Paid account/was delinquent 60 days past due date",
	"56" => "Paid account/was delinquent 90 days past due date",
	"57" => "Paid account/was delinquent 120 days past due date",
	"58" => "Paid account/was delinquent 150 days past due date",
	"59" => "Paid account/was delinquent 180 days or more past due date",
	"60" => "Paid account/was a voluntary surrender",
	"61" => "Paid account/was a collection account, insurance claim or government claim or was terminated for default",
	"62" => "Paid account/was a repossession",
	"63" => "Paid account/was a charge-off",
	"64" => "Paid account, foreclosure was started",
	"66" => "Credit grantor paid by company who originally sold the merchandise",
	"67" => "Debt included in or discharged through Bankruptcy Chapter 7, 11, or 12",
	"68" => "Account legally paid in full for less than the full balance",
	"69" => "Debt included in or discharged through Bankruptcy Chapter 13",
	"71" => "Account 30 days past due date",
	"72" => "Account 30 days past due date two times",
	"73" => "Account 30 days past due date three times",
	"74" => "Account 30 days past due date four times",
	"75" => "Account 30 days past due date five times",
	"76" => "Account 30 days past due date six times or more",
	"77" => "Account was delinquent 60 days past due date/now 30 days past due date",
	"78" => "Account delinquent 60 days past due date",
	"79" => "Account was delinquent 90 days past due date/now 30 or 60 days past due date",
	"80" => "Account delinquent 90 days past due date",
	"81" => "Account was delinquent 120 days or more past due date/now 30, 60, or 90 days past due date",
	"82" => "Account delinquent 120 days past due date",
	"83" => "Account delinquent 150 days past due date",
	"84" => "Account delinquent 180 days past due date",
	"85" => "Credit Grantor could not locate consumer/consumer now located",
	"86" => "PAY Now paying/was a charge-off",
	"87" => "Foreclosure proceeding started",
	"88" => "Claim filed with government for insured portion of balance on loan",
	"89" => "Credit grantor received deed for collateral in lieu of foreclosure on a defaulted mortgage",
	"90" => "Credit line closed/not paying as agreed",
	"91" => "Early termination by default of original terms of lease or sales contract",
	"92" => "Claim filed for insured portion of balance",
	"93" => "Account seriously past due date/account assigned to attorney, collection agency, or credit grantor's internal collection department",
	"94" => "Credit Grantor reclaimed collateral to settle defaulted mortgage",
	"95" => "Voluntary surrender",
	"96" => "Merchandise was taken back by credit grantor; there may be a balance due",
	"97" => "Unpaid balance reported as a loss by credit grantor",
	"98" => "Credit grantor cannot locate consumer",
	"A1" => "Open account",
	"A2" => "Paid account/zero balance",
	"A3" => "Closed account",
	"A4" => "Inactive account"
];
/** TTY Codes */
$accountConditionsTTYCode=[
	"00"=>"",
	"03"=>"CRCDLOST",
	"05"=>"TRANSFER",
	"07"=>"CUR WAS 60-2",
	"08"=>"CUR WAS 60-3",
	"09"=>"CUR WAS60-4+",
	"10"=>"REFINANC",
	"11"=>"CURR ACCT",
	"12"=>"PAID SATIS",
	"13"=>"PAID ACCT",
	"14"=>"CUR WAS90-2",
	"15"=>"CUR WAS90-3+",
	"16"=>"CURWAS120- 2+",
	"17"=>"CURWAS150- 2+",
	"20"=>"CR LN CLOS",
	"21"=>"DECEASED",
	"22"=>"60 2 TIMES",
	"23"=>"60 3 TIMES",
	"24"=>"60 4+ TIMES",
	"25"=>"90 2 TIMES",
	"26"=>"90 3+ TIMES",
	"27"=>"120 2+ TIMES",
	"28"=>"150 2+ TIMES",
	"29"=>"90 WAS 120+",
	"31"=>"CUR WAS 30",
	"32"=>"CUR WAS 30-2",
	"33"=>"CUR WAS 30-3",
	"34"=>"CUR WAS 30-4",
	"35"=>"CUR WAS 30-5",
	"36"=>"CUR WAS30-6+",
	"37"=>"CUR WAS 60",
	"38"=>"CUR WAS 90",
	"39"=>"CUR WAS 120",
	"40"=>"CUR WAS 150",
	"41"=>"CUR WAS 180",
	"42"=>"REDEEMD REPO",
	"43"=>"CUR WAS COLL",
	"45"=>"CUR WAS FORE",
	"50"=>"PD WAS 30",
	"51"=>"PD WAS 30-2",
	"52"=>"PD WAS 30-4",
	"53"=>"PD WAS 30-5",
	"54"=>"PD WAS 30+6",
	"55"=>"PD WAS 60",
	"56"=>"PD WAS 90",
	"57"=>"PD WAS 120",
	"58"=>"PD WAS 150",
	"59"=>"PD WAS 180",
	"60"=>"PD VOL SUR",
	"61"=>"PD COLL AC",
	"62"=>"PD REPO",
	"63"=>"PD CHG OFF",
	"64"=>"PD FORECLO",
	"66"=>"PDBYDLER",
	"67"=>"BKLIQREO",
	"68"=>"SETTLED",
	"69"=>"BKADJPLN",
	"71"=>"30 DAY DEL",
	"72"=>"30 2 TIMES",
	"73"=>"30 3 TIMES",
	"74"=>"30 4 TIMES",
	"75"=>"30 5 TIMES",
	"76"=>"30 6+ TIMES",
	"77"=>"30 WAS 60",
	"78"=>"DELINQ 60",
	"79"=>"DEL WAS 90",
	"80"=>"DELINQ 90",
	"81"=>"DEL WAS 120+",
	"82"=>"DELINQ 120",
	"83"=>"DELINQ 150",
	"84"=>"* DELINQ 180",
	"85"=>"SCNL LOC ",
	"86"=>"* COFF NOW ",
	"87"=>"* FOREPROC ",
	"88"=>"* GOVCLAIM ",
	"89"=>"* DEEDLIEU ",
	"90"=>"CLOS NP AA ",
	"91"=>"* TRMDFALT ",
	"92"=>"* INSCLAIM ",
	"93"=>"* COLLACCT ",
	"94"=>"* FORECLOS ",
	"95"=>"* VOLUSURR ",
	"96"=>"* REPOSSES ",
	"97"=>"* CHARGOFF ",
	"98"=>"* SCNL",
	"A1"=>"OPEN ",
	"A2"=>"PAID ",
	"A3"=>"* CLOSED ",
	"A4"=>"INACTIVE "
];
?>