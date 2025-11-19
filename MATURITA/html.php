<?php
/// Webový design ///
// Trénujte tvorbu a stylování textů, listů, tabulek, formulářů a dalších prvků pomocí HTML a CSS
// Také se zaměřte na layout a základní design meny a obsahu.
// Důležité jsou CSS koncepty jako Box model, Flexbox a Position.
// Zadání může být formou obrázku designu nebo popisu.

/// Ukázkové řešení ///
// Vytvořte tabulku transakcí pro administraci banky
// Tabulka by měla mít sloupce: ID, Datum, Typ transakce (příchozí, odchozí), Částka
// Nad tabulkou by měl být formulář jakožto filtr pro zobrazení transakcí podle data a typu
// Funkčnost filtru neimplementujeme! Pouze statický HTML/CSS kód
// Tabulka bude mít označený řádek hlavičky tučně a s lehkým pozadím
// Také bude provzdušněná paddingem s collapsovanými buňkami a tenkým okrajem
// Řádek po najetí (hover) změní barvu pozadí na světle šedou.

/// Řešení: ///
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabulka transakcí</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <h1>Tabulka transakcí</h1>
    <form method="GET" action="">
        <label for="date">Datum:</label>
        <input type="date" id="date" name="date">
        <label for="type">Typ transakce:</label>
        <select id="type" name="type">
            <option value="">Vše</option>
            <option value="incoming">Příchozí</option>
            <option value="outgoing">Odchozí</option>
        </select>
        <input type="submit" value="Filtruj">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Datum</th>
                <th>Typ transakce</th>
                <th>Částka</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2023-10-01</td>
                <td>Příchozí</td>
                <td>1000 Kč</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2023-10-02</td>
                <td>Odchozí</td>
                <td>-500 Kč</td>
            </tr>
            <!-- Další řádky ... -->
        </tbody>
    </table>
</body>
</html>


<?php
/// Příklad 1. ///
// Vytvořte jednoduchou HTML stránku s formulářem pro zadání jména a e-mailu
// Po odeslání formuláře vypište zadané údaje na stránku
// Formulář vycentrujte na stránce a odělte vstupy tak aby vizuálně nesplívaly.


/// Příklad 2. ///
// Sestavte layout pro jednoduchou webovou stránku
// Stránka by měla mít hlavičku, menu, hlavní obsah a patičku
// Tlačítka meny budou rovnoměrně rozložena a budou mít hover efekt
// Hlavní obsah bude mít dvě sekce vedle sebe (obrázek 30% a text 70%)
// Patička bude mít tmavé pozadí a bílý text
// Všechny prvky budou mít padding a margin pro lepší vzhled
// Použijte Flexbox pro rozložení prvků podle potřeby


/// Příklad 3. ///
// Na stránce budou poznámky z literatury
// Nastyluje rozbalovací summarizaci pro každou knihu s listem důležitých informací a shrnutím knihy
// Všechny knihy budou mít stejný formát a budou se rozbalovat po kliknutí (<details> a <summary>)

// Příklad Obsahu:
// Romeo a Julie
// - Autor: William Shakespeare
// - Žánr: Drama
// - Rok vydání: 1597
// - Hlavní postavy: Romeo, Julie
// - Důležitá témata: Láska, nenávist, osud
// - Citát: "Láska je jako víno, čím déle zraje, tím je lepší."
//  Shrnutí
//      Romeo a Julie je tragédie o dvou mladých milencích, jejichž láska je odsouzena k neúspěchu kvůli rodinným sporům. Jejich smrt nakonec smíří jejich rodiny.
//      Hlavními tématy jsou láska, nenávist a osud. Příběh ukazuje, jak moc může láska ovlivnit životy jednotlivců a jak tragické následky mohou mít rodinné spory.


