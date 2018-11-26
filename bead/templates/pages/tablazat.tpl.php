<table>
    <caption><h2>A fesztivál résztvevői 2018-ban:</h2></caption>
    <tr>
        <th>Ország/Country</th>
        <th>Város/Town</th>
        <th>Csoport neve/Group name</th>

    </tr>
    <?php
        $dbh = new PDO('mysql:host=localhost;dbname=webprog', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select orszag, telepules, csoportnev from A2018";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' =>  'root', ':jelszo' => ''));
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {

            echo "<tr>";
            echo "<td>" . $row['orszag'] . "</td>";
            echo "<td>" . $row['telepules'] . "</td>";
            echo "<td>" . $row['csoportnev'] . "</td>";
            echo "</tr>";
        }
    ?>

</table>