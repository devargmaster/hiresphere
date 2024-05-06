import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const profileMenu = document.getElementById('profile-menu');
    const profileLink = document.getElementById('profile-link');

    profileLink.addEventListener('mouseover', () => {
        profileMenu.style.display = 'block';
    });

    profileMenu.addEventListener('mouseleave', () => {
        profileMenu.style.display = 'none';
    });
});
