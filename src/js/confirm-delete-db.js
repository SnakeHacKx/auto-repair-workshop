function confirmDelete() {
  if (confirm("¿Estás seguro/a de que deseas eliminar los registros?")) {
    // Si el usuario confirma, redirige a delete-database.php
    window.location.href = "../tasks/delete-database.php";
  } else {
    // Si el usuario cancela, no se realiza ninguna acción
  }
}
