Instalace PHP a XAMPP serveru
Krok 1: Stáhněte si PHP<br />
Přejděte na oficiální stránku PHP:
Otevřete webový prohlížeč a navštivte https://www.php.net/.
Vyberte verzi PHP pro Windows:
Klikněte na "Downloads" v horní části stránky.
Vyberte nejnovější stabilní verzi PHP pro Windows.
Stáhněte soubor php-x.x.x-Win32-vc15-x64.zip (pokud máte 64-bitovou verzi Windows) nebo php-x.x.x-Win32-vc15-x86.zip (pokud máte 32-bitovou verzi Windows).
Krok 2: Rozbalte stažený soubor
Rozbalte soubor:
Po stažení souboru php-x.x.x-Win32-vc15-x64.zip nebo php-x.x.x-Win32-vc15-x86.zip rozbalte ho do složky na vašem počítači. Příklad: C:\php.
Krok 3: Nastavte proměnné prostředí
Otevřete Nastavení systému:
Klikněte pravým tlačítkem na ikonu Windows a vyberte "Nastavení systému".
V levém menu klikněte na "Systém" a poté na "O pokročilých nastaveních systému".
Upravte proměnné prostředí:
V okně "Vlastnosti systému" klikněte na tlačítko "Proměnné prostředí".
V sekci "Systémové proměnné" vyhledejte proměnnou Path a klikněte na "Upravit".
Klikněte na "Nový" a přidejte cestu k vaší složce PHP, například C:\php.
Klikněte na "OK" a zavřete všechna okna.
Krok 4: Ověřte instalaci
Otevřete příkazový řádek:
Stiskněte Windows + R, zadejte cmd a stiskněte Enter.
Zkontrolujte verzi PHP:
V příkazovém řádku zadejte php -v a stiskněte Enter.
Měli byste vidět verzi PHP, kterou jste právě nainstalovali.
Krok 5: Instalace a konfigurace webového serveru (volitelné)
Pokud plánujete používat PHP pro vývoj webových aplikací, můžete také nainstalovat a nakonfigurovat webový server, jako je Apache nebo Nginx. Tento krok je volitelný a závisí na vašich potřebách.

Krok 6: Testování PHP skriptu
Vytvořte testovací PHP soubor:
V složce C:\php vytvořte nový textový soubor s názvem info.php.
Otevřete soubor v textovém editoru a vložte do něj následující kód:
<?php
phpinfo();
?>
Uložte soubor.
Spusťte PHP skript:
Otevřete webový prohlížeč a zadejte http://localhost/info.php do adresního řádku.
Měli byste vidět stránku s informacemi o instalaci PHP na vašem počítači.
Závěr
Gratulujeme, úspěšně jste nainstalovali PHP na svůj počítač s Windows. Nyní můžete začít s vývojem webových aplikací v PHP.


Můj kód vytváří webovou stránku, která zobrazuje seznam knih z JSON souboru ve formě HTML tabulky. Každý řádek tabulky reprezentuje jednu knihu s informacemi o titulu, žánru a autorovi. Pro každou knihu je také poskytnut odkaz na další informace, který je specifický pro každou knihu.

Načítání JSON dat: Kód začíná načtením dat z JSON souboru database1.json. Tato data obsahují informace o knihách, které mají být zobrazeny na stránce.
Generování tabulky: Pokud jsou data úspěšně načtena a dekódována, kód vytváří HTML tabulku s hlavičkou obsahující tituly sloupců: Titul, Žánr, Autor, Info.
Iterace přes knihy: Pro každou knihu v poli books se vytváří řádek tabulky. Data pro titul, žánr a autora jsou zobrazena v příslušných sloupcích.
Odkaz na další informace: Pro každou knihu je poskytnut odkaz na další informace. Tento odkaz je specifický pro každou knihu a odkazuje na soubor kniha1.html, kniha2.html nebo kniha3.html v závislosti na pořadí knihy v poli. Pokud je kniha mimo první tři, odkaz je nastaven na #, což znamená, že neodkazuje na žádnou stránku.
Zpracování chyb: Pokud data nebyla úspěšně dekódována nebo pokud chybí klíč books v dekódovaném poli, kód zobrazí chybovou zprávu "Error decoding JSON or missing 'books' key".
Celkově vytváří tento kód dynamickou webovou stránku, která zobrazuje informace o knihách z JSON souboru ve formě tabulky s odkazy na další informace o každé knize.
