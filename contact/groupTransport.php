<script>
    $(function() {
        $("#datepicker").datepicker({
            showOn: "both", // show onclick calendar AND textfield
            buttonImage: "images/calendar-icon.gif", // define image path to calendar
            buttonImageOnly: true, // calendar image, no button
            showButtonPanel: true, // show buttons for 'today' and 'done'
            changeMonth: true, // month = changeable
            changeYear: true, // year = changeable
            dateFormat: 'dd-mm-yy', // date notation
            showWeek: false, // show week numbers
            buttonText: 'Open kalender',
            // NEDERLANDS
            closeText: 'Sluiten',
            prevText: '←',
            nextText: '→',
            currentText: 'Vandaag',
            monthNames: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
            monthNamesShort: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
            dayNames: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
            dayNamesShort: ['zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat'],
            dayNamesMin: ['zo', 'ma', 'di', 'wo', 'do', 'vr', 'za'],
            weekHeader: 'Wk'
        });
    });
    $(document).ready(function()
    {
        $("img[class='ui-datepicker-trigger']").each(function()
        {
            $(this).attr('style', 'height:20px; position:absolute; top:16px;right:10px;');
        });
    });
</script>

<fieldset>
    <legend>Persoonlijke gegevens</legend>
    <table>
        <tr>
            <td>
                <label for="title" class="required">Aanhef*</label>
            </td>
            <td>
                <input type="radio" name="title" id="title_De heer" value="De heer">
                <label for="title_De heer">De heer</label>
                <input type="radio" name="title" id="title_Mevrouw" value="Mevrouw">
                <label for="title_Mevrouw">Mevrouw</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="initials" class="required">Voorletters*</label>
            </td>
            <td>
                <input type="text" name="initialen" id="initials" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="middleName">Tussenvoegsel</label>
            </td>
            <td>
                <input type="text" name="tussenVoegsel" id="middleName" maxlength="12" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="surname" class="required">Achternaam*</label>
            </td>
            <td>
                <input type="text" name="achternaam" id="surname" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="postalCode" class="required">Postcode*</label>
            </td>
            <td>
                <input type="text" name="postcode" id="postalCode" value="" maxlength="6" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="houseNumber" class="required">Huisnummer*</label>
            </td>
            <td>
                <input type="text" name="huisnummer" id="houseNumber" value="" maxlength="5" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="houseNumberExtension">Huisnummer toev.</label>
            </td>
            <td>
                <input type="text" name="huisnummerToevoeging" id="houseNumberExtension" value="" maxlength="10"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="street" class="required">Straat*</label>
            </td>
            <td>
                <input type="text" name="straat" id="street" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="city" class="required">Woonplaats*</label>
            </td>
            <td>
                <input type="text" name="woonplaats" id="city" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="countryCode">Landcode</label>
            </td>
            <td>
                <input type="text" name="landcode" id="countryCode" value="+31" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="phoneNumber">Telefoonnummer</label>
            </td>
            <td>
                <input type="text" name="telefoonnummer" id="phoneNumber" value="" maxlength="15"/>
            </td>
        </tr>
            <td>
                <label for="cellNumber">Mobiel</label>
            </td>
            <td>
                <input type="text" name="mobielnummer" id="cellNumber" value="" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="emailAddress" class="required">E-mail*</label>
            </td>
            <td>
                <input type="text" name="emailAdres" id="emailAddress" value="" required />
            </td>
        </tr>
    </table>
</fieldset>
<br />
<fieldset>
    <legend>Groepsinformatie</legend>
    <table>
        <tr>
            <td>
                <label for="organisation" class="required">Bedrijf/Instelling*</label>
            </td>
            <td>
                <input type="text" name="organisatie" id="organisation" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="contactPerson">Contactpersoon</label>
            </td>
            <td>
                <input type="text" name="contactPersoon" id="contactPerson" value="" maxlength="50" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="departureTime" class="required">Vertrektijd heen*</label>
            </td>
            <td>
                <input type="text" name="vertrektijd[0]" id="departureTime_0" value="" maxlength="2" style="width:25px;" required />
                :
                <input type="text" name="vertrektijd[1]" id="departureTime_1" value="" maxlength="2" style="width:25px;" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="returnTime" class="required">Vertrektijd terug*</label>
            </td>
            <td>
                <input type="text" name="vertrektijdTerug[0]" id="returnTime_0" value="" maxlength="2" style="width:25px;" required />
                :
                <input type="text" name="vertrektijdTerug[1]" id="returnTime_1" value="" maxlength="2" style="width:25px;" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="numberOfAdults" >Aantal volwassenen (+18 jr)</label>
            </td>
            <td>
                <input type="text" name="aantalVolwassenen" id="numberOfAdults" value="" maxlength="5"  />
            </td>
        </tr>
        <tr>
            <td>
                <label for="numberOfChildren" >Aantal kinderen (4-11 jr)</label>
            </td>
            <td>
                <input type="text" name="aantalKinderen" id="numberOfChildren" value="" maxlength="5"  />
            </td>
        </tr>
        <tr>
            <td>
                <label for="numberOfChildren2" >Aantal kinderen (+12 jr)</label>
            </td>
            <td>
                <input type="text" name="aantalTieners" id="numberOfChildren2" value="" maxlength="5"  />
            </td>
        </tr>
        <tr>
            <td>
                <label for="numberOfAdults2" >Aantal volwassenen (65+)</label>
            </td>
            <td>
                <input type="text" name="aantalSenioren" id="numberOfAdults2" value="" maxlength="5"  />
            </td>
        </tr>
        <tr>
            <td>
                <label for="groupDescription">Omschrijving groep</label>
            </td>
            <td>
                <textarea name="groepBeschrijving" id="groupDescription" style="width:300px;" ></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="datepicker" class="required">Datum vervoer*</label>
            </td>
            <td>
                <div class="pickDateTime">
                    <div class="datePicker">
                        <input type="text" name='datum' id="datepicker" value="<?php echo date("d-m-Y") ?>" required />
                    </div>
                </div>
            </td>
        </tr>
    </table>
</fieldset>