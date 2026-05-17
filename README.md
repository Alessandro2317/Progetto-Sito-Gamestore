# 🎮 5D Game Store - Selezione Catalogo Videogiochi

Applicazione web in **PHP** per la consultazione dinamica del catalogo videogiochi del 5D Game Store. Il sistema offre un pannello interattivo per filtrare e mostrare l'inventario dei giochi in tempo reale in base alla categoria scelta.

---

## 🚀 Funzionalità

L'applicazione permette di gestire i dati attraverso le seguenti operazioni fondamentali:
* **Filtro Categoria:** Form nella Home Page che permette di selezionare una categoria specifica tramite pulsanti radio personalizzati.
* **Visualizzazione Dinamica (Read):** Tabella riassuntiva nella pagina dei risultati che mostra l'elenco dei giochi filtrati con i relativi dettagli, inclusi il nome, la casa di sviluppo e il PEGI estratti tramite array associativi in PHP.
* **Generazione Contenuti:** Sistema backend basato su costrutto `switch` per caricare e stampare a schermo solo i dati della categoria richiesta.
* **Navigazione Integrata:** Pulsante di ritorno rapido per azzerare il filtro e ridefinire la ricerca tornando alla Home Page.

---

## 🛠️ Tecnologie Utilizzate

* **Backend:** PHP 8.x (Gestione logica dei dati tramite array multidimensionali e switch-case)
* **Database:** Hardcoded Array (Struttura dati locale integrata nello script PHP per simulare un archivio)
* **Frontend:** HTML5, CSS3 (Layout responsivo con palette colori a tema cyberpunk/neon)

---

## 📂 Struttura del Progetto

* `index.html` - Dashboard principale con il form di selezione della categoria di gioco.
* `gamestore.php` - Script backend per l'elaborazione, il filtro e la stampa della tabella dei giochi.
* `style.css` - File di stile centralizzato per l'interfaccia grafica e gli effetti visivi.

---
