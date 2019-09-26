<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<!-- Notification Dismiss JS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    $notification = $delete.parentNode;
    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>
</body>
</html>