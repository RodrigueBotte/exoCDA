function confirmerSuppression(event) {
  if (!confirm("Êtes-vous sûr de vouloir supprimer ces informations ?")) {
    event.preventDefault();
  }
}