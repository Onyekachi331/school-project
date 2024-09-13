document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
    const sections = document.querySelectorAll('.main-content section');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            sections.forEach(section => {
                section.style.display = 'none';
            });
            targetSection.style.display = 'block';
        });
    });

    // Show the first section by default
    sections.forEach(section => {
        section.style.display = 'none';
    });
    if (sections.length > 0) {
        sections[0].style.display = 'block';
    }
});
