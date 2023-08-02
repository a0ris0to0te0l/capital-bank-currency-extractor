?php
include("/path-to-library/simple_html_dom.php");
$GLOBALS["html"] = file_get_html('https://www.capitalbank.com.mk/Web/%D0%97%D0%90_%D0%9D%D0%90%D0%A1/%D0%9A%D1%83%D1%80%D1%81%D0%BD%D0%B8_%D0%BB%D0%B8%D1%81%D1%82%D0%B8.aspx');

function showExchangeRates($currency, $index)
{
    $cell = $GLOBALS["html"]->find('tr', $index);
    $sell = $cell->find('td', 3);
    $buy = $cell->find('td', 4);

    if ($buy->plaintext == '0,0000' && $sell->plaintext == '0,0000') {
        echo "Не се продаваат/купуваат $currency";
    } else {
        echo "Куповен за $currency " . $buy->plaintext . "..." . "Продажен за $currency " . $sell->plaintext;
    }

    echo "<br>";
}

$currencies = array(
    'евра', 'долари', 'фунти', 'франци', 'шведски круни',
    'норвешки круни', 'дански круни', 'канадски долари'
);

foreach ($currencies as $index => $currency) {
    showExchangeRates($currency, $index + 1);
}
?>
