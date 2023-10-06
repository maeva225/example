<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=85px">
    <title>Inscription</title>
    <link rel="stylesheet" href="design1.css">
</head>
<body>
    <div>
        
        <div class="formulaire">
            <form action="traitement.php" method="get">
                <div class="entt">
                   <h2 class="ttl">Inscription En Ligne</h2>
                   <p class="sous">(Veuillez inscrire en Majuscules)</p>
                </div>
                <p>Nom:</p>
                <input type="text" name="name" id="name" required>
                <p>Prenom(s):</p>
                <input type="text" name="surname" id="surname" required>
                <p>Date de Naissance: </p>
                <input class="date" type="date" name="date" id="date" required>
                <p>Pays d'Origine: </p>
                <select name="pays" value="" required="" class="change"> <option value="--"> -- </option> <option value="United States"> United States </option> <option value="Afghanistan"> Afghanistan </option> <option value="Albania"> Albania </option> <option value="Algeria"> Algeria </option> <option value="American Samoa"> American Samoa </option> <option value="Andorra"> Andorra </option> <option value="Angola"> Angola </option> <option value="Anguilla"> Anguilla </option> <option value="Antigua and Barbuda"> Antigua and Barbuda </option> <option value="Argentina"> Argentina </option> <option value="Armenia"> Armenia </option> <option value="Aruba"> Aruba </option> <option value="Australia"> Australia </option> <option value="Austria"> Austria </option> <option value="Azerbaijan"> Azerbaijan </option> <option value="The Bahamas"> The Bahamas </option> <option value="Bahrain"> Bahrain </option> <option value="Bangladesh"> Bangladesh </option> <option value="Barbados"> Barbados </option> <option value="Belarus"> Belarus </option> <option value="Belgium"> Belgium </option> <option value="Belize"> Belize </option> <option value="Benin"> Benin </option> <option value="Bermuda"> Bermuda </option> <option value="Bhutan"> Bhutan </option> <option value="Bolivia"> Bolivia </option> <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option> <option value="Botswana"> Botswana </option> <option value="Brazil"> Brazil </option> <option value="Brunei"> Brunei </option> <option value="Bulgaria"> Bulgaria </option> <option value="Burkina Faso"> Burkina Faso </option> <option value="Burundi"> Burundi </option> <option value="Cambodia"> Cambodia </option> <option value="Cameroon"> Cameroon </option> <option value="Canada"> Canada </option> <option value="Cape Verde"> Cape Verde </option> <option value="Cayman Islands"> Cayman Islands </option> <option value="Central African Republic"> Central African Republic </option> <option value="Chad"> Chad </option> <option value="Chile"> Chile </option> <option value="China"> China </option> <option value="Christmas Island"> Christmas Island </option> <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option> <option value="Colombia"> Colombia </option> <option value="Comoros"> Comoros </option> <option value="Congo"> Congo </option> <option value="Cook Islands"> Cook Islands </option> <option value="Costa Rica"> Costa Rica </option> <option value="Cote d'Ivoire"> Cote d'Ivoire </option> <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option> <option value="Egypt"> Egypt </option> <option value="El Salvador"> El Salvador </option> <option value="Equatorial Guinea"> Equatorial Guinea </option> <option value="Eritrea"> Eritrea </option> <option value="Estonia"> Estonia </option> <option value="Ethiopia"> Ethiopia </option> <option value="Falkland Islands"> Falkland Islands </option> <option value="Faroe Islands"> Faroe Islands </option> <option value="Fiji"> Fiji </option> <option value="Finland"> Finland </option> <option value="France"> France </option> <option value="French Polynesia"> French Polynesia </option> <option value="Gabon"> Gabon </option> <option value="The Gambia"> The Gambia </option> <option value="Georgia"> Georgia </option> <option value="Germany"> Germany </option> <option value="Ghana"> Ghana </option> <option value="Guinea"> Guinea </option> <option value="Guinea-Bissau"> Guinea-Bissau </option> <option value="Guyana"> Guyana </option> <option value="Haiti"> Haiti </option> <option value="Kenya"> Kenya </option> <option value="Libya"> Libya </option> <option value="Liechtenstein"> Liechtenstein </option> <option value="Lithuania"> Lithuania </option> <option value="Luxembourg"> Luxembourg </option> <option value="Macau"> Macau </option> <option value="Macedonia"> Macedonia </option> <option value="Madagascar"> Madagascar </option> <option value="Malawi"> Malawi </option> <option value="Malaysia"> Malaysia </option> <option value="Maldives"> Maldives </option> <option value="Mali"> Mali </option> <option value="Marshall Islands"> Marshall Islands </option> <option value="Martinique"> Martinique </option> <option value="Mauritania"> Mauritania </option> <option value="Mauritius"> Mauritius </option> <option value="Mayotte"> Mayotte </option> <option value="Mexico"> Mexico </option> <option value="Micronesia"> Micronesia </option> <option value="Moldova"> Moldova </option> <option value="Monaco"> Monaco </option> <option value="Mongolia"> Mongolia </option> <option value="Morocco"> Maroc </option> <option value="Mozambique"> Mozambique </option> <option value="Myanmar"> Myanmar </option> <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option> <option value="Namibia"> Namibia </option> <option value="Nauru"> Nauru </option> <option value="Nepal"> Nepal </option> <option value="Netherlands"> Netherlands </option> <option value="Netherlands Antilles"> Netherlands Antilles </option> <option value="New Caledonia"> New Caledonia </option> <option value="New Zealand"> New Zealand </option> <option value="Nicaragua"> Nicaragua </option> <option value="Niger"> Niger </option> <option value="Nigeria"> Nigeria </option> <option value="Niue"> Niue </option> <option value="Norfolk Island"> Norfolk Island </option> <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option> <option value="Northern Mariana"> Northern Mariana </option> <option value="Norway"> Norway </option> <option value="Oman"> Oman </option> <option value="Pakistan"> Pakistan </option> <option value="Palau"> Palau </option> <option value="Palestine"> Palestine </option> <option value="Panama"> Panama </option> <option value="Papua New Guinea"> Papua New Guinea </option> <option value="Paraguay"> Paraguay </option> <option value="Peru"> Peru </option> <option value="Philippines"> Philippines </option> <option value="Pitcairn Islands"> Pitcairn Islands </option> <option value="Poland"> Poland </option> <option value="Portugal"> Portugal </option> <option value="Puerto Rico"> Puerto Rico </option> <option value="Qatar"> Qatar </option> <option value="Republic of the Congo"> Republic of the Congo </option> <option value="Russia"> Russia </option> <option value="Rwanda"> Rwanda </option> <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option> <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option> <option value="Samoa"> Samoa </option> <option value="San Marino"> San Marino </option> <option value="Sao Tome and Principe"> Sao Tome and Principe </option> <option value="Saudi Arabia"> Saudi Arabia </option> <option value="Senegal"> Senegal </option> <option value="Sierra Leone"> Sierra Leone </option> <option value="Somalia"> Somalia </option> <option value="Somaliland"> Somaliland </option> <option value="South Africa"> South Africa </option> <option value="South Ossetia"> South Ossetia </option> <option value="South Sudan"> South Sudan </option> <option value="Togo"> Togo </option> <option value="Tunisia"> Tunisie </option> <option value="Yemen"> Yemen </option> <option value="Zambia"> Zambia </option> <option value="Zimbabwe"> Zimbabwe </option> </select>
                <p>Nationalité:</p>
                <input type="text" name="nationalite" id="nationalité" required>
                <p>E-Mail: </p>
                <input type="email" name="email" id="email" required>
                <p>Numero de téléphone:</p>
                <input type="number" name="number" id="" required>
                <p>Niveau d'études: </p>
                <select type="text"  name="niveau" value="" required="" class="change"> <option value="">--</option> <option value="TERMINALE">TERMINALE</option> <option value="BAC">BAC</option> <option value="BAC+1">BAC+1</option> <option value="BAC+2">BAC+2</option> <option value="BAC+3">BAC+3</option> <option value="BAC+4">BAC+4</option> <option value="BAC+5">BAC+5</option> </select>
                <p>Cycle souhaité:</p>
                <select type="text" name="cycle" value="" required="" class="change"> <option value="">---</option> <option value="BTS GRHCom">BTS GRHCom</option> <option value="Licence 3 Professionnelle GRHCom">Licence 3 Professionnelle GRHCom</option> <option value="Ingénieur Management des RH">Ingénieur Management des RH</option> <option value="Ingénieur Sciences de l'information et de la Communication">Ingénieur Sciences de l'information et de la Communication</option> </select>
        
                <input type="file" name="cv" id="CV">
                <p class="warn">Ajoutez votre CV en format PDF*</p>
                 
                <div>
                    <input type="submit" value="Envoyez">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
