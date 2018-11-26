    <h2>Írj nekünk!</h2>
    <hr>
    <h4> Ha van kérdésed, fordulj hozzánk bizalommal, válaszolunk, amint tudunk. Ez az űrlap e-mailben küldi el nekünk kérdésed, így a további levelezést kérjük ott folytasd velünk !</h4>
    <form action="?oldal=feldolgoz" method="post">
        <h4> Adja meg adatait, majd íja meg üzenetét: </h4>
        <br>
        <h4>Név:</h4>
        <div class="box">
            <input type="text" class="short" name="first" value="" id="first" pattern="[' '\-a-zA-Z]+">
            <label for="first">Családi név</label>
        </div>
        <div class="box">
            <input type="text" class="short" name="last" value="" id="last" pattern="[' '\-a-zA-Z]+">
            <label for="last">Utónév</label>
        </div>
        <div class="separator"></div>

        <div class="box long">
            <h4 class="inside">E-mail:</h4>
            <input type="text" class="long" name="email" value="" id="email" required">
        </div>
        <div class="separator"></div>

        <div class="box">
            <h4 class="inside">Üzenet:</h4>
            <textarea class="long" name="comment"></textarea>
        </div>
        <div class="separator"></div>
        <div class=" long submit">
            <input class="long" type="submit" method="post">
        </div>
    </form>
