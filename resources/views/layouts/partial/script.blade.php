<script>
    // Toggle sidebar on mobile
    const toggleSidebarButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
    const sidebar = document.getElementById('logo-sidebar');

    toggleSidebarButton.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
