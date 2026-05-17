🎮 5D Game Store
Un'applicazione web dinamica in HTML, CSS e PHP che permette di visualizzare un catalogo di videogiochi suddivisi per categorie. Il progetto presenta un design moderno in stile cyberpunk/neon.

📂 Struttura del Progetto
Il progetto è composto dai seguenti file:

index.html: La pagina principale che contiene il form per la selezione della categoria di giochi.

inserisci.html: Una pagina di interfaccia con un form predisposto per l'inserimento di nuovi giochi nel catalogo.

gamestore.php: Il motore backend che riceve la categoria scelta, seleziona i dati corretti e genera dinamicamente la tabella dei giochi.

style.css: Il foglio di stile globale che dona al sito un look accattivante con tonalità scure, dettagli rosa neon ed effetti glow.

🚀 Funzionalità
Selezione per Categoria: Tramite dei pulsanti radio personalizzati nella Home, l'utente può scegliere tra le categorie Sport, FPS, Idle, Multiplayer, Indie e Avventura.

Generazione Dinamica: Il file PHP elabora la scelta tramite un costrutto switch ed estrae i dati da array associativi multidimensionali.

Visualizzazione Dati: I giochi vengono mostrati in una tabella pulita e scannabile che include titolo, casa di sviluppo, classificazione PEGI e la copertina del gioco.

Form di Inserimento: È presente una pagina (inserisci.html) con i campi pronti (ID, nome, etam, link immagine, prezzo) per futuri sviluppi di salvataggio dati.

🎨 Design e Stile
Il file style.css applica una palette di colori coerente e d'impatto:

Sfondo: Scuro e uniforme (#2b1b47) per far risaltare gli elementi.

Testi e Pulsanti: Colore rosa acceso (#ff6ec7) con ombreggiature ed effetti glow (text-shadow e box-shadow).

Interattività: Animazioni fluide al passaggio del mouse (hover) sui pulsanti e sulle righe della tabella.
