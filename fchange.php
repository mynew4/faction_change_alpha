<?php

// Arrays to hold string value of Race/Class/Combos and Items
$raceList = [
    "1" => "Human",
    "2" => "Orc",
    "3" => "Dwarf",
    "4" => "Night Elf",
    "5" => "Undead",
    "6" => "Tauren",
    "7" => "Gnome",
    "8" => "Troll",
    "10" => "Blood Elf",
    "11" => "Draenei"
];
$classList = [
    "1" => "Warrior",
    "2" => "Paladin",
    "3" => "Hunter",
    "4" => "Rogue",
    "5" => "Priest",
    "7" => "Shaman",
    "8" => "Mage",
    "9" => "Warlock",
    "11" => "Druid"
];
$classRaceList = [
    "Warrior" => "Human | Dwarf | Gnome | Night Elf | Draenei | Orc | Undead | Tauren | Troll",
    "Paladin" => "Human | Dwarf | Draenei | Blood Elf",
    "Hunter" => "Dwarf | Night Elf | Orc | Tauren | Troll | Blood Elf",
    "Rogue" => "Human | Night Elf | Gnome | Dwarf | Orc | Undead | Troll | Blood Elf",
    "Priest" => "Human | Dwarf | Night Elf | Draenei | Undead | Troll | Blood Elf",
    "Shaman" => "Draenei | Orc | Tauren | Troll",
    "Mage" => "Human | Gnome | Draenei | Undead | Troll | Blood Elf",
    "Warlock" => "Human | Gnome | Undead | Blood Elf | Orc",
    "Druid" => "Night Elf | Tauren"
];
$itemUpdateList = [
    "28381" => "28996",
    "28383" => "28997",
    "28385" => "28995",
    "28402" => "28982",
    "28404" => "28980",
    "28405" => "28981",
    "28411" => "29002",
    "28410" => "29003",
    "28409" => "29001",
    "28424" => "28988",
    "28422" => "28987",
    "28423" => "28986",
    "28445" => "28978",
    "28444" => "28977",
    "28443" => "28976",
    "28448" => "29006",
    "28447" => "29005",
    "28446" => "29004",
    "28451" => "28973",
    "28450" => "28974",
    "28449" => "28975",
    "28605" => "28989",
    "28630" => "28991",
    "28629" => "28990",
    "28638" => "28992",
    "28640" => "28994",
    "28639" => "28993",
    "28643" => "28984",
    "28642" => "28985",
    "28641" => "28983",
    "28646" => "28999",
    "28645" => "29000",
    "28644" => "28998",
    "31598" => "31599",
    "31595" => "31597",
    "31594" => "31596",
    "28293" => "28943",
    "28917" => "28942",
    "28918" => "28945",
    "28920" => "28944",
    "28921" => "28946",
    "28922" => "28947",
    "28923" => "28949",
    "28924" => "28950",
    "28919" => "28948",
    "28925" => "28951",
    "28926" => "28952",
    "28928" => "28953",
    "28929" => "28954",
    "28930" => "28955",
    "28931" => "28957",
    "28933" => "28960",
    "28935" => "28959",
    "28937" => "28956",
    "28938" => "28941",
    "28939" => "28940",
    "15197" => "15196",
    "15199" => "15198",
    "18607" => "18606",
    "18834" => "18854",
    "18845" => "29593",
    "18846" => "18856",
    "18849" => "18857",
    "18850" => "18859",
    "18851" => "18862",
    "18852" => "18858",
    "18853" => "18863",
    "29592" => "18864",
    "24551" => "25829",
    "28239" => "28238",
    "28240" => "28234",
    "28241" => "28235",
    "28242" => "28236",
    "28243" => "28237",
    "30343" => "30348",
    "30344" => "30350",
    "30345" => "30351",
    "30346" => "30349",
    "28805" => "28613",
    "28806" => "28614",
    "28807" => "28615",
    "28808" => "28616",
    "28809" => "28617",
    "28811" => "28618",
    "28812" => "28619",
    "28813" => "28620",
    "28814" => "28622",
    "28815" => "28623",
    "28817" => "28624",
    "28818" => "28625",
    "28819" => "28626",
    "28820" => "28627",
    "28821" => "28628",
    "28831" => "28679",
    "28832" => "28680",
    "28833" => "28681",
    "28835" => "28683",
    "28834" => "28724",
    "28836" => "28684",
    "28837" => "28685",
    "28838" => "28686",
    "28839" => "28687",
    "28840" => "28688",
    "28841" => "28689",
    "28842" => "28690",
    "28843" => "28691",
    "28844" => "28692",
    "28845" => "28693",
    "28846" => "28694",
    "28847" => "28695",
    "28848" => "28696",
    "28849" => "28697",
    "28850" => "28698",
    "28851" => "28699",
    "28852" => "28700",
    "28853" => "28701",
    "28854" => "28702",
    "28855" => "28703",
    "28856" => "28704",
    "28857" => "28705",
    "28858" => "28706",
    "28859" => "28707",
    "28860" => "28708",
    "28861" => "28709",
    "28862" => "28710",
    "28863" => "28711",
    "28864" => "28712",
    "28865" => "28713",
    "28866" => "28714",
    "28867" => "28715",
    "28868" => "28716",
    "28869" => "28717",
    "28870" => "28718",
    "28871" => "28719",
    "28872" => "28720",
    "28873" => "28721",
    "28874" => "28722",
    "28875" => "28723",
    "31584" => "31589",
    "31585" => "31590",
    "31586" => "31591",
    "31587" => "31592",
    "31588" => "31593",
    "31621" => "31620",
    "31626" => "31622",
    "31627" => "31623",
    "31628" => "31624",
    "31629" => "31625",
    "31635" => "31630",
    "31636" => "31631",
    "31637" => "31632",
    "31638" => "31633",
    "31639" => "31634",
    "31646" => "31640",
    "31647" => "31641",
    "31648" => "31642",
    "31649" => "31643",
    "31650" => "31644",
    "29147" => "29148",
    "29141" => "29142",
    "29145" => "29146",
    "29143" => "29144",
    "29139" => "29140",
    "29135" => "29136",
    "29137" => "29138",
    "29102" => "29227",
    "29104" => "29229",
    "29105" => "29230",
    "29103" => "29231",
    "31829" => "31830",
    "31831" => "31832",
    "31833" => "31834",
    "31835" => "31836",
    "25824" => "25826",
    "25823" => "25825",
    "30637" => "30622",
    "29168" => "29169",
    "29167" => "29166",
    "32882" => "32883",
    "29155" => "29153",
    "29165" => "29156",
    "29152" => "29151",
    "24004" => "23999",
    "31773" => "31774",
    "19031" => "19032",
    "19046" => "19045",
    "19029" => "19030",
    "37865" => "37864",
    "24581" => "24579",
    "24522" => '24520',
    "30571" => "30598",
    "30571" => "30598",
    "25474" => "25470",
    "25476" => "25471",
    "25475" => "25472",
    "25532" => "25473",
    "25477" => "25527",
    "25531" => "25528",
    "25533" => "25529" 
];
$mountUpdateList = [
    "Human" => [
        "8588" => "2411",
        "8591" => "2411",
        "8592" => "2411",
        "13331" => "2411",
        "13332" => "2411",
        "13333" => "2411",
        "1132" => "2411",
        "5665" => "2411",
        "5668" => "2411",
        "15277" => "2411",
        "15290" => "2411",
        "28927" => "2411",
        "29220" => "2411",
        "29222" => "2411",
        "29221" => "2411",
        "18788" => "18776",
        "18789" => "18776",
        "18790" => "18776",
        "13334" => "18776",
        "18791" => "18776",
        "18796" => "18776",
        "18797" => "18776",
        "18798" => "18776",
        "18793" => "18776",
        "18794" => "18776",
        "18795" => "18776",
        "28936" => "18776",
        "29223" => "18776",
        "29224" => "18776"
    ],
    "Dwarf" => [
        "8588" => "5864",
        "8591" => "5864",
        "8592" => "5864",
        "13331" => "5864",
        "13332" => "5864",
        "13333" => "5864",
        "1132" => "5864",
        "5665" => "5864",
        "5668" => "5864",
        "15277" => "5864",
        "15290" => "5864",
        "28927" => "5864",
        "29220" => "5864",
        "29222" => "5864",
        "29221" => "5864",
        "18788" => "18785",
        "18789" => "18785",
        "18790" => "18785",
        "13334" => "18785",
        "18791" => "18785",
        "18796" => "18785",
        "18797" => "18785",
        "18798" => "18785",
        "18793" => "18785",
        "18794" => "18785",
        "18795" => "18785",
        "28936" => "18785",
        "29223" => "18785",
        "29224" => "18785"
    ],
    "Gnome" => [
        "8588" => "8563",
        "8591" => "8563",
        "8592" => "8563",
        "13331" => "8563",
        "13332" => "8563",
        "13333" => "8563",
        "1132" => "8563",
        "5665" => "8563",
        "5668" => "8563",
        "15277" => "8563",
        "15290" => "8563",
        "28927" => "8563",
        "29220" => "8563",
        "29222" => "8563",
        "29221" => "8563",
        "18788" => "18772",
        "18789" => "18772",
        "18790" => "18772",
        "13334" => "18772",
        "18791" => "18772",
        "18796" => "18772",
        "18797" => "18772",
        "18798" => "18772",
        "18793" => "18772",
        "18794" => "18772",
        "18795" => "18772",
        "28936" => "18772",
        "29223" => "18772",
        "29224" => "18772"
    ],
    "Night Elf" => [
        "8588" => "8629",
        "8591" => "8629",
        "8592" => "8629",
        "13331" => "8629",
        "13332" => "8629",
        "13333" => "8629",
        "1132" => "8629",
        "5665" => "8629",
        "5668" => "8629",
        "15277" => "8629",
        "15290" => "8629",
        "28927" => "8629",
        "29220" => "8629",
        "29222" => "8629",
        "29221" => "8629",
        "18788" => "18766",
        "18789" => "18766",
        "18790" => "18766",
        "13334" => "18766",
        "18791" => "18766",
        "18796" => "18766",
        "18797" => "18766",
        "18798" => "18766",
        "18793" => "18766",
        "18794" => "18766",
        "18795" => "18766",
        "28936" => "18766",
        "29223" => "18766",
        "29224" => "18766"
    ],
    "Draenei" => [
        "8588" => "28481",
        "8591" => "28481",
        "8592" => "28481",
        "13331" => "28481",
        "13332" => "28481",
        "13333" => "28481",
        "1132" => "28481",
        "5665" => "28481",
        "5668" => "28481",
        "15277" => "28481",
        "15290" => "28481",
        "28927" => "28481",
        "29220" => "28481",
        "29222" => "28481",
        "29221" => "28481",
        "18788" => "29745",
        "18789" => "29745",
        "18790" => "29745",
        "13334" => "29745",
        "18791" => "29745",
        "18796" => "29745",
        "18797" => "29745",
        "18798" => "29745",
        "18793" => "29745",
        "18794" => "29745",
        "18795" => "29745",
        "28936" => "29745",
        "29223" => "29745",
        "29224" => "29745"
    ]
];




// Data from Front End Page
$requestType = $_SERVER['REQUEST_METHOD'];

// Get data from post request
$wowUser = $_POST['user'];
$wowPass = $_POST['pass'];
$wowCharacter = $_POST['charname'];
$wowDestinationRace = $_POST['destrace'];

// Some vars
$authenticated = false;
$validateTransfer = false;
$isAllianceDest = true;

switch($wowDestinationRace) {
        case "Orc":
	case "Blood Elf":
	case "Tauren":
	case "Troll":
	case "Undead":
		$isAllianceDest = false;
		break;
}



// Create connection to Realm and World DB
$dbUser = '*********';
$dbPass = '*********';
$dbRealm = new PDO('mysql:host=127.0.0.1;port=3306;dbname=wow_realm;charset=utf8mb4', $dbUser, $dbPass);
$dbChar = new PDO('mysql:host=127.0.0.1;port=3306;dbname=wow_chars;charset=utf8mb4', $dbUser, $dbPass);

// Prepare query to authenticate user
$sth = $dbRealm->prepare("select * from account where username = :wowUser");
$sth->bindParam(':wowUser', $wowUser);
$sth->execute();

// Get results to authenticate user
$result = $sth->fetchAll();
$accountGUID = $result[0]['account_id'];
$accountName = $result[0]['username'];
$passHash = $result[0]['pass_hash'];

// Check if passwords match!
if (strtoupper($passHash) == strtoupper(sha1(strtoupper($wowUser) . ":" . strtoupper($wowPass)))) {
    $authenticated = true;
}
else {
    echo "Password does not match";
    exit(1);
}




// Lets see if the character belongs to user and fetch character data!
$sth = $dbChar->prepare("SELECT * from characters where account = :accountGUID");
$sth->bindParam(':accountGUID', $accountGUID);
$sth->execute();
$result = $sth->fetchAll();

// Char name and Username Matches!
for ($i = 0; $i < count($result); $i++) {
    if (strtoupper($result[$i]['name']) === strtoupper($wowCharacter)) {
        // Save GUID, Race and Class of Char
        $charGUID = $result[$i]['guid'];
        $originalRace = $result[$i]['race'];
        $charClass = $result[$i]['class'];
        $charOnline = $result[$i]['online'];
        $charName = $result[$i]['name'];
        $charLevel = $result[$i]['level'];
        $sth = null;
        $i = count($result) + 10;
    }
    else {
        if ($i == count($result)) {
            echo "Error : No character exist, or does not belong to your account";
            exit(1);
        }
    }
}


// Check if Destination Race / Class combination is valid
if (strpos($classRaceList[$classList[$charClass]], $wowDestinationRace) !== false) {
    $validateTransfer = true;
}
else {
    echo "Error : Destination Character Race and Class Combo does not Exist!";
    exit(1);
}




// We have now authenticated user
// Made sure character belongs to him
// And that destination race supports char class
// Now we have valiated the transfer we can go ahead with the faction change

// Begin a transaction turn off auto commit
$dbChar->beginTransaction();

// Lets start the transfer process
// Deal with Racials, and items

    // Check if character is online
    if ($charOnline) {
        echo "Error : Character is currently online, please log out.";
        exit(1);
    }

    // Check if character has any auctions
    $query = "SELECT * FROM auctionhouse WHERE item_owner = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $result = $sth->fetchAll();
    // If any auctions, quit
    if ($result != null) {
        echo "Error : Character has active auctions, please cancel them.";
        exit(1);
    } 

    // Check if character has any mail in mailbox
    $query = "SELECT * FROM mail WHERE receiver = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $result = $sth->fetchAll();
    // If any mail, quit
    if ($result != null) {
        echo "Error : Character has mail, please retreive it.";
        exit(1);
    } 

    // Check if charater is a guild leader
/*
    $query = "SELECT * from guild WHERE leaderguid = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $result = $sth->fetchAll();
    // If guild leader, quit
    if ($result != null) {
        echo "Error : Chracter is a guild leader, please give leader to someone or disband.";
        exit(1);
    }

    // Remove char from guild
    $query = "DELETE FROM guild_member WHERE guid = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
*/

    // Add flightpoints for char under level 70
    if ($charLevel < 70) {
	//Alliance Destination
	if ($isAllianceDest)
            $query = "UPDATE `characters` SET `taximask`='3456149754 2148013393 49991 8 0 262176 4 0 0 0 0 0 0 0 0 0 ' WHERE `guid`= :charGUID;";
	else // TODO: Horde Destination
	    $query = "UPDATE `characters` SET `taximask`='3456149754 2148013393 49991 8 0 262176 4 0 0 0 0 0 0 0 0 0 ' WHERE `guid`= :charGUID;";
        $sth = $dbChar->prepare($query);
        $sth->bindParam(':charGUID', $charGUID);
        $sth->execute();
    }

    // Add flightpoints for char level 70
    else if ($charLevel == 70) {
	//alliance destination
	if ($isAllianceDest)
            $query = "UPDATE `characters` SET `taximask`='3456411898 2148013393 49991 2605711384 3358589953 262184 4 0 0 0 0 0 0 0 0 0 ' WHERE `guid`= :charGUID;";
        else // TODO Horde destination
	    $query = "UPDATE `characters` SET `taximask`='3456411898 2148013393 49991 2605711384 3358589953 262184 4 0 0 0 0 0 0 0 0 0 ' WHERE `guid`= :charGUID;";
	$sth = $dbChar->prepare($query);
        $sth->bindParam(':charGUID', $charGUID);
        $sth->execute();
    }

    // Get the values of reputation from the BC Faction + BG Factions
    $query = "SELECT * FROM `character_reputation` WHERE `guid` = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $result = $sth->fetchAll();
   
   	// Iterate through reputations to find the following 4
   	for ($i = 0; $i < count($result); $i++) {
   		if ($result[$i]['faction'] == 947) {
   			$thrallmarRep = $result[$i]['standing'];
   		}
   		if ($result[$i]['faction'] == 941) {
   			$magharRep = $result[$i]['standing'];
   		}
   		if ($result[$i]['faction'] == 889) {
   			$warsongRep = $result[$i]['standing'];
   		}
   		if ($result[$i]['faction'] == 729) {
   			$frostwolfRep = $result[$i]['standing'];
   		}
   		if ($result[$i]['faction'] == 510) {
   			$defilersRep = $result[$i]['standing'];
   		}

   	}

    // Update BC Factions from Horde to Ally Alternative
    $query = "UPDATE `character_reputation` SET `standing` = 0 WHERE `faction` = 947 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = 0 WHERE `faction` = 941 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = 0 WHERE `faction` = 889 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = 0 WHERE `faction` = 729 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = 0 WHERE `faction` = 510 AND `guid` = :charGUID;
    	      UPDATE `character_reputation` SET `standing` = :thrallmarRep WHERE `faction` = 946 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = :magharRep WHERE `faction` = 978 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = :warsongRep WHERE `faction` = 890 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = :frostwolfRep WHERE `faction` = 730 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `standing` = :defilersRep WHERE `faction` = 509 AND `guid` = :charGUID;";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->bindParam(':thrallmarRep', $thrallmarRep);
    $sth->bindParam(':magharRep', $magharRep);
    $sth->bindParam(':warsongRep', $warsongRep);
    $sth->bindParam(':frostwolfRep', $frostwolfRep);
    $sth->bindParam(':defilersRep', $defilersRep);
    $sth->execute();


    // Update Vanilla Factions from Horde to Ally Alternative
    $query = "UPDATE `character_reputation` SET `faction` = 72 WHERE `faction` = 76 AND `guid` = :charGUID; 
              UPDATE `character_reputation` SET `faction` = 54 WHERE `faction` = 81 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `faction` = 69 WHERE `faction` = 68 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `faction` = 47 WHERE `faction` = 530 AND `guid` = :charGUID;
              UPDATE `character_reputation` SET `faction` = 930 WHERE `faction` = 911 AND `guid` = :charGUID;";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();


    // Change the characters race
    $query = "UPDATE `characters` SET `race` = :destinationRace, `changeRaceTo` = :destinationRace WHERE `guid` = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $raceID = array_search($wowDestinationRace, $raceList);
    $sth->bindParam(':destinationRace', $raceID);
    $sth->execute();

    // Move the character to Ironforge
    $query = "UPDATE `characters` SET `position_x` = '-5049.47', `position_y` = '-1275.5', `position_z` = '510.325', `map` = '0' where `guid` = :charGUID";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();

    // Remove Race Specific Spells (Racials)
    switch($raceList[$originalRace]) {
        case "Orc":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('20574','21563','20572','20573','669', '20575', '20576', '33702', '21563') AND `guid` = :charGUID;";
            break;

        case "Undead":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('7744','20577','20579','5227','669','17737') AND `guid` = :charGUID;";
            break;

        case "Tauren":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('20550','20552','20549','20551','669','670') AND `guid` = :charGUID;";
            break;

        case "Troll":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('20557','26290','20554', '26296','20558','20555','7341','669') AND `guid` = :charGUID;";
            break;

        case "Blood Elf":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('28877','28730','25046','822','28734','669','813') AND `guid` = :charGUID;";
            break;

        default:
            echo "Error : Removing Racials";
            exit(1);
            break;
    }
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();

    // Remove Class Specific Spells
    switch($classList[$charClass]) {
        case "Priest":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('2652','19261','19262','19264','19265','19266','25461','2944','19276','19277','19278','19279','19280','25467','9035','19281','19282','19283','19284','19285','25470','18137','19308','19309','19310','19311','19312','25477','20557','32676') AND `guid` = :charGUID";
            break;

        case "Mage":
            $query = "DELETE FROM `character_spell` WHERE `spell` IN ('11420','11417','11418','32267','49361','3563','3566','3567','32272','49358') AND `guid` = :charGUID";
            break;

        case "Paladin":
            $query = "DELETE FROM `character_spell` WHERE `spell` = '31892' AND `guid` = :charGUID";
            break;

        case "Shaman":
            $query = "DELETE FROM `character_spell` WHERE `spell` = '2825' AND `guid` = :charGUID";
            break;

        default:
            break;
    }
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();


    // Add the new Racials
    switch($wowDestinationRace) {
        case "Human":
            $query = "INSERT INTO `character_spell` VALUES
                      (:charGUID,20599,0,1,0),
                      (:charGUID,20597,0,1,0),
                      (:charGUID,20864,0,1,0),
                      (:charGUID,20598,0,1,0),
                      (:charGUID,20600,0,1,0),
                      (:charGUID,668,0,1,0);";
            break;

        case "Dwarf":
            $query = "INSERT INTO `character_spell` VALUES
                      (:charGUID,20596,0,1,0),
                      (:charGUID,2481,0,1,0),
                      (:charGUID,20595,0,1,0),
                      (:charGUID,20594,0,1,0),
                      (:charGUID,672,0,1,0),
                      (:charGUID,668,0,1,0);";
            break;

        case "Night Elf":
            $query = "INSERT INTO `character_spell` VALUES
                      (:charGUID,20582,0,1,0),
                      (:charGUID,20580,0,1,0),
                      (:charGUID,20583,0,1,0),
                      (:charGUID,20585,0,1,0),
                      (:charGUID,671,0,1,0),
                      (:charGUID,668,0,1,0);";
            break;

        case "Gnome":
            $query = "INSERT INTO `character_spell` VALUES
                      (:charGUID,20592,0,1,0),
                      (:charGUID,20589,0,1,0),
                      (:charGUID,20593,0,1,0),
                      (:charGUID,20591,0,1,0),
                      (:charGUID,7340,0,1,0),
                      (:charGUID,668,0,1,0);";
            break;

        case "Draenei":
            $query = "INSERT INTO `character_spell` VALUES
                      (:charGUID,28875,0,1,0),
                      (:charGUID,28880,0,1,0),
                      (:charGUID,20579,0,1,0),
                      (:charGUID,6562,0,1,0),
                      (:charGUID,668,0,1,0),
                      (:charGUID,29932,0,1,0);";
            break;

        default:
            echo "Error : Adding Racials";
            exit(1);
            break;
    }
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();

    /* START UPDATING ITEMS */
    // Get the numbers of rows / values of items that need updating
    $query = "SELECT * FROM `character_inventory` WHERE `item_template` IN (28381,28383,28385,28402,28404,28405,28411,28410,28409,28424,28422,28423,28445,28444,28443,28448,28447,28446,28451,28450,28449,28605,28630,28629,28638,28640,28639,28643,28642,28641,28646,28645,28644,31598,31595,31594,28293,28917,28918,28920,28921,28922,28923,28924,28919,28925,28926,28928,28929,28930,28931,28933,28935,28937,28938,28939,15197,15199,18607,18834,18845,18846,18849,18850,18851,18852,18853,29592,24551,28239,28240,28241,28242,28243,30343,30344,30345,30346,28805,28806,28807,28808,28809,28811,28812,28813,28814,28815,28817,28818,28819,28820,28821,28831,28832,28833,28835,28834,28836,28837,28838,28839,28840,28841,28842,28843,28844,28845,28846,28847,28848,28849,28850,28851,28852,28853,28854,28855,28856,28857,28858,28859,28860,28861,28862,28863,28864,28865,28866,28867,28868,28869,28870,28871,28872,28873,28874,28875,31584,31585,31586,31587,31588,31621,31626,31627,31628,31629,31635,31636,31637,31638,31639,31646,31647,31648,31649,31650,29147,29141,29145,29143,29139,29135,29137,29102,29104,29105,29103,31829,31831,31833,31835,25824,25823,30637,29168,29167,32882,29155,29165,29152,24004,31773,19031,19046,19029,37865,24581,24522,30571,8588,8591,8592,13331,13332,13333,1132,5665,5668,15277,15290,28927,29220,29222,29221,18788,18789,18790,13334,18791,18796,18797,18798,18793,18794,18795,28936,29223,29224,30571,25474,25475,25476,25532,25477,25531,25533) AND `guid` = :charGUID";

    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $result = $sth->fetchAll();
    
    //Iterate through the returned results and save ITEM and ITEM_TEMPLATE
    $updatedItems = null;
    for($i = 0; $i < count($result); $i++) {
        $updatedItems[$i]['item'] = $result[$i]['item'];
        $updatedItems[$i]['item_template'] = $result[$i]['item_template'];
    }

    // Select from item_instance table to get our data
    $tempQuery = "SELECT * from item_instance WHERE ";
    if ($updatedItems != null)
    for($i = 0; $i < count($updatedItems); $i++) {
        $tempQuery .= "`guid` = '" . $updatedItems[$i]['item'] . "'";
        if ($i != count($result) -1 ) {
            $tempQuery .= " OR ";
        }
        if ($i == count($result) -1 ) {
            $tempQuery .= " and `owner_guid` = '" . $charGUID . "'";
        }
    }

    // Execture our query to get data lines
    $query = $tempQuery;
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();
    $itemResult = $sth->fetchAll();


    // We have now done all of the required changes
    // Lets confirm character is still offline and then commit the changes!
    $query = "SELECT * from characters where name = :charName";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charName', $charName);
    $sth->execute();
    $result = $sth->fetchAll();
    $charOnline = $result[0]['online'];


    // Char is online
    if ($charOnline == 1) {
        echo "Error : Character is currently online, please log out.";
        $dbChar->rollback();
        exit(1);
    }

    // Commit all previous changes
    $dbChar->commit();

    // Iterate through data and build our update queries
    $tempQuery = "";
    for($i = 0; $i < count($itemResult); $i++) {
        // Find itemGUID in data, edit the data and update table!
        $tempQuery .= "UPDATE `item_instance` SET ";
        $tempData = $itemResult[$i]['data'];
        $tempDataArr = explode(" ", $tempData);
        if (in_array($itemUpdateList[$updatedItems[$i]['item_template']], $itemUpdateList)) {
            $tempDataArr[3] = $itemUpdateList[$updatedItems[$i]['item_template']];
        }
        else if (in_array($mountUpdateList[$wowDestinationRace][$updatedItems[$i]['item_template']], $mountUpdateList[$wowDestinationRace])) {
            $tempDataArr[3] = $mountUpdateList[$wowDestinationRace][$updatedItems[$i]['item_template']];
        }
        $tempDataArr = implode(" ", $tempDataArr);
        $tempQuery .= "`data` = '" . $tempDataArr ."' WHERE `owner_guid` = '" . $charGUID . "' AND `data` = '" . $tempData . "';"; 
    }

    // Execture our query to update items
    $query = $tempQuery;
    $sth = $dbChar->prepare($query);
    $sth->execute();


    // /* END UPDATING ITEMS */


    // Redundent, but lets keep the standard. Updaate item_template in char_inventory
    // Update item_templates from Horde to Ally Alternatives
    $query =   "UPDATE `character_inventory` SET `item_template`='28996' WHERE `item_template` = '28381' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28997' WHERE `item_template` = '28383' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28995' WHERE `item_template` = '28385' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28982' WHERE `item_template` = '28402' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28980' WHERE `item_template` = '28404' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28981' WHERE `item_template` = '28405' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29002' WHERE `item_template` = '28411' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29003' WHERE `item_template` = '28410' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29001' WHERE `item_template` = '28409' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28988' WHERE `item_template` = '28424' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28987' WHERE `item_template` = '28422' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28986' WHERE `item_template` = '28423' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28978' WHERE `item_template` = '28445' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28977' WHERE `item_template` = '28444' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28976' WHERE `item_template` = '28443' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29006' WHERE `item_template` = '28448' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29005' WHERE `item_template` = '28447' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29004' WHERE `item_template` = '28446' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28973' WHERE `item_template` = '28451' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28974' WHERE `item_template` = '28450' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28975' WHERE `item_template` = '28449' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28989' WHERE `item_template` = '28605' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28991' WHERE `item_template` = '28630' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28990' WHERE `item_template` = '28629' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28992' WHERE `item_template` = '28638' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28994' WHERE `item_template` = '28640' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28993' WHERE `item_template` = '28639' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28984' WHERE `item_template` = '28643' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28985' WHERE `item_template` = '28642' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28983' WHERE `item_template` = '28641' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28999' WHERE `item_template` = '28646' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29000' WHERE `item_template` = '28645' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28998' WHERE `item_template` = '28644' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31599' WHERE `item_template` = '31598' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31597' WHERE `item_template` = '31595' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31596' WHERE `item_template` = '31594' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28943' WHERE `item_template` = '28293' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28942' WHERE `item_template` = '28917' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28945' WHERE `item_template` = '28918' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28944' WHERE `item_template` = '28920' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28946' WHERE `item_template` = '28921' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28947' WHERE `item_template` = '28922' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28949' WHERE `item_template` = '28923' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28950' WHERE `item_template` = '28924' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28948' WHERE `item_template` = '28919' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28951' WHERE `item_template` = '28925' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28952' WHERE `item_template` = '28926' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28953' WHERE `item_template` = '28928' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28954' WHERE `item_template` = '28929' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28955' WHERE `item_template` = '28930' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28957' WHERE `item_template` = '28931' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28960' WHERE `item_template` = '28933' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28959' WHERE `item_template` = '28935' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28956' WHERE `item_template` = '28937' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28941' WHERE `item_template` = '28938' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28940' WHERE `item_template` = '28939' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='15196' WHERE `item_template` = '15197' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='15198' WHERE `item_template` = '15199' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18606' WHERE `item_template` = '18607' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18854' WHERE `item_template` = '18834' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29593' WHERE `item_template` = '18845' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18856' WHERE `item_template` = '18846' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18857' WHERE `item_template` = '18849' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18859' WHERE `item_template` = '18850' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18862' WHERE `item_template` = '18851' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18858' WHERE `item_template` = '18852' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18863' WHERE `item_template` = '18853' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='18864' WHERE `item_template` = '29592' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25829' WHERE `item_template` = '24551' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28238' WHERE `item_template` = '28239' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28234' WHERE `item_template` = '28240' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28235' WHERE `item_template` = '28241' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28236' WHERE `item_template` = '28242' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28237' WHERE `item_template` = '28243' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30348' WHERE `item_template` = '30343' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30350' WHERE `item_template` = '30344' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30351' WHERE `item_template` = '30345' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30349' WHERE `item_template` = '30346' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28613' WHERE `item_template` = '28805' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28614' WHERE `item_template` = '28806' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28615' WHERE `item_template` = '28807' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28616' WHERE `item_template` = '28808' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28617' WHERE `item_template` = '28809' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28618' WHERE `item_template` = '28811' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28619' WHERE `item_template` = '28812' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28620' WHERE `item_template` = '28813' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28622' WHERE `item_template` = '28814' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28623' WHERE `item_template` = '28815' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28624' WHERE `item_template` = '28817' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28625' WHERE `item_template` = '28818' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28626' WHERE `item_template` = '28819' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28627' WHERE `item_template` = '28820' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28628' WHERE `item_template` = '28821' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28679' WHERE `item_template` = '28831' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28680' WHERE `item_template` = '28832' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28681' WHERE `item_template` = '28833' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28683' WHERE `item_template` = '28835' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28724' WHERE `item_template` = '28834' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28684' WHERE `item_template` = '28836' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28685' WHERE `item_template` = '28837' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28686' WHERE `item_template` = '28838' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28687' WHERE `item_template` = '28839' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28688' WHERE `item_template` = '28840' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28689' WHERE `item_template` = '28841' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28690' WHERE `item_template` = '28842' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28691' WHERE `item_template` = '28843' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28692' WHERE `item_template` = '28844' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28693' WHERE `item_template` = '28845' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28694' WHERE `item_template` = '28846' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28695' WHERE `item_template` = '28847' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28696' WHERE `item_template` = '28848' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28697' WHERE `item_template` = '28849' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28698' WHERE `item_template` = '28850' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28699' WHERE `item_template` = '28851' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28700' WHERE `item_template` = '28852' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28701' WHERE `item_template` = '28853' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28702' WHERE `item_template` = '28854' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28703' WHERE `item_template` = '28855' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28704' WHERE `item_template` = '28856' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28705' WHERE `item_template` = '28857' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28706' WHERE `item_template` = '28858' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28707' WHERE `item_template` = '28859' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28708' WHERE `item_template` = '28860' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28709' WHERE `item_template` = '28861' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28710' WHERE `item_template` = '28862' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28711' WHERE `item_template` = '28863' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28712' WHERE `item_template` = '28864' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28713' WHERE `item_template` = '28865' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28714' WHERE `item_template` = '28866' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28715' WHERE `item_template` = '28867' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28716' WHERE `item_template` = '28868' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28717' WHERE `item_template` = '28869' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28718' WHERE `item_template` = '28870' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28719' WHERE `item_template` = '28871' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28720' WHERE `item_template` = '28872' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28721' WHERE `item_template` = '28873' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28722' WHERE `item_template` = '28874' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='28723' WHERE `item_template` = '28875' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31589' WHERE `item_template` = '31584' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31590' WHERE `item_template` = '31585' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31591' WHERE `item_template` = '31586' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31592' WHERE `item_template` = '31587' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31593' WHERE `item_template` = '31588' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31620' WHERE `item_template` = '31621' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31622' WHERE `item_template` = '31626' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31623' WHERE `item_template` = '31627' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31624' WHERE `item_template` = '31628' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31625' WHERE `item_template` = '31629' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31630' WHERE `item_template` = '31635' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31631' WHERE `item_template` = '31636' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31632' WHERE `item_template` = '31637' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31633' WHERE `item_template` = '31638' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31634' WHERE `item_template` = '31639' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31640' WHERE `item_template` = '31646' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31641' WHERE `item_template` = '31647' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31642' WHERE `item_template` = '31648' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31643' WHERE `item_template` = '31649' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31644' WHERE `item_template` = '31650' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29148' WHERE `item_template` = '29147' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29142' WHERE `item_template` = '29141' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29146' WHERE `item_template` = '29145' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29144' WHERE `item_template` = '29143' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29140' WHERE `item_template` = '29139' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29136' WHERE `item_template` = '29135' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29138' WHERE `item_template` = '29137' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29227' WHERE `item_template` = '29102' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29229' WHERE `item_template` = '29104' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29230' WHERE `item_template` = '29105' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29231' WHERE `item_template` = '29103' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31830' WHERE `item_template` = '31829' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31832' WHERE `item_template` = '31831' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31834' WHERE `item_template` = '31833' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31836' WHERE `item_template` = '31835' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25826' WHERE `item_template` = '25824' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25825' WHERE `item_template` = '25823' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30622' WHERE `item_template` = '30637' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29169' WHERE `item_template` = '29168' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29166' WHERE `item_template` = '29167' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='32883' WHERE `item_template` = '32882' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29153' WHERE `item_template` = '29155' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29156' WHERE `item_template` = '29165' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='29151' WHERE `item_template` = '29152' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='23999' WHERE `item_template` = '24004' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='31773' WHERE `item_template` = '31774' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='19032' WHERE `item_template` = '19031' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='19045' WHERE `item_template` = '19046' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='19030' WHERE `item_template` = '19029' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='37864' WHERE `item_template` = '37865' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='24579' WHERE `item_template` = '24581' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='24520' WHERE `item_template` = '24522' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30598' WHERE `item_template` = '30571' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='30598' WHERE `item_template` = '30571' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25470' WHERE `item_template` = '25474' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25470' WHERE `item_template` = '25475' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25470' WHERE `item_template` = '25476' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25473' WHERE `item_template` = '25532' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25527' WHERE `item_template` = '25477' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25528' WHERE `item_template` = '25531' and `guid`=:charGUID;
                UPDATE `character_inventory` SET `item_template`='25529' WHERE `item_template` = '25533' and `guid`=:charGUID;";
    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();

    // Replace quests
    $query =   "UPDATE `character_queststatus` SET `quest`='10400' WHERE `quest` = '10136' and `guid`=:charGUID;
		UPDATE `character_queststatus` SET `quest`='10055' WHERE `quest` = '10086' and `guid`=:charGUID;";

    $sth = $dbChar->prepare($query);
    $sth->bindParam(':charGUID', $charGUID);
    $sth->execute();



    // We are done!!!
    echo "Faction Change Successful. Please clear your cache and wait 10 minutes before logging in. Otherwise you will face many visual bugs.";
    $myFile = "factionchangeList12314.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = $charName . " ";
	fwrite($fh, $stringData);
	fclose($fh);
?>