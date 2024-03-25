<script>
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


</script>
