@extends('layout')
@section('content')

  <div class="container " >
    <div class="row">
      <div class="col-sm-12">
        <ul class="m-4 ">
          <li class="list-group-item list-group-item-info"><h4>Cosa si intende per API REST ?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              E' un interfaccia di programmazione fra due app, permette in buona sostanza di mappare le operazioni conosciute come CRUD,
              da anche la possibilità di accedere a dei dati via web, identificandole con degli URL.
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cosa si intende per servizio SOAP ?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              E' un protocollo di comunicazione,consente a due applicazioni di comunicare tra loro sul web,
              l'oggetto è un documento xml e la sua notation è ben definita, molto in voga un tempo via via è stato soppiantato dai Json.
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è un database relazionale ?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
             E' un tipo di DB, si basa appunto sul modello relazionale, in buona sostanza vi è la possibilità di mettere in relazione
             le varie tabelle presenti all'interno di un db. rendendo il campo ID presente in una tabella, foreignKey in un altra.
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è un database NoSQL ?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              Questo DB non usa il modello relazionale, in un database NoSQL, il record è solitamente memorizzato come documento JSON.
              Per ogni record, gli elementi che definiscono quell'entità, sono archiviati come attributi in un unico documento.
              (non ho mai lavorato con db Nosql).
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è un ORM ? Fai almeno un esempio.</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              Acronimo di object-relational mapping. Un orm è un interfaccia che si occupa di mettere in relazione la logica di persistenza dei dati (i DB),
              con le classi che dentro un progetto orientato ad oggetti si occupano del “dialogo” con le basi dati (model). L'unico che ho mai utilizzato è Eloquent
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è la SQL Injection ?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
            E’ un attacco informatico, diretto ai Db usando di solito i form o gli input in generale.
            Il modo comune è quello di provare ad inserire direttamente comandi sql nei campi del form.
            Un altro molto diffuso, prevede di iniettare grosse quantità di caratteri speciali con linguaggio sql nel tentativo di forzare l’accesso alle informazioni nel DB,
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è l'autenticazione a 2 fattori? Descrivi brevemente un esempio.</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              Praticamente si tratta di un processo che richiede due modi di provare la tua identità prima di lasciar accedere.
              Quest’operazione viene compiuta usando due fattori diversi quali ad esempio la mail e il cellulare.
              L’esempio classico è quello bancario che una volta inserita id e password,
              ti invia un sms sul tuo cellulare e ti chiede di inserire il codice appena inviato per farti procedere.
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Descrivi brevemente un metodo sicuro per salvare le password degli utenti sul DB.</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              Hash and Salt, in pratica una parte dell'app, si occupa di crittografare la password prima di salvarla sul db (hash),
              cosicchè nessuno a modo di vederla en-plain air, in più sempre prima di salvare la pass, viene aggiunta a questa una stringa crittografata (salt).
            </p>
          </li>
          <li class="list-group-item list-group-item-info"><h4>Cos'è una Sticky Session in un sistema con Load Balancing?</h4></li>
          <li class="list-group-item list-group-item-light">
            <p>
              il Bilanciamento del carico, è una tecnica che consiste nel distribuire il carico di elaborazione di uno specifico servizio,
              ad esempio la fornitura di un sito web.
              Le sticky session costituiscono un meccanismo per instradare richieste dallo stesso client alla stessa destinazione.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

@endsection
