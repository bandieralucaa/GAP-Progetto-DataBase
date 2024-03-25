<script>

  function set_riferimenti(){
    let id_cliente = document.getElementById("id_cliente").value;
    let all_riferimenti = JSON.parse('<?=$json_riferimenti ?>');
    let select_riferimenti = document.getElementById("id_riferimento");
    $("#id_riferimento").empty();

    for(let i=0;i<all_riferimenti.length;i++){
      if(all_riferimenti[i]['id_cliente'] === id_cliente){
        let option = document.createElement("option");
        option.textContent = all_riferimenti[i]['azienda'];
        option.value = all_riferimenti[i]['id_riferimento'];
        select_riferimenti.appendChild(option);
      }
    }
  }

  function check_duplicati(){
    let num_bolla = document.getElementById("numero_bolla").value;
    let id_cliente = document.getElementById("id_cliente").value;
    let data_ingresso = new Date(document.getElementById("data_di_carico").value);
    data_ingresso = data_ingresso.getFullYear();
    let all_doc = JSON.parse('<?=$json_doc ?>');

    for(let i=0;i<all_doc.length;i++){
      let data_carico = new Date(all_doc[i]['data_carico']);
      data_carico = data_carico.getFullYear();

      if((all_doc[i]['id_cliente'] === id_cliente) && (all_doc[i]['numero_bolla'] === num_bolla) && (data_ingresso === data_carico)){
        alert("numero bolla già esistente per l'anno e per il cliente!");
        document.getElementById("numero_bolla").value = '';

        break;
      }

    }
  }

  function warning_distanza_data(){
    let diff = get_diff_dates_from_today(document.getElementById("data_di_carico").value);
    if(diff > 5){
      alert("Sei sicuro? la data dista di " + diff + " giorni da oggi!");
    }
  }

  let numero_di_documenti_presenti = 0;

  function get_num_documents(){
    numero_di_documenti_presenti = parseInt(document.getElementById("numero_di_documenti").value);
  }

  function raccogli_data_maggiore(indice){
    let data_maggiore = new Date(document.getElementsByClassName("date_javascript")[indice].textContent);
    let text_data_maggiore = document.getElementsByClassName("date_javascript")[indice].textContent;

    if(!(document.getElementsByClassName("check_java")[indice].checked)){
      data_maggiore = new Date("1980-02-25");
      text_data_maggiore = "";
    }

    for(let i=0;i<numero_di_documenti_presenti;i++){
      if(document.getElementsByClassName("check_java")[i].checked == true){
        let next_data = new Date(document.getElementsByClassName("date_javascript")[i].textContent);
        let text_next_data = document.getElementsByClassName("date_javascript")[i].textContent;
        if(data_maggiore < next_data){
          data_maggiore = next_data;
          text_data_maggiore = text_next_data;
        }
      }
    }
    document.getElementById("data_uscita_documento").min = text_data_maggiore;
    console.log("Nuova data minima: " + text_data_maggiore);

  }

  function get_diff_dates_from_today(data_in){
    let millis = 1000*60*60*24;
    return parseInt((new Date().getTime() - new Date(data_in).getTime()) / millis);
  }

  function get_diff_dates(indice){
    let data_in = document.getElementsByClassName("date_javascript")[indice].textContent;
    document.getElementsByClassName("distanze_date")[indice].textContent = get_diff_dates_from_today(data_in);
  }

  function set_locazioni(){
    let id_magazzino = document.getElementById("id_magazzino").value;
    let all_locazioni = JSON.parse('<?=$json_locazioni ?>');
    let select_locazioni = document.getElementById("id_locazione");
    $("#id_locazione").empty();
    for(let i=0;i<all_locazioni.length;i++){
      if(all_locazioni[i]['id_magazzino'] === id_magazzino){
        let option = document.createElement("option");
        option.textContent = all_locazioni[i]['area'];
        option.value = all_locazioni[i]['id_locazione'];
        select_locazioni.appendChild(option);
      }
    }
  }


  function set_prezzo() {
    let id_pallet = document.getElementById("id_pallet").value;
    let id_listino = document.getElementById("id_listino").value;
    let all_listino_pallet = JSON.parse('<?=$json_listino_pallet ?>');
    let prezzo_listino = document.getElementById("prezzo_listino");

    for(let i=0; i<all_listino_pallet.length; i++) {
      if(all_listino_pallet[i]['id_pallet'] === id_pallet && all_listino_pallet[i]['id_listino'] === id_listino) {
        prezzo_listino.value = all_listino_pallet[i]['prezzo'];
        break;
      }
    }
  }

  function set_prezzo_totale() {
    let prezzo_listino = document.getElementById("prezzo_listino").value;
    let quantita_pallet = document.getElementById("quantita_pallet").value;
    let prezzo_totale = prezzo_listino * quantita_pallet;
    document.getElementById("prezzo_totale").value = prezzo_totale;

  }



</script>
