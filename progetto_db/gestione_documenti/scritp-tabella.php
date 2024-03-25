<script type='text/javascript'>
  $(document).ready(function () {
    $("tbody tr").each(function () {
      var dataIngressoText = $(this).find(".data_ingresso").text();
      var dataUscitaText = $(this).find(".data_uscita").text();
      var giorniDiPermanenza = "N/A";

      if (dataIngressoText.trim() !== "" && dataUscitaText.trim() !== "") {
        var dataIngresso = new Date(dataIngressoText);
        var dataUscita = new Date(dataUscitaText);

        if (!isNaN(dataIngresso) && !isNaN(dataUscita)) {
          var differenzaInMillisecondi = dataUscita - dataIngresso;
          giorniDiPermanenza = Math.floor(differenzaInMillisecondi / (1000 * 60 * 60 * 24));
        }
      }

      $(this).find(".giorni_permanenza").text(giorniDiPermanenza);
    });
  });
</script>
