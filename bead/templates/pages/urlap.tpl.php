    <h2>Regisztráció</h2>
    <hr>
    <form action="?oldal=feldolgoz" method="post">
        <h4>Név</h4>
        <div class="box">
            <input type="text" class="short" name="first" value="" id="first" pattern="[' '\-a-zA-Z]+">
            <label for="first">Családi név</label>
        </div>
        <div class="box">
            <input type="text" class="short" name="last" value="" id="last" pattern="[' '\-a-zA-Z]+">
            <label for="last">Utónév</label>
        </div>
        <div class="separator"></div>
        <h4>Cím</h4>
        <div class="box long">
            <input type="text" class="long" name="street1" value="" id="street1" required  pattern="[' '\-\.#a-zA-Z0-9]+">
            <label for="street1">Utca szám</label>
        </div>
        <div class="separator"></div>
        <div class="box long">
            <input type="text" class="long" name="street2" value="" id="street2"  pattern="[' '\-\.#a-zA-Z0-9]+">
            <label for="street2">Utca szám (2. sor)</label>
        </div>
        <div class="separator"></div>
        <div class="box">
            <input type="text" class="short" name="city" value="" id="city" required pattern="[' '\-a-zA-Z]+">
            <label for="city">Város</label>
        </div>
        <div class="box">
            <input type="text" class="short" name="province" value="" id="province" required pattern="[' '\-a-zA-Z]+">
            <label for="state">Megye</label>
        </div>
        <div class="separator"></div>
        <div class="box">
            <input type="text" class="short" name="postal" value="" id="postal" required pattern="[0-9]{4,6}">
            <label for="postal">Irányitószám</label>
        </div>
        <div class="box">
            <select name = "country" id="country">
                <option value = "1">Magyarország</option>
                <option value = "2">Másikország</option>
            </select>
            <label for="country">Ország</label>
        </div>
        <div class="separator"></div>
        <div class="box">
            <h4 class="inside">Telefon</h4>
            <div class="box nomargin">
                <input type="text" name="telcountry" value="" id="telcountry" required  pattern="[0-9]{2}">
                <label for="telcountry">##</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="telregion" value="" id="telregion" required  pattern="[0-9]{2}">
                <label for="telregion">##</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="telefon" value="" id="telefon" required  pattern="[0-9]{7}">
                <label for="telefon">#######</label>
            </div>
        </div>
        <div class="box">
            <h4 class="inside">E-mail</h4>
            <input type="text" class="short" name="email" value="" id="email" required">
        </div>
        <div class="separator"></div>
        <div class="box">
            <h4 class="inside">Érkezési dátum</h4>
            <div class="box nomargin">
                <input type="text" name="arrivalyear" value="" id="arrivalyear" required  pattern="[0-9]{4}">
                <label for="arrivalyear">ÉÉÉÉ</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="arrivalymonth" value="" id="arrivalmonth" required  pattern="[0-9]{2}">
                <label for="arrivalmonth">HH</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="arrivalday" value="" id="arrivalday" required  pattern="[0-9]{2}">
                <label for="arrivalday">NN</label>
            </div>
        </div>
        <div class="box">
            <h4 class="inside">Távozási dátum</h4>
            <div class="box nomargin">
                <input type="text" name="departureyear" value="" id="departureyear" required  pattern="[0-9]{4}">
                <label for="departureyear">ÉÉÉÉ</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="departuremonth" value="" id="departuremonth" required  pattern="[0-9]{2}">
                <label for="departuremonth">HH</label>
            </div>
            <div class="box nomargin">&nbsp;-&nbsp;</div>
            <div class="box nomargin">
                <input type="text" name="departureday" value="" id="departureday" required  pattern="[0-9]{2}">
                <label for="departureday">NN</label>
            </div>
        </div>
        <div class="separator"></div>
        <div class="box">
            <h4 class="inside">Nyelvtudás</h4>
            <input type="checkbox" name="english" value="english" id="english">                         
            <label for="english">Angol</label>
            <br>
            <input type="checkbox" name="german" value="german" id="german">                         
            <label for="german">Német</label>
            <br>
            <input type="checkbox" name="french" value="french" id="french">                         
            <label for="french">Francia</label>
            <br>
            <input type="checkbox" name="other" value="other" id="other">
            <label for="sunday">Egyéb</label>
        </div>
        <div class="box">
            <h4 class="inside">Megjegyzések</h4>
            <textarea name="comment"></textarea>
        </div>
        <div class="separator"></div>
        <div class="box long submit">
            <input type="submit" method="post">
        </div>
    </form>
